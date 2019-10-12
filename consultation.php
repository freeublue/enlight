<?
require "top.php";
$titlepage = 'Enlightenment Home Page';
require "header.php";


?>

<div class='container-fluid'>
<div class='row'>
<div class='col-12 text-center'><h2 style='margin-top:150px;color:gray;'>Enlightenment</h2><h4 class='text-center'>Graphic Design/Typesetting/Photography</h4>
</div>
</div>
<div class='row' style='margin-top:2em;'>
<div class='col-4'><h2>Photography</h2><p class='wow fadeInDown'>Availiable for weddings, birthdays and more. Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>
<div class='col-4'><h2>Typesetting</h2><p class='wow fadeInDown'>Get your book started. Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>
<div class='col-4'><h2>Graphic Design</h2><p class='wow fadeInDown'>Creative logic. Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
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