<?php 

 session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
    
    $id = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','20104030','stucrud');
    $sql = "SELECT *FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    $std = mysqli_fetch_assoc($result);
    
    
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
                <a class="btn btn-info" href="index.php">Students</a>
            </div>
            <div class="col" -md-9>
                <h2>Student Information </h2>
                <table class="table">
                    <tr>
                        <th width="100" class="text-right"> Name : </th>
                        <td> <?php echo $std['name']; ?> </td>
                    </tr>
                    <tr>
                        <th class="text-right"> Age : </th>
                        <td> <?php echo $std['age']; ?> </td>
                    </tr>
                    <tr>
                        <th class="text-right"> Roll : </th>
                        <td> <?php echo $std['roll']; ?> </td>
                    </tr>
                    <tr>
                        <th class="text-right"> Address : </th>
                        <td> <?php echo $std['address']; ?> </td>
                    </tr>
                    <tr>
                        <th class="text-right"> Mobile : </th>
                        <td> <?php echo $std['mobile']; ?> </td>
                    </tr>
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
