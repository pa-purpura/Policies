<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Paolo policies</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>

    <!-- navbar /completata/-->

    <div class="navbar">
      <div class="navbar_head">
        <div class="logo">
          <img src="googlelogo.png" alt="">
        </div>
        <div class="title">
          <h1>Règles de confidentialité et conditions d’utilisation</h1>
        </div>
      </div>
      <div class="navbar_foot">
        <div class="navbar_foot_left">
          <a href="#">Présentation</a>
          <a href="#">Règles de confidentialité</a>
          <a href="#">Conditions d’utilisation</a>
          <a href="#">Technologies</a>
          <a href="#">FAQ</a>
        </div>
        <div class="navbar_foot_right">
          <a href="#">Compte Google</a>

      </div>

      </div>

    </div>

    <!-- main content -->

      <div class="container">
        <div class="container_card">
          <?php foreach ($faqs as $faq) { ?>
             <div class="container_card_question">
               <h1><?php echo $faq['question'];?></h1>
             </div>
             <div class="container_card_answer">
               <h3><?php echo $faq['answer'];?></h3>
             </div>
          <?php } ?>
        </div>
      </div>

     <script src="main.js"></script>

  </body>
</html>
