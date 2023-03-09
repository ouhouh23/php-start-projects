<?php require "views/partials/head.php"; ?>

  <?php require "views/partials/navigation.php"; ?>

  <?php require "views/partials/header.php"; ?>    
  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

  <div>
    <?= htmlspecialchars($note['body'])?>
  </div>

  <a href="/notes">go back</a>

<?php require "views/partials/footer.php"; ?>    

