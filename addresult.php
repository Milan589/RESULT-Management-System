
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Result</title>
    <style>
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #cdcdcd;
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
        }
    </style>

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
                        <span class="login">Logout </span>
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
            <div class="result-form">
                <section> 
                    <div class="legend">ADD RESULT</div>
                       <fieldset class="field">
                <form method="get" id="form" class="add-result" action=""> 
                        <div class="form-handler">    
                            <label class="labeling">Student_ID:</label>
                           <input type="text" name="sid" value="<?php if(isset($_GET['sid'])){ echo $_GET['sid'];}  ?>">     
                        <button type="submit" class="button" > Search</button>
                        </div>
                  <!--   </fieldset> -->
                 </form>

                       <hr>
                        <?php 
                            if(isset($_GET['sid'])){
                                  $sid = $_GET['sid'];
                                $sql= "SELECT * FROM student WHERE student_id = '$sid' ";
                                $res = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)> 0){
                                   if (is_array($res) || is_object($res)){
                                    foreach($res as $row){
                                        ?>
                                 <div class="form-handler">
                                    <label >First Name :</label>
                                    <!-- <span><?php echo $row['student_fname']; ?></span> -->
                                   <input type="text" name="fname" value="<?php echo $row['student_fname']; ?>"> 
                             </div>
                        <div class="form-handler">
                            <label for="lname" >Lastname :</label>
                              <input type="text" name="lname" value="<?php echo $row['student_lname']; ?>">                       
                        </div>
                              <div class="form-handler">
                            <label for="faculty" >Faculty :</label>
                              <input type="text" name="faculty" value="">    
                       </div> 
                       <div class="form-handler">
                            <label >Semester</label>
                            <input type="text" name="faculty" value="">
                        </div> 
                            <?php      
                                }
                              }
                            }
                              else{
                            echo "No record found";
                            }    
                           }    
                         ?>   
                            
               
                           

                </section>
            </div>
                <div class="result-form">

                        <form method="post" id="form1" class="add-result" action="">
                        <div class="form-handler">
                            <label for="subject" class="labeling">Theory Subject :</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">SAD: </label>
                                    <input type="number" id="sad" name="sad" class="round" min="0" placeholder="marks">                 
                                    <small></small> 
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">DAA: </label>
                                    <input type="number" id="daa" name="daa" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">SM: </label>
                                    <input type="number" id="sm" name="sm" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">WEB: </label>
                                    <input type="number" id="web" name="web" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">MM: </label>
                                    <input type="number" id="mm" name="mm"class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">CRYPTO: </label>
                                    <input type="number" id="crypt" name="crypt" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                        </div>
<!-- 
                        <div class="form-handler">
                            <label for="Pr marks" class="labeling">Practical Subject :</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">SAD_PR:</label>
                                    <input type="number" id="sadpr" name="sadpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">DAA_PR:</label>
                                    <input type="number" id="daapr" name="daapr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">SM_PR:</label>
                                    <input type="number" id="smpr" name="smpr" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">WEB_PR:</label>
                                    <input type="number" id="webpr" name="webpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">MM_PR:</label>
                                    <input type="number" id="mmpr" name="mmpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname" id="change">CRY_PR:</label>
                                    <input type="number" id="cryptpr" name="cryptpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="form-handler">
                                <button type="submit" class="button" id="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
            
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
    <script type="text/javascript" src="./js/addresult1.js"></script>
</body>

</html>