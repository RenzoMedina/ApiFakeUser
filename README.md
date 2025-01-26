
# Api Fake User

This is api basic with php of fake user


## GET
Index

[http://localhost:3000/api/v1/user](http://localhost:3000/api/v1/user)

## GET ById
Show

[http://localhost:3000/api/v1/user/id](http://localhost:3000/api/v1/user/id)

return 
```json
{
    "message": "List of users by id",
    "data": [
        {
            "id": 1,
            "name": "Bart Daniel",
            "last_name": "Davis",
            "age": 64,
            "email": "jenifer.becker@yahoo.com",
            "phone": "580-642-1299",
            "address": "3913 Jakob Rest Apt. 172\nSouth Carmelside, ND 60037-7128",
            "city": "North Jamaaltown",
            "company": "Nikolaus-McKenzie",
            "job": "Education Administrator",
            "estado": 1,
            "create_at": "2025-01-26 00:33:39",
            "update_at": null
        }
    ]
}
```

## POST Create
Store

[http://localhost:3000/api/v1/user](http://localhost:3000/api/v1/user)

``` json
{
            "name": "Javier Alberto",
            "last_name": "Carrasco Morales",
            "age": 48,
            "email": "krajcik.ethyl@tromp.info",
            "phone": "(252) 554-3766",
            "address": "126 Mante Knolls\nCarleeport, UT 80883",
            "city": "North Clemensside",
            "company": "Rippin Ltd",
            "job": "Broadcast Technician",
            "estado": 1
        }

```

## PUT Update
Update

[http://localhost:3000/api/v1/user/id](http://localhost:3000/api/v1/user/id)

```json
{
            "name": "Pedro Alberto",
            "last_name": "Carrasco Morales",
            "age": 34,
            "email": "krajcik.ethyl@tromp.info",
            "phone": "(252) 554-3766",
            "address": "126 Mante Knolls\nCarleeport, UT 80883",
            "city": "North Clemensside",
            "company": "Rippin Ltd",
            "job": "Broadcast Technician",
            "estado": 0
        }
```

## DELETE Destroy
Destroy

[http://localhost:3000/api/v1/user/id](http://localhost:3000/api/v1/user/id)


## Run Locally

Clone the project

```bash
git clone https://link-to-project
```

Go to the project directory

```bash
cd my-project
```

Install dependencies

```bash
composer install
```

Start the server

```bash
php -S localhost:8080
```


## Authors

- [@renzomedina](https://www.github.com/RenzoMedina)


## Running Tests

To run tests, run the following command

Note: If you are working into Ubuntu, first needed permission, you must run this is script
```bash 
chmod +x builder_test.sh
```
```bash
./builder_test.sh
```
```
PHPUnit 11.5.3 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.11

ConectionR                                                                   1 / 1 (100%)

Time: 00:00.008, Memory: 8.00 MB

There was 1 risky test:

1) Connection::testConnection
This test did not perform any assertions

/home/renzomedina/PHP/APIS/apiFakeName/test/connection.php:9

OK, but there were issues!
Tests: 1, Assertions: 0, PHPUnit Deprecations: 1, Risky: 1.
```


