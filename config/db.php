
<?php

/*
|--------------------------------------------------------------------------
| Database Connection
|--------------------------------------------------------------------------
| Docker uses environment variables.
| XAMPP uses local MySQL settings.
|--------------------------------------------------------------------------
*/

if (getenv('APP_ENV') === 'docker') {

    // Docker database settings
    $host = getenv('MYSQL_HOST') ?: 'mysql';
    $user = getenv('MYSQL_USER') ?: '';
    $password = getenv('MYSQL_PASSWORD') ?: '';
    $database = getenv('MYSQL_DATABASE') ?: 'tt_fashion_store';

} else {

    // XAMPP database settings
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tt_fashion_store";
}

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("Database connection failed. Please check your database configuration.");
}

mysqli_set_charset($conn, "utf8mb4");

