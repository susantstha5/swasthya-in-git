/**
 * Created by lx on 10/6/2017.
 */
$('#content_sec').load('includes/userprofile/_accinfo.php');

$('button#accinfo').click(function () {
    $.ajax({
        url:"includes/userprofile/_accinfo.php",
        datatype:"text",
        success:function (data) {
            $("#content_sec").html(data);
        }
    });
})
;$('button#ordhis').click(function () {
    $.ajax({
        url:"includes/userprofile/_ordshis.php",
        datatype:"text",
        success:function (data) {
            $("#content_sec").html(data);
        }
    });
});$('button#uplpres').click(function () {
    $.ajax({
        url:"includes/userprofile/_uplpres.php",
        datatype:"text",
        success:function (data) {
            $("#content_sec").html(data);
        }
    });
});
