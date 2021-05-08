<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php print $SITE_NAME?>">
        <meta name="author" content="Arisara Kankeaw">
        <title><?php print $SITE_NAME?></title>
        
        <!-- Copyright 2012, Flavius Matis http://flaviusmatis.github.com/ -->
        <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.simplePagination.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand" href="#">
                    RCU
                    <br>
                    Respiratory Care Unit
                </a>
                <form class="form-inline">
                    <button type="button" id = "btnCallOfficer" class="btn btn-outline-info mr-1">เรียกเจ้าหน้าที่</button>
                    <button type="button" id="btnCpr" class="btn btn-outline-info">CPR</button>
                </form>
            </nav>

            <div class="body-page">
                <div class="card-body">
                    <h2 class="card-title">กรุณาเลือกเตียงเพื่อทำหัตการ</h2>
                </div>

                <div class="list-warpper row">
                    <?php for($i = 1; $i <= 9; $i++) {?>
                    <div class="list-item col-6">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">
                                        <img class="bedpic" src="img/bed.png" width="150" height="150">
                                        <a id="bedtext" href="order.php?bed=bed<?php echo $i?>" >เตียง <?php echo $i?></a>
                                    </p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="pagination justify-content-center"></div>

            </div>
        </div>
    </body>
</html>