<?php
    include 'config.php';
    $message = "";
if(isset($_POST['submit'])){
    
        $subject = $_POST['subject'];
        $eod = $_POST['eod'];
        $semester = $_POST['semester'];
        $year = $_POST['year'];
      
    
        $sql = "INSERT INTO exam(subject_id,exam_date,exam_year,semester) VALUES ('$subject','$eod', '$year', '$semester')";   

 // Try to execute the query
    if (mysqli_query($conn, $sql) == TRUE) {
        // echo "success";
            header("location: examdetail.php");

        }
    else{
           echo "Error: " . $sql . "<br>" . $conn->error;
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
<?php
    $sql1= "SELECT * FROM subjects ";
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
            <div class="result-form">
                <form method="post" id="form" class="add-result" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                    <div class="legend">ADD EXAM</div>
                    <fieldset class="field">
                        <div class="form-handler">
                            <label for="subject" >Subject </label>
                            <select id="subject" name="subject">
                                 <?php 
                                foreach($data1 as $d1){
                                 ?>
                                 <option value="<?php echo $d1['subject_id'] ;?>"><?php echo $d1['subject_name']; ?></option>
                                
                                <?php } ?>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label >Semester</label>
                            <select id="semester" name="semester">
                                <option value="">Select Semester</option>
                                <option value="First Semester">First Semester</option>
                                <option value="Second Semester">Second Semester</option>
                                <option value="Third Semester">Third Semester</option>
                                <option value="Fourth Semester">Fourth Semester</option>
                                <option value="Fifth Semester">Fifth Semester</option>
                                <option value="Sixth Semester">Sixth Semester</option>
                                <option value="Seventh Semester">Seventh Semester</option>
                                <option value="Eighth Semester">Eighth Semester</option>
                            </select>
                            <small></small>
                        </div>
                         <div class="form-handler">
                            <label>Year</label>
                            <select id="year" name="year">Year</select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label>Exam Date</label>
                                    <input type="text" name="eod" class="round" placeholder="Enter exam date" id="dob">
                                    <small></small>
                            </div>
                                 <span class="year">YYYY/MM/DD</span>
                            <div class="form-handler">
                                <button type="submit" class="button" id="submit" name="submit">Submit</button>
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
    <script type="text/javascript" src="./js/addexam.js"></script>





</body>

</html>