<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php print $SITE_NAME?>">
        <meta name="author" content="Arisara Kankeaw">
        <title><?php print $SITE_NAME?></title>
            
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <div class="btn-toolbar">
                        <button type="button" class="btn btn-outline-info">เรียกเจ้าหน้าที่</button>
                        <button type="button" class="btn btn-outline-info">CPR</button>
                    </div>
                </form>
            </nav>

            <div class="body-page">
                <div class="menu">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#">รายการสั่งยาบ่อย</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#">ยา</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#">เวชภัณฑ์</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#">อาหาร</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#"><a id="example"></a></button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-info mr-1" href="#">Search</button>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">ยา</h5>
                                            <img class="medicalpic" src="img/medical.png" width="100%" height="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">เวชภัณฑ์</h5>
                                            <img class="supplypic" src="img/supply.png" width="100%" height="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">อาหาร</h5>
                                            <img class="foodpic" src="img/food.jpg" width="100%" height="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">TEAM</h5>
                                            <img class="teampic" src="img/team.png" width="100%" height="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card border-info mb-3">
                            <div class="card-header">รายการของคุณ</div>
                            <div class="card-body">
                                <h5 class="card-title">ยังไม่มีรายการ<br>เวชภัณฑ์ที่จะส่ง</h5>
                                <img>...
                                <button>ดูสถานะคำสั่ง</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>