<?php
$conn = new mysqli('localhost', 'biqarar', 'BiqararMysql@#^*&#%_Khadije', 'khadije');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
}
else{
    echo "conn successful";
}
$sql = "TRUNCATE TABLE `logs`";

$result = $conn->query($sql);

while($row = $result->fetch_array()){
    echo $row['app_ref_person_submitted_by'];
}

var_dump($result);

$conn-> close();