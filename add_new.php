<?php
    include_once 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin add product</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Paras Bank India</a>
        <nav>
            <ul class="nav_link">
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
    </header>
    <div>
        <h2 style="text-align:center; margin: 24px 12px; font-size:30px;">Open new account</h2>
    </div>

    <div class="main">
        <form method="POST" enctype="multipart/form-data" >
            <input type="text" name="name" placeholder="Enter name" style="margin:5px; border-radius:5px">
            <br>
            <input type="number" name="age" placeholder="Enter age" style="margin:5px; border-radius:5px">
            <br>
            <input type="text" name="gender" placeholder="Enter gender" style="margin:5px; border-radius:5px">
            <br>
            <input type="number" name="balance" placeholder="Enter initial balance" style="margin:5px; border-radius:5px">
            <br>
            <input type="tel" name="phone" placeholder="Enter phone no." style="margin:5px; border-radius:5px">
            <br>
            <input type="file" name="file" style="margin:5px; border-radius:5px">
            <br>
            <input type="submit" class="submit" name="submit" style="background-color:rgb(43, 143, 43);font-size: 16px;">
            <br>

            <input class="view" type="submit" name="view" value="View products">
        </form>
    </div>

    <?php
    

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $balance = $_POST['balance'];
            $phone = $_POST['phone'];
            $fname= $_POST['name'].'.jpg';
            
            

            $sql="INSERT INTO spark.spark (name, age, gender, balance, phone, file) VALUES ('$name', '$age', '$gender', '$balance', '$phone', '$fname')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                move_uploaded_file($_FILES['file']['tmp_name'],$fname);
                echo 'Product is  added'; 
            }
            else{
                echo 'Product is not added';
            }
            $conn->close();
        }

        if(isset($_POST['view'])){
            header('location: view_client.php');
        }
    ?>

       

</body>
</html>