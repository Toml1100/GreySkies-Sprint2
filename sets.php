<!-- Pages that contains the 5 different sets option and allows user to pick their wedding date. Page submits to packages.php -->

<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>sets</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <div id="main" class="text-center">
            <?php include "includes/header.html"; ?>
            <h2>Check Availability</h2>
        </div>

        <div class="container-fluid">

            <form name="SetForm" action="packages.php" method="GET">
                <div class="text-center"> 
                    <h1>Pick Your Set</h1>
                </div>
                
                <div class="row">
                    <!--<div class="col-0 col-md-2"></div>-->
                    <!--<div class="col-12 col-md-4">-->
                    <!--    <h1>Pick your set</h1>-->
                    <!--        <input type="radio" id="rDarkWalnut" name="set" value="DarkWalnut">-->
                    <!--        <label for="rDarkWalnut">Dark Walnut</label><br>-->
                    <!--        <input type="radio" id="rVintageMirror" name="set" value="VintageMirror">-->
                    <!--        <label for="rVintageMirror">Vintage Mirror</label><br>-->
                    <!--        <input type="radio" id="rRusticWood" name="set" value="RusticWood">-->
                    <!--        <label for="rRusticWood">Rustic Wood</label><br>-->
                    <!--        <input type="radio" id="rLayeredArch" name="set" value="LayeredArch">-->
                    <!--        <label for="rLayeredArch">Layered Arch</label><br>-->
                    <!--        <input type="radio" id="rModernRound" name="set" value="ModernRound">-->
                    <!--        <label for="rModernRound">Modern Round</label><br>-->
                    <!--</div>-->
                    <div class="col-12 col-md-4">
                         <label>
                            <h1 class="text-center">Dark Walnut</h1>
                            <input type="radio" id="rDarkWalnut" name="set" value="DarkWalnut" required>
                            <img class="img-fluid rounded-3" src="images/darkWalnutscaled.jpeg">                       
                        </label>                       
                    </div>
                    
                    <div class="col-12 col-md-4">
                         <label>
                            <h1 class="text-center">Vintage Mirror</h1>
                            <input type="radio" id="rVintageMirror" name="set" value="VintageMirror" required>
                            <img class="img-fluid rounded" src="images/VintageMirrorScaled.jpeg">
                        </label>                       
                    </div>
                    
                    <div class="col-12 col-md-4">
                         <label>
                            <h1 class="text-center">Rustic Wood</h1>                            
                            <input type="radio" id="rRusticWood" name="set" value="RusticWood" required>
                            <img class="img-fluid rounded" src="images/rusticwoodFullScaled.jpeg">
                        </label>                        
                    </div>
                    
                    <div class="col-12 col-md-4">
                         <label>
                            <h1 class="text-center">Layered Arch</h1>                            
                            <input type="radio" id="rLayeredArch" name="set" value="LayeredArch" required>
                            <img class="img-fluid rounded" src="images/layeredArchScaled.jpeg">
                        </label>                         
                    </div>
                    
                    <div class="col-12 col-md-4">
                         <label>
                            <h1 class="text-center">Modern Round</h1>                            
                            <input type="radio" id="rModernRound" name="set" value="ModernRound" required>
                            <img class="img-fluid rounded" src="images/ModernRoundScaled.jpeg">
                        </label>                         
                    </div>
                    
                    <div class="col-12 col-md-4">
                      
                    </div>
                    
                    <!--<div class="col-12 col-md-4">-->
                    <div class="text-center">
                        <h1>Enter Wedding Date</h1>
                        
                        <!-- Make sure date is a future date  -->
                        <input type="date" id="WeddingDate" name="WeddingDate"  min="<?php echo date("Y-m-d"); ?>" value="<?php date("Y-m-d"); ?>" required>
                        
                    </div>
                    <div class="col-0 col-md-2"></div>
                    <div class="col-2"></div>
    
                </div>
    
                <div class="row">
                    <div class="col-4">
                        
                    </div>
                    <!--<div class="col-4">-->
                    <!--    <input type="submit" id="checkAvailability" name="submit" value="Continue">                       -->
                    <!--</div>-->
                    
                    <div class="text-center">
                        <input type="submit" id="checkAvailability" name="submit" value="Continue">                       
                    </div>


                </div>
            </form>



        </div>

    <?php include "includes/ordercrumbs.php"; ?>
    <?php include "includes/footer.php"; ?>
</body>
</html>