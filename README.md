<p align="center">
    <a href="https://legacy-roleplay.com" target="blank">
        <img src="https://github.com/ExpDev07/legacy-rp-cad/raw/master/.github/logo.png" height="150px" width="150px" alt="Legacy RP Logo" />
    </a>
</p>

# legacy-rp-cad

<p>
    <a href='https://ko-fi.com/C1C510DUQ' target='_blank'>
	<img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' />
    </a>
</p>

<strong>100% FREE + OPEN SOURCE.</strong>

> A full web-based CAD (Computer-Aided-Dispatch) solution for the FiveM server Legacy Roleplay. Seamlessly log in with your in-game FiveM character using Steam. Written in PHP using [Laravel Framework](https://laravel.com/) and
> [Bootstrap 4](https://getbootstrap.com/?) for the frontend.

See [#contributing](#Contributing) for more details on how you can help shape **legacy-rp-cad**. We're always down to improve and receive feedback.

## License
Please refer to [LICENSE.md](https://github.com/ExpDev07/legacy-rp-cad/blob/master/LICENSE.md) for this project's license.

## Contributors
This list only contains some of the most notable contributors. For the full list, refer to [GitHub's contributors graph](https://github.com/ExpDev07/legacy-rp-cad/graphs/contributors).
* ExpDev07 (Marius) - creator and maintainer of both frontend and backend.

## Pictures
(more will be posted soon once some design decisions are finalized).

<img src="https://github.com/ExpDev07/legacy-rp-cad/raw/master/.github/screenshots/login.PNG" alt="Logging in" />

## Contributing
This section describes how you can help contribute.

### Prerequisites
* PHP 7+.
* Composer.
* Node (and npm).
* SQL (database).

### Setting up project
Grab yourself a copy of this repository:
```bash
$ git clone https://github.com/ExpDev07/legacy-rp-cad.git
```

Install all the required dependencies (we use both npm and composer):
```bash
$ composer install
$ npm install
```

Create a new file called ``.env`` and copy the contents from ``.env.example`` over to it, then apply your configurations.
```bash
$ 
```

Create a private and unique application key:
```bash
$ php artisan key:generate
```

Run database migrations so that we can store things:
```bash
$ php artisan migrate
```

Create a symbolic link at **public/storage** so that it points to **storage/app/public**:
```bash
$ php artisan storage:link
```

Compile frontend assets (use "dev" for development and "prod" for production):
```bash
$ npm run dev/prod
```

Finally, boot the server up:
```bash
$ php artisan serve
```
