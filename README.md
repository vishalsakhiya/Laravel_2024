
# Project Title

Hospital Management System

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Deployment

To deploy this project run

```bash
1. Create Project :- composer create-project laravel/laravel:^9.0 Hospital_Management

2. Then go to the project folder and open cmd and run the next step.

3. Project Run :- php artisan serve

4. Create Blade File :- Create the login/Register Blade File in the resources/views folder.

5. Route :- Login/Register Route add in web.php file

    Example :- 
      1. Add these above the top in the web.php file. :- use App\Http\Controllers\AuthController;

      2. Add route Like This formate :- Route::get('/',[AuthController::class,'login_show'])->name('login');

6. Create Controller :- php artisan make:controller AuthController

7. Create Model with migration :- php artisan make:model Role -m

8. Migrate :- php artisan migrate 
```


## Running Tests

To run tests, run the following command

```bash
  php artisan serve
```

