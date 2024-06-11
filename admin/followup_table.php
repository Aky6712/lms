<?php include('dbcon.php'); ?>
	<form action="delete_followup.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#followup_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<!-- <a href="followup.php">All</a> -->
				</li>
				<li class="">
					<!-- <a href="unreg_students.php">Unregistered</a> -->
				</li>
				<li class="">
				<!-- <a href="reg_students.php">Registered</a> -->
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>Phone Number</th>
			
					<th>Course Yr & Section</th>
					<th>Cost</th>
					<th>Date</th>
					<th>Follow Up on</th>
					<th>Note</th>
					
                    <th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from followup LEFT JOIN class ON followup.class_id = class.class_id ORDER BY followup.followup_id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['followup_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['mobile']; ?></td> 
	
		<td width="100"><?php echo $row['class_name']; ?></td> 
        <td><?php echo $row['price']; ?></td> 
        <td><?php echo $row['todaydate']; ?></td> 
        <td><?php echo $row['followupdate']; ?></td> 
        <td><?php echo $row['textnote']; ?></td> 
	
		<td width="30"><a href="edit_followup.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>