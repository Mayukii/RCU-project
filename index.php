<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php print $SITE_NAME?>">
        <meta name="author" content="">
        <title><?php print $SITE_NAME?></title>
            
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <button type="button" class="btn btn-outline-info">เรียกเจ้าหน้าที่</button>
                    <button type="button" class="btn btn-outline-info">CPR</button>
                </form>
            </nav>

            <div class="body-page">
                <div class="card-body">
                    <h2 class="card-title">กรุณาเลือกเตียงเพื่อทำหัตการ</h2>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">เตียงที่ 1</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">เตียงที่ 2</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">เตียงที่ 3</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">เตียงที่ 4</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paging">
                    <nav aria-label="Page">
                        <ul class="pagination justify-content-center">
                            <?php 
                                // todo query number of bed
                                $bed_number = 9;
                                $no_of_records_per_page = 4;
                                $total_pages = ceil($bed_number / $no_of_records_per_page);
                                for($i = 1; $i <= $total_pages; $i++) {
                            ?>
                                <li class="page-item" id="pageno<?php print $i; ?>"><a class="page-link" href="index.php?page=<?php print $i; ?>"><?php print $i ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <script>

        </script>
    </body>
</html>