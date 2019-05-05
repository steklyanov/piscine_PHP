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
    
    
    
    <head>
        <?php include("../components/head-tag-contents.php");?>
        <?php
        if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['check_list'])){
    // Loop to store and display values of individual checked checkbox.
                foreach($_POST['check_list'] as $selected){
                    echo $selected."</br>";
                }
            }
        }
        ?>
    </head>
    <body>
    <div>
        <?php include("../components/navigation.php");?>
        <form action="admin.php" method="post">
            <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
            <input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
            <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
    </html>