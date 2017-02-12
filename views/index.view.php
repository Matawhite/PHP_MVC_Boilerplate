<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/about/culture">About Culture</a>
    <hr>
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
