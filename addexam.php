<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Exam</title>
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
                        <span class="login"> <a href="logout.php">Logout</a> </span>
                        <!-- <span class="login"> <a href="register.php">Sign Up</a></span> -->
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
        <div class="container">
            <div class="result-form">
                <form method="post" id="form" class="add-result" action="">
                    <div class="legend">ADD EXAM</div>
                    <fieldset>
                        <div class="form-handler">
                            <label for="subject" class="labeling">Subject </label>
                            <select id="subject">
                                <option value="">Select </option>
                                <option value="sad">SAD</option>
                                <option value="daa">DAA</option>
                                <option value="sm">SM</option>
                                <option value="web">WEB</option>
                                <option value="mm">MM</option>
                                <option value="crypto">CRYPTO</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label class="labeling">Semester</label>
                            <select id="semester">
                                <option value="">Select Semester</option>
                                <option value="">First</option>
                                <option value="2">Second</option>
                                <option value="3">Third</option>
                                <option value="4">Fourth</option>
                                <option value="5">Fifth</option>
                                <option value="6">Sixth</option>
                                <option value="7">Seventh</option>
                                <option value="8">Eighth</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label class="labeling">Exam Date</label>
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" name="dob" class="round" placeholder="Enter exam date" id="dob">
                                    <small></small>


                                    <span class="year">YYYY/MM/DD</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-handler">
                            <label class="labeling">Year</label>


                            <select id="year" name="year">Year</select>
                            <small></small>
                        </div>

                        <div class="row">
                            <div class="form-handler">
                                <button type="submit" class="button" id="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
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


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script type="text/javascript" src="./js/jquery3.3.1.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>





</body>

</html>