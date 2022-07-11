
<!DOCTYPE html>
<html>
<head>
<title>Insert Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Insert Product</h1>

        <form action="InsertProduct.php" class="needs-validation" novalidate method="POST">

          
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?= (isset($brand)) ? $brand : NULL ?>" aria-describedby="brandHelp">
                <span class="text-danger"><?= isset($error['brand']) ? $error['brand'] : '' ?> </span>
           </div>
           
            <div class="mb-3">
                <label for="screen" class="form-label">Screen</label>
                <input type="text" class="form-control" id="screen" name="screen" value="<?= (isset($screen))? $screen : NULL ?>" aria-describedby="sizeHelp">
                <span class="text-danger"><?= isset($error['screen']) ? $error['screen'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= (isset($description))? $description : NULL ?>" aria-describedby="descriptionHelp">
                <span class="text-danger"><?= isset($error['description']) ? $error['description'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="price" class="form-description">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= (isset($price))? $price : NULL ?>" aria-describedby="priceHelp">
                <span class="text-danger"><?= isset($error['price']) ? $error['price'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="picture" class="form-description">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture" value="<?= (isset($picture))? $picture : NULL ?>" aria-describedby="pictureHelp">
                <span class="text-danger"><?= isset($error['picture']) ? $error['picture'] : '' ?> </span>
           </div>
                  
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>

    </div>

    

   
</body>
<?php include 'Footer.php' ?>
</html>