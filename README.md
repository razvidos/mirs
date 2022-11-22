### Setup
1. Install PHP 8.1.
   https://www.php.net/downloads.php
2. Install SQLite
   https://www.sqlite.org/download.html

3. Install composer
   https://getcomposer.org/download/
4. install nodejs
   https://nodejs.org/en/download/

#### Зібрати фронт:
`npm run build`

#### Запустити сервер Laravel:
`php artisan serve`

В консоль буде виведене посилання сайту:
`INFO  Server running on [http://127.0.0.1:8000].`

#### .env
Треба створити файл .env у корні проєкту (.env.example для прикладу).
`DB_DATABASE=<path_to_database>` вказати повний шлях до файлу бази

https://laravel.com/docs/9.x/configuration

#### Запустити міграції
`php artisan migrate`

#### Запустити Seeds
`php artisan db:seed`

Usage: 
В поле консолі вводимо
Select * From hotels для виведене списку готелів.

*Права консолі ніяк не обмежуються, тож*
