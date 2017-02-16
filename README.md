# Workshop participant

Jan Kowalski  

# Setup

```
composer install
```

## Run in Vagrant

If you not have `php` or `composer` on your local machine, you can use Vagrant

```
user@host: vagrant box update
user@host: vagrant up
user@host: vagrant ssh
vagrant@vagrant-ubuntu-trusty-64: cd /vagrant
vagrant@vagrant-ubuntu-trusty-64:/vagrant$ composer install
```

# PHPUnit

```
vendor/bin/phpunit
```
