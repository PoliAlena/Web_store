<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="FF.css" />
    <title>Document</title>
</head>
<body>
    <script>
        $(document).ready(function () {
        $(".Add").on("click", function (){
            var productId = $(this).data("product-id");
            <?php
				$servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "FE";
                        
		     	$mysqli = new mysqli($servername, $username, $password, $dbname);
				$query = "set names utf8";
				$mysqli->query($query);
                $productId = isset($_GET['id']) ? $_GET['id'] : null;
			    $query = "insert into Basket (User_id, Count_product, Product_id) VALUES (1, 1, $productId)";
				$results = $mysqli->query($query);              
            ?>
           alert("Товар успешно добавлен в корзину");
        })
    })
    </script>
<div class="dropdown">
        <div>
            <button class="dropbtn">Меню</button>
        </div>
        <div class="dropdown-content">
            <div><button class="menub"><a href="FE.php">О нас</button></div>
            <div><button class="menub"><a href="Catalog.php">Каталог</button></div>
            <div><button class="menub"><a href="Basket.php">Корзина</button></div>
            <div><button class="menub"><a href="Orders.php">Заказы</button></div>
            <div class="flex">
                <div><button class="menubm"><a href="like.php"></a><img src="imgs/menuButton1.png" style="width: 80%; height: 80%;"></button></div>
                <div><button class="menubm"><img src="imgs/menuButton2.png" style="width: 80%; height: 80%;"></button></div>
            </div>
            </div>
        </div>
    <div class="flexx">
         <?php
				$servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "FE";
                        
		     	$mysqli = new mysqli($servername, $username, $password, $dbname);
				$query = "set names utf8";
				$mysqli->query($query);
                $productId = isset($_GET['id']) ? $_GET['id'] : null;
			    $query = "select * from Products where ID = $productId";
				$results = $mysqli->query($query);
				$row = $results->fetch_assoc();
				echo '
                <div style="background: url(imgs/picback.png) no-repeat; background-size: cover; margin:4%; margin-left: 10%; height:60%;width:40%; padding:11%; padding-left:15%; padding-right: 16%;">
                <img src="'.$row["Img"].'" style="width: 100%; padding: 0%;"></div>
                <div style="display: flex; flex-direction: column; color: #291f1d; font-weight: bold; font-size:100%; margin-left:-5%;"> 
                    <div style="margin:3%;"><h1>'.$row["Name"].'<h1></div>
                    <div style="margin:3%; margin-top:0; font-size:120%;">'.$row["Description"].'</div>
                    <div style="margin:3%; font-size: 110%;">'.$row["Price"].' руб.<br></div>
                    <div style="margin:3%; margin-left: 25%"><button class="Add" style=" color: #c7a29a; border: 0;  cursor:pointer; padding: 8%; padding-left: 18%; padding-right: 18%; background: url(imgs/buttonO.png) no-repeat; background-size: cover;"> <b>В корзину<b> </button></div>
                </div>      
				';
			?>
    </div>
</body>
</html>