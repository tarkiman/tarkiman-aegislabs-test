# tarkiman-aegislabs-test

## Requirements
1. Laravel Version : 11.31
2. PHP >= 8.1

## Installation
1. Clone the repository `git@github.com:tarkiman/tarkiman-aegislabs-test.git`
2. Run `composer install`
4. Create database `tarkiman_aegislabs_test`
5. Setup email destination for system administartor in `.env` file (`SMTP email already setup`)
```
MAIL_SYSTEM_ADMINISTRATOR=tarkiman.mail@gmail.com
```
5. Run `php artisan migrate` to create the database tables
7. Run `php artisan serve` to start the development server
8. Open your web browser and navigate to `http://localhost:8000`

## Breakdown Features 
1. Endpoints 
- [POST] `/api/v1/users - Create a new user`
- [GET] `/api/v1/users - Get all users with filter`
2. with `Swagger OpenAPIs` Documentation
3. with `Unit Test`, can run with `php artisan test`
4. with `Documentation Test` for evidence in each PR (`Pull Request`)

## [Please Check] Pull Request List With Summary and Test Case Result Documentation
- 🔖 [docs] initialize Swagger OpenAPI with request and response designs for user endpoint APIs
https://github.com/tarkiman/tarkiman-aegislabs-test/pull/1

- ✨ [feat] handle endpoint create new user
https://github.com/tarkiman/tarkiman-aegislabs-test/pull/2

- ✨ [feat] send email confirmation to user and email notification to system admin for create new user endpoint
https://github.com/tarkiman/tarkiman-aegislabs-test/pull/3

- 🔎 [test] add User unit test
https://github.com/tarkiman/tarkiman-aegislabs-test/pull/4

- ✨ [feat] handle get users endpoint with filter data
https://github.com/tarkiman/tarkiman-aegislabs-test/pull/5



