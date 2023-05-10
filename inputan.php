<?php
    require_once "product.php";
    require_once "cdmusic.php";
    require_once "cdrack.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Management</title>
    <link href="input.css" rel="stylesheet">
</head>
<body>
    <nav>
        <li><a href="#">CD Product Management</a></li>
    </nav>
    <h2 style="margin: 30px 0 30px 0;">Input Product</h2>
    <table>
        <form method="post" action="">
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" class="form-control" placeholder="Product Name" name="name" required="required"></td>
            </tr>
            <tr>
                <td><label>Price</label></td>
                <td><input type="text" class="form-control" placeholder="Price" name="price" required="required"></td>
            </tr>
            <tr>
                <td><label>Discount</label></td>
                <td><input type="text" placeholder="Product Discount" name="discount" required="required"></td>
            </tr>
            <tr>
                <td><label>Artist</label></td>
                <td><input type="text; font= calibri" placeholder="CD Artist" name="artist" required="required"></td>
            </tr>
            <tr>
                <td><label>Genre</label></td>
                <td><input type="text" placeholder="CD Genre" name="genre" required="required"></td>
            </tr>
            <tr>
                <td><label>Rack Name</label></td>
                <td><input type="text" placeholder="CD Rack Name" name="rackname" required="required"></td>
            </tr>
            <tr>
                <td><label>Capacity</label></td>
                <td><input type="text" placeholder="CD Rack Capacity" name="capacity" required="required"></td>
            </tr>
            <tr>
                <td><label>Model</label></td>
                <td><input type="text" placeholder="CD Rack Model" name="model" required="required"></td>
            </tr>
            <td><input type="submit" name="submit" value="Submit" style="margin-bottom: 20px; background-color: blue"></td>
        </form>
    </table>
    
        <?php
            if (isset($_POST['submit'])){
                $product = new product();
                $product->setName($name = $_POST['name']);
                $product->setPrice($price = $_POST['price']);
                $product->setDiscount($discount = $_POST['discount']);
                echo "<pre>";
                echo "Product Name      : " . $product->getName() . "<br>";
                echo "Product Price     : Rp" . $product->getPrice() . "<br>";
                echo "Product Discount  : Rp" . $product->getDiscount() . "<br><br>";
                echo "</pre>";

                $cd_music = new cdmusic();
                $cd_music->setArtist($artist = $_POST['artist']);
                $cd_music->setGenre($genre = $_POST['genre']);
                echo "<pre>";
                echo "CD Artist Name    : " . $cd_music->artist . "<br>";
                echo "CD Music Price    : Rp" . $cd_music->getPriceWithTaxCDM() . "<br>";
                echo "CD Music Discount : Rp" . $cd_music->getDiscountTaxCDM() . "<br>";
                echo "CD Music Genre    : " . $cd_music->genre . "<br><br>";
                echo "</pre>";

                $cd_rack = new cdrack();
                $cd_rack->setRackName($rackname = $_POST['rackname']);
                $cd_rack->setCapacity($capacity = $_POST['capacity']);
                $cd_rack->setModel($model = $_POST['model']);
                echo "<pre>";
                echo "CD Rack Name      : " . $cd_rack->rackname . "<br>";
                echo "CD Rack Price     : Rp" . $cd_rack->getPriceWithTaxCDR() . "<br>";
                echo "CD Rack Discount  : Rp" . $cd_rack->getDiscountTaxCDR() . "<br>";
                echo "CD Rack Capacity  : " . $cd_rack->capacity . "<br>";
                echo "CD Rack Model     : " . $cd_rack->model . "<br>";
                echo "</pre>";
            }
        ?>  
</body>
</html>