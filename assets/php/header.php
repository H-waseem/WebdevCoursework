<?php

  // calculate file name - to put into the title/heading
  $filename = basename(dirname($_SERVER['SCRIPT_NAME']));

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title><?php echo $filename; ?> | Session 8 | Web Development</title>
  <link rel="stylesheet" href="../includes/screen.css" />
</head>
<body>
  <header>
    <h1>Example: <?php echo $filename; ?></h1>
    <h2>IN1010 - Web Development</h2>
    <h3>Week 8: PHP and MySQL</h3>
  </header>

  <article>
