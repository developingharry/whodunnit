var timer;

function lifeToggle(suspect) {
    $.post("includes/handlers/ajax/lifeToggle.php", { suspect: suspect});
    window.location.reload();
}

function guiltToggle(suspect) {
    $.post("includes/handlers/ajax/guiltToggle.php", { suspect: suspect});
    window.location.reload();
}

function vote(suspect,currentPick,username) {
    $.post("includes/handlers/ajax/vote.php", { suspect: suspect, currentPick: currentPick, username: username});
    window.location.reload();
}

function openPage(url) {

	if(timer != null) {
		clearTimeout(timer);
	}

	if(url.indexOf("?") == -1) {
		url = url + "?";
	}

	var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
	console.log(encodedUrl);
	$("#mainContent").load(encodedUrl);
	$("body").scrollTop(0);
	history.pushState(null, null, url);
}

function updateEmail(emailClass) {
	var emailValue = $("." + emailClass).val();

	$.post("includes/handlers/ajax/updateEmail.php", { email: emailValue, username: userLoggedIn})
	.done(function(response) {
		$("." + emailClass).nextAll(".message").text(response);
	})


}

function updatePassword(oldPasswordClass, newPasswordClass1, newPasswordClass2) {
	var oldPassword = $("." + oldPasswordClass).val();
	var newPassword1 = $("." + newPasswordClass1).val();
	var newPassword2 = $("." + newPasswordClass2).val();

	$.post("includes/handlers/ajax/updatePassword.php", 
		{ oldPassword: oldPassword,
			newPassword1: newPassword1,
			newPassword2: newPassword2, 
			username: userLoggedIn})

	.done(function(response) {
		$("." + oldPasswordClass).nextAll(".message").text(response);
	})


}

function logout() {
	$.post("includes/handlers/ajax/logout.php", function() {
		location.reload();
	});
}