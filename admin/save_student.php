<?php


include('dbcon.php');
        
    //           $un = $_POST['un'];
    //            $fn = $_POST['fn'];
    //            $ln = $_POST['ln'];
    //            $class_id = $_POST['class_id'];
    //            $gender = $_POST['gender'];
    //     $dob = $_POST['dob'];
    //     $mobile = $_POST['mobile'];
    //     $address = $_POST['address'];
    //     $city = $_POST['city'];
    //     $pin_code = $_POST['pin_code'];
    //     $state = $_POST['state'];
    //     $batch_timing = $_POST['batch_timing'];
    //     $batch_days = $_POST['batch_days'];
    //     $addoneby = $_POST['status'];

    //            mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status)
	//  values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
	// 	") or die(mysqli_error());
        



        $un = $_POST['un'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $class_id = $_POST['class_id'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pin_code = $_POST['pin_code'];
        $state = $_POST['state'];
        $batch_timing = $_POST['batch_timing'];
        $batch_days = $_POST['batch_days'];
        $addoneby = $_POST['status'];


        // from the Course price variables have to add in the database  



        //mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status) values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')") or die(mysqli_error());


// Insert the data into the database
mysqli_query($conn,"insert into student (username, firstname, lastname, location, class_id, status, gender, dob, mobile, address, city, pin_code, state, batch_timing, batch_days) 
          VALUES ('$un', '$fn', '$ln', 'uploads/NO-IMAGE-AVAILABLE.jpg', '$class_id', '$addoneby', '$gender', '$dob', '$mobile', '$address', '$city', '$pin_code', '$state', '$batch_timing', '$batch_days')") or die(mysqli_error());

$result = mysqli_query($conn, $mysqli_query);

// Check if the insertion was successful
if ($result) {
    // You can redirect the user or display a success message
    echo "Student added successfully";
} else {
    // If there's an error, you can display an error message
    echo "Error: " . mysqli_error($conn);
}

?>