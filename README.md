yiiestbook
==========

*A simple example of a guestbook powered by Yii2. It contains only two pages: a page with submission form and a messages list page.*

## Requirements
* Virtualbox
* Vagrant

## Installation

Run following code in your project directory:

```sh
$ vagrant box add ubuntu/trusty64
$ vagrant up
$ vagrant ssh
$ cd /vagrant/basic
/vagrant/basic$ curl -sS https://getcomposer.org/installer | php
/vagrant/basic$ php composer.phar global require "fxp/composer-asset-plugin:1.0.0-beta4"
/vagrant/basic$ php composer.phar install
```
After all you need to create a new database. Login to mysql server using following command:
```sh
$ mysql -uroot -p1234
```

And create a database:
```sql
create database yii2basic;
exit;
```

Now you are ready to migrate data:
```sh
/vagrant/basic$ php yii migrate
```

When installation is complete, the site will be available at *http://127.0.0.1:8080*. This port can be easyli changed in Vagrantfile (in the root folder of the project).