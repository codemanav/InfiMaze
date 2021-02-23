# InfiMaze
* An OTT Video Streaming website which provides an immersive experience to users who can watch all their favourite movies, series, TV shows, anime, cartoon, etc.
* Each user will have smooth control and quality assured content on the portal.


## Technologies:-
   * PHP
   * HTML
   * CSS
   * VanillaJS
   * jQuery
   * MySQL
   * Hack

## External libraries/APIs:-
   * PayPal-PHP-SDK
   * PayPal REST API


## Features:-
* User registration/sign in facility to activate an account.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/1.png)
* Storing session to check if the user is logged in or not.
* Creating and displaying the preview video overlay. Changing the background color of navigation bar on scrolling.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/2.png)
* Displaying movies, TV shows, series category wise (Action, Adventure, Comedy, etc.).

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/3.png)
![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/4.png)
* A featured video player with features like play, pause, full screen, picture in picture, previous, volume, skip +5/-5 secs, download, etc. . Replay and next episode overlay is shown at the end of the video.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/5.png)
![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/6.png)
* AJAX implementation to add and update duration of the video as it plays. This essentially keeps track of the user's progress. Hence, he/she can come back and resume from where they left off.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/7.png)
* Marking and displaying the video as 'seen' on finishing it. 
* Recommending videos to user based on his/her previous watching history

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/8.png)
* AJAX implementation for a live search system.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/9.png)
* Allows user to upadate his/her personal details in the profile section.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/10.png)
* PayPal payment subscription integration.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/11.png)
![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/12.png)
* User can view his/her transaction history in PayPal.
* One can resume the video from where he has last left on re-login.

## How to use?
* Pre-requisite: XAMPP server installation.
* Clone the respository/download the source code.
* Place the repository in xampp/htdocs.
* Download PayPal-PHP-SDK latest version from here:- https://github.com/paypal/PayPal-PHP-SDK/releases and place it in xampp/htdocs/InfiMaze.
* Import infimaze database from InfiMaze/databases/infimaze into phpmyadmin.
* Run the login.php or register.php using xampp localhost.
* And you are ready to go :partying_face:!!

## Create your own PayPal subscription integration:-
* Create an account on https://developer.paypal.com/home.
* Go into Dashboard->My Apps & Credentials->live and create a new app (eg, infimaze).
* Make sure to link the app with a live account :grimacing:(sandbox is a dummy payPal account)!
* Copy your Client ID and Secret (you wanna keep that a secret 	:wink:), replace it in includes/paypalConfig.php as shown below.

![alt text](https://github.com/codemanav/InfiMaze/blob/main/screenshots%20of%20the%20website/17.png)
* You can create your own billing plan in billingPlan.php by changing values and currency. (Also you can change duration for payment in line.16 of billing.php)
* And you are done creating your own subscription integration :smile:!
