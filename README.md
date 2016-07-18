Testing
=============

A Symfony project created on July 18, 2016, 15:32 pm.


Before the first launching of the application you should execute next steps:

* Install composer verdors: ```composer update```
* Build the database structure: ```php app/console doctrine:schema:update --force```
* Build assetic via command: ```php app/console assetic:dump```
* Install assets via command: ```php app/console assets:install```
* Install bower dependencies via command: ```bower install ./vendor/sonata-project/admin-bundle/bower.json```
