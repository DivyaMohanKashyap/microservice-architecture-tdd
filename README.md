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

- **Dockerized Setup:** Facilitate seamless deployment and scaling with Docker containers, ensuring consistency across different environments.

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
    ```bash
    composer install
    ```

4. **Run the microservices and accompanying services using Docker:**
    ```bash
    docker-compose up -d
    ```

5. **Access the microservices and start building!**


## Postman

This endpoint makes an HTTP GET request to retrieve user information by ID. The request should be made to [http://localhost:8000/api/users/1](http://localhost:8000/api/users/2).

### Request Description

No request body is required for this request.

### Response

- Status: 200 OK
- Body:
    
    ``` json
      {
          "id": 0,
          "name": "Divyamohan Kashyap",
          "email": "divyamohan.kashyap06@gmail.com",
          "created_at": "2024-01-19T22:26:04.000000Z",
          "updated_at": "2024-01-19T22:26:04.000000Z"
      }
    
     ```
    
      
* The response contains the user's ID, name, email, creation timestamp, and last update timestamp.


Happy coding!
