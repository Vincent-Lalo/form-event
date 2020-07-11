# Form for adding participants to an event with Ajax

This application allows you to add a participant to an event if it does not exist in the database

# Infos :
Technology: Ajax, jQuery, Bootstrap, CSS, HTML, PHP
<br>Database: MySQL

# Uses :
- Adding a participant
- Last-name field automatically capitalizes
- The first-name field automatically puts the first letter in capital letters only
- The email field must comply
- Phone entry field automatically places spaces every 2 digits, prevents letter entry and must follow a pattern
- The form is only valid if it is complete and that it respects the displayed rules
- The participant is added by Ajax to another file called "add-participant.php" in the "script" folder
- This file verifies that the user does not already exist in the database and displays an error if this is the case. Otherwise, it adds it and displays that it has been added.
