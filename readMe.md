# Bakery Shop Website w/Backend

## General Overview
This is a website I made for practice as a personal project to polish my full stack object-oriented programming PHP, HTML, MySQL, and CSS skills. 

The website is a bakery's online shop for prospective and loyal customers to view the online invenetory to log in and order pickup and delivery.

The website is also made for non-technical persons to securely manage the website inventory and user accounts and privledges.

## Technical Overview

The website fetches the inventory items using mySQL within PHP from a database created in mySQL run locally. It renders pages with PHP scripts embedded in HTML. 

The website has an about page, an inventory page, and a home page. The about page and home page are basic with some promotional images, company descriptions, and links to other pages.

The inventory has a table of the inventory with name, type, rating, and price, with a "view more details" button to reveal the description, calories, ingredients, cuisine, meal type, and season type. 

### A Few Specific Technical Highlights

* Users can travel between webpages by clicking on links, causing the PHP to alter the url, sending the user to another internal PHP file in the website structure that renders the new page. 
* Baked good entries have specific id's that can be accessed with certain URLs
* Baked goods, database credentials, admin credentials, page fetching, csv parser, login session timing are all classes. Baked goods have attributes related to sweets while the rest have attributes for functionality, as well as methods that can be called to perform tasks related to their name (like logging into a database for the database credentials class).
* My website uses inheritance to create wrapper classes so that if needed, multiple objects can utilize a database framework.
* There is a page widget with page numbers for arbitrary traversal and also left and right buttons for sequential traversal. Page number total, the current page, and the next page are calculated dynamically so that the pages contained in separate PHP ID urls contain the baked goods fetched with mySQL from the database, and the website does not allow null page crossing (going to a non-existent next page)
* Databases are locked from the public and require connections via credentials using OOP to create a streamlined verification process and framework
* Database-inherited objects can access the database with mySQL from PHP to add, delete, edit, and show entries, while interactively and intuitively letting the user know the actions performed.
* Users can create accounts, some of which can be given admin access, to log in to use the website and view certain pages with memoized credential keys
* User input is accepted with protections against SQL injections and HTML mishaps via SQL and HTML escaping within PHP
* Login session timing utilizes PHP functions that are built in to log the user out after x amount of time and also remember the log in
* An admin mode exists to edit the website without needing to edit the website code, allowing for client portability for customer satisfaction. This mode requires login authentication with a specific admin account and this allows for access to different PHP files and thus webpages completely different from the public webpages
* Login sessions are handled through session objects that manage the PHP session data through methods
* The admin can add, remove, view, and edit account details via OOP
* Login has intuitive simple UI with password submission that is encrypted through bcrypt (blowfish) within PHP with libraries

