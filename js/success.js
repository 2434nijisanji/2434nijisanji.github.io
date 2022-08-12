$(document).ready(function () {
    $(document).ajaxSuccess(function(){
        alert("AJAX 請求成功");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});