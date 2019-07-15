<?php
include("includes/header.php");

$username = $userLoggedIn->getUsername();
$usernamestring = strval($username);
$currentPick;
$singlequote = "'";

$sql = "SELECT id, forename, surname, alive, guilt, votes FROM suspects";


$result2 = $mysqli->query("SELECT currentPick FROM detectives WHERE username='$username' LIMIT 1");
while($row2 = $result2->fetch_assoc()) {
    echo "current pick is ".$row2['currentPick'];
    $currentPick = $row2['currentPick'];
};

$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "Suspects:<br>";
    while($row = $result->fetch_assoc()) {
        $guiltString = strval($row["guilt"]);
        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$row["alive"]." + ".$row["guilt"]." votes=".$row["votes"]."<br>";
                        // vote button
                        echo "<button class='button' onclick=".$singlequote."vote(";
                        echo $row['id'].",";
                        echo $currentPick.",";
                        echo "\"".$usernamestring."\",\"".$guiltString."\"";
                        echo ")'";
                        if ($row['id'] == $currentPick) {
                            echo "disabled>CURRENT PICK";
                        } else {
                            echo ">".'VOTE';
                        }
                        echo "</button><hr>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>