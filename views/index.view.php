<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require('partials/nav.php'); ?>
    <ul>

      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if($task->completed) : ?>
            <strike><?= $task->description; ?></strike>

          <?php else: ?>
            <?= $task->description; ?>
          <?php endif; ?>

        </li>
      <?php endforeach; ?>

    </ul>
  </body>
</html>
