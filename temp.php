<?php

    include("includes/dbconfig.php");

    if(isset($_POST['createEntryOfPending'])){


        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        //$gender = "male";
        $email = $_POST["email"];
        $password = $_POST["password"];
        $course = $_POST["course"];
        $feesPayingNow = $_POST["feesPayingNow"];


        echo "gender = ".$gender;

        

    }

?>