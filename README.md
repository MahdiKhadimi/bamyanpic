<h2 align='center'>Bamyanpic</h2>

#### Table of contents

-   [About](#about)
-   [Features](#features)
-   [Installation Instructions](#installation-instructions)
-   [Laravel Components In This Project](#laravel-components-in-this-project)

### About

Bamyanpic is a web app that is created by Laravel, in this app users can watch, dowload and share images from all around the world.

### Features

-   Creat Account By Users
-   Users Verify Email Address
-   CRUD (Create, Read, Update, Delete) images by users
-   Download images
-   Views and Downloads count report
-   Users can like images
-   Search images
-   user can make favorite images

### Installation Instructions

1. Run `git clone https://github.com/MahdiKhadimi/bamyanpic`
2. Create a MySQL database for the project
    - `create database bamyanpic;`
3. Download dependency by run `composer install`
4. Make `.env` file from copying `.env.example`
5. Configure your `.env` file
6. From the projects root folder run `php artisan migrate`
7. From the projects root folder run `php artisan serve`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php aritsan storage:link`
10. Change `FILESYSTEM_DISK=local` to `FILESYSTEM_DISK=public` In the `.env`
11. From the projects root folder run `composer dump-autoload

### Laravel Components Are Used In This Project

-   Route
-   Controller
-   Model
-   Middleware
-   Data Model Binding
-   Scope
-   Mail
-   Migration
-   Factory
-   Seeder
-   Request
-   Validation
-   Authorization By Gate and Policy
-   Authentication By Laravel/ui package
-   File Storage
-   Laravel Component
-   Event
-   Relationship: (one to many, )
