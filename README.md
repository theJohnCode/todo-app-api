# Todo List Application

This project is a full-stack web application that allows users to manage their to-do list. The backend is built with Laravel, providing a RESTful API for the frontend to interact with. The frontend is a React application that consumes the API to display, add, update, and delete todo items.

## Features

- Add new todo items
- View list of todo items
- Update todo items (mark as completed, edit title)
- Delete todo items
- Real-time updates to the todo list

## Frontend Repository

The React frontend for this project is available here

[Todo List React Repository](https://github.com/theJohnCode/React-todo-app)

## Getting Started

To get the Laravel backend up and running, please follow these steps:

1. Clone the repository to your local machine.
   ```sh
   git clone https://github.com/theJohnCode/todo-app-api.git
   ```

2. Navigate to the project directory.
   ```sh
   cd todo-app-api
   ```

3. Install the Composer dependencies.
   ```sh
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure your database settings.
   ```sh
   cp .env.example .env
   ```

5. Generate an application key.
   ```sh
   php artisan key:generate
   ```

6. Migrate the database.
   ```sh
   php artisan migrate
   ```

7. Start the Laravel development server.
   ```sh
   php artisan serve
   ```

8. The backend API will now be accessible at `http://localhost:8000`.

## API Endpoints

- **List all todos:**
  ```
  GET /api/todos
  ```

- **Get a single todo:**
  ```
  GET /api/todos/{id}
  ```

- **Add a new todo:**
  ```
  POST /api/todos
  ```

- **Update a todo:**
  ```
  PUT /api/todos/{id}
  ```

- **Delete a todo:**
  ```
  DELETE /api/todos/{id}


- **Mark todo as completed:**
  ```
  PUT /api/todos/updateIsCompleted/{id}
  ```

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes with meaningful commit messages.
4. Push your branch to your forked repository.
5. Open a pull request against the main branch of this repository.