<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONTACT</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">


</head>

<body>
    <div id="navbar">
        <div class="container">
            <nav>
                <div> <a href="index.php"> <img class="logo" src="./images/logo.png" alt="logo"></a></div>
                <div class="openMenu"> <i class="fas fa-bars"></i></div>
                <ul class="mainMenu">
                    <li> <a href="index.php" class="nav-link">Home</a></li>
                    <li> <a href="result.php" class="nav-link">Result</a></li>
                    <li> <a href="about.php" class="nav-link">About</a></li>
                    <li> <a href="contact.php" class="nav-link">Contact</a></li>
                    <div class="closeMenu"><i class="fas fa-times"></i></div>
                </ul>
            </nav>
        </div>
    </div>

    <div class="search-content">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div id="login">
                        <span class="login"> <a href="login.php">Login</a> </span>
                        <span class="login"> <a href="register.php"> Sign Up</a></span>
                    </div>
                </div>
                <div class="col-sm">
                    <div id="login"> <input type="text" id="input" placeholder=" Search..." />
                        <i id="icon" class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="student-info">
        <section id="contact-form">
            <div class="container">
                <div class="why-vn">
                    <span class="why">CONTACT</span> <span class="vn">US</span>
                </div>
                <p>Please fill out the form below to contact us</p>
                <div class="row">
                    <div class="col-sm">
                        <div id="contact">
                        <form id="form" action=" " method="post">
                            <div id="form-group" class= 'form-handler'>
                                <label id="section-content"><span>* </span> Name</label><br>
                                <input type="text" name="name" id="name">
                                <small></small>
                            </div>
                            <div id="form-group" class='form-handler'>
                                <label id="section-content"><span>* </span> Email</label><br>
                                <input type="email" name="email" id="email">
                                <small></small>
                            </div>
                            <div id="form-group" class= 'form-handler'>
                                <label id="section-content"><span>* </span> Subject</label><br>
                                <input type="text" name="subject" id="subject">
                                <small></small>
                            </div>
                            <div id="form-group" class= 'form-handler'>
                                <label id="section-content"><span>* </span> Message</label><br>
                                <textarea name="message" id="msg"></textarea>
                                <small></small><br><br>
                                </div>
                                <div id="form-group" class= 'form-handler'>
                                <button type="submit" class="button-send">Send Message</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="col-sm">
                        <div id="contact-photo">
                            <span></span> <img class="contact-photo" src="./images/contact.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="foot-content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span class="foot">Quick Links</span>
                    <span class="content">BIM College</span>
                    <span class="content">Bsc.CSIT College</span>
                    <span class="content">BCA College</span>
                </div>
                <div class="col-sm">
                    <span class="foot">Contact Us</span>
                    <div class="contact-content">
                        <i class="fas fa-map-marker-alt"></i><span> Gaushala, Kathmandu</span>
                    </div>
                    <div class="contact-content">
                        <i class="far fa-envelope"></i><span>info@vn.edu.np </span>
                    </div>
                    <div class="contact-content">
                        <i class="fas fa-phone-alt"></i><span>01-4479744</span>
                    </div>
                </div>
                <div class="col-sm">
                    <span class="foot">Developed By</span>
                    <span class="info-contact">OUR<span class="more-info">TEAM</span></span>
                    <span class="copyright">Copyright &copy;2021 All rights reserved</span>
                </div>
            </div>
    </footer>

    <script type="text/javascript" src="./js/jquery3.3.1.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript" src="./js/contact.js"></script>

</body>

</html>