<?php 
include 'library/DBConnection.php';
$sql = "SELECT * FROM `phone features`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

<title>Phone Shop </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>

<body >
 <?php include 'NavBar.php' ?>
    <div class="bg-light p-2 text-dark bg-opacity-100" >
    <div></div>
    <br><h2 class="fst-italic" text="center" style= text-align:center;>Welcome to your favorite phone shop! </h2> <br><br>
     <div></div> 
     <?php include 'slideshow.php' ?>    
    <a class="btn btn-primary" href="NewProduct.php" role="new" >Let's add a product</a> <br><br>
    <div class="container">
            <div class="row">

            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo '<div class="col-3">';
                            echo '<div  style= background:lightgray; class="card" >';
                                echo '<img src="./assets/' .$row['picture']. '" class="card-img-top" alt="...">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-text">' .$row['brand']. '</h5>';
                                    echo '<h5 class="card-text"> €' .$row['price']. '</h5>';
                                    echo '<p class="card-text">'  .$row['description']. '</p>';
                                    echo "<td><a class='btn btn-primary' href='EditProduct.php?id=".$row['id']."' role='update'>Update</a></td>";
                                    echo "<td><a class='btn btn-danger' href='DeleteProduct.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>

        </div>
    </div>
</div>

</body>
<?php include 'Footer.php' ?>
</html>