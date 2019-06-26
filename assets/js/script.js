function lifeToggle(suspect) {
    $.post("includes/handlers/ajax/lifeToggle.php", { suspect: suspect})
    window.location.reload();
}