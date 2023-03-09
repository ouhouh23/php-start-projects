<?php require view_path("/partials/head.php"); ?>

  <?php require view_path("/partials/navigation.php"); ?>

  <?php require view_path("/partials/header.php"); ?>    

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

<?php require view_path("/partials/footer.php"); ?>    

