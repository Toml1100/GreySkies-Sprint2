        <!--TODO: Make this only show up if set and date are valid-->
        
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    
                    <?php echo'<h1>' .$set.'</h1>'; ?>
                </div>
            </div>
            <form name="SetForm" action="extras.php" method="GET">
                <div class="row">
                    <div class="text-center">
                        <h1>Pick your Package</h1>
                        <?php
                        if($set == "DarkWalnut"){
                            // Full Set
                            echo '<label><input type="radio" id="FullSet" name="package" value="FullSet"><h1 class="border border-3" id="setPicker" required>Full Set - $299</h1></label><br>';
 
                            // No Seating
                            echo '<label><input type="radio" id="NoSeating" name="package" value="NoSeating"><h1 class="border border-3" id="setPicker" required>No Seating - $245</h1></label><br>';

                            //Pick 4
                            echo '<label><input type="radio" id="PickFour" name="package" value="PickFour"><h1 class="border border-3" id="setPicker" required>Pick Four - $199</h1></label><br>';

                        }
                        elseif($set == "RusticWood"){
                            // Full Set
                            echo '<label><input type="radio" id="FullSet" name="package" value="FullSet"><h1 class="border border-3" id="setPicker" required>Full Set - $299</h1></label><br>';

                            // No Seating
                            echo '<label><input type="radio" id="NoSeating" name="package" value="NoSeating"><h1 class="border border-3" id="setPicker" required>No Seating - $245</h1></label><br>';

                            //Pick 4
                            echo '<label><input type="radio" id="PickFour" name="package" value="PickFour"><h1 class="border border-3" id="setPicker" required>Pick Four - $199</h1></label><br>';


                        }
                        elseif($set == "LayeredArch"){
                             // Full Set
                            echo '<label><input type="radio" id="FullSet" name="package" value="FullSet"><h1 class="border border-3" id="setPicker" required>Full Set - $849</h1></label><br>';

                            // Pick 6
                            echo '<label><input type="radio" id="PickSix" name="package" value="PickSix"><h1 class="border border-3" id="setPicker" required>Pick Six - $749</h1></label><br>';
 
                            // Pick 4
                            echo '<label><input type="radio" id="PickFour" name="package" value="PickFour"><h1 class="border border-3" id="setPicker" required>Pick Four - $699</h1></label><br>';
                           
                        }
                        elseif($set == "ModernRound"){
                             // Full Set
                            echo '<label><input type="radio" id="FullSet" name="package" value="FullSet"><h1 class="border border-3" id="setPicker" required>Full Set - $799</h1></label><br>';

                            // Pick 6
                            echo '<label><input type="radio" id="PickSix" name="package" value="PickSix"><h1 class="border border-3" id="setPicker" required>Pick Six - $699</h1></label><br>';
 
                            // Pick 4
                            echo '<label><input type="radio" id="PickFour" name="package" value="PickFour"><h1 class="border border-3" id="setPicker" required>Pick Four - $599</h1></label><br>';                           
                        }
                        elseif($set == "VintageMirror"){
                            // Platinum
                            echo '<label><input type="radio" id="Platinum" name="package" value="Platinum"><h1 class="border border-3" id="setPicker" required>Platinum - $849</h1></label><br>';

                            // Gold
                            echo '<label><input type="radio" id="Gold" name="package" value="Gold"><h1 class="border border-3" id="setPicker" required>Gold - $799</h1></label><br>';
 
                            // Pick 6
                            echo '<label><input type="radio" id="PickSix" name="package" value="PickSix"><h1 class="border border-3" id="setPicker" required>Pick Six - $649</h1></label><br>';
 
                            // Pick 4
                            echo '<label><input type="radio" id="PickFour" name="package" value="PickFour"><h1 class="border border-3" id="setPicker" required>Pick Four - $599</h1></label><br>';

                         
                        }
                        
                        ?>

    
                    </div>
    
    
                </div>
    
                <div class="row">

                    <div class="text-center">
                        <?php
                            echo '<input type="hidden" name="WeddingDate" value=' . $weddingDate. '>'; 
                            echo '<input type="hidden" name="Set" value=' . $set. '>';                      
                        ?>

                        <input type="submit" id="checkAvailability" name="submit" value="Continue">                        
                    </div>


                </div>
            </form>
        </div>
        <!--END OF TODO-->