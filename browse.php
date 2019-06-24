<?php 
include("includes/includedFiles.php"); 
?>

<div class="gridViewContainer">
	<?php
		$detectiveQuery = mysqli_query($con, "SELECT * FROM detectives ORDER BY RAND() LIMIT 10");
		while($row = mysqli_fetch_array($detectiveQuery)) {
			echo $detectiveQuery['username'];
		}
	?>

</div>