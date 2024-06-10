$(document).ready(function() {
    $("#name-field").keypress(function() {
        var name = $(this).val()
        console.log(name);
    })
})