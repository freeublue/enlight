<?
require "top.php";
$titlepage = 'Enlightenment Home Page';
require "header.php";


?>

<div class='container-fluid'>
<div class='row'>
<div class='col-12 text-center'><h2 style='margin-top:150px;color:gray;'>Projects</h2>
</div>
</div>


<div class='row'>
<div class='col-6 text-center'><h2 style='margin-top:1em;color:gray;'>Eye of the Leopard</h2><h4>Beverly and Dereck Joubert</h4><p class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>
<div class='col-6 text-center'><img src='bookcover.jpg' />
</div>
</div>


<div class='row'>
<div class='col-12 text-center wow fadeInDown'><h2 style='margin-top:1em;color:gray;'>Details</h2>
</div>
</div>
<div  class='row'>


<div id='imghead1' class='col-6 text-center wow fadeInRight'>
</div>
<div id='imghead2' class='col-6 text-center wow fadeInLeft'>
</div>
</div>


<div class='row'>
<div id='imghead3' class='col-12 text-center'>
</div>
</div>


<div class='row'>
<div class='col-12 text-center wow fadeInDown'><h2 style='margin-top:1em;color:gray;'>Coffee Table Books</h2>
</div>
</div>
<div class='row'>
<div class='col-6'><img class='img-fluid' src='ele.jpg' />
</div>
<div class='col-6 text-center'><h2 style='margin-top:1em;color:gray;'>Elephant in the Kitchen</h2><h4>Beverly and Dereck Joubert</h4><p>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.</p>
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