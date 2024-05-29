# Book Portal

Book Portal is a simple web application built with Laravel that allows users to manage a collection of books. The frontend is built using Laravel Blade.

## Features

- CRUD (Create, Read, Update, Delete) operations for books
- Responsive and user-friendly interface
- Validation for book attributes
- Integration with MySQL database

## Setup

### Prerequisites

- PHP
- Composer
- MySQL

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/WajihaMalik/book-portal.git
    ```
2. Navigate to the project directory:
    ```bash
    cd book-portal
    ```
3. Install dependencies:
    ```bash
    composer install
    ```
4. Configure your MySQL database in the .env file:
    - DB_CONNECTION
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD
5. Run database migrations and start the server:
    ```bash
    php artisan migrate
    php artisan serve
    ```
6. Access the application in your web browser at `http://localhost:8000/books`.
