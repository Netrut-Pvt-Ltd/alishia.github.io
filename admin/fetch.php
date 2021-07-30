<?php  
session_start();
require('db.php');

if($_SESSION['loggedin'] == true){

}else{
	header("location:login.php");
}


$query  = "SELECT * from requirements";
$result = mysqli_query($db,$query);
     
$data=[];
while($response=mysqli_fetch_assoc($result)){
    $data[]=$response;
    
}

?>


<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>SN</th>
								<th>Position</th>
								<th>Product</th>
								<th>Location</th>
								
								<th>Industry</th>
								
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>SN</th>
								<th>Position</th>
								<th>Product</th>

								<th>Location</th>
								<th>Industry</th>
								
							</tr>
						</tfoot>
						<?php 
						foreach($data as $value){
						?>
						<tbody>
							<tr>
								<td>1</td>
								<td><?= $value['position']; ?></td>
								<td><?= $value['product']; ?></td>
								<td><?= $value['location']; ?></td>
								
								<td><?= $value['industry']; ?></td>
								
								
								<td><button style="color:white;" id="<?= $value['id']; ?>" onclick="return approve(<?= $value['id']; ?>);" type="button" class="btn btn-xs waves-effect waves-light <?php if($value['approve'] == 1){echo "bg-warning";}else{echo "btn-info";} ?>"><?php  if($value['approve'] == 1){echo "Disapprove";}else{echo "Approve";} ?></button></td>
								<td><button onclick="return viewD(<?= $value['id']; ?>)" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="#<?= $value['id']; ?>">View</button></td>
								<td><a href="edit_req.php?id=<?= $value['id']; ?>" class="btn btn-violet btn-xs waves-effect waves-light">Edit</a></td>
								
								<td><button id="<?= $value['id']; ?>" onclick="return deleteValidation(<?= $value['id']; ?>)" type="button" class="btn  btn-danger btn-xs waves-effect waves-light">Delete</button></td>
							</tr>
							
						</tbody>

						<?php } ?>
						
					</table>