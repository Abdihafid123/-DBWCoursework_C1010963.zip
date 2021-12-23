 



<div class="container pb-5">
<main Prod="main" class="pb-3">
<h2>View Users</h2><br>
<div class="row">
<div class="col-10">
<table class="table table-striped">
<thead class="table-dark">
<td>User ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Date of Birth</td>
<td>Postcode</td>
<td>Contact</td>
<td>Product</td>

</thead>

<?php include("NavBar.php"); 
for ($i=0; $i=($user); $i++):
?>
<tr>
<td><?php echo $user[$i]['userId']?></td>
<td><?php echo $user[$i]['firstName']?></td>
<td><?php echo $user[$i]['lastName']?></td>
<td><?php echo $user[$i]['DOB']?></td>
<td><?php echo $user[$i]['PC']?></td>
<td><?php echo $user[$i]['CNum']?></td>
<td><?php echo $user[$i]['Prod']?></td>
</tr>
<?php endfor;?>
</table>
</div>
</div>


 </main>
</div>


<?php require("Footer.php");?>

<?php if(isset($_GET['deleted'])): ?>
<div class="alert alert-danger alert-dismissible fade show 
col-10" Prod="alert" style="font-weight: bold;">
 The user has been deleted
<button type="button" class="close" datadismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; 