<?php require "views/partials/head.php"; ?>

  <?php require "views/partials/navigation.php"; ?>

  <?php require "views/partials/header.php"; ?>    

  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

  <h1>Create a note</h1>

  <form method="POST">
    <div>
      <textarea name="body" placeholder="Type here, dummy."><?= $_POST['body'] ?? '' ?></textarea>
    </div>

    <?php if (isset($errors['body'])) : ?>
      <p><?= $errors['body']?></p>
    <?php endif; ?>

    <button type="submit">Create</button>
  </form>

<?php require "views/partials/footer.php"; ?>    

