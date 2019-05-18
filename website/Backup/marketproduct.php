
<!DOCTYPE html>
<html  >
<head>
    <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="All Products go here
    ">

    <title>Our Products</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="css/product_page.css">
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
    <?php
      require_once('phpFiles/dbConnection.php');
      require_once('userSession.php');
      include "navigationHeader.php";

      if(!userLoggedIn()){
        header("Location: Login.php");
        die();
      }

    ?>
    <br><br><br>
    <section>
        <table width='100%' >
            <tr><td width='15%'></td>
                <td width='50%' >
                    <?php
                        $link = $_GET['link']; // has product link

                        // TODO
                        $new = false; // boolean that determins whether the user has preciously rated this product or no
                        $rating = 0; // rating value of this product if it already exists. $new must be true if this != 0

                        $findProductName = "SELECT Name from Product where Weblink=\"".$link."\"";
                        $prodName;
                        if($result = $conn->query($findProductName)){
                      		if($result->num_rows > 0){
                            $prodName = $row['Name'];
                      		}
                      	}

                        $username = $_SESSION['name'];
                        $findRating = "SELECT rate_value from Rating where product_name='$prodName' and user_name='$username'";
                        if($resultrating = $conn->query($findRating)){
                            if($resultrating->num_rows > 0){
                                $new = true;
                                $rating = $row['rate_value'];
                            }
                        }

                        //Selecting a rating thats already added
                        $selectPreviousRating = "SELECT rating from Product where Weblink=\"".$link."\"";

                        $ch = curl_init();
                        curl_setopt($ch,CURLOPT_URL,$_GET['link']);
                        curl_exec($ch);

                        $conn->close();

                        function checkRating($r){
                            global $rating;
                            if ($rating==$r){
                                echo 'checked'
                            }
                        }
                    ?>
                    <div class="rating-section">
                        <form class="rating-form" action="saveRatings.php?productName=<?php echo $prodName ?>" method="POST">
                            <div class="rating-title">Rate this product</div>
                            <div class="stars">
                                <input type="radio" name="rating" class="star-1" id="star-1" <?php checkRating(1) ?>/>
                                <label class="star-1" for="star-1">1</label>
                                <input type="radio" name="rating" class="star-2" id="star-2" <?php checkRating(2) ?>/>
                                <label class="star-2" for="star-2">2</label>
                                <input type="radio" name="rating" class="star-3" id="star-3" <?php checkRating(3) ?>/>
                                <label class="star-3" for="star-3">3</label>
                                <input type="radio" name="rating" class="star-4" id="star-4" <?php checkRating(4) ?>/>
                                <label class="star-4" for="star-4">4</label>
                                <input type="radio" name="rating" class="star-5" id="star-5" <?php checkRating(5) ?>/>
                                <label class="star-5" for="star-5">5</label>
                                <span></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-form display-4"><?php
                            if($new){
                                echo 'Update';
                            }
                            else{
                                echo 'Save';
                            }
                            ?></button>
                        </form>
                    </div>
                </td>
                <td width='20%'></td>
            </tr>
        </table>
    </section>



</body>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
    <script src="assets/theme/js/script.js"></script>
</html>
