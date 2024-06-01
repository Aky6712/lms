<?php
function isAdmin(){
    if($_SESSION['ADMIN_ROLE'] ==1){
        ?>
        <script>
            window.location.href='students.php';
        </script>
        <?php
    }
}
?>