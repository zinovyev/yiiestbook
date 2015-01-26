yiiestbook
==========

*A simple example of a guestbook powered by Yii2. It contains only two pages: a page with submission form and a messages list page.*

## Requirements
* Virtualbox
* Vagrant

## Installation

If you haven`t *ubuntu/trusty64* box on your computer, install it using:

```sh
$ vagrant box add ubuntu/trusty64
```

Run following code in your project directory:

```sh
~/prj$ git clone https://github.com/zinovyev/yiiestbook.git
~/prj$ cd yiiestbook
~/prj/yiiestbook$ vagrant up
```
When installation is complete, the site will be available at *http://127.0.0.1:8080*. This port can be easyli changed in Vagrantfile (in the root folder of the project).