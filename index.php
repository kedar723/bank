<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
    <header>
        <a href="#" class="logo">Paras Bank </a>
        <nav>
            <ul class="nav_link">
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>
    </header>
    <div class="inf">
        <p class="inf1">Lorem ipsum dolor sit amet</p>
        <p class="inf2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec justo rhoncus,</p> 
        <p class="inf2">pharetra dui ut, cursus turpis. Aenean tincidunt vitae ligula eget congue.</p>
        <button class="open" onClick="vieW()">View customers</button>
    </div>
    </div>
    
    <script>
        function vieW(){
            window.location.href="view_client.php";
        }
    </script>
    
    
</body>
</html>