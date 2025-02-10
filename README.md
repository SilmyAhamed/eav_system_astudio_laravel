# Timesheet and EAV System

## Setup Instructions
  1.  Clone the repository: `git clone https://github.com/SilmyAhamed/eav_system_astudio_laravel.git`
  2.  Install dependencies: `composer install`
  3.  Configure database: `.env` file
      (DB_DATABASE = eav_system_astudio_db)
  4.  Run migrations: `php artisan migrate`
  5.  Run seeders (optional): `php artisan db:seed`
  6.  Generate Passport keys: `php artisan passport:install`
  7.  Serve the application: `php artisan serve`

## API Documentation
  https://documenter.getpostman.com/view/6789063/2sAYX9o1ea

## Example Requests/Responses
(Include examples for all endpoints, including authentication, CRUD operations, EAV manipulation, and filtering)

## Test Credentials
(Provide test user credentials for easy testing)


## Personal Access Client
  - php artisan passport:client --personal

## Password Grant Client
  - php artisan passport:client --password
  - 0
