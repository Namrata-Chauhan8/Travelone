<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-container {
            padding: 3px; /* Add spacing around the container */
            background-color: #000; /* Set background color */
        }

        .navbar-inverse .navbar-brand {
            color: yellowgreen;
            font-size: x-large;
            margin-left: 0px; /* Added margin to move the title to the left */
        }

        .navbar-header {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Aligns items on both ends */
        }

        .navbar-toggle {
            float: right; /* Push the button to the right */
        }

        .navbar-inverse .navbar-nav {
            margin-top: 3px;
            /* Adjust top margin */
            text-align: center;
            /* Center the links in mobile view */
            float: none;
            /* Reset float for desktop view */
        }

        .navbar-inverse .navbar-nav>li {
            margin: 0;
            /* Remove margin around the links */
            display: inline-block;
            /* Display the links in a row */
        }

        @media (max-width: 767px) {
            .navbar-inverse .navbar-nav {
                margin-top: 0;
                /* Reset top margin for mobile view */
                /* Center the links in mobile view */
            }

            .navbar-inverse .navbar-nav>li {
                margin: 10px 0; /* Add vertical margin around the links in mobile view */
                display: block;
                /* Display the links as blocks in mobile view */
            }
        }
    </style>
</head>

<body>
    <?php
    $path = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    ?>
    <div class="navbar-container">
        <nav class="navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Travelone✈✈</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse text-center" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo ($path == 'index.php') ? 'class="active"' : ''; ?>>
                            <a href="index.php">Home</a>
                        </li>
                        <li <?php echo ($path == 'about.php') ? 'class="active"' : ''; ?>>
                            <a href="about.php">About Us</a>
                        </li>
                        <li <?php echo ($path == 'gallery.php') ? 'class="active"' : ''; ?>>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li <?php echo ($path == 'login.php') ? 'class="active"' : ''; ?>>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>
