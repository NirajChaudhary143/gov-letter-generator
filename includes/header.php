<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>सजिलो Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="path/to/nepali.datepicker.min.css">
    <style>
        .logo {
            font-weight: bold;
            /* Increased font weight */
            color: #fff;
            text-decoration: none;
        }

        .logo:hover {
            color: #fff;
        }

        .nepali-font {
            font-family: 'Karma', sans-serif;
            /* Use the Nepali font */
        }
    </style>

</head>

<body>
    <nav class="navigation-bar d-flex justify-content-between align-items-center text-white flex-wrap">
        <div>
            <a class="logo" href="index.php">सजिलो Service</a>
        </div>
        <ul class="d-flex nav-lists ">
            <li class="p-4"><a href="/sudurtech">Home</a></li>
            <li class="p-4">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                    </div>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-light bg-dark" href="cv-form.php">CV Generater</a></li>
                        <li><a class="dropdown-item text-light bg-dark" href="bidhut-jadan-form.php">Application Generater</a></li>
                    </ul>
                </div>
            </li>
            <li class="p-4"><a href="">About Us</a></li>
            <li class="p-4"><a href="">Contact Us</a></li>
            <?php session_start();
            if (isset($_SESSION['role'])) : ?>
                <li class="p-4"><a href="/sudurtech/dashboard.php">Dashboard</a></li>
                <li class="p-4"><a href="/sudurtech/logout.php">Log Out</a></li>
            <?php else : ?>
                <li class="p-4"><a href="/sudurtech/login.php">Log In</a></li>
                <li class="p-4"><a href="/sudurtech/register.php">Register</a></li>
            <?php endif ?>
        </ul>
    </nav>