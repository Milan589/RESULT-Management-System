<?php
    session_start();
    include 'config.php';
    $id = $_GET['id'];
    $sql1 = "select * from teacher where teacher_id = '$id'";
      // echo $sql1;
    $res = mysqli_query($conn, $sql1);
    $data = mysqli_fetch_assoc($res);
?>
<?php
    if(isset($_SESSION['teacher_id'])){
    if(isset($_POST['submit'])){

            $fname = $_POST['name'];
            $lname = $_POST['last'];
            $username = $_POST['email'];
            // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $year = $_POST['year'];
            $dob = $_POST['dob'];
            // $db_table = $_POST['id'];

            $sql = "UPDATE `teacher` SET  `teacher_fname` ='$fname', `teacher_lname`= '$lname',`teacher_username` ='$username',`teacher_phone`= '$phone', `teacher_address` ='$address', `teacher_year` ='$year' , `teacher_dob` = 'dob' where `teacher_id` = '$id'";

        mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
        
        header('location:teacherinfo.php');
       }
       else{
        echo "Data update failed".mysqli_error($conn);
       }
      }
  }else{
     header('location:login.php');
  }
      ?>
 



  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Teacher</title>
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
                        <span class="login"> <a href="logout.php">Logout</a></span>
                    </div>
                </div>
                <div class="col-sm">
                    <form action="">
                        <div id="login"> <input type="text" id="input" placeholder=" Search..." />
                            <i id="icon" class="fas fa-search"></i>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="student-info">
        <div class="container">
            <div class="result-searchbox">
                <form method="post" id="form" action="<?php
                $url= $_SERVER['PHP_SELF']."?id=".$id;
                 echo $url ?>" >
                  <!-- <input type="hidden" name="teacher_id" value="<?php echo $data['teacher_id'] ?>"> -->
                    <div class="legend">EDIT DETAILS</div>
                    <fieldset class="field">
                        <div class="form-handler">
                            <label>First Name</label>
                            <input type="text" name="name" value="<?php echo $data['teacher_fname']; ?>" placeholder="Enter firstname" class="round" id="fname">
                            <small></small>

                        </div>
                        <div class="form-handler">
                            <label>Last Name</label>
                            <input type="text" name="last" value="<?php echo $data['teacher_lname']; ?>" placeholder="Last Name" class="round" id="last">
                            <small></small>

                        </div>
                        <div class="form-handler">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $data['teacher_username']; ?>" placeholder="Email" class="round" id="email">
                            <small></small>

                        </div>
                        <!-- <div class="form-handler">
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo $data['teacher_password']; ?>" placeholder="Password" class="round" id="password">
                            <small></small>
                        </div> -->
                       <!--  <div class="form-handler">
                            <label>Confirm Password</label></td>
                            <input type="password" name="password2"  placeholder="Confirm Password" class="round"
                                id="password2">
                            <small></small>
                        </div> -->
                        <div class="form-handler">
                            <label>Mobile</label>
                            <input type="number" name="phone" value="<?php echo $data['teacher_phone']; ?>" placeholder="Mobile Number" class="round" id="phone">
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $data['teacher_address']; ?>" placeholder="Address" class="round" id="address">
                            <small></small>
                        </div>
    
                        <div class="form-handler">
                            <label class="format">Year</label>


                            <select id="year" name="year" value="<?php echo $data['teacher_year']; ?>" >Year</select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>Date of Birth</label>
                        <input type="text" name="dob" class="round" value="<?php echo $data['teacher_dob']; ?>" placeholder="date of birth" id="dob">
                                <small></small>
                               
                        </div>
                        <span class="year">DD/MM/YYYY</span>
                        
                        <div class="form-handler">
                            <label>Identity</label>
                            <select name = 'id'>
                                <!-- <option value="">Select </option> -->
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                            <small></small>
                        </div>

                        <div class="form-handler">
                            <button type="submit" class="button" name="submit" id="submit">Submit</button>

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

    <script type="text/javascript" src="./js/jquery3.3.1.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript" src="./js/register2.js" ></script>
</body>

</html>