<?php
    include 'config.php';
    $message    = "";
    $student    = $_GET['id'];
    $semester   = $_GET['sem'];
    echo "Semester:".$semester;
    // $exam_year  = $_GET['year'];
    $SQL        = "Select  S1.subject_name, S1.subject_id, e.exam_id  from 
    EXAM E LEFT JOIN RESULT R ON E.exam_id=R.exam_id
    LEFT JOIN STUDENT S ON R.student_id=S.student_id
    INNER JOIN SUBJECTS S1 ON E.subject_id=S1.subject_id
    Where E.semester='$semester' GROUP BY S1.subject_id";
    

    //obtain values from form

    // $sql = "INSERT INTO 
    // `result`(student_id,exam_id, marks_obtained, grade)
    // values(1,1,38,'C+')";
    


 // Try to execute the query
    if (mysqli_query($conn, $SQL) == TRUE) {
        $res = mysqli_query($conn,$SQL);
        $data = [];
        // echo "Completion of first part";
            // header("location: resultinfo.php");
        if(mysqli_num_rows($res)> 0){
        while($row = mysqli_fetch_assoc($res)){
                    array_unshift($data,$row);
                    // echo '<h1>fetch array<h1>';
            }
        }
        foreach($data as $data1){
        // echo $data1['subject_id'].'=>'.$data1['subject_name'];
        // echo $data1['subject_name'];
        $value = array();
        if(isset($_POST['submit'])){
            $value[$data1['subject_name']] = $_POST[$data1['subject_name']];
            $mark                          = $_POST[$data1['subject_name']];
            $exam_id                       = $data1['exam_id'];
            $insert_exam = "INSERT INTO 
                    `result`(student_id,exam_id, marks_obtained, grade)
                    values('$student','$exam_id','$mark','C+') 
                    ON DUPLICATE KEY UPDATE `marks_obtained` = '$mark'";
            if (mysqli_query($conn, $insert_exam) == TRUE) {
                echo "success";
            }else{
                echo "Error: " . $insert_exam . "<br>" . mysqli_error($conn);
                echo "";
            }

        }
        }
        }
        
    else{
           echo "Error: " . $sql . "<br>" . $conn->error;
        }
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <?php 
            foreach($data as $data1){
                echo $data1['subject_name'];
                
        ?>
        <input type="number" name="<?php 
        echo $data1['subject_name'];?>" >
       

        <?php
            } ?>
         <button type="submit" name="submit"> SUBMIT </button>
</body>
</html>