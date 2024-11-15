# Project Title

> **Laravel Real-Time Notifications with Pusher and Email Alerts**

This project is a Laravel-based application with real-time notification functionality using Pusher and queued email notifications. When a new post is created, it broadcasts an event to notify users in real-time and sends an email to all users.

## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Features](#features)
- [License](#license)

## Requirements

- **PHP 8.0+**
- **Laravel 10**
- **MySQL** or **SQLite** (or other database supported by Laravel)
- **Node.js** and **npm** (for Pusher and frontend dependencies)
- **Pusher Account** (for broadcasting)
- **Mailtrap/SMTP Email Account** (for email notifications)

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/your-repo.git
   cd your-repo

2. **Install Dependencies**

    ```bash
    composer install
    npm install && npm run dev

3. **Set Up Environment**

    cp .env.example .env

4. **Generate Application Key**

    ```bash
    php artisan key:generate

5. **Set Up Database**

    Create a database and configure the database connection in your .env file:

    - **DB_CONNECTION=mysql**
    - **DB_HOST=127.0.0.1**
    - **DB_PORT=3306**
    - **DB_DATABASE=your_database**
    - **DB_USERNAME=your_username**
    - **DB_PASSWORD=your_password**


6. **Run Migrations**

    ```bash
    php artisan migrate

7. **Setup SMTP Credentials**

    - **AIL_MAILER=**
    - **MAIL_HOST=your_mail_host**
    - **MAIL_PORT=mail_port**
    - **MAIL_USERNAME=username**
    - **MAIL_PASSWORD=password**
    - **MAIL_ENCRYPTION=ssl/tls**
    - **MAIL_FROM_ADDRESS=from_address**
    - **MAIL_FROM_NAME=name**

8. **Setup Pusher Credentials**

    - **PUSHER_APP_ID=**
    - **PUSHER_APP_KEY=**
    - **PUSHER_APP_SECRET=**
    - **PUSHER_HOST=**
    - **PUSHER_PORT=443**
    - **PUSHER_SCHEME=
    - **PUSHER_APP_CLUSTER=**

9. **Change The Drivers**

    - **QUEUE_CONNECTION=database**
    - **BROADCAST_DRIVER=pusher**

10. **Run Queue For Background Working**

    ```bash
   php artisan queue:work
