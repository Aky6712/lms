<?php
include('dbcon.php');
        
              // $un = $_POST['un'];
              $class_id = $_POST['class_id'];
              $tdate = $_POST['tdate'];
               $fname = $_POST['fname'];
               $lname = $_POST['lname'];
               $phonenum = $_POST['phonenum'];
               $cost = $_POST['cost'];
               $fdate = $_POST['fdate'];
               $note = $_POST['note'];

               mysqli_query($conn,"insert into followup (todaydate,firstname,lastname,mobile,class_id,price,textnote,followupdate,status)
		values ('$tdate','$fname','$lname','$phonenum','$class_id','$cost','$note','$fdate','0')                                    
		") or die(mysqli_error()); ?>
<?php    ?>