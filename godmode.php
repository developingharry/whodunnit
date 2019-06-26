<?php
include("includes/header.php");

$sql = "SELECT id, forename, surname, alive, guilt FROM suspects";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "Suspects:<br>";

    while($row = $result->fetch_assoc()) {
        $aliveString = ($row["alive"]) ? 'alive' : 'dead';
        $guiltString = ($row["guilt"]) ? 'guilty' : 'innocent';
        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$aliveString." + ". $guiltString;
        echo " <button class='button' onclick='lifeToggle(";
        $buttonLabel = ($row["alive"]) ? 'KILL' : 'RESURRECT';
        echo $row['id'].")'>".$buttonLabel."</button><br>";
        $guiltLabel = ($row['guilt']) ? 'ACQUIT' : 'IMPLICATE';
        }
} else {
    echo "0 results";
}
$conn->close();
?>