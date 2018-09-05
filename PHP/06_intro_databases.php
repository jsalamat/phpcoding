<?php

echo  nl2br ("http://localhost:81/06_intro_databases.php \n");
echo nl2br ("\n");
echo  nl2br ("-- Introduction to Databases -- \n");
echo  nl2br ("\n");

$articles = [
    [
      "title" => "First post",
      "content" => "This is the first of many posts!"
    ],
    [
      "title" => "Another post",
      "content" => "Yet another fascinating post...!"
    ],
    [
      "title" => "Read this!",
      "content" => "You must read this now!"
    ],
    [
      "title" => "The latest news!",
      "content" => "Here's the latest news!"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mixing PHP and HTML</title>
    <meta charset="utf-8">
</head>
<body>

  <header>
      <h1>My Blog</h1>
  </header>

  <main>
      <ul>
          <?php foreach ($articles as $blog): ?>
            <li>
              <article>
                <h2>  <?= $blog['title']; ?>  </h2>
                <p>  <?= $blog['content']; ?>  </p>
              </article>
            </li>
          <?php endforeach; ?>
      </ul>
  </main>


</body>
</html>
