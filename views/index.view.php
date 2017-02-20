<?php require 'partials/nav.php'; ?>

<h1>Submit Your Name</h1>


<form method="POST" action="/names">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>

<ul>
<?php foreach ($users as $user) : ?>
  <li><?= $user->name; ?>
<?php endforeach; ?>
</ul>
