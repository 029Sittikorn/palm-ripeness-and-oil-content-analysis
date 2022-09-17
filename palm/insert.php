

<?php 
    session_start();
    include('config/server.php');

    
   /*  $conn = mysqli_connect("localhost","root","","palmoil"); */

    if(isset($_POST['insert'])){
        $uname = $_POST['uname'];
        $avg_level = $_POST['avg_level'];
        $oil_content = $_POST['oil_content'];
        $palm_quality = $_POST['palm_quality'];
        $not_fully_ripe = $_POST['not_fully_ripe'];
        $wet = $_POST['wet'];
        $small = $_POST['small'];
        $long_stem = $_POST['long_stem'];
        $impurity = $_POST['impurity'];
        $rotten = $_POST['rotten'];
        $fall = $_POST['fall'];
        $return_record = $_POST['return_record'];

        /* $query = "INSERT INTO purchase(uname, avg_level, oil_content, palm_quality, not_fully_ripe, wet, small, long_stem, impurity, rotten, fall, return_record) VALUES('$uname','$avg_level','$oil_content','$palm_quality','$not_fully_ripe','$wet','$small','$long_stem','$impurity','$rotten','$fall','$return_record')";

        $query_run = mysqli_query($conn, $query); */

        $sql = $db->prepare("INSERT INTO purchase (uname, avg_level, oil_content, palm_quality, not_fully_ripe, wet, small, impurity, rotten, fall, return_record) 
        VALUES(:uname,:avg_level,:oil_content,:palm_quality,:not_fully_ripe,:wet,:small,:impurity,:rotten,:fall,:return_record)");
        $sql->bindParam(':uname', $uname);
        $sql->bindParam(':avg_level', $avg_level);
        $sql->bindParam(':oil_content', $oil_content);
        $sql->bindParam(':palm_quality', $palm_quality);
        $sql->bindParam(':not_fully_ripe', $not_fully_ripe);
        $sql->bindParam(':wet', $wet);
        $sql->bindParam(':small', $small);
        $sql->bindParam(':impurity', $impurity);
        $sql->bindParam(':rotten', $rotten);
        $sql->bindParam(':fall', $fall);
        $sql->bindParam(':return_record', $return_record);
        $sql->execute(); 

        if ($sql) {
            $_SESSION['success'] = "Data has been inserted successfully";
            header('location : result.php');

        } else {
            $_SESSION['error'] = "Data has not been inserted successfully";
            header('location : result.php');
        }
    }
?>