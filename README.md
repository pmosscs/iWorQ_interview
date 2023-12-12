# iWorQ Interview Project

## Overview
This project is an online form submission.

## Features
- **Form Fields**: Collects personal information, property details, and additional notes.
- **Dynamic UI**: Show/hide feature for alternate property address based on user selection.
- **AJAX Form Submission**: Uses AJAX to asynchronously submit form data to the server.
- **Server-side Handling**: PHP script processes form data and stores it in a fictitious Microsoft SQL Server database (no real connection).

## Files and Structure
- **index.html**: Main HTML file containing the form and structure.
- **styles.css**: CSS file providing the layout and styling for the HTML elements.
- **main.js**: JavaScript file handling form interaction and AJAX request to back end.
- **formHandler.php**: PHP script responsible for receiving and processing form submissions and SQL query.
- **dbHandler.php**: PHP file establishing a connection to the database.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript/jQuery
- **Backend**: PHP (PDO extension for database connectivity)
- **Database**: Microsoft SQL Server - No real connection

## Usage
1. Fill in the required information in the form fields.
2. You will automatically get a thank you message after submitting, but with no DB set up, you will see an error message in the console. 

## Known Issues/Improvements
- Real database.
- Dynamic changes in response to HTTP responses.
- Detailed error handling. 
