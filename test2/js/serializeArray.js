$(document).ready(function(){
    $("button").click(function(){
        $.each($("form").serializeArray(), function(i, field){
            $("#results").append(field.name + ":" + field.value + " ");
        });
    });
});