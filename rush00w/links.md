https://habr.com/ru/post/319280/ список товаров
http://dimarina.ru/articles/jquery-eshop/



Username: iwP9tbIgQ9

Password: MJ45uDi47y

Database Name: iwP9tbIgQ9

Server: remotemysql.com

Port: 3306

<?php
$link = mysqli_connect("remotemysql.com", "iwP9tbIgQ9", "MJ45uDi47y");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
print ("succes");




https://tutsplanet.com/simple-php-shopping-cart/

Array ( 
    [0] => Array ( 
        [0] => 1 
        [1] => phone 
        [2] => phone description 
        [3] => ../img/01.jpeg 
        [4] => 10$ ) 
    [1] => Array ( 
        [0] => 2 
        [1] => phone2 
        [2] => phone description2 
        [3] => ../img/02.jpeg 
        [4] => 15$ ) 
    [2] => Array ( [0] => 3 [1] => php developer [2] => phone description2 [3] => ../img/03.jpeg [4] => 0$ ) 
    [3] => Array ( [0] => 4 [1] => nothing [2] => phone description2 [3] => ../img/04.jpeg [4] => 100$ ) )
    
    
    [passwd] => beeone 
    [loggued_on_user] => [cart] => Array ( [0] => 1 [1] => 2 [2] => 2 ) )