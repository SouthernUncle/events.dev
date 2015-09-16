## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
# laravel-template
# events.dev

Event Planning App

You will be making an app that manages events and where these events will be taking place. The look of the application is totally up to you. Before starting your application please use the following packages for your app.

Packages:
- Ways Generators
- Esensi

Models:
- Users
    - first_name
    - last_name
    - email
    - password
    - username

- CalendarEvents
    - *NOT* Events (Laravel uses)
    - start_date_time
    - end_date_time
    - title
    - description
    - price
    - user_id
    - location_id

- Locations
    - place
    - address
    - city
    - state
    - zip

Resource Controllers: 
- CalendarEventsController
- LocationsController

Bonus
- Event image
- Add Lat/Lon to location
- Show Google map of event location
- Add weather forecast 
- Allow registration for events
- User roles

Steps:
1. Install Laravel w/ composer from VM
    composer create-project laravel/laravel {projectname.dev} 4.2 --prefer-dist

2. Run ansible command to add site events.dev
    ansible-playbook ansible/create-vagrant-site.yml

3. Update /etc/hosts
    sublime /etc/hosts

4. Create DB w/ ansible command
    ansible-playbook ansible/create-vagrant-mysql-db.yml

5. Create .env.local.php file
    and env-template.php without values (for git commit)
        - uses $_ENV['DB_HOST'], etc.

6. Update bootstrap/start.php file
    detectEnvironment function: set inner text to:
        return isset($_SERVER['LARAVEL_ENV']) ? $_SERVER['LARAVEL_ENV'] : 'production';

7. Remove app/config/local/database.php

8. Update app/config/database.php
    change mysql array to include $_ENV variables

9. Remove "composer.lock" from .gitignore file

10. Install Ways Generators
    $ composer require --dev way/generators=~2.0

    inside app/config/local/app.php, add:
        'providers' => append_config(array('Way\Generators\GeneratorsServiceProvider'))

11. DB migrations 

12. Install Esensi models
        add to required in composer.json
        do not add to services
        to use in model:
            "use \Esensi\Model\Model;"

**. Initialize Git repository (follow Git instructions)

