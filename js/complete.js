$(document).ready(function () {
    $(document).ajaxComplete(function(){
        alert("AJAX 執行");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});