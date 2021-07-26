<?php include "include.php" ?>
<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="border border-2 border-dark rounded-3 p-5">
                    <h3 class="text-center mt-3">Result</h3>
    <?php 
    
    if(isset($_POST['btn'])){
        $name1 = $_POST['your_name'];
        $name2 = $_POST['your_gf_name'];
        echo  "<h4>".$name1." and ".$name2." = ".rand(0,100)."%</h4";
    }
     ?>
    </div>

</div>

</div>