<?
require "top.php";
$titlepage = 'Enlightenment, Typesetting, Graphic Design, Photography';
require "header.php";


?>
<script>
var i = 0;
var txt = 'Enlightenment';
var speed = 250;

function type() {
  if (i < txt.length) {
    document.getElementById("headt").innerHTML += txt.charAt(i);
    i++;
    setTimeout(type, speed);
  }
}
</script>
<div class='container-fluid'>
<div class='row'>
<div class='col-12 headimg text-center'><h2 style='margin-top:550px;color:white;' id='headt'></h2><h4 class='text-center'>Graphic Design/Typesetting/Photography</h4><p class='text-center'><a href='https://m.facebook.com/572676096087513'><i class='fab fa-facebook-f fa-1x' style='color:white;'></i></a></p><p>Sarah Rachman</p>
</div>
</div>

  <?
require "footer.php";
?>         
</div><!container>

<?
require "bootstrapbottom.php";
?>
<script src='wow.js'></script>
<script>
new WOW().init();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

<script>

var mail;
var nam;
function showmail() { 
$.ajaxSetup({ cache: false });
$("#resultsx").show();
var nam = document.mailform.nam.value;
var mail = document.mailform.mail.value;
var url = "addmail.php?nam="+nam+"&&mail="+mail;
$('#resultsx').load(url);
} 
</script>
<script>

var pval;

function menushow(pval) { 
$.ajaxSetup({ cache: false });
$(".submenu").show();

var url = "submenu.php?me="+pval;
$('.submenu').load(url);
} 
</script>