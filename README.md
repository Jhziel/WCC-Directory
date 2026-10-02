# WCC Campus Directory

WCC Campus Directory is a Laravel web application for finding rooms and navigating the eight-floor WCC campus. It provides interactive floor maps, room search, campus information, announcements, events, visitor feedback, and administrative tools.

## Features

- Browse interactive maps for floors 1 through 8 and navigate between floors.
- Search campus rooms and facilities by name, floor, or type.
- View campus policies, announcements, reminders, and events.
- Submit support tickets and rate the campus experience.
- Manage tickets, events, announcements, and reminders through the authenticated admin area.

## Technology

- PHP 8.2+ and Laravel 12
- MySQL
- Blade, Tailwind CSS, Alpine.js, and Vite
- Panzoom for map interaction

## Getting Started

### Requirements

- PHP 8.2 or newer with the required Laravel extensions
- Composer
- Node.js and npm
- A running MySQL server

### Local Development

1. Install dependencies and create the environment file:

    ```sh
    composer install
    cp .env.example .env
    ```

2. Edit `.env` and set `APP_NAME`, `APP_URL`, and the `DB_*` values for your MySQL database. Create the configured database before continuing.

3. Generate the application key, run migrations, and build the frontend assets:

    ```sh
    php artisan key:generate
    php artisan migrate
    npm install
    npm run build
    ```

    Alternatively, after configuring `.env` and creating the database, run `composer setup` to install dependencies, generate the key, migrate, and build the frontend.

4. To populate the development database with sample room data, run:

    ```sh
    php artisan db:seed
    ```

    Seeding is intended for development. The admin seeder creates an account with credentials defined in `database/seeders/AdminSeeder.php`; change these before using the app outside a local environment. The room seeder clears and recreates room records, so do not run it against production data.

5. Start the application, queue worker, and Vite development server:

    ```sh
    composer dev
    ```

    Open [http://localhost:8000](http://localhost:8000). To run the processes separately, use `php artisan serve`, `php artisan queue:listen --tries=1`, and `npm run dev` in separate terminals.

### Docker Compose

The repository includes a Docker Compose configuration for PHP, MySQL, and the Vite development server. Create `.env` from `.env.example`, then configure `DB_HOST=database`, a non-root `DB_USERNAME`, and a non-empty `DB_PASSWORD` before starting the containers:

```sh
docker compose up --build
```

The application container runs migrations during startup. The app is exposed on port `8000`, and the Vite development server is exposed on port `5173`.

## Room API

Room search and navigation endpoints are available under `/api/rooms`:

| Method | Endpoint                   | Purpose                                                                  |
| ------ | -------------------------- | ------------------------------------------------------------------------ |
| `GET`  | `/api/rooms/search`        | Search rooms; accepts optional `q`, `floor`, and `type` query parameters |
| `GET`  | `/api/rooms/types`         | List available room types                                                |
| `GET`  | `/api/rooms/floor/{floor}` | List rooms on a floor                                                    |
| `GET`  | `/api/rooms/{id}`          | Get a room by ID                                                         |
| `POST` | `/api/rooms/find-path`     | Find a route between two rooms                                           |

For `POST /api/rooms/find-path`, send JSON containing `from_room_id` and `to_room_id`. Same-floor requests return a direct path. Cross-floor requests currently return instructions to use stairs or an elevator.

## Tests

Run the Laravel test suite with:

```sh
php artisan test
```

The test configuration uses an in-memory SQLite database.

## Project Layout

- `app/` - models, controllers, middleware, and application code
- `database/migrations/` and `database/seeders/` - schema changes and sample data
- `resources/views/` - Blade pages, including the eight floor maps
- `resources/js/` and `resources/css/` - frontend source files
- `routes/web.php` - web pages and form routes
- `config/roompaths.php` - room path data used for campus navigation
