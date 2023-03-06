<?php require "partials/head.php"; ?>

  <?php require "partials/navigation.php"; ?>

  <?php require "partials/header.php"; ?>    

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
          <?= $note['body'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

<?php require "partials/footer.php"; ?>    

