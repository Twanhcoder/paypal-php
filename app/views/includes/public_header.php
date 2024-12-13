<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Online Store</title>
  <link rel="stylesheet" href="/resources/css/style.css" type="text/css">
</head>

<style>
  body {
    margin: 0;
    padding: 20px;
    background-color: #eee;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
  }

  #wrapper {
    margin: 0 auto;
    padding: 30px;
    width: 900px;
    background-color: #fff;
  }

  #wrapper h1 {
    margin: 0;
    padding: 30px;
    background-color: green;
    color: #fff;
    font-size: 34px;
  }

  .secondary-nav {
    text-align: right;
    margin: 0 0 10px 0;
  }

  .nav {
    overflow: hidden;
    margin: 0;
    padding: 0;
    list-style: none;
    background-color: #108000;
  }

  .nav li {
    float: left;
    border-right: 1px solid #fff;
  }

  .nav li a {
    display: block;
    padding: 8px 30px;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
  }

  .nav li a:hover {
    background-color: #0e9900;
  }

  .nav li.active {
    background-color: #0e9909;
  }

  #content {
    min-height: 300px;
    padding: 30px;
  }

  #content h2 {
    font-size: 18px;
    margin-bottom: 20px;
    padding: 0;
  }

  #content .products {
    overflow: hidden;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  #content .products li {
    float: left;
    margin: 0 13px 30px 0;
  }

  #content .products li.last {
    margin-right: 0;
  }

  #content .products li img {
    border: 1px solid #ccc;
    margin-bottom: 4px;
    width: 200px;
    height: 200px;
  }

  #content .products li strong {
    font-size: 14px;
  }


  #content .button {
    display: inline-block;
    color: #fff;
    background-color: green;
    padding: 8px 20px;
    text-decoration: none;
    font-size: 13px;
    border: 0;
    margin-top: 10px;
  }

  #footer {
    padding: 20px 0 0 30px;
    border-top: 1px solid #ccc;
    font-size: 12px;
  }
</style>

<body>
  <div id="wrapper">
    <div class="secondary-nav">
      <strong>0 items</strong>&nbsp;|&nbsp;
      <a href="<?php echo SITE_PATH; ?>cart.php">Cart</a>
    </div>

    <h1><?php echo SITE_NAME; ?></h1>
    <ul class="nav">
      <li class="active"><a href="#">All items</a></li>
      <li><a href="#">Category 1</a></li>
      <li><a href="#">Category 2</a></li>
    </ul>