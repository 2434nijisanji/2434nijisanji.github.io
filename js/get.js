$(document).ready(function(){
    $("button").click(function(){
        $.get("text.txt",function(data,status){
            alert("數據：" + data + "\n狀態：" + status);
        });
    });
});