<?php
$conn = new mysqli('localhost', 'biqarar', 'BiqararMysql@#^*&#%_Khadije', 'khadije_log');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
}
else{
    echo "conn successful";
}
$sql = 'TRUNCATE TABLE visitors';
$result = $conn->query($sql);
while($row = $result->fetch_array()){
    echo $row['app_ref_person_submitted_by'];
}

// $sql = 'TRUNCATE TABLE apilog';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE dayevent';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE export';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE logs';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE sessions';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE telegrams';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE urls';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }

// $sql = 'TRUNCATE TABLE visitors';
// $result = $conn->query($sql);
// while($row = $result->fetch_array()){
//     echo $row['app_ref_person_submitted_by'];
// }


$conn-> close();