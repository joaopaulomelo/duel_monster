## About Project
api duel monster is a registration api, with it you can register monster, spell and trap cards to query whenever you want.

## Tools
 
- **[Authentication JWT](https://github.com/tymondesigns/jwt-auth/wiki)** 
- **[Laravel Framework](https://laravel.com/)** 

## Config Project

You need to configure the .env file steps

- Configure your database

## Run Project

- composer update 
- php artisan migrate --seed
- php artisan key:generate
- php artisan jwt:secret
- php artisan serve
 
## Endpoints

- **[Postman](https://api.postman.com/collections/11708091-2a46b258-afc1-43c5-bbd7-4c46a66df07d?access_key=PMAT-01GWNQ4S25VX4QA6SVA054V5T5)** 

-  POST 'api/auth/login'
-  POST 'api/auth/logout'

-  GET 'api/card/monster'
-  GET 'api/card/monster/{id}'
-  POST 'api/card/monster'
-  PUT 'api/card/monster/{id}'
-  DELETE 'api/card/monster/{id}'

-  GET 'api/card/magic'
-  GET 'api/card/magic/{id}'
-  POST 'api/card/magic'
-  PUT 'api/card/magic/{id}'
-  DELETE 'api/card/magic/{id}'

-  GET 'api/card/trap'
-  GET 'api/card/trap/{id}'
-  POST 'api/card/trap'
-  PUT 'api/card/trap/{id}'
-  DELETE 'api/card/trap/{id}'

## Authenticate
you can authenticate with the username provided and entered by the UserSeeder, feel free to add others



