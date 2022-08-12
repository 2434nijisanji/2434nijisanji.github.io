$(document).ready(function () {
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});