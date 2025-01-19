<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Mail\EmailConfirmation;
use App\Mail\EmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(UserCreateRequest $request): JsonResponse
    {
        $data = $request->validated();

        if (User::where('email', $data['email'])->count() == 1) {
            throw new HttpResponseException(response([
                "errors" => [
                    "email" => [
                        "email already registered"
                    ]
                ]
            ], 400));
        }

        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();

        // send email confirmation to user for validate and complete registration process
        // TO DO : send email contain link with token to validate and complete registration process
        Mail::to($user->email)->send(new EmailConfirmation($user));

        // get system admin email value from env config
        $syAdminMail = config('mail.mail_notify.sys_admin');
        $ccMail = config('mail.mail_notify.cc');

        // send email notification to system administrator
        Mail::to($syAdminMail)->cc($ccMail)->send(new EmailNotification($user));

        $userResource = new UserResource($user);
        return response()->json(['data' => $userResource->toCreateResponseFormat()])->setStatusCode(201);
    }
}
