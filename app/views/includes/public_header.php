<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Online Store</title>
  <link rel="stylesheet" href="../resources/css/style.css" type="text/css">
</head>

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