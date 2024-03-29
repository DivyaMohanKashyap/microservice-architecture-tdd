# Microservice Architecture with Laravel and Test-Driven Development (TDD)

**microservice-architecture-tdd**

Welcome to microservice-architecture-tdd, a comprehensive example of building a scalable microservices architecture using Laravel, accompanied by a strong emphasis on Test-Driven Development (TDD). This project serves as a robust foundation for developing distributed systems, ensuring maintainability, scalability, and reliability.

# Project Installation Guide


## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Postman](#postman)

## Features

- **Laravel Microservices:** Implement a small microservice using the Laravel framework, allowing for modular and independent service development.

- **Test-Driven Development (TDD):** Experience the power of TDD in building microservices, ensuring code quality, and making your architecture robust and resilient.

- **Dockerized Setup:** Setting up Laravel in the local environment with Docker using the LEMP stack that includes: Nginx, MySQL, PHP, and phpMyAdmin.

## Getting Started

Follow the steps below to get started with the project:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/DiivyaMohanKashyap/microservice-architecture-tdd.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd microservice-architecture-tdd
    ```

3. **Set up your laravel project.**
	* **Copy .env.example to .env.**
		```bash
		cp .env.example .env
		```
		
	* **Set Up MySQL database**
		* Uncomment db and phpmyadmin images in docker-composer
		* Change DB_CONNECTION to mysql
		* Change DB_HOST to db
		* Change DB_PORT to 3306

4. **Run the microservices and accompanying services using Docker:**
    ```bash
	docker-compose build
    docker compose up -d
	```
	
5. **Access the microservices and start building!**
    ```bash
    application => http://localhost:8080/api/users/1
	phpMyAdmin => http://localhost:3400
    ```

## Postman

This endpoint sends an HTTP GET request to retrieve user information based on the user ID.

### Request

- Method : `GET`
- Headers : `{X-API-KEY: OsoQjgnCnHqld9HOuShDawWMHyHv9cxX5r6kL62DOYcmwKd7sV}`
- URL : `http://localhost:8080/api/users/1`
    

### Response

- Status: 200 OK
- Body:    

    ``` json
      {
          "id": 1,
          "name": "Divyamohan Kashyap",
          "email": "divyamohan.kashyap06@gmail.com",
          "created_at": "2024-01-19T22:26:04.000000Z",
          "updated_at": "2024-01-19T22:26:04.000000Z"
      }
    
     ```
    
      
- The response contains the user's ID, name, email, creation timestamp, and last update timestamp.


Happy coding!
