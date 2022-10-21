<!-- Pages that contains the 5 different sets option and allows user to pick their wedding date. Page submits to packages.php -->

<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pick your set page</title>
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
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1>Pick your set</h1>
                    
                        <input type="radio" id="DarkWalnut" name="set" value="DarkWalnut">
                        <label for="DarkWalnut">Dark Walnut</label><br>
    
                        <input type="radio" id="VintageMirror" name="set" value="VintageMirror">
                        <label for="VintageMirror">Vintage Mirror</label><br>
    
                        <input type="radio" id="RusticWood" name="set" value="RusticWood">
                        <label for="RusticWood">Rustic Wood</label><br>                 
    
                        <input type="radio" id="LayeredArch" name="set" value="LayeredArch">
                        <label for="LayeredArch">Layered Arch</label><br>
    
                        <input type="radio" id="ModernRound" name="set" value="ModernRound">
                        <label for="ModernRound">Modern Round</label><br>
                    </div>
    
                    <div class="col-12 col-md-6">
                        <h1>Enter Wedding Date</h1>
                        
                        <!-- Make sure date is a future date  -->
                        <input type="date" id="WeddingDate" name="WeddingDate" value="2022-06-01">
                        
                    </div>
                    <div class="col-2"></div>
    
                </div>
    
                <div class="row">
                    <div class="col-4">
                        
                    </div>
                    <div class="col-4">
                        <input type="submit" id="submit" name="submit" value="submit">                        
                    </div>


                </div>
            </form>



        </div>

    </body>
</html>