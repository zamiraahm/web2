<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bueno Bistro</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login_register.css">
  <link rel="stylesheet" href="css/about.css">

</head>

<body>
  <?php
  include "components/header.php";
  include "php/aboutMapper.php";
  $mapper = new aboutMapper();
  $strings = $mapper->getAllInfo();
  ?>
  <main>
  <section class="about">
  <div class="main" id="about">
    <div class="abouttext">
      <h2><?php echo 'Serve you since 1975'; ?></h2><br>
      <br>
      <br>
      <p><?php echo 'Welcome to Bueno Bistro Restaurant'; ?></p>
      <br>
      <br>
      <h3><?php echo '&ldquo;Our restaurant was founded in 1975 in Italy, Rome located in the heart of downtown, this cozy restaurant offers a wide range of delicious dishes inspired by classic Italian cuisine. and has been serving delicious dishes made with fresh, locally-sourced ingredients ever since. From handmade pastas and wood-fired pizzas to succulent grilled meats and seafood, there is something for everyone on the menu. The restaurant boasts a warm and inviting atmosphere, with rustic wood d&eacute;cor and soft lighting creating a cozy and romantic ambiance. Whether you\'re in the mood for a romantic dinner for two or a casual meal with friends, this restaurant is the perfect choice. The attentive and friendly staff are always on hand to ensure a memorable dining experience. Be sure to save room for dessert &ndash; the tiramisu and gelato are not to be missed!&rdquo;'; ?></h3>
    </div>
  </div>
</section>

  </main>
  <?php
  include "components/footer.php";
  ?>

</body>

</html>