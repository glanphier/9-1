<!DOCTYPE html>
<html lang="en">
<?php 
    require "dbConnect.php";  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM wdv341_events WHERE presenter='Jeff Gullion';";
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require "Event.php";
    $outputObj = new Event();


    while($row = $stmt->fetch()) {
        $outputObj->set_id($row['id']);
        $outputObj->set_name($row['name']);
        $outputObj->set_description($row['description']);
        $outputObj->set_presenter($row['presenter']);
        $outputObj->set_date($row['date']);
        $outputObj->set_time($row['time']);
    }

    $outputObj = json_encode($outputObj);
    echo($outputObj);
    ?>
</body>
</html>