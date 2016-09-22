# Dynamic Web Applications 15 - Project 2

For project 2, I had to make an XKCD-style password generator, with some added features to add characters that many modern passwords require, such as numbers and symbols. I've also implemented several of the "optional features", such as manipulating the cases of the words and the number of numbers that I want in my password. 

# Live Site: [p2.luseleafpaper.com](http://p2.luseleafpaper.com)

# Project Description

For this project, I had to: 
- Create separation of function, with website content in index.php and scraping/password logic in logic.php 
- Create a get_words() function that will check if I have words in my words.csv, and scrape Paul Noll's site for words if words.csv has fewer than 1000 words. 
- Create a get_password() function that will use form inputs to return a password that matches the user criteria. This function has if / else blocks and for loops to act on input criteria and add the right number of words or numbers to the password. 
- Create a is_checked() function that will parse my POST request and standardize some of the fields that would be missing if the checkbox is not filled. 
- Create an index.php that contains islands of PHP code, including the block that gets the password from logic.php. 
- Add server and client side verification of the form inputs in logic.php.
- Create a screen cast 
- Launch my live site! 

# Demo: [Screencast demo](https://youtu.be/cKrO3SqoiEI)

# Any details the instructor or TA needs to know about using your project.

Sorry for all the background noise in the screencast... There was a VERY ANGRY MAN sitting next to me in the library who was giving some customer service representative a terrible time. 

# A list of any plugins, libraries, packages or outside code used in the project

I used 3rd party software to screencast:  RecordMyDesktop from Ubuntu 16.06 to create screen cast 

The web server I'm running is the standard Apache web server, installed via apt-get apache2 

I use Yahoo Pure CSS api for my form.
