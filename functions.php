<?php

   //require MYSQL Connection
   require('database/DBController.php');

   //require Product Class
   require('database/Product.php');

   // require Cart Class
   require ('database/Cart.php');      


   $db = new DBController();


   //Product object
   $Product = new Product($db);
     $product_shuffle = $Product->getData();

   // Cart object
   $Cart = new Cart($db);