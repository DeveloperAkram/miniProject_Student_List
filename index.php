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
                <a class="btn btn-info" href="insert.php">New Student</a> <br><br>
                <a href="logout.php" class="btn btn-warning pull-right"> Logout </a>
            </div>
            <div class="col" -md-9>
                <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <strong>Success !! </strong> Added successfully
                </div>
                <?php } ?>

                <h2>Student List </h2>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Roll</th>
                        <th>Actions</th>
                    </thead>

                    <tbody>

                        <?php
                   
                       while($row = mysqli_fetch_assoc($result)){ ?>

                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['age']?></td>
                            <td><?php echo $row['roll']?></td>
                            <td>
                                <a class="btn btn-info" href="show.php?id=<?=$row['id']?>"> View </a>
                                <a href="edit.php?id=<?=$row['id']?>" class="btn btn-primary"> Edit </a>
                                <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"> Delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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

<?php unset($_SESSION['success']); ?>
