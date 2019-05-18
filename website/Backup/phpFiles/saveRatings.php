    <?php
    $productName = $_GET['link']; // has product link
    $username = $_SESSION['name'];

    switch($_POST['rating']) {
        case "star-1":
        $rating = 1;
        break;
        case "star-2":
        $rating = 2;
        break;
        case "star-3":
        $rating = 3;
        break;
        case "star-4":
        $rating = 4;
        break;
        case "star-5":
        $rating = 5;
        break;
        default:
        echo 'Something went wrong. Please rate again.';
    }

    //insertion
    $addToRatingTable = "INSERT INTO Rating (user_name, product_name, rate_value) VALUES ('$username', '$prodName', '$rating')"
    if($conn->query($addToRatingTable) === TRUE){
        //rated
    }
    ?>
