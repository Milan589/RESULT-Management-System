<?php
    include 'config.php';

 ?>
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
        <?php
    $sql1= "SELECT * FROM student ";
    $res1 = mysqli_query($conn,$sql1);
    $data1=[];
    if(mysqli_num_rows($res1)> 0){
        while($row1 = mysqli_fetch_assoc($res1)){
            array_unshift($data1,$row1);
        }
    }
?>
    <div class="student-info">
        <!-- <div class="container"> -->
            <div class="result-form">
                <form method="post" id="form" class="add-result" action="">
                    <div class="legend">ADD RESULT</div>
                    <fieldset class="field">
                        <div class="form-handler">
                            <label class="labeling">Student_ID:</label>
                            <select name="student_id">
                             <?php 
                                foreach($data1 as $d1){
                                 ?>
                                 <option value="<?php echo $d1['student_id'] ;?>"><?php echo $d1['student_id']; ?></option>
                                
                                <?php } ?>
                                </select>
                            <span>1</span>
                        </div>
                        <div class="form-handler">
                            <label class="labeling">First Name :</label>

                            <span> <?php echo $d1['student_fname']; ?></span>
                        </div>
                        <div class="form-handler">
                            <label for="lname" class="labeling">Lastname :</label>
                           <span> <?php echo $d1['student_lname']; ?></span>
                        </div>
                        <div class="form-handler">
                            <label for="faculty" class="labeling">Faculty :</label>
                            <select id="faculty">
                                <option value="">Select </option>
                                <option value="CSIT">CSIT</option>
                                <option value="BIM">BIM</option>
                                <option value="BCA">BCA</option>
                            </select>
                            <small></small>
                        </div>
                        <div class="form-handler">
                            <label class="labeling">Semester</label>
                            <select id="semester">
                                <option value="">Select Semester</option>
                                <option value="1">First</option>
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
                            <label for="subject" class="labeling">Theory Subject :</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">SAD: </label>
                                    <input type="number" id="sad" class="round" min="0" placeholder="marks">                 
                                    <small></small> 
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">DAA: </label>
                                    <input type="number" id="daa" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">SM: </label>
                                    <input type="number" id="sm" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">WEB: </label>
                                    <input type="number" id="web" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">MM: </label>
                                    <input type="number" id="mm" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">CRYPTO: </label>
                                    <input type="number" id="crypt" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-handler">
                            <label for="Pr marks" class="labeling">Practical Subject :</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">SAD_PR:</label>
                                    <input type="number" id="sadpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">DAA_PR:</label>
                                    <input type="number" id="daapr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">SM_PR:</label>
                                    <input type="number" id="smpr" class="round" min="0" placeholder=" marks">
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">WEB_PR:</label>
                                    <input type="number" id="webpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">MM_PR:</label>
                                    <input type="number" id="mmpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-handler">
                                    <label for="lname">CRY_PR:</label>
                                    <input type="number" id="cryptpr" class="round" min="0" placeholder="marks">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-handler">
                                <button type="submit" class="button" id="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        <!-- </div> -->
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>

                    <th>Student_ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Faculty</th>
                    <th>SAD</th>
                    <th>DAA</th>
                    <th>WEB</th>
                    <th>SM</th>
                    <th>MM</th>
                    <th>CRYPT</th>
                    <th>SAD PR</th>
                    <th>DAA PR</th>
                    <th>WEB PR</th>
                    <th>SM PR</th>
                    <th>MM PR</th>
                    <th>CRYPT PR</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Milan</td>
                    <td>Chaudhary</td>
                    <td>CSIT</td>
                    <td>35</td>
                    <td>40</td>
                    <td>32</td>
                    <td>38</td>
                    <td>34</td>
                    <td>40</td>
                    <td>32</td>
                    <td>38</td>
                    <td>34</td>
                    <td>40</td>
                    <td>32</td>
                    <td>34</td>

                </tr>
            </tbody>
        </table>
        <!-- <tr> -->
        <!-- <td> <button type="submit" class="button">Submit</button></td> -->
        <!-- <button type="button" class="delete-row">Delete Result</button> -->
        <!-- </tr> -->

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