$(document).ready(function () {
    $(document).ajaxStart(function(){
        alert("AJAX 請求開始");
        console.log("Start");
    });
    $(document).ajaxSend(function(){
        alert("AJAX 請求中");
        console.log("Send");
    });
    $(document).ajaxSuccess(function(){
        alert("AJAX 請求成功");
        console.log("Success");
    });
    $(document).ajaxError(function(){
        alert("AJAX 請求錯誤");
        console.log("Error");
    });
    $(document).ajaxComplete(function(){
        alert("AJAX 執行");
        console.log("Complete");
    });
    $(document).ajaxStop(function(){
        alert("AJAX 請求結束");
        console.log("Stop");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});