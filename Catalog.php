<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="FF.css" />
    <title>Catalog</title>
</head>
<body>
    <script>
        function High() {
            int a = 1
        }
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
    <div class="gds"><img src="imgs/catalog.png" style="width: 40%; height: 40%;"></div>
    <div class="line">
        <div class="dropdown1">
            <button class="sort">Сортировка</button>
            <div class="dropdown-content1">
                <div><button class="btn1" onclick="High()">По возрастанию цены</button></div>
                <div><button class="btn1">По убыванию цены</button></div>
            </div>
        </div> 
        <div class="dropdown1">
            <div><button class="fltr">  Фильтры </button></div>
            <div class="dropdown-content1">
                <div><button class="btn1">Торты</button></div>
                <div><button class="btn1">Кексы</button></div>
                <div><button class="btn1">Печенье</button></div>
            </div>
        </div> 
    </div>
    <div class="ctlg">
        
            <?php
							$servername = "localhost"; 
                            $username = "root"; 
                            $password = ""; 
                            $dbname = "FE";
                            
							$mysqli = new mysqli($servername, $username, $password, $dbname);
							$query = "set names utf8";
							$mysqli->query($query);
							$query = "select * from Products";
							$results = $mysqli->query($query);
							while($row = $results->fetch_assoc()){
                                echo "<link rel='stylesheet' href='FFFFF.css'>";
								echo '
                                <div class="card"style="background: url(imgs/card1.png) no-repeat; 
                                background-size: cover;
                                align-items: center;
                                padding: 6%;
                                padding-left: 10%;
                                padding-right: 12%;
                                padding-top: 8%;
                                height:40%;
                                width:35%;
                                margin-left:12%;
                               ">
                                <img src="'.$row["Img"].'" style=" height:65%;">
                                <p style=" 
                                padding-top: 2%;
                                padding-left: 4%;
                                color: #c7a29a;
                                text-shadow: .09em 0 #291f1d;
                                font-weight: bold;"> '.$row["Name"].' <br> <br>'.$row["Price"].'</p>
                                <a href="Product.php?id=' . $row["ID"] .'">Добавить в корзину</a></div> 
								';
							}
						?>
        
    </div>
</body>
<footer>

</footer>
</html>