<?php
    include 'connection.php';
    $sql = "SELECT * FROM spark.spark";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table  style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th >SrNO</th>
                            <th >Name</th>
                            <th >Gender</th>
                            <th >Balance</th>
                            <th >Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td><?php echo $rows['srno'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['gender']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><button type="button" class="btn" onnClick="myTransfer()" style="background-color : #A569BD;">Transfer</button></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
    
         <script>
            function myTransfer(){
                window.location.href='selecteduser.php';
            }
        </script>
</body>
</html>