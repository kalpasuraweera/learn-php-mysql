<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donets</title>
</head>
<body>
    <h1>Check Your Results</h1>
    <form action="" method="get">
        <input type="text" name="st_id" placeholder="Your Student ID">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    
    require_once "db.php";
    if(isset($_GET['submit'])){
        $stId= $_GET['st_id'];
        $sql= "SELECT * FROM results WHERE st_id='$stId';";
        $query= mysqli_query($conn, $sql);
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            echo "Your Result is -> ".$row['result'];
        }else{
            echo "Wrong Student ID";
        }
        
        switch($row['result']){
         case "A":
            echo "Excellent";
            break;
        case "B":
            echo "Good. Keep on working";
            break;
        case "C":
            echo "Good. Need some improvement";
            break;
        case "S":
            echo "Work hard to improve your result";
            break;
        case "F":
            echo "Work hard";
            break;


        }
    }

?>
</body>
</html>
