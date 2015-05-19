$(function() {
$(".submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var subject = $("#subject").val();
var message = $("#message").val();
var dataString = 'name='+ name + '&email=' + email + '&subject=' + subject + '&message=' + message;

if(name=='' || email=='' || subject=='' || message=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "form.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});