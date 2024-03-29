<?php
include("includes/header.php");

echo "<h1>GOD POWER PAGE</h1>";
echo "<hr>";
echo "today's date is ".$today->format('d-m-y')."<br>";
echo "end date is ".$endDate->format('d-m-y')."<br>";
echo "max available score is ".$maxAvailableScore->format('%d')."<hr>";

$sql = "SELECT id, forename, surname, alive, guilt, alivepic, deadpic, votes FROM suspects";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<h2>Suspects:</h2>";

    while($row = $result->fetch_assoc()) {
        // convert booleans to readable strings
        $aliveString = ($row["alive"]) ? 'alive' : 'dead';
        $guiltString = ($row["guilt"]) ? 'guilty' : 'innocent';
        // display suspect
        // which image to show?
        $imgUrl = ($row['alive']) ? $row['alivepic'] : $row['deadpic'];
        echo "<img src='".$imgUrl."'>";

        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$aliveString." + ". $guiltString.' - current votes:'.$row['votes'];
        // kill/rez button
        echo "<br><button class='button' onclick='lifeToggle(";
        $buttonLabel = ($row["alive"]) ? 'KILL' : 'RESURRECT';
        echo $row['id'].")'>".$buttonLabel."</button>";
        // acquit/implicate button
        echo "<button class='button' onclick='guiltToggle(";
        $guiltLabel = ($row['guilt']) ? 'ACQUIT' : 'IMPLICATE';
        echo $row['id'].")'>".$guiltLabel."</button><hr>";
        }
} else {
    echo "0 results";
}
$mysqli->close();
?>