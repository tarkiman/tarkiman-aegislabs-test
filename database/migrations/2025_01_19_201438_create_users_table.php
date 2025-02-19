<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("email", 255)->nullable(false)->unique("users_username_unique");
            $table->string("password", 255)->nullable(false);
            $table->string("name", 255)->nullable(false);
            $table->boolean("active")->nullable(false)->default(true);
            $table->timestamps();
        });

        // data dummy for key order_count each users in [GET] /api/users endpoint response
        DB::table('users')->insert([
            [
                'email' => 'noreply@tarkiman.com',
                'password' => Hash::make('P@ssw0rd'),
                'name' => 'Noreply',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        DB::table('users')->truncate();
    }
};
