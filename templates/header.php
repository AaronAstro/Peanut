<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset-style.css">
    <link rel="stylesheet" href="css/header-style.css">
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/about-2.css">
    <link rel="stylesheet" href="css/global.css">


    <title>Document</title>
</head>

<body>

    <header class="navigation-bar">
        <div class="wrapper">
            <nav>
                <a href="index.php"><img src="images/logo.png" alt="logo-img" class="logo"></a>
                <div class="nav-links">

                    <a href="home.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="store.php">Store</a>

                    <a href="cart.php" class="cart-link">
                        <img src="images/cart1.png" alt="" class="cart-icon">
                    </a>
                </div>
                <div class="nav-access">
                    <!-- if user is online show log out else show login -->
                    <?php if (!isset($user_id)) { ?>
                        <div class="acc-btn blue">
                            <a href="login.php" class="img-link">
                                Sign in
                            </a>
                        </div>
                    <?php   } else {
                        $user_name = $_SESSION['user_name'];
                        echo '<div class="acc-btn orange">';
                        echo '<div class="circle-container">';

                        //get first letter of username
                        $array_name = str_split($user_name);
                        echo $array_name[0];

                        echo '</div>';

                        echo '<a href="profile.php" class="access-btn ">';
                        echo $user_name;
                        echo '</a>';
                        echo '</div>';
                    ?>
                        <div class="acc-btn">
                            <a href="logout.php" class="img-link">
                                Log out
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </nav>
        </div>
    </header>