$(document).ready(function () {
    $(document).ajaxError(function(){
        alert("AJAX 請求錯誤");
    });
    $("#add").on("click", function () {
        $("#text").load("text.html");
    });
});