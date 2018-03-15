Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

                                                        Prerequisites

-A development server, PostMan or Any API Development Environment, Laravel 5.3 requires PHP 5.4 or greater to work efficiently.
Here is a list of the packages installed:

Laravel Passport

Laravel Fractal-5


                                            Installation Procedures
 Clone or download this repository from https://github.com/theookosun/trip-builder

 or 
Composer Project Creation

To easily start your project using this structure, just use composer

composer create theookosun/laravel your_app_name

-Setup your database server on your local machine or online server

-Run a "composer install -g" in your terminal to download the dependencies

-Import the database tables into your new database and configure it to match with your Server's details in the .env file  as shown below:

DB_HOST=localhost;

DB_DATABASE=trip-builder;

DB_USERNAME=root;

DB_PASSWORD=

-Import The Schema class in the AppServiceProvider.php file and set Schema::defaultStringLength to 191 or greater to avoid the database string error when you migrate your database tables (Yet to be fixed in Laravel 5.4)

Run Php artisan migrate 

then php artisan passport:install

-Create your blade views in the resource folder 

-Configure your API calls to the Classes in the FlightController for the specific functions you would like to perform.

Note: The API was built and tested on a local server. Direct API calls can not be made wihout re-configuring the development servers and database to contain real info in place of the dummy data.


                                                      Usage 
-The FlightSearch and Airport Functionalities are contained in the Controllers Folder  App\Http\Controller.

The data passed at the end of the function calls have been converted to Json using Laravel's inbuilt (Resource::collection) and can be edited as you like by setting the fields in the App\Resources\AirportResource File. 

For each controller there's an already setup route in routes/api.php file:

GET api/airports, to retrieve a list of all Airports ;

GET api/airport/{id}, to retrieve a single airport with the ID;

DELETE api/airport/{id} to delete a single Aiport from the list;

PUT api/airport/{id}, to update an airport with the ID;

GET api/flights, to retrieve list of all flights;

POST api/flight/{id}, to add a flight to the list;

DELETE api/flight/{id} to remove flight from itinerary or list.

Some Views(Front end Templates) have been created to test these functions.

A Separate File for Routes

All the API routes can be found in the routes/api.php file. This also follows the Laravel 5.4 convention.

                                                Built With

PHP

Laravel - The web framework used

MySQL - Database Development System Used

Fractal- For Handling Json Requests

Faker Library - Used to generate dummy data.



                                                    Versioning
1.0.0.1

                                                      Authors

Theophilus Okosun

                                                      License

This project is licensed under the MIT License - see the LICENSE.md file for details

                                                    Acknowledgments

A free Website Template was gotten from (FreeHTML5.co) and edited to test the functionalities of the API and can be found in the Views Folder "Resources\Views"

StackOverflow for helping with the numerous bugs. 
