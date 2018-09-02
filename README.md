# Tours and Travel Simple PHP Page
Tours and Travel Simple PHP page with MySQL database 

This project was introduced and created in Third year B.E-Computer Engg as one of my first PHP project. It is meant for absolute beginners who are new to PHP and MySQL. I've intentionally kept it the most minimal possible while introducing some separation of concerns. 

## Features

* PHP variables
* PHP arrays
* PHP functions
* Database
* Mobile friendly
* Pretty links (/about) with fallback to query string (?page=about)
* Basic example of separation of concerns (functionality, content, template)


## Installation

Make sure you have [Xampp](https://www.apachefriends.org/download.html) installed on your machine.

1. Clone or Download the repository
```shell
git clone https://github.com/amitbauriya/tours-and-travel.git
cd tours-and-travel
```
2. Setup database connectivity edit function.php ([See Setup credentials](https://github.com/amitbauriya/tours-and-travel#Setup))

3. Run Xampp Control Panel and start the following (Apache and MySQL)

Your application will be running at ```http://localhost/tours-and-travel/```

### Setup

```
	$cn=mysqli_connect("localhost","database_user","database_pwd","database_name");
```
## Database

Go to PHPMyadmin ```http://localhost/phpmyadmin/```

1. Create a new database name "tourstravel"

2. Now import the database files located at database/travelblog.sql

You are free to change any modification in template or upgrade it ;-)

## Screenshots

![Screenshot](https://raw.githubusercontent.com/amitbauriya/tours-and-travel/master/images/screenshot.jpg)
