Description:
This is my very first project in web application. I developed a basic web-app for banking, which allows user to create an account, make deposit,
update his/her mailing address.

Application flow:

Login_success.html is the starting point of the application.
->This is the very first page user will interact with(login page).
->The unique id entered by user will be validated in enter.php.

create.php
->This file is used to get user's information to create an account for the first time.
When the form is submitted input.php will be called to store the data obtained into the database.

enter.php
->This where the unique id entered by the user to login will be validated.
A connection will be made to the sql server then we will verify whether the entered unique id exists in the database.

first.php
->This is the home page in which we will display user's content.
->Angular_js is used to display different pages in same space (Since it help in single page application).

add_account.php
->This file is used to display account holder's information.A connection will be made with the sql server to get information from the
database.

deposit.html
->This file is used to transfer the control to a secure window to add the amount to be deposited into user's account.

user_contant.php
->This page is used to display user's mailing address and also this provides an option to update the mailing address.

update_contact.php
->This file is used to update user's mailing address.A connection will be made with the sql server to update the value in database.

deposit.php
->This is were user deposits money. A connection will be made with the sql server to update the value in database.





















































