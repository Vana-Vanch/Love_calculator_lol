<?php include "include.php" ?>


        <div class="container">
            <div class="d-flex justify-content-center align-items-center " style="height: 100vh;">
                <div class="border border-2 border-dark rounded-3">
                    <h3 class="text-center mt-3">Love Calculator</h3>
                <form action="calculate.php" class="m-5 px-5" method="POST">
                    <div class="mb-3">
                        <label for="your_name">Your name</label>
                        <input type="text" class="form-control border border-2 border-dark" name="your_name" autocomplete="off">

                    </div>
                    <div class="mb-3">
                        <label for="your_gf_name">Your Lover's name</label>
                        <input type="text" class="form-control border border-2 border-dark" name="your_gf_name" autocomplete="off">

                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="btn" class="btn btn-info" value="Calculate">
                    </div>
                </form>
                </div>  
            </div>
        </div>
