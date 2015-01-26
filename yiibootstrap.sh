#!/usr/bin/env bash

#
# Install Yii2
# This script should be executed only once
# 
# Ivan Zinovyev <vanyazin@gmail.com>
# 
#

# Create db
mysql -uroot -p1234 -e 'create database yii2basic'

# Install Yii2 soft
cd /vagrant/basic;
composer global require "fxp/composer-asset-plugin:1.0.0-beta4";
composer install;

# Apply migrations
php yii migrate/up --interactive=0