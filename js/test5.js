$(document).ready(function () {
    $(document).ajaxError(function(){
        alert("AJAX 請求錯誤");
        console.log("123");
    });
    $(document).ajaxComplete(function(){
        //最後出現
        alert("AJAX 執行");
        console.log("123");
    });
    $(document).ajaxStart(function(){
        alert("AJAX 請求開始");
        console.log("123");
    });
    $(document).ajaxSuccess(function(){
        //請求成功會先出現
        alert("AJAX 請求成功");
        console.log("123");
    });
    $(document).ajaxSend(function(){
        alert("AJAX 請求中");
    });
    $("#add").on("click", function () {
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});