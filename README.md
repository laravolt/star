## Laravel PHP Framework

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Star adalah package Laravel untuk melakukan berbagai hal tentang rate berjenis rate bintang.

## Install

Via composer 
``` bash
$ composer require laravolt/star
```

Tambahkan ini Service Provider
``` php
Laravolt\Star\ServiceProvider::class,
```

Tambahkan ini ke Service Provider Alias
``` php
'Star'      => Laravolt\Star\Facade::class
```

Jalankan ini untuk mendapatkan file migration 
``` bash
php artisan vendor:publish 
php artisan migrate
```

Gunakan trait `StarrableTrait` pada model yang akan diberikan bintang.

## Usage

Terdapat 3 method yang dapat digunakan
``` php
// $obj adalah object model yang akan diberikan bintang. Pastikan model tersebut sudah ditambahkan StarrableTrait.

Star::star($obj, $starValue);

Star::average($obj);

Star::giver($obj);
```

## Contributing

Silakan melakukan pull request.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
