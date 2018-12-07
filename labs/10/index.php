<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
    </head>
    <body>
        <?php
            include 'inc/header.php';
            
            $dir = 'img/';
            $imageFiles = glob($dir.'*.jpg');
            
        ?>   
        <script>
            $(document).ready(function(){
                $("#home").addClass("active");
                $("#pets").removeClass("active");
                $("#about").removeClass("active");
            });
        </script>
        <style>
            #adoptButton {
                width: 600px;
            }
            body {
                text-align: center;
            }  
            .carousel img, #carouselExampleIndicators {
                margin: auto;
                width: 600px;
                height: 400px;
            }
        </style>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <?php for ($i=1; $i < count($imageFiles); $i++) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>"></li>
                <?php }?> 
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=$imageFiles[0]?>" alt="First slide">
                </div>
                <?php for ($i=1; $i < count($imageFiles); $i++) { ?>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="<?=$imageFiles[$i]?>" alt = "First Slide">
                </div>
                <?php }?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br>
        <a href="pets.php"  class="btn btn-outline-secondary" role="button" id="adoptButton" aria-pressed="true"> Adopt Now! </a><br>
        <div id = "petInfo"></div>
        <?php
            include 'inc/footer.php';
        ?>
    </body>
</html>
