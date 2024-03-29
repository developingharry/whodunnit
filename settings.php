<?php  
include("includes/includedFiles.php");
?>

<div class="entityInfo">

	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getUsername(); ?></h1>
		</div>
	</div>

    <div class="userDetails">

        <div class="container borderBottom">
            <h2>UPDATE EMAIL</h2>
            <input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
            <span class="message"></span>
            <button class="button" onclick="updateEmail('email')">SAVE</button>
        </div>
    
        <div class="container">
            <h2>CHANGE PASSWORD</h2>
            <input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">
            <input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
            <input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
            <span class="message"></span>
            <button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
        </div>
    
    </div>

	<div class="buttonItems">
		<button class="button" onclick="logout()">LOGOUT</button>
	</div>

</div>