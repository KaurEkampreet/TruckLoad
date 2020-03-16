# TruckLoad
by Ekampreet and Maureen

TruckLoad website is for freight partner who have available loads and they need driver. They can come to our website and fill out form if they interested in partnering with us. 

# Requirements

We separated all database/business logic using the MVC pattern by controller class, views class, model classes where in controller we have TruckController.php. In views it include all html pages. Model classes include databaseclass.php and validate.php.

Routes all URLs and leverages a templating language using the Fat-Free framework are done in index page. 

In model we have databaseclass which handles all the database calls through a PDO instance. In database class we have functions which access the data from database.

When the partner fill out the form, they can view and added the data.

Git repository: https://github.com/KaurEkampreet/TruckLoad

TruckLoad have 3 different classes which cover all fat-free and MVC. Driver and Truck class extends partners to get all data.

Yes, TruckLoad app contains full Docblocks for all php files and follow PEAR standards.

TruckLoad has server side validation through php.
