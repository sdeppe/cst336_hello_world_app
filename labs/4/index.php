<?php
    $backgroundImage = "img/sea.jpg";
    
    // API call goes here
    if (isset($_GET['keyword'])) {
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $imageURLs = getImageURLs($keyword, $layout);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url("css/styles.css");
            body {
                background-image: url('<?=$backgroundImage?>');
            }
        </style>
    </head>
    <body>
        <br>
        <?php
            if (!isset($imageURLs)) {
                echo "<h2> Type a keyword to display a slideshow <br /> with random images from Pixabay.com </h2>";
            } else {
                // Display Carousel Here
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicator Here -->
            <ol class="carousel-indicators">
                <?php
                    for ($i=0; $i<5; $i++) {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?" class='active'": "";
                        echo "><li>";
                    }
                ?>
            </ol>
            <!-- Wrapper for Images -->
            <div class="carousel-inner" role="listbox">
                <?php
                    for ($i=0; $i<5; $i++) {
                        do {
                            $randomIndex = rand(0, count($imageURLs));
                        } while (!isset($imageURLs[$randomIndex]));
                        
                        echo '<div class="item ';
                        echo ($i == 0)?"active": "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
            </div>
        
            <!-- Controls Here -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>    
        <!--<h1> I'm a regular HTML tag inside the PHP else statement! </h1>-->
        <?php
            }  // End of the else statement
        ?>
        <br>
        <!-- HTML form goes here! -->
        <form>
            <input type="text" name="keyword" placeholder="keyword" value="<?=$_GET['keyword']?>"/>
            <input type="radio" id="lhorizontal" name="layout" value="horizontal">
            <label for="Horizontal"></label><label for="lhorizontal"> Horizontal </label>
            <input type="radio" id="lvertical" name="layout" value="vertical">
            <label for="Vertical"></label><label for="lvertical"> Vertical </label>
            <select name = "category">
                <option name="keyword" value="">Select One</option>
                <option name="keyword" value="Sea">Sea</option>
                <option name="keyword" value="Forest">Forest</option>
                <option name="keyword" value="Mountain">Mountain</option>
                <option name="keyword" value="Snow">Snow</option>
                <option name="keyword" value="people">People</option>
            </select>
            <input type="submit" value="Search" />
        </form>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>