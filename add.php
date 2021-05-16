
<?php

  if(isset($_POST['addtostudent'])){

      $name = $_POST['studentname'];
      $email = $_POST['studentemail'];
      $password = $_POST['studentpassword'];
      $username = $_POST['studentusername'];


      if($name == trim($name) && strpos($name, ' ') !== false){
          //echo"string contains space";
          $fullName = explode(" ",$name);
      }
      else{
          //echo "not a space ";
          $fullName[0] = $name;
          $fullName[1] = "";
      }
      


      

      //echo "name = ".$name."</br>email = ".$email."</br>password = ".$password."</br>username = ".$username;



  }
  else{

    $fullName[0]="";
    $fullName[1]="";
    $email = "";
    $password ="";
    $username ="";


  }

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


     <!-- Header  -->
     <div class="card text-left">
        <div class="card-header">
        
            <ul class="nav nav-pills card-header-pills">
            
                <div>
                    <h3>Refer Bussiness Web Application</h3>
                </div>
            
                <div style="padding-right: 40px;"></div>

                <li>
                    <a class="nav-link" href="home.html">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Add</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="viewpending.php">View pending list</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="">View Referred List </a>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                </li> -->

            </ul>
        </div>

    </div>


    <!-- form to add student -->
    <div style="padding-top: 20px; padding-left: 30px; padding-right: 720px; ">

        <form action="createEntry.php" method="POST">
        
            <div class="form-group">
              <label for="first-name">First Name</label>
              <?php echo "<input type='text' name='fname' id='fname' class='form-control' value='$fullName[0]' placeholder='Enter First Name' aria-describedby='helpId'/>"; ?>
            </div>
    
            <div class="form-group">
              <label for="last-name">Last Name</label>
              <?php echo "<input type='text' name='lname' id='lname' class='form-control' value='$fullName[1]' placeholder='Enter Last Name' aria-describedby='helpId'/>"; ?>
            </div>

            <!-- gender  -->
            <label for="gender">Select Gender</label>
            <div class="form-check">
                <input class="form-control-input" type="radio" name="gender" value="male" id="male" checked>
                <label class="form-control-label" for="male">Male</label>
            </div>

            <div class="form-check">
                <input class="form-control-input" type="radio" name="gender" value="female" id="female" >
                <label class="form-control-label" for="female">Female</label>
            </div>
            
            <div class="form-group">
              <label for="email">Enter Email</label>
              <?php echo"<input type='email' name='email' id='email' value='$email' class='form-control' placeholder='Enter Email Address' aria-describedby='helpId'>"; ?>
            </div>

            <div class="form-group">
                <label for="username">Enter Username</label>
                <?php echo "<input type='text' name='username' id='username' value='$username' class='form-control' placeholder='Enter User Name' aria-describedby='helpId'>"; ?>
            </div>
            
            <div class="form-group">
              <label for="passord">Enter password</label>
              <?php echo "<input type='password' class='form-control' name='password' id='password' value='$password' placeholder='Enter password'/>"  ?>
            </div>


            
            <!-- dropdown menu -->
            <div class="dropdown open" style="padding-bottom : 20px; padding-right: 400px;">
                <label for="course">Select Course</label>
                <select class="custom-select" name="course" id="course">
                    <option selected>Select</option>
                    <option value="MSCIT">MSCIT</option>
                    <option value="tally">Tally</option>
                    <option value="advanced-tally">Advanced Tally</option>
                    <option value="typing">typing</option>
                    <option value="tallywithmscit">MSCIT WITH Tally</option>
                  </select>
            </div>
            
             <div class="form-group" style="padding-bottom : 20px; padding-right: 200px;">
               <label for="">Fess Paying Now</label>
               <input type="number" class="form-control" name="feesPayingNow" id="feesPayingNow" placeholder="Enter the amount of fessing paying now"/>
             </div> 

            <button type="submit" class="btn btn-primary" name="createEntry" id="createEntry">Submit</button>

        </form>

    </div>
    


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>