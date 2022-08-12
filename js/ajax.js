$(document).ready(function () {
    $("#add").on("click", function () {
        $.ajaxSetup({
            url: "text.txt",
            async: false,
            success: function (result) {
                alert("AJAX 請求成功");
                $("#text").html(result);
            },
            error: function () {
                alert("AJAX 請求失敗");
            },
            complete: function () {
                alert("AJAX 執行");
            },
            beforeSend: function () {
                alert("AJAX 開始執行");
            },
        })
        $.ajax();
    });
});