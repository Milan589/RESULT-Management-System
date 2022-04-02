<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MARKSHEET</title>



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
                        <span class="login"> <a href="register.php">Sign Up</a></span>
                    </div>

                </div>
                <div class="col-sm">
                    <div id="login"> <input type="text" id="input" placeholder=" Search..." />
                        <i id="icon" type="submit" class="fas fa-search"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="marksheet-back">
        <div class="container">
            <div class="marksheet">
                <div class="college-heading">
                    <h1>Virtual National College</h1>
                    <h4>Affiliated To Tribhuwan University</h4>
                    <h5>Ph 01-4479744, Email- info@vn.edu.np</h5>
                    <h5>Visit us : www.vncollege.edu.np</h5>
                    <img class="logo" src="./images/logo.png" alt="">
                    <span> Academic Report</span>
                </div>
                <div class="name-section">
                    <div class="row">
                        <div class="col-sm">
                            <div class="name"><span>Name of student : </span> <span class="sname"> Milan
                                    Chaudhary</span>
                                <div class="col-sm">
                                    <div class="symb"><span>Symbol No : </span> <span class="sname">
                                            20811</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="name"><span>Faculty : </span> <span class="sname"> CSIT</span>
                                <div class="col-sm">
                                    <div class="symb"><span>DOB : </span> <span class="sname"> 03/08/1999</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="name"><span>Address : </span> <span class="sname"> Lalitpur</span>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="marksheet-table" class="table table-bordered">
                
                        <tr>
                       <th colspan="10" >
                           <span class="year-tag"> Third Year : Fifth Semester Examination</span>
                       </th>
                    </tr>
                    <tr>
                        <td >SN</td>
                        <td >Subject</td>
                        <td > Full Mark </td>
                        <td >Pass Mark</td>
                        <td >Obtained Mark</td>
                        <td >Total</td>
                       
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>SAD</td>
                        <td>60</td>
                        <td>24</td>      
                        <td>80</td>
                        <td>80</td>
                       
                
                     
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>DAA</td>
                        <td>60</td>
                        <td>24</td>
                        <td>80</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SM</td>
                        <td>60</td>
                        <td>24</td>
                        <td>80</td>
                        <td>80</td>
                 
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>WEB</td>
                        <td>60</td>
                        <td>24</td>
                        <td>80</td>
                        <td>80</td>
                 
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>MM</td>
                        <td>60</td>
                        <td>24</td>
                        <td>80</td>
                        <td>80</td>
                 
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>CRYPTO</td>
                        <td>60</td>
                        <td>24</td>
                        <td>80</td>
                        <td>80</td>
                 
                    </tr>
                    <tr>
                    <th colspan="5">Grand Total</th>
                    <td>400</td>
                    </tr>
                    <tr>
                        <th colspan="4"> Grade: <span>A</span></th>
                        <th colspan="3"> Remarks: <span>Pass</span></th>
                    </tr>
                    <tr>
                      <td colspan="10">
                        <span class="legends-for"><li>Cr : Credit Hours</li> </span>
                        <span class="legends-for"><li> TH : Theory</li></span>
                        <span class="legends-for"><li> PR : Practical</li></span>
                        <span class="legends-for"><li>*@ : Absent</li> </span>
                      </td>  
                    </tr>
                    <tr>
                        <td colspan="10">
                        <span class="legends-for">Percentage <span class="grades"> Grade</span>  </span>
                        <span class="legends-for"><li>100-90 <span class="grade">A+</span></li></span>
                        <span class="legends-for"><li>90-80 <span class="grade">   &nbsp; A</span></li></span>
                        <span class="legends-for"><li>80-70 <span class="grade">   &nbsp; B+</span></li></span>
                        <span class="legends-for"><li>70-60 <span class="grade">   &nbsp; B</span></li></span>
                        <span class="legends-for"><li>60-50 <span class="grade">   &nbsp; C</span></li></span>
                        <span class="legends-for"><li>50-40 <span class="grade">   &nbsp; D</span></li></span>
                        <span class="legends-for"><li>40-00 <span class="grade">   &nbsp; F</span></li></span>
                        </td>
                    </tr>
                    &nbsp;

                </table>
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
    <script type="text/javascript" src="./js/jquery3.3.1.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>

</body>

</html>