<?php require "views/partials/head.php"; ?>

  <?php require "views/partials/navigation.php"; ?>

  <?php require "views/partials/header.php"; ?>    

  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

  <ul>
    <?php foreach ($notes as $note): ?> 
      <li>
        <a href="/note?id=<?= $note['id']?>">
          <?= htmlspecialchars($note['body']) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <p>
    <a href="note/create">Create a new note.</a>
  </p>

<?php require "views/partials/footer.php"; ?>    

