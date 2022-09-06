# Laravel Multi Auth

Menggunakan Laravel Auth terdiri dari 3 role (user, gardener, designer).

- **User** hanya dapat melakukan read data.
- **gardener** dan **designer** dapat melakukan CRUD

Database dapat di download pada [multiauth-laravel.sql](https://github.com/NaufalHafizh/MultiAuth-Laravel/blob/91aa71fc42d89b6e636f3d6d56c8db99433d53b1/multiauth-laravel.sql)

## Usage

untuk menggunakan project ini ikuti langkah di bawah:

1. Clone respository

    ```bash
    git clone https://github.com/NaufalHafizh/MultiAuth-Laravel.git
    ```

- Buat database baru
- Setting .env
- Migrasi

    ```bash
    php artisan migrate:fresh
    ```

- Seeding

    ```bash
    php artisan db:seed
    ```

- Development Server

    ```bash
    php artisan serve
    ```

## Login accounts

**Gardener** <br>
Immanuel@gardener.com <br>
password <br>

**Designer** <br>
Murphy@designer.com <br>
password <br>

**User** <br>
Kelvin@user.com <br>
password <br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
