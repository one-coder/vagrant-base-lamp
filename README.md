##Vagrant LAMP

A base LAMP development stack for Vagrant

##Requrements

* VirtualBox

* Vagrant

##Installation
* Download and install [VirtualBox](https://www.virtualbox.org/)
* Download and install [Vagrant](https://www.vagrantup.com/)
* Clone this repository `git@github.com:one-coder/vagrant-base-lamp.git`
* Download box file and move it to repository folder [Download](http://pan.baidu.com/s/1bn9eILL) password is `tihn`
* Go to the repository folder and launch the box 
* `cd [repository]`  `vagrant up`
* add `192.168.33.10    dev.app` to /etc/hosts 

##What's inside

* Ubuntu 14.04
* Apache
* Mysql
* PHP 5.5.9
* phpmyAdmin
* Xdebug with Webgrind
* composer

##Info
###Ubuntu
root password=`vagrant`

###Apache virtual hosts
Add virtual hosts file to /etc/apache2/sites-available and use `a2ensite [you virtual hosts file]` to add virtual site to Apache, don't forget `service apache2 reload` and edit /etc/hosts. 

###Mysql
The guests local 3306 port is available on the host at port 33066. It is also available on every domain. Logging in can be done with username=`root`, password=`root`.

###phpMyAdmin
phpMyAdmin is available on every domain. For example: `http://dev.app/phpmyadmin`

###XDebug and webgrind
XDebug is configured to connect back to your host machine on port 9000 when starting a debug session from a browser running on your host.
A debug session is started by appending GET variable XDEBUG_SESSION_START to the URL.

XDebug is also configured to generate cachegrind profile output on demand by adding GET variable XDEBUG_PROFILE to your URL. For example: `http://dev.app/index.php?XDEBUG_PROFILE`

Webgrind is available on each domain. For example: `http://dev.app/webgrind/`

###Composer
you can call `composer` from any directory.


##About me

* Email(webxding@gmail.com)
* QQ: 986096752
* Chinses description from my [blog.](http://www.one-coder.com/2015/11/26/350)