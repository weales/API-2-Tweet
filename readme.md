Description
-----------------------------------
Connect to a public API and tweet a predefined message with information from the API in it.

Prerequisite
-----------------------------------
* PHP
* Composer (https://getcomposer.org/)
* cURL (http://php.net/manual/en/book.curl.php) 
* OPENSSL (http://php.net/manual/en/book.openssl.php)
* TwitterOAuth (https://twitteroauth.com/)

Instructions
-----------------------------------
* From the command line: "composer require abraham/twitteroauth"
* Go to https://developer.twitter.com and setup your account 
* Input your CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN and ACCESS_TOKEN_SECRET 
* Change the URL to the API you want to access
* Use the render-api.php that's included to find out what info you wish to pull from the API
* Change the message and be sure it's 250 characters max
* You can test your script from the command line: "php api-2-tweet.php"
* To setup a timed tweet, use cronjob (https://ostechnix.com/a-beginners-guide-to-cron-jobs/)