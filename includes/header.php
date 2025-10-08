<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Website Sederhana"; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f4f6f8;
        }
        header {
            background: #0078D7; color: white;
            padding: 15px; text-align: center;
        }
        nav {
            background: #005a9e; text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: white; margin: 0 15px; text-decoration: none;
        }
        nav a:hover { text-decoration: underline; }
        main { padding: 30px; text-align: center; }
        footer {
            background: #0078D7; color: white;
            text-align: center; padding: 10px;
            position: relative; bottom: 0; width: 100%;
        }
        form {
            background: white; padding: 20px; margin: 0 auto;
            max-width: 400px; border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 100%; padding: 10px; margin-bottom: 10px;
            border: 1px solid #ccc; border-radius: 5px;
        }
        button {
            background: #0078D7; color: white;
            border: none; padding: 10px 15px;
            border-radius: 5px; cursor: pointer;
        }
        button:hover { background: #005a9e; }
    </style>
</head>
<body>

<header>
    <h1>Website Sederhana</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact Us</a>
    <a href="register.php">Register</a>
    <a href="login.php">Log In</a>
</nav>

<main>
