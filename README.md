**Authentication web page**

Fully working authentication page written in plain PHP. In the beginning, there were PSD files which had a visual
representation of the final product from which then I created the page from the ground up. Everything in this project 
is created from the beginning - HTML, CSS, JavaScript functions, MySQL databases (many to many relationships) and plain
PHP.

**Introduction**

To run the site:

* Clone the app to your local machine
* Approach 1 (won't be able to log in):
    * Open the terminal from the project folder and enter:
        * PHP -S localhost:8000
            * Click on the link (the browser should open automatically)
* Approach 2 (will be able to log in): 
    * Open the project on PhpStorm
        * MySQL database (table name "users") 
            * Columns:
                * id (int, not null, auto inc, primary key)
                * username (varchar, not null)
                * Email (varchar, not null)
                * password (varchar, not null)
        * Open then inner terminal and enter:
            * PHP -S localhost:8000
                * Click on the link (the browser should open automatically)
                
**Visual representation**

![authen-editt](https://user-images.githubusercontent.com/48471924/86595904-19ff7280-bfa2-11ea-8a92-24e96263d719.gif)

**Project overview**

* PSD to HTML/CSS:
    * Only the general idea was taken from the PSD files
    * Background picture and logos were extracted using GIMP
* JavaScript:
    * Incorporated to power the dynamic div element movements
* PHP + MySQL:
    * Written in plain PHP. Sends information to the database.
    * MySQL has two tables intertwined in many to many relations.
    * Two profiles with one email can't exist
* Full picture:
    * User registers and is able to login into profile using the same page
    * The "Dashboard" page is not accessible to the user which is not logged in
    * Login session is ended when the user logs out using the "Log Out" button.
    
**Improvements**

Since the project is created fully by my own initiative and there was no external pressure, the project absolutely has
the potential to be improved. Still, I was very careful with the details and general idea of a fully working page.

In my opinion, the improvements include:

* Better naming convention
* Better dynamic responsiveness
* PHP functions to add additional attributes to the attributes table
