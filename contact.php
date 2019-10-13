<?
require "top.php";
$titlepage = 'Contact page';
require "header.php";


?>

<div style='color:gray;class='container-fluid'>
<div class='row'>
<div style='margin-top:6em;margin-bottom:5em;' class='col-12 text-center'>
<h2 >Tell us something</h2>
</div>
</div>
<div class='row'>
<div class='col-6 text-center'>
<form method='post'class="form-horizontal" action="processcontact.php">
          <div class="form-group">
    <label class="control-label" for="name">Name:</label>
    
      <input style='background: #d9d9d9;color:gray;' type="text" class="form-control" name='name' id="name" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label class="control-label" for="email">Email:</label><input style='background: #d9d9d9;color:gray;' type="email" class="form-control" name='email' id="email" placeholder="Enter email">
    </div>
  
<div class='form-group'><label class="control-label" for='descp'>Enter Message :</label><br /><textarea style='background: #d9d9d9;color:gray;' cols='20' rows='10' name='message'></textarea><br></div>
<?
require "Robochhr.php";
?>

  <div class="form-group"> 
    
      <button style='border:1px solid #d9d9d9;color:gray;' type="submit" class="btn btn-outline textcenter">Send Message</button></div>
    
</form>

</div>




<div style='border-right:dotted 1px #6287A2;color:white;' class='col-6 text-center headimg'><h2 contenteditable="true"></h2><h4 contenteditable="true"></h4>
</div>

</div>


  <?
require "footer.php";
?>         
</div><!container>

<?
require "bootstrapbottom.php";
?>
