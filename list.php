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
                <div id="nav"></div>
            </nav>

            <br>
            <div class="body-page">
                <table class="table order list" id="data">
                    <!-- <thead>
                        <tr>
                            <th scope="col" colspan="3">
                                #
                            </th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                        <tr>
                        <th>img</th>
                        <td>เตียง</td>
                        <td>date</td>
                        </tr>
                    </tbody>
                </table>

                <div class="btmdiv d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-success mr-1" href="#">ยอมรับ</button>
                    <button type="button" class="btn btn-outline-danger mr-1" href="#">ยกเลิก</button>
                </div>
            </div>
        </div>
    </body>
</html>