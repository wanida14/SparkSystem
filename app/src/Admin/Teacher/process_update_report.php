<?php
    require('../../connect.php'); // เรียกใช้ไฟล์...
    session_start(); // เรียกใช้ฟังก์ชั่น session

    if ($_POST) {
        $teacher_id = $_POST['teacher_id'];
        $student_id = $_POST['student_id'];
        $report_id = $_POST['report_id'];
        $subject_id = $_POST['subject_id'];
        $date = $_POST['date'];
        $report = $_POST['report'];

        $sql = "UPDATE report 
                    SET subject_id  = '$subject_id', 
                        student_id  = '$student_id', 
                        teacher_id  = '$teacher_id', 
                        date        = '$date',
                        report      = '$report'
                WHERE id = $report_id";

        // echo $sql; exit();
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../../../views/admin/report_teacher.php?teacher_id=$teacher_id&student_id=$student_id&subject_id=$subject_id");
        } 
    }
?>