<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Technical test - demo application for Avrillo

### Installation

With Docker installed https://docs.docker.com/get-docker/

* go to project root directory, then...

``docker-compose build laravel.test && docker-compose up -d``

### Running the tests

``docker-compose run php "vendor/bin/phpunit"``

### GET or refresh quotes (json API)

```
curl --location 'http://0.0.0.0:80/api/quotes' 

["The world is our office","I am the head of Adidas. I will bring Adidas and Puma back together and bring me and jay
back together","You basically can say anything to someone on an email or text as long as you put LOL at the end.","I
love sleep; it's my favorite.","If you have the opportunity to play this game of life you need to appreciate every
moment. a lot of people don't appreciate the moment until it's passed."]
```


### GET or refresh quotes (web)

```
http://localhost/quotes'

Life is the ultimate gift
We used to diss Michael Jackson the media made us call him crazy ... then they killed him
For me to say I wasn't a genius I'd just be lying to you and to myself
All the musicians will be free
I feel like me and Taylor might still have sex
```

### @todo

...
