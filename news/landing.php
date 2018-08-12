<!DOCTYPE html>
<html lang="en">
<head>
    <body>
    <style>
        .center {
            position: absolute;
            width: 500px;
            height: 50px;
            top: 50%;
            left: 50%;
            margin-left: -50px; /* margin is -0.5 * dimension */
            margin-top: -25px;
        }

    </style>

    <title>Landing page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <div class="col-md-12">
        <div class="full-width-div">
            <div id="myCarousel" class="carousel slide" style="width: 100%; height: 80%; margin: 0 auto"
                 data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="1.JPG" alt="Picnic1" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Gafadies</h3>
                            <p>Chitt chat.GUFF! SUFF!!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="2.JPG" alt="Peace" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Peace</h3>
                            <p>Peace out!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="3.JPG" alt="Friends" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Bingo</h3>
                            <p>Let's give it a shot!</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <center>
                    <div>
                        <h1>DWIT Picnic 2k19! It's free.</h1>
                        <a href="register.php" type="button" class="btn btn-success btn-lg">Register Here</a>
                    </div>
                </center>
            </div>
        </div>
    </div>

    </body>
</html>
