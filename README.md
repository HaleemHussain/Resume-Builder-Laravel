<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


This app is a clone of resume.io [resume.io](https://resume.io/) the resume builder site. A user can register then create a resume. This is done with a series of crud operations. The user can then preview their styled resume and download it as a pdf file.

### Instructions

To set up this project:

1. Clone this repository with `git clone https://github.com/HaleemHussain/Resume-Builder-Laravel.git`.
2. Cd into this directory.
3. Create a .env file and add a database connection.
4. Run `composer install` and `npm install` to install the application dependencies.
5. Run `php artisan key:generate` to generate an application key.
6. Run `php artisan migrate` to create all the tables in the database.
7. You can them `npm run dev` and `php artisan serve` to run this project locally.
8. You can now view the project locally in the browser at [localhost:8000](http://localhost:8000/)

Note: if you have any issues with the app or the database setup please feel free to get in touch.

#### Version Requirements
```
    php: 8.1
    node: 19.2
```
