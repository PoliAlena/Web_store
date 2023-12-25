<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="FF.css" />
    <title>Basket</title>

</head>
<body>
    <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
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
            <div><button class="menub"><a href="Orders.php">Заказы</a></button></div>
            <div class="flex">
                <div><button class="menubm"><a href="../FL/like.html"></a><img src="imgs/menuButton1.png" style="width: 80%; height: 80%;"></button></div>
                <div><button class="menubm"><img src="imgs/menuButton2.png" style="width: 80%; height: 80%;"></button></div>
            </div>
            </div>
        </div>
    </div>
    
    <div class="gds"><img src="imgs/basket .png" style="width: 40%; height: 40%;"></div>
    <div class="b">
        <?php
							$servername = "localhost"; 
                            $username = "root"; 
                            $password = ""; 
                            $dbname = "FE";
                            
							$mysqli = new mysqli($servername, $username, $password, $dbname);
							$query = "set names utf8";
							$mysqli->query($query);
							$query = "select * from Products where ID in (select Product_id from Basket where User_id = 1)";
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
                                padding-top: 12%;
                                height:40%;
                                width:35%;
                                margin-left:12%;
                                margin: 6%;
                               ">
                                <img src="'.$row["Img"].'" style=" height:105%; width:105%">
                                <p style=" text-align: left; 
                                padding-top: 2%;
                                padding-left: 4%;
                                color: #c7a29a;
                                font-size: 150%;
                                text-shadow: .09em 0 #291f1d;
                                font-weight: bold;"> '.$row["Name"].' <br> <br>'.$row["Price"].'</p>
                                </div>
								';
							}
						?>
                           
                        
        <div><button class="bas" onclick="openForm()">Заказать</button></div>
    </div>
    
    <div class="form-popup" id="myForm" style="display: none;
    position: fixed;
    bottom: 5%;
    right: 33%;
    border: 0;
    background: url(imgs/picback.png);
    background-size: contain;
    width: 40%;">
        <form class="form-container" method="post">
          <h1>Регистрация</h1>
      
          <label for="Login"><b>Логин</b></label>
          <input type="text" placeholder="Введите логиин" name="Login" required>

          <label for="Password"><b>Пароль</b></label>
          <input type="password" placeholder="Введите Пароль" name="Password" required>

          <button type="submit" class="btn">Регистрация</button>
          <button type="submit" class="btn cancel" onclick="closeForm()">Закрыть</button>
        </form>
      </div>
      <?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "FE"; 
 
 
if (isset($_POST["Name"]) && isset($_POST["Login"])&& isset($_POST["Password"])) 
 { 
            $conn = mysqli_connect($servername, $username, $password, $dbname); 
            $name = $conn->real_escape_string($_POST["Name"]); 
            $login = $conn->real_escape_string($_POST["Login"]); 
            $password = $conn->real_escape_string($_POST["Password"]); 
            if (!empty($name) && !empty($login) && !empty($password)) 
     { 
            $sql = "INSERT INTO user (Name,Login,Password) VALUES ('$name', '$login', '$password')"; 
         if($conn->query($sql)) 
         { 
             echo "Данные успешно добавлены"; 
         }  
         else 
         { 
             echo "Ошибка: " . $conn->error; 
         } 
    } 
    else { 
        echo "Заполните все поля"; 
    } 
}     
  
?>
</body>
</html>