 <?php
    session_start();
    include 'config.php';
    $message="";

      if(isset($_POST['submit'])){
        $email = $_POST['username'];
        $temp_password = $_POST['password'];
        $db_table = $_POST['id'];
         
        
        $sql = "SELECT * FROM student WHERE student_username = '$email'";  
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 1){  
            $row = mysqli_fetch_assoc($result);
            if(password_verify($temp_password,$row['student_password'])){
                $_SESSION['student_id']=$row['student_id'];
                $_SESSION['student_name'] = $row['student_name'];
                header("location:resultinfo.php");
                
            }else{
                echo "password invalid";
            }
        }  
        else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";
                // echo $count;  
            }
        mysqli_close($conn);     
        }    
?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN</title>
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
        <div class="container">
            <div class="result-searchbox">
                <form id="form" method="post">
                    <div class="legend">LOGIN</div>
                    <fieldset  class="field">
                        <div class="form-handler">
                            <label>Username </label>
                            <input type="email" name="username" class="round" id="username" placeholder="Enter Username" >
                          
                        </div>
                        <div class="form-handler">
                            <label>Password </label>
                            <input type="password" name="password" class="round" id="password" placeholder="Enter Password">
                              
                        </div>
                        <div class="form-handler">
                            <label>Identity</label>
                            <select name = 'id' >
                                <option value="">Select </option>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                            <small ></small>
                        </div>
                        <!-- <div class="form-handler">
                        <span class="psw"> Forgot <a href="#">password?</a></span>
                        </div> -->
                        <!-- <label> <input type="checkbox" name="remember">Remember me</label> -->
                        <div class="form-handler">
                            <button type="submit" class="button" name="submit"> Login </button>
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
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript" src="./js/register1.js"></script>

</body>

</html>