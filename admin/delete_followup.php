<?php
include('dbcon.php');
if (isset($_POST['delete_followup'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"DELETE FROM followup where followup_id='$id[$i]'");
	// mysqli_query($conn,"DELETE FROM teacher_class_student where followup_id='$id[$i]'");
}
header("location: followup.php");
}
?>