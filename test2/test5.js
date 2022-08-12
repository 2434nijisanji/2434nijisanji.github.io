$(document).ready(function () {
    // $("#text").ajaxError(function(){
    //     alert("发生错误！");
    //     console.log("123");
    // });
    $(document).ajaxComplete(function(){
        //最後出現
        $("#box").css("background-color","success");
        alert("AJAX 執行");
        console.log("123");
    });
    $(document).ajaxStart(function(){
        $("#box").css("background-color","danger");
        console.log("123");
    });
    $(document).ajaxSuccess(function(){
        //請求成功會先出現
        alert("AJAX 請求成功");
        console.log("123");
    });
    $(document).ajaxSend(function(e,xhr,opt){
        $(this).html("正在请求：" + opt.url);
        alert("AJAX 請求中");
    });
    // $.ajaxSetup({
    //     global: false,
    // });
    $("#color").on("click", function () {
        // $.ajax({
        //     url: "text.txt",
            // success: function(){
            //     alert("AJAX 請求成功");
            //     console.log("123");
            // },
            // error: function (){
            //     alert("AJAX 請求失敗");
            //     console.log("123");
            // },
            // complete: function(){
            //     alert("AJAX 執行");
            //     console.log("123");
            // },
            // beforeSend: function(){
            //     $("#box").css("background-color","danger");
            //     alert("AJAX 開始執行");
            //     console.log("123");
            // },
        // });
        $("#text").load("text.txt");
        $("#text2").load("text2.txt");
    });
});