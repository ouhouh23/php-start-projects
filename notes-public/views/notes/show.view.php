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

  <p>
    <a href="/notes">go back</a>
  </p>

  <form method="POST">
    <input type="hidden" name="id" value="<?= $id ?>" />

    <button>delete note</button>
  </form>

<?php require view_path("/partials/footer.php"); ?>    

