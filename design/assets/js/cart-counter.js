$(document).ready(function () {
    $count=0;
    $("#leftarrow").click(function(){
        if($count>0)
        {
            $count--;
            $("#counter").text($count);
        }
    });
    $("#leftarrow").mousedown(function(){
        $("#leftarrow").css("BoxShadow","0px 0px 0px gray");
    });
    $("#leftarrow").mouseup(function(){
        $("#leftarrow").css("BoxShadow","0px 2px 1px gray");
    });
    $("#rightarrow").click(function(){
        if($count<10)
        {
            $count++;
            $("#counter").text($count);
        }
    });
    $("#rightarrow").mousedown(function(){
        $("#rightarrow").css("BoxShadow","0px 0px 0px gray");
    });
    $("#rightarrow").mouseup(function(){
        $("#rightarrow").css("BoxShadow","0px 2px 1px gray");
    });


})
