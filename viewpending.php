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
                    <a class="nav-link" href="add.html">Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="viewpending.php">View pending list</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="viewreferred.php" >View Referred List </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                </li> -->

            </ul>
        </div>

    </div>

    <!-- show the pending list with add button at end -->
    <div style="padding-top : 60px; padding-left:20px; padding-right : 120px;">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Refered By</th>
                    <th></th>
                </tr>
            </thead>
            <?php 
            
            include("includes/dbconfig.php");

            $collection = ""
            
            ?>
            <tbody>
                <tr>
                    <td scope="row">dummy</td>
                    <td>dummer</td>
                    <td> <button type="submit" class="btn btn-primary">add</button> </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <?php 
            

            ?>

        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>