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

``docker-compose run laravel.test "vendor/bin/phpunit"``

### GET quotes (json API)

```
curl --location 'http://0.0.0.0:80/api/quotes' \
--header 'Authorization: Bearer cf94bfd0bd5ba98975e8974bd4844319'

[{"id":19,"text":"All the musicians will be
free","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"},{"id":18,"text":"I hate
when I'm on a flight and I wake up with a water bottle next to me like oh great now I gotta be responsible for this
water bottle","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"},{"id":20,"text":"I
give up drinking every
week","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"},{"id":17,"text":"Culture is
the most powerful force in humanity under
God","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"},{"id":16,"text":"If I got
any cooler I would freeze to
death","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}]

```

### POST refresh quotes (json API)

```
curl --location --request POST 'http://0.0.0.0:80/api/refresh-quotes' \
--header 'Authorization: Bearer cf94bfd0bd5ba98975e8974bd4844319'

201

```

### GET quotes (web)

```
http://localhost/quotes

{"id":19,"text":"All the musicians will be free","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}
{"id":18,"text":"I hate when I'm on a flight and I wake up with a water bottle next to me like oh great now I gotta be responsible for this water bottle","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}
{"id":20,"text":"I give up drinking every week","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}
{"id":17,"text":"Culture is the most powerful force in humanity under God","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}
{"id":16,"text":"If I got any cooler I would freeze to death","created_at":"2023-12-20T09:54:22.000000Z","updated_at":"2023-12-20T09:54:22.000000Z"}

```

### @todo

...
