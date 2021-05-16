<?php 

    include("includes/dbconfig.php");

    if(isset($_POST["createEntry"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        // $gender = "male";
        $email = $_POST["email"];
        $username = $_POST["username"]
        $password = $_POST["password"];
        $course = $_POST["course"];
        $feesPayingNow = $_POST["feesPayingNow"];

        echo "1.".$fname."\n2.".$lname."\n3.".$gender."\n4.".$email."\n5.".$password."\n6.".$course."\n7.".$feesPayingNow;

        $collection = "student/";

        $totalFees = 0;
        if($course=="MSCIT"){
            $totalFees = 4500;
        }
        elseif($course=="Tally") {
            $totalFees = 7000;
        }
        elseif($course=="advanced-tally"){
            $totalFees = 16000;
        }
        elseif($course=="typing"){
            $totalFees = 3600;
        }
        elseif($course=="tallywithmscit"){
            $totalFees = 10500;
        }

        $remainingFees = $totalFees - $feesPayingNow;

        $data = [
            'firstname' => $fname,
            'lname' => $lname,
            'gender' => $gender,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'course' => $course,
            'totalfees' => $totalFees,
            'totalfeespaid' =>  $feesPayingNow,
            'remainingFees' => $remainingFees
        ];

        try{
            $createEntry = $database-> getReference($collection)-> push($data);
        }catch(exception $e){
            echo "Error! something went wrong ...";
        }
       
    }


?>