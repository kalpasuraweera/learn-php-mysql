<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donets</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <form action="" method="post">
        <input type="text" name="st_id" placeholder="Student ID">
        <input type="text" name="st_result" placeholder="Student Result">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
 require_once "db.php";
 if(isset($_POST['submit'])){
    $stId=$_POST['st_id'];
    $stResult= $_POST['st_result'];
    $sql= "INSERT INTO results (st_id,result) VALUES ('$stId','$stResult');";
    $result= mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Result Added')</script>";
    }
 }
    ?>
</body>
</html>