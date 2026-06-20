<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="aboutCV.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>CV-TRIPS</title>
</head>


<style>
header {
        width: 100%;
        background-color: #743810;
        /*position: fixed;*/
        }

        .nav_bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            background: transparent;
        }

        /* LOGO */

        .header_logo {
            display: flex;
            align-items: center;
        }

        .header_logo span {
            color: white;
            font-weight: bold;
        }

        .header_logo img {
            height: 80px;
            margin-right: 10px;
        }

        /* MENU */

        .menu ul {
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        .menu ul li {
            list-style: none;
        }

        .menu ul li a {
            text-decoration: none;
            text-transform: uppercase;
            color: white;
            font-weight: 500;
        }

        /* UNDERLINE HOVER */

        .link-holder {
            position: relative;
        }

        .link-holder::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: white;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }

        .link-holder:hover::after {
            transform: scaleX(1);
        }

        #plan_trip {
            rotate: -40deg;
        }

        /*==========================*/
        /* SETTINGS */
        /* ========================= */

        .settings_bar {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-direction: row;  /* FORÇA HORIZONTAL */
        }

        .lang_picker {
            display: flex;
            align-items: center;
        }

        #flag_US {
            width: 40px;
            height: auto;
            display: block;
        }

        .account_search_submenu {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-direction: row;  /* FORÇA HORIZONTAL */
        }

        #search_icon {
            font-size: 16px;
            color: beige;
            order: 1;
        }

        #search_bar {
            height: 32px;
            padding: 0 10px;
            background-color: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            color: white;
            font-size: 13px;
            width: 170px;
            order: 2;
        }

        #account_icon {
            font-size: 22px;
            color: beige;
            order: 3;
        }

</style>

    <header>
            <nav class="nav_bar">
                <div class="header_logo">
                    <a href="index.php"><img src="./resources/logos/newlogonobg.png" alt="Logo CV Trips"></a>
                    <span>CV TRIPS</span>
                </div>

                <div class="menu">
                    <ul>
                        <li class="link-holder"><a href="./destinations.php"><i class="fa-solid fa-location-dot"></i> destinations</a>
                        </li>
                        <li class="link-holder"><a href="./map.php"><i class="fa-solid fa-map"></i> map</a></li>
                        <li class="link-holder"><a href="./plan_trip.php"><i id="plan_trip" class="fa-solid fa-plane"></i> plan
                                trip</a></li>
                    </ul>
                </div>

                <div class="settings_bar">
                    <div class="lang_picker">
                        <img src="resources/logos/Flag_of_the_United_States.svg" alt="US Flag" id="flag_US">
                    </div>
                    <div class="account_search_submenu">
                        <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
                        <input type="text" id="search_bar" placeholder=" Type search here ...">
                        <i class="fa-solid fa-user" id="account_icon"></i>
                    </div>
                </div>
            </nav>
</header>       

