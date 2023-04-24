### Important

An active internet connection requires to run this web page smoothly. This is because we utilize several Content Delivery Network (CDN) links.

### How to run

It's pretty simple and all you need is Docker.

- Pull the repo
- `cd` to cms folder and run below commands
- `docker-compose build`
- `docker-compose up -d`
- `docker-compose exec web php artisan migrate:refresh --seed` (important or else app will not work properly)

That's it :)

Now you can see the runing app on `http://localhost:8000/`

You can access login page via `http://localhost:8000/login`

- username: ravindu@email.com
- password: password

You can access DB via `http://localhost:8080/`

- username: laravel
- password: secret

If you prefer to run without Docker please follow Laravel documentation.

### Tech

- Framework: Laravel 10
- Design Patterns: MVC/Service-Repository

### Need to see it without running ? 

- Please refer screenshots.




