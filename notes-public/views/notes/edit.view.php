<?php require view_path("/partials/head.php"); ?>

  <?php require view_path("/partials/navigation.php"); ?>

  <?php require view_path("/partials/header.php"); ?>    

  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

  <h1>Edit a note</h1>

  <form method="POST">
    <input type="hidden" name="_method" value="PATCH" />
    <input type="hidden" name="id" value="<?= $note['id']?>" />

    <div>
      <textarea name="body" placeholder="Type here, dummy."><?= $note['body'] ?></textarea>
    </div>

    <?php if (isset($errors['body'])) : ?>
      <p><?= $errors['body']?></p>
    <?php endif; ?>

    <button type="submit">Update</button>

    <a href="/notes">Cancel editing</a>
  </form>

  <form method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="_method" value="DELETE" />

    <button>delete note</button>
  </form>

<?php require view_path("/partials/footer.php"); ?>    

