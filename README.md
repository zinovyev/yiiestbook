yiiestbook
==========

*A simple example of a guestbook powered by Yii2. It contains only two pages: a page with submission form and a messages list page.*

## Requirements
* Virtualbox
* Vagrant

## Installation

If you haven`t *ubuntu/trusty64* box on your computer, install it with:

```sh
$ vagrant box add ubuntu/trusty64
```

Run following code in your project directory:

```sh
~/prj$ git clone https://github.com/zinovyev/yiiestbook.git
~/prj$ cd yiiestbook
~/prj/yiiestbook$ vagrant up
~/prj/yiiestbook$ vagrant ssh
```

Now when the ssh session is started, run the following code on the virtual machine:

```sh
$ cd /vagrant/basic
/vagrant/basic$ curl -sS https://getcomposer.org/installer | php
/vagrant/basic$ php composer.phar global require "fxp/composer-asset-plugin:1.0.0-beta4"
/vagrant/basic$ php composer.phar install
```
After all you need to create a new database. Login to mysql server using following command:
```sh
$ mysql -uroot -p1234
```

And create a database *yii2basic* used by the project:
```sql
mysql> create database yii2basic;
mysql> exit;
```

Now you are ready to migrate data:
```sh
/vagrant/basic$ php yii migrate
```

When installation is complete, the site will be available at *http://127.0.0.1:8080*. This port can be easyli changed in Vagrantfile (in the root folder of the project).