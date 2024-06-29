<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Products</title>
  <style>
    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: black;
    }

    .container1 {
      position: relative;
      max-width: 700px;
      width: 100%;
      background: rgb(233, 222, 222);
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(223, 203, 203, 0.1);
      margin: auto;
    }

    .container1 header {
      font-size: 1.5rem;
      color: #333;
      font-weight: 500;
      text-align: center;
    }

    .container1 .form {
      margin-top: 60px;
    }

    .form .input-box {
      width: 90%;
      margin-top: 20px;
    }

    .input-box label {
      color: #333;
    }

    .form .input-box input,
    .form .select-box {
      position: relative;
      height: 50px;
      width: 100%;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 15px;
    }

    .input-box input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
      display: flex;
      column-gap: 15px;
    }

    .form .gender-box {
      margin-top: 20px;
    }

    .gender-box h3 {
      color: #333;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 8px;
    }

    .form .gender-option,
    .form .gender {
      display: flex;
      align-items: center;
      column-gap: 50px;
      flex-wrap: wrap;
    }

    .form .gender {
      column-gap: 5px;
    }

    .gender input {
      accent-color: rgb(130, 106, 251);
    }

    .form .gender input,
    .form .gender label {
      cursor: pointer;
    }

    .gender label {
      color: #707070;
    }

    .address input,
    .select-box {
      margin-top: 15px;
    }

    .select-box select {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      color: #707070;
      font-size: 1rem;
    }

    .form button {
      height: 55px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 30px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      background-color: #b1500f;
    }

    .form button:hover {
      background-color: #b1580f;
      opacity: 0.76;
    }

    .img {
      margin-top: 10px;
    }

    @media screen and (max-width: 500px) {
      .form .column {
        flex-wrap: wrap;
      }

      .form .gender-option,
      .form .gender {
        row-gap: 15px;
      }
    }
  </style>
</head>
<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_type = $_POST['product_type'];
    $price = $_POST['price'];
    $img = $_FILES['img']['name'];
    $target_dir = "assets/img/"; // Update this path to match your server's file system structure
    $target_file = $target_dir . basename($_FILES['img']['name']);

    // Insert into database
    $sql = "INSERT INTO product (product_name, product_type, price, img) VALUES ('$product_name', '$product_type', '$price', '$img')";

    if (mysqli_query($a, $sql)) {
        // Upload image file if needed
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            echo "Product added successfully.";
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($a);
    }
}
?>

<body>
  

  <section class="container1">
    <header>Add Products</header>
    <form action="" method="POST" enctype="multipart/form-data" class="form">
      <div class="input-box">
        <label>Product Name</label>
        <input type="text" name="product_name" placeholder="Enter Product Name" required />
      </div>
      <div class="input-box">
        <label>Product type</label>
        <input type="text" name="product_type" placeholder="Enter type" required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Price</label>
          <input type="number" name="price" placeholder="Price" required />
        </div>
      </div>
      <input type="file" name="img" class="img" placeholder="Upload Image">
      <button type="submit">Submit</button>
    </form>
  </section>
  
</body>

</html>
