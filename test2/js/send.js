$(document).ready(function () {
    $(document).ajaxSend(function(){
        alert("AJAX 請求中");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});