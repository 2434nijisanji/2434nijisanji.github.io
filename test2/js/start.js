$(document).ready(function () {
    $(document).ajaxStart(function(){
        alert("AJAX 請求開始");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});