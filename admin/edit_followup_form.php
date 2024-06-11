<div class="row-fluid">
       <a href="followup.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Follow Up</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Student Follow Up Details</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from followup LEFT JOIN class ON class.class_id = followup.class_id where followup_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="tdate" value="<?php echo $row['todaydate']; ?>" class="input focused" id="focusedInput" type="date" placeholder = "Today's date" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fname" value="<?php echo $row['firstname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="lname" value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input name="phonenum" value="<?php echo $row['mobile']; ?>" class="input focused" id="focusedInput" type="number" placeholder = "Phone Number" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input name="cost" value="<?php echo $row['price']; ?>" class="input focused" id="focusedInput" type="number" placeholder = "Cost" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input name="fdate" value="<?php echo $row['followupdate']; ?>" class="input focused" id="focusedInput" type="date" placeholder = "FollowUp date" required>
                                          </div>
                                        </div>
										

										<div class="control-group">
                                          <div class="controls">
                                            <textarea name="note" value="<?php echo $row['textnote']; ?>" class="input focused" id="focusedInput"  placeholder = "Add your note here"" required></textarea>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $cys = $_POST['cys'];
                                $tdate = $_POST['tdate'];
                                 $fname = $_POST['fname'];
                                 $lname = $_POST['lname'];
                                 $phonenum = $_POST['phonenum'];
                                 $cost = $_POST['cost'];
                                 $fdate = $_POST['fdate'];
                                 $note = $_POST['note'];
                      

								mysqli_query($conn,"update followup set todaydate='$tdate',firstname='$fname',lastname='$lname',mobile='$phonenum',class_id='$cys',price='$cost',textnote='$note',followupdate='$fdate' where followup_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "followup.php"; 
								</script>

                       <?php     }  ?>
	