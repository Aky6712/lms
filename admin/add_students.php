<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Add Student</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <form id="add_student" method="post">

                    <div class="control-group">
                        <label class="control-label" for="class_id">Class</label>
                        <div class="controls">
                            <select name="class_id" id="class_id" required>
                                <option></option>
                                <?php
                                $cys_query = mysqli_query($conn, "select * from class order by class_name");
                                while ($cys_row = mysqli_fetch_array($cys_query)) {
                                ?>
                                    <option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="un">ID Number</label>
                        <div class="controls">
                            <input name="un" class="input focused" id="un" type="text" placeholder="ID Number" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fn">Firstname</label>
                        <div class="controls">
                            <input name="fn" class="input focused" id="fn" type="text" placeholder="Firstname" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="ln">Lastname</label>
                        <div class="controls">
                            <input name="ln" class="input focused" id="ln" type="text" placeholder="Lastname" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="gender">Gender</label>
                        <div class="controls">
                            <select name="gender" id="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="dob">Date of Birth</label>
                        <div class="controls">
                            <input name="dob" class="input focused" id="dob" type="date" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="mobile">Mobile No</label>
                        <div class="controls">
                            <input name="mobile" class="input focused" id="mobile" type="tel" placeholder="Mobile Number" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="status">Status</label>
                        <div class="controls">
                            <select name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="Walk-In">Walk-In</option>
                                <option value="Google">Google</option>
                                <option value="Call">Call</option>
                                <option value="Reference">Reference</option>
                                <option value="Banner">Banner</option>
                                <option value="Pemplate">Pemplate</option>
                                <option value="Upgrade">Upgrade</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <textarea name="address" class="input focused" id="address" rows="3" placeholder="Address" required></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="city">City</label>
                        <div class="controls">
                            <input name="city" class="input focused" id="city" type="text" placeholder="City" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="pin_code">Pin Code</label>
                        <div class="controls">
                            <input name="pin_code" class="input focused" id="pin_code" type="text" placeholder="Pin Code" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="state">State</label>
                        <div class="controls">
                            <input name="state" class="input focused" id="state" type="text" placeholder="State" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="batch_timing">Batch Timing</label>
                        <div class="controls">
                            <input name="batch_timing" class="input focused" id="batch_timing" type="time" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="batch_days">Batch Days</label>
                        <div class="controls">
                            <select name="batch_days" id="batch_days" required>
                                <option value="">Select Batch Day</option>
                                <option value="Monday_to_Saturday">Monday to Saturday</option>
                                <option value="Monday_Wednesday_Friday">Monday - Wednesday - Friday</option>
                                <option value="Tuesday_Thursday_Saturday">Tuesday Thursday Saturday</option>
                                <!-- Repeat for other days -->
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="course_price">Course Price</label>
                        <div class="controls">
                            <input name="course_price" class="input focused" id="course_price" type="text" placeholder="Course Price" required>
                        </div>
                    </div>

                    <!-- Admission Received -->
                    <div class="control-group">
                        <label class="control-label" for="admission_received">Admission Amount Received</label>
                        <div class="controls">
                            <input name="admission_received" class="input focused" id="admission_received" type="text" placeholder="Admission Received" required>
                        </div>
                    </div>

                    <!-- Remaining Amount -->
                    <div class="control-group">
                        <label class="control-label" for="remaining_amount">Remaining Amount</label>
                        <div class="controls">
                            <input name="remaining_amount" class="input focused" id="remaining_amount" type="text" placeholder="Remaining Amount" required>
                        </div>
                    </div>

                    <!-- Payment Mode -->
                    <div class="control-group">
                        <label class="control-label" for="payment_mode">Payment Mode</label>
                        <div class="controls">
                            <select name="payment_mode" id="payment_mode" required>
                                <option value="">Select Payment Mode</option>
                                <option value="Gpay">Gpay</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                        </div>
                    </div>

                    <!-- Payment Type -->
                    <div class="control-group">
                        <label class="control-label" for="payment_type">Payment Type</label>
                        <div class="controls">
                            <select name="payment_type" id="payment_type" required>
                                <option value="" disabled selected>Select Payment Type</option>
                                <option value="EMI">EMI</option>
                                <option value="One Time">One Time</option>
                            </select>
                        </div>
                    </div>

                    <!-- Next Due Date of Payment -->
                    <div class="control-group">
                        <label class="control-label" for="next_due_date">Next Due Date of Payment</label>
                        <div class="controls">
                            <input name="next_due_date" class="input focused" id="next_due_date" type="date" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>

<script>
    jQuery(document).ready(function($) {
        $("#add_student").submit(function(e) {
            e.preventDefault();
            var _this = $(e.target);
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "save_student.php",
                data: formData,
                success: function(html) {
                    $.jGrowl("Student Successfully Added", {
                        header: 'Student Added'
                    });
                    $('#studentTableDiv').load('student_table.php', function(response) {
                        $("#studentTableDiv").html(response);
                        $('#example').dataTable({
                            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
                            "sPaginationType": "bootstrap",
                            "oLanguage": {
                                "sLengthMenu": "MENU records per page"
                            }
                        });
                        $(_this).find(":input").val('');
                        $(_this).find('select option').attr('selected', false);
                        $(_this).find('select option:first').attr('selected', true);
                    });
                }
            });
        });
    });
</script> 