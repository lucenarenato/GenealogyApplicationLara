![Laravel](https://laravel.com/assets/img/components/logo-laravel.svg)

<h1 align="center">Genealogy Application</h1>

## A genealogy/family tree application, built with Laravel.

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

> **Development in progress**  
> In development progress, any changes of table structure **will be updated** directly to corresponding **migration file**.


## About
Genealogy application to record our family members.

## Features
This application uses Português Brazil and English based on `config.locale`.

### Logic Concept
1. A person can have one father
2. A person can have one mother
3. A person can have one parent (couple of mother and father)
4. A person can have 0 to many children
5. A person can have 0 to many spouses (husbands or wife)
6. A couple can have 0 to many children (based on parent_id)

### Family Member Entry
1. Enter Name and Gender
2. Set Father
3. Set Mother
4. Add Spouse
5. Add Child

### Person Attribute
1. Nickname
2. Gender
3. Fullname
4. Date of birth
5. Date of death (or at least year of death)
6. Address
7. Phone Number
8. Email

### Couple Attribute (TODO)
1. Husband
2. Wife
3. Marriage Date
4. Divorce Date
5. Address

## How to Install

### Server Requirements

This application can be installed on local server and online server with these specifications :

1. PHP 7.3 (and meet other [Laravel 8.x server requirements](https://laravel.com/docs/8.x/deployment#server-requirements)),
2. MySQL or MariaDB database,
3. SQlite (for automated testing).

### Installation Steps

1. Clone the repo : `git clone https://github.com/lucenarenato/GenealogyApplicationLara.git`
2. `cd GenealogyApplicationLara`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Create **database on MySQL**
7. **Set database credentials** on `.env` file
8. `php artisan migrate`
9. `php artisan storage:link`
10. `php artisan serve`
11. Register as new user to start using the application.
12. Add the registered email address to the `.env` file:
    ```
    SYSTEM_ADMIN_EMAILS=admin@email.com;cpdrenato@gmail.com
    ```

## Testing
This application built with testing (TDD) using in-memory sqlite database.
```bash
$ vendor/bin/phpunit
```

## Contributing
Feel free to submit Issue for bugs or sugestions and Pull Request.

## Screenshots

#### Family Tree
![Family Tree](public/images/02-pohon-keluarga.jpg "Family Tree")

This family tree view is using the [Horizontal Family Tree CSS](https://codepen.io/cpdrenato/pen/VwXqPZL), thanks to [Peiwen Lu](https://codepen.io/cpdrenato/pen/VwXqPZL).

#### Family Chart
![Family Chart](public/images/03-bagan-keluarga.jpg "Family Chart")

#### Search Family Member
![Search Family Member](public/images/01-cari-keluarga.jpg "Search Family Member")

#### User Profile
![User Profile](public/images/04-profil.jpg "User Profile")

#### Profile Form
![Profile Form](public/images/05-form-profil.jpg "Profile Form")

#### Profil Edit Form
![Profil Edit Form](public/images/06-edit-profil.jpg "Profil Edit Form")

#### Automated Testing
![Automated Testing](public/images/07-automated-testing.jpg "Automated Testing")

## License

Renato Lucena - project is open-sourced software licensed under the [MIT license](LICENSE).

> This is a good solution but rather than depend on a third-party library as the article suggests, you can use Illuminate\Support\Str; and Str::uuid() to generate the UUID. HTH. – 

- https://gist.github.com/lucenarenato/18a08c4280509cb87d03a9868d6869e5
- https://packagist.org/packages/backup-gerente/laravel#dev-master