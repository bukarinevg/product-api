# Products API

This is a Laravel-based API for managing products.

## Requirements

Docker

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/bukarinevg/product-api
    cd products-api
    ```

2. Install dependencies (only for local development):
    ```bash
    composer install
    ```

3. Build the Docker image:
    ```bash
    docker-compose up --build -d 
    ```

4. Run migrations:
    ```bash
    docker-compose exec product-api php artisan migrate --seed
    ```

## Usage

- Access the API at `http://localhost:8080`.

## PostMand Api

- Postman request example you can find here - `https://www.postman.com/security-explorer-21179152/product-api/request/q0yxmrb/index`
- Or postman collection file in the root of the project - `postman/proudct-api.postman_collection.json`

