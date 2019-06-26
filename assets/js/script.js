function lifeToggle(suspect) {
    $.post("includes/handlers/ajax/lifeToggle.php", { suspect: suspect})
    window.location.reload();
}

function guiltToggle(suspect) {
    $.post("includes/handlers/ajax/guiltToggle.php", { suspect: suspect})
    window.location.reload();
}