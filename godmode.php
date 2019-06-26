<?php
include("includes/header.php");

$sql = "SELECT id, forename, surname, alive, guilt FROM suspects";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "Suspects:<br>";

    while($row = $result->fetch_assoc()) {
        // convert booleans to readable strings
        $aliveString = ($row["alive"]) ? 'alive' : 'dead';
        $guiltString = ($row["guilt"]) ? 'guilty' : 'innocent';
        // display suspect
        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$aliveString." + ". $guiltString;
        // kill/rez button
        echo "<br><button class='button' onclick='lifeToggle(";
        $buttonLabel = ($row["alive"]) ? 'KILL' : 'RESURRECT';
        echo $row['id'].")'>".$buttonLabel."</button>";
        // acquit/implicate button
        echo "<button class='button' onclick='guiltToggle(";
        $guiltLabel = ($row['guilt']) ? 'ACQUIT' : 'IMPLICATE';
        echo $row['id'].")'>".$guiltLabel."</button><br>";
        }
} else {
    echo "0 results";
}
$conn->close();
?>