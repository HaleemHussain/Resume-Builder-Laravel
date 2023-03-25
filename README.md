<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


This app is a clone of resume.io the resume builder site. A user can register then create a resume. This is done with a series of crud operations. The user can then preview their styled resume and download it as a pdf file.

To run this app you will need to clone this repository then create a `.env` file and add a database connection. Then run `composer install`, `php artisan key:generate` and `npm install` to install the application dependencies you can then run `npm run dev` and `php artisan serve` to run this project locally.

The database has not been provided however if you connect to a mysql database and run the migrations with `php artisan migrate` you will be able to register a user and start using the app.

Note: if you have any issues with the app or the database setup please feel free to get in touch.
