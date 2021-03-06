<?php 

     session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
    
    $conn = mysqli_connect('localhost','root','20104030','stucrud');
    $sql = "SELECT *FROM students";
    $result = mysqli_query($conn, $sql);
    
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
            <div class="col-md-3">
                <a class="btn btn-info" href="index.php">Student List</a>
            </div>
            <div class="col" -md-9>
               
                <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Error !! </strong> Something Wrong
                </div>
                <?php } ?>
               
                <h2>Add New Student </h2>

                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input required type="text" class="form-control" name="name" placeholder="Student Name">
                    </div>

                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input required type="text" class="form-control" name="age" placeholder="Enter Age">
                    </div>

                    <div class="form-group">
                        <label for="Roll">Roll</label>
                        <input required type="text" class="form-control" name="roll" placeholder="Enter Roll">
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input required type="text" class="form-control" name="address" placeholder="Enter Address">
                    </div>

                    <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <input required type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
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