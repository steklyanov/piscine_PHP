<?php
$link = mysqli_connect("remotemysql.com", "iwP9tbIgQ9", "MJ45uDi47y");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$link = mysqli_connect("remotemysql.com", "iwP9tbIgQ9", "MJ45uDi47y");
$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `items` (
      `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(160) NOT NULL,
      `type` varchar(600) NOT NULL,
      `typeof` varchar(600) NOT NULL,
      `description` varchar(700) NOT NULL,
      `price` int(100) NOT NULL,
      `img` varchar(500) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");
$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `order` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) DEFAULT NULL,
      `name` varchar(16) NOT NULL,
      `price` int(11) NOT NULL,
      `ordered` int(11) NOT NULL,
      `addr` varchar(30) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) NOT NULL,
      `password` varchar(500) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");
?>

