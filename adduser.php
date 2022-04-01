<?php
session_start();
    include 'config.php';
    if(isset($_SESSION['teacher_id'])){
    $message = "";
    
if(isset($_POST['submit'])){
    
        $fname = $_POST['name'];
        $lname = $_POST['last'];
        $username = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $year = $_POST['year'];
        $dob = $_POST['dob'];
        $college_id=$_POST['college'];
        $db_table = $_POST['id'];

     
        $sql = "INSERT INTO student(college_id,student_fname,student_lname,student_username,student_password ,student_phone,student_address,student_year,student_dob) VALUES ('$college_id','$fname', '$lname', '$username', '$password', '$phone', '$address', '$year','$dob')";   
      
        if ($db_table == 'teacher') {   
            
                 $sql = "INSERT INTO teacher(college_id,teacher_fname,teacher_lname,teacher_username,teacher_password ,teacher_phone,teacher_address,teacher_year,teacher_dob) VALUES ('$college_id','$fname', '$lname', '$username', '$password', '$phone', '$address', '$year','$dob')";
      
        }
 // Try to execute the query
    if (mysqli_query($conn, $sql) == TRUE) {
        echo "success";
            header("location: login.php");

        }
    else{
           echo "Error: " . $sql . "<br>" . $conn->error;
        }

mysqli_close($conn);
}

}
else{
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>REGISTER</title>
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
    <?php
    $sql1= "SELECT * FROM college ";
    $res1 = mysqli_query($conn,$sql1);
    $data1=[];
    if(mysqli_num_rows($res1)> 0){
        while($row1 = mysqli_fetch_assoc($res1)){
            array_unshift($data1,$row1);
        }
    }
?>
    <div class="student-info">
            <div class="container">
                <div class="result-searchbox">
                    <form method="post" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?> " autocomplete ="ON">
                        <div class="legend">ADD USER </div>
                        <fieldset class="field">
                            <div class="form-handler">                     
                                <label>First Name</label>                  
                                <input type="text" name="name" placeholder="Enter firstname" class="round" id="fname">              
                                <small></small>
                            </div>
                            <div class="form-handler">                               
                                <label>Last Name</label> 
                                <input type="text" name="last" placeholder="Last Name" class="round" id="last">                             
                                <small></small>
                            </div>
                            <div class="form-handler">                              
                            <label>Email</label>                           
                            <input type="email" name="email" placeholder="Email" class="round" id="email">                           
                            <small></small>
                        </div>
                        <div class="form-handler">                            
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="round" id="password">
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>Confirm Password</label>
                            <input type="password" name="password2" placeholder="Confirm Password" class="round"
                                id="password2">
                            <small></small>
                        </div>
                        <div class="form-handler">
                         <label>Mobile</label>
                            <input type="number" name="phone" placeholder="Mobile Number" class="round" id="phone">
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" class="round" id="address">
                            <small></small>
                        </div>
                       
                         <div class="form-handler">
                            <label>College</label>
                            <select name = 'college'>
                                <?php 
                                foreach($data1 as $d1){
                                 ?>
                                <!-- <option value="">Select </option> -->
                                <option value="<?php echo $d1['college_id'] ;?>"><?php echo $d1['college_name']; ?></option>
                                
                                <?php } ?>
                            </select>
                            <small></small>
                        </div>
    
                        <div class="form-handler">
                            <label class="format">Year</label>
                            <select id="year" name="year">Year</select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>DOB</label>
                            <input type="text" name="dob" class="round" placeholder="date of birth" id="dob">
                              <small></small>       
                            
                         </div>
                         <span class="year">YYYY/MM/DD</span>
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
   <script type="text/javascript" src="js/register2.js" ></script>

</body>
</html>