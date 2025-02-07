# README.md

# CodeIgniter Authentication System

This project is a simple authentication system built using CodeIgniter 4. It provides user registration, login, and logout functionalities.

## Project Structure

```
codeigniter-auth-system
├── app
│   ├── Controllers
│   │   └── AuthController.php
│   ├── Models
│   │   └── UserModel.php
│   ├── Views
│   │   ├── login.php
│   │   ├── register.php
│   │   └── dashboard.php
├── public
│   ├── index.php
├── writable
├── tests
├── .env
├── spark
└── README.md
```

## Features

- User registration with email and password.
- User login with email and password.
- User logout functionality.
- Password hashing for secure storage.

## Setup Instructions

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Configure the database settings in the `.env` file.
4. Run the migrations to set up the database tables.
5. Access the application via the `public/index.php` file.

## Usage

- Visit `/register` to create a new account.
- Visit `/login` to access your account.
- After logging in, you will be redirected to the dashboard.

## Testing

Unit and feature tests can be found in the `tests` directory. Use the CodeIgniter testing tools to run the tests.

## License

This project is open-source and available under the MIT License.