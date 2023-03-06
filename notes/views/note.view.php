<?php require "partials/head.php"; ?>

  <?php require "partials/navigation.php"; ?>

  <?php require "partials/header.php"; ?>    

  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

  <div>
    <?= $note['body'] ?>
  </div>

  <a href="/notes">go back</a>

<?php require "partials/footer.php"; ?>    

