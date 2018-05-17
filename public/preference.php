<?php
    require_once('assets/php/session.php');
    include('assets/php/getUserName.php');
// if (!isset($_POST['data'])) {
//     header('Location: profile.php');

// } ?>


    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Cache-Control" content="max-age=600" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <meta name="author" content="JMAN">
        <meta name="description" content="Food Tracking Application">
        <meta name="copyright" content="2018 JMAN, Inc. All rights reserved.">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" href="images/logo.png" />
        <title>Preference</title>
        <style>
            img {
                cursor: pointer
            }

            img:hover {
                opacity: .8;
            }

            #navPanel {
                font-size: 1rem;
            }

            nav {
                font-weight: 400;
            }

            a:hover {
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1><a href="index.php" id="jperfect">JustPerfect</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="summary.php">Summary</a></li>
                        <li>
                            <a href="profile.php" id="profile" class="button alt">
                                <?php getName($conn); ?>
                            </a>
                        </li>
                    </ul>

                </nav>
            </header>

            <!-- Main -->
            <section id="main" class="container">
                <header>
                    <h2 style="font-weight:400">Welcome <?php echo $_POST['data']['first'];?></h2>
                    <p>
                        To serve you better, we need to know some more about you ...
                    </p>
                </header>
                <div class="box">
                    <h3>1. Age</h3>
                    <div class="row">

                            <div class="4u 12u(mobilep)">
                                <input type="text" name="name" id="name" value="" placeholder="Age">
                            </div>

                        </div>

                        <h3>2. Gender</h3>

                        <div class="row">

                                <div class="4u 12u(mobilep)">
                                    <input type="radio" id="male" name="gender" checked="">
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender">
                                    <label for="female">Female</label>
                                </div>

                            </div>




                </div>

                <div class="box">
                    <h3>1. Location</h3>
                    <div class="row">
                        <div class="6u 12u(mobilep)">
                            <input type="radio" id="canada" name="location" checked="">
                            <label for="canada"><img src="images/canada.png" class="img-fluid" /></label>

                        </div>
                        <div class="6u 12u(mobilep)">
                            <input type="radio" id="usa" name="location">
                            <label for="usa"><img src="images/usa.png" class="img-fluid" /></label>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://twitter.com/JMAN_ORIGINAL" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/JMAN-1982479225414716/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/jman_original/?hl=en" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://github.com/mikah13/COMP2910-Project" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; JMAN - 2018. All rights reserved.</li>
                </ul>
            </footer>


        </div>

        <!-- Scripts -->
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>


    </body>

    </html>
    <?php db_disconnect($conn); ?>