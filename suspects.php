<?php
include("includes/header.php");

$username = $userLoggedIn->getUsername();
$usernamestring = strval($username);
$currentPick;
$singlequote = "'";

$sql = "SELECT id, forename, surname, alive, guilt, votes FROM suspects";
$sql2 = "SELECT currentPick FROM detectives WHERE username = $username";




$result2 = $conn->query("SELECT currentPick FROM detectives WHERE username='$username' LIMIT 1");
while($row2 = $result2->fetch_assoc()) {
    echo "current pick is ".$row2['currentPick'];
    $currentPick = $row2['currentPick'];
};




$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "Suspects:<br>";
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$row["alive"]." + ".$row["guilt"]." votes=".$row["votes"]."<br>";
                        // test vote button
                        echo "<button class='button' onclick=".$singlequote."vote(";
                        echo $row['id'].",";
                        echo $currentPick.",";
                        echo "\"".$usernamestring."\"";
                        echo ")'>".'VOTE'."</button><hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



document.write("<td width='74'><button id='button' type='button' onclick='myfunction(\""+ name + "\")'>click</button></td>")
