<?php
    require_once('assets/php/session.php');
    include('assets/php/getUserName.php');
 ?>

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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" href="images/logo.png" />
        <title>Menu</title>
        <style>
            h4, p {
                cursor:pointer;
            }
            #up {
                margin: 0;
                position: fixed;
                bottom: 0;
                right: 0;
                max-width: 70px;
                max-height: 70px;
                width: 12vw;
                height: 12vw;
                z-index: 100;
                font-size: 30px;
                color: black;
                cursor:pointer;
            }

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

            .dropotron li a:hover {
                background-color: #61c200;

            }

            @media screen and (max-width: 480px) {
                h4 {
                    font-size: 13pt;
                    font-weight: bold;
                }
            }
            #options{
                margin-bottom: 20px;
                margin-left: 20px;
                font-size: 1.3rem;
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
                            <li><a href="list.php">List</a></li>
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
                        <h2 style="font-weight:400;font-size:3rem">Menu</h2>
                    </header>
                    <div class="blockquote" style="min-height:120px;margin-top:50px;">

                    </div>
                    <div class="row">
                        <div class="12u">

                            <!-- Form -->
                            <section class="box">
                                <h2>Search</h2>
                                <form class="search-form">
                                    <div class="row uniform 50%">
                                        <div class="9u 12u(mobilep)">
                                            <input type="text" name="query" id="query" value="" placeholder="Search..." />
                                        </div>
                                        <div class="3u 12u(mobilep)">
                                            <input id="search" type="submit" value="Search" class="fit" />
                                        </div>
                                    </div>

                                </form>
                            </section>

                        </div>
                    </div>
                    <div class="row">

                        <div class="12u " id="result">


                        </div>

                    </div>

                </section>

                <div class="hidden-modal">
                    <div class="modal fade" id="myModal" style="margin-top:50px">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New Recipe</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <h4 style="color:green">Recipe succesfully added.</h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->


                <footer id="footer">
                    <ul class="icons">
                        <li><a href="https://twitter.com/JMAN_ORIGINAL" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/JMAN-1982479225414716/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/jman_original/?hl=en" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://github.com/mikah13/COMP2910-Project" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
                        <i id="up" class="fa fa-arrow-up " aria-hidden="true"></i>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; JMAN - 2018. All rights reserved.</li>
                    </ul>
                </footer>


            </div>

        <!-- Scripts -->
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.min.js" /></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/menu.js"></script>

    </body>

    </html>
    <?php
    db_disconnect($conn);
 ?>
