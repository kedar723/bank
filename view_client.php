<?php
    include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .style1{
            display: inline-block;
            background-color:pink;
            
            min-width:200px;
            margin: 0 20px;
            border-radius:10px;
            font-size:18px;
        }
        .fa{
            background-color:green;
        }
        .img{
            border-radius:50%;
            width:100%;
            height:100px;
        }
        .v1{
            background-color:gray;
            text-align:center;
            padding:15px 10px;
            font-size: 30px;
            margin:0 0 10px 0;
        }
        .add{
            float: right;
            padding: 5px 5px;
            border: 1px solid black;
            border-style: hidden;
            border-radius: 6px;
            background-color: rgb(9, 204, 19);
            
        }
    </style>
</head>
<body>
    <?php 
        $result=mysqli_query($conn,'select * from spark.spark');
        echo "<div class='v1'>
            <span>Customers</span>
            <span><button class='add' onClick='myFunction()'>Add customer</button></span>
        </div>";
        echo "<div class=''>";
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['srno'];
            $name = $row['name'];
            $age = $row['age'];
            $gender = $row['gender'];
            $balance = $row['balance'];
            $phone = $row['phone'];
            $fname = $row['file'];
            //<button name='delete'>Delete</button>
            //<button name='edit'>Edit</button>
            echo "
            
            <div  class='style1'>
                <form method='POST'>
                
                    <input name='id' value='$id' hidden>
                    <input name='fname' value='$fname' hidden>
                    <img src='$fname' class='img'>
                    <p>Name: $name</p>
                    <p>Age: $age</p>
                    <p>Mobile no: $phone</p>
                    <p>Balance: $ $balance</p>
                    <input type='submit' name='send' value='Send money'>
                    
                </form>
            </div>";
        }
        echo "</div>";
        

        if(isset($_POST['view'])){
            header('location: view_client.php');
        }
        if(isset($_POST['send'])){
            header('location: send.php');
        }
       
    ?>
    <script>
        function myFunction(){
            window.location.href='add_new.php';
        }
    </script>
</body>
</html>