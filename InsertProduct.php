<?php

include 'library/DBConnection.php';

$error=[];

// https://www.php.net/manual/en/function.filter-input.php
// https://www.php.net/manual/en/filter.filters.php
 



//sanitizing is removing anything not adhering to the filter
//filter_input (TYPE OF INPUT, INPUT product , FILTER product/TYPE - see on PHP.net)
$brand = filter_input(INPUT_POST, 'brand',  FILTER_SANITIZE_STRING);
$screen = filter_input(INPUT_POST, 'screen',  FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description',  FILTER_SANITIZE_URL);
$price = filter_input(INPUT_POST, 'price',  FILTER_SANITIZE_URL);
$picture = filter_input(INPUT_POST, 'picture',  FILTER_SANITIZE_URL);





//make input required
//checks to see if the $product is set (should be) or if it is empty
//if it is initialize the error array with a message


if(!isset($brand) || empty($brand)){
        $error['brand'] = 'Brand is required';
}

if(!isset($screen) || empty($screen)){
        $error['screen'] = 'Screen size  is required';
}
if(!isset($description) || empty($description)){
        $error['description'] = 'Description is required';
    }
    if(!isset($price) || empty($price)){
            $error['price'] = 'Price is required';
        }
    if(!isset($picture) || empty($picture)){
        $error['picture'] = 'Image is required';
    }


//if there are no errors and error array is empty
//send to database
if(empty($error)){
        //prepare and bind
        //everything has to be the exact same as it is in the database
        $sql = "INSERT INTO `phone features` ( brand, screen, description, price, picture) 
        VALUES (?,?,?,?,?)";

        //prepared statement
        $stmt = $conn->prepare($sql);

        //the variables are at your own choice, 
        //they do not require to be the exact same as the columns in the database
        $stmt->bind_param("sssds",  $brand,  $screen, $description, $price, $picture);

        //send to database
        $stmt->execute();
        $conn->close();

         header("Location: index.php");
}else{ 
        //if there are errors draw the NewProduct.php page
        //drawing the page rather than redirecting will let us
        //acces the $error array and all the variables set at the
        //top of the page
        require_once('NewProduct.php');
}




?>