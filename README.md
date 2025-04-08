# Relo

Relo is a contact page for clients needing help moving from one area/state to another.
* Contact Form

### Requirements

    PHP      8.2
    Composer 2
    Laravel  10
    MariaDB  10.6.18 | MySQL | SQLite
    NodeJS   14.21.3
    NPM      9.7.1

### Getting started

Clone the repository

    git clone https://github.com/waltprorok/relo

Switch to the repo folder

    cd relot

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Create the symlink for media

    php artisan storage:link

Install and build node dependencies

    npm install
    npm run dev

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Database seeding

    php artisan db:seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
