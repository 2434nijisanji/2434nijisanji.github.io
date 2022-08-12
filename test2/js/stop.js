$(document).ready(function () {
    $(document).ajaxStop(function(){
        alert("AJAX 請求結束");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});