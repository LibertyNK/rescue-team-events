# Link Communicator

This README Last Updated: 2015/11/11

Link Communicator is an open-source web application originally developed by Coding Dojo students in conjunction with Liberty in North Korea (LINK) organization to provide an online web platform to coordinate LINK’s rescue teams spread throughout the world. Please read the [contribution guidelines](contributing.md) for more information on how to contribute to this repository.


<img src="readme-banner.png" align="center" width="75%" height="75%" />


## Overview

This project utilizes the following: 
- PHP (5.6.7) on CodeIgniter framework (2.2)
- MySQL 5.5
- Highcharts (JS library for data visualizations)
- jQuery 1.11
- Bootstrap 3

Original dev team: [Lan](https://github.com/lannng), [Jalal](https://github.com/JalalBeauchman), [Vincent](https://github.com/vt01uk), [Ani](https://github.com/), and [Isaac](https://github.com/ilee).


## Planned To-Dos

- Port from PHP to Rails
- Make more mobile-friendly
- Fix mobile navigation (on screen shrink) - shift mobile menu to right
- Revamp chat/messaging application
- Clarify User roles - currently the user roles are Admin/Moderator/Regular User/Not approved yet  (‘user_level’ field in users table - 1/2/3/4). This could probably be better.
- Move password hash from md5 to something better
- Users set their own password on ‘request to join’
- Different front-end views depending on user role, generally:
(1) Not Approved Yet: Request/Login screen + Events Page
(2) Regular User: Profile Page (User Dashboard) + Messages + Members + Everything above
(3) Moderator: Create Event + Everything Above
(4) Admin: Admin dashboard + all pages
- Improve Dashboard Charts
- Highcharts functionality
- Cache map on initial load
- Come up with a better, or really any, project name. Some initial attempts:
LANLink,
Lanky,
TeamLinked,
LinkHub,
LinkedTogether,
RescueCentral


## Instructions for Ubuntu Linux
- Unzip htaccess.zip folder included in project root directory. This creates a hidden .htaccess file which allows PHP routes to work properly.

- Setup LAMP
```
sudo apt-get install lamp-server^
```

- Setup MySQL
```
mysql -u root -p password
```

- In MySQL
```
CREATE DATABASE link
```

- Import the provided SQL script dmp to setup the rest of the tables (you could setup the tables manually, but highly recommended to use the SQL script provided)
- (Highly recommended) Install project in /var/www/html
- Install CodeIgniter
- Enable Apache rewire library
```
sudo a2enmod rewrite
sudo service apache2 restart
```

- Modify /etc/apache2/apache2.conf to allow .htaccess, look for this block of code:
```
<Directory /var/www/>
  Options Indexes FollowSymLinks
  AllowOverride None
  Require all granted
</Directory>
```

- Change "AllowOverride None" to "AllowOverride All"

## Instructions for Mac
- Unzip htaccess.zip folder included in project root directory. This creates a hidden .htaccess file which allows PHP routes to work properly.
- Install MAMP
- Import SQL script into your MySQL DB (MySQL Workbench is the tool we used)
- Configure database.php in project /application/config with username/password you setup


## Contribute

Contributions are always welcome!
Please read the [contribution guidelines](contributing.md) first.




