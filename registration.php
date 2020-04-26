<?php 

    session_start();
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <br><br><br>

    <div class="container">
        <div class="row">
           
            <div class="col-md-6 col-md-offset-3">
               
                <?php if(isset($_SESSION['error_msg'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Error !! </strong> <?php echo $_SESSION['error_msg']; ?>
                </div>
                <?php } ?>
               
                <h2> Create an account </h2>

                <form action="confirmRegistration.php" method="post">
                    <div class="form-group">
                        <label for="Name"> Name : </label>
                        <input required type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    
                      <div class="form-group">
                        <label for="Email"> Email : </label>
                        <input required type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="Password"> Password : </label>
                        <input required type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    
                    <div class="form-group">
                        <label for="Confirm Password"> Confirm Password : </label>
                        <input required type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button> Already have an account 
                    <a class="btn btn-link" href="login.php"> Login </a>
                </form>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['error_msg']); ?>