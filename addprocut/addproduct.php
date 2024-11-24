<?php 
include 'db.php' ;
if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }

    $sql = "INSERT INTO produit (nom, prix, quantité,description,image)
VALUES ('$name', $price, $quantity,'$description','$target_file')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="addproduct.css">
</head>
<body>
    <form   method="POST" enctype="multipart/form-data">
        Name <input type="text" name="name"><br>
        Price <input type="number" name="price"><br>
        Quantity<input type="number" name="quantity"><br>
        Description <input type="text" name="description"><br>
        Image <input type="file" name="img"><br>
        <input value="Submit" name="submit" type="submit">
        </form>
</body>
</html>