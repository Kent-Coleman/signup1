# signup1
Locally Hosted Signup, Login, and Logout System in PHP and MySQL using Bootstrap and XAMPP

-Documentation-

To run the application locally, download and open XAMPP, then start the MySQL and Apache Servers. 
Open a web browser and navigate to localhost/phpmyadmin/.
A SQL database needs to be created. Select 'New' in the left navigation bar, enter the name 'signupforms', then enter the database name 'registrations' and select 3 columns.
The first column is 'id' for a primary key with type INT, index type 'primary', and the auto increment checkbox selected.
Second column is 'password' with type 'VARCHAR', and length of 100.
Third column is 'username' with type 'VARCHAR', length of 100, and an index type of 'UNIQUE' to prevent duplicate usernames.
The application should be saved within the XAMPP file, under XAMPP/htdocs/registrations in order to interact with the database.

The application can be run by entering localhost/registrations/signup1/sign.php in a browser. A username and password can be entered and stored locally into the registrations SQL database. 
The user will then be redirected to the localhost/registrations/signup1/login.php page where previously added credentials can be entered to successfuly activate a home page session.
The home page will welcome the user by username and provide a logout button. If selected, the logout button will end the session and take the user back to the login page. 
