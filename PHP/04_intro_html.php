<?php

echo  nl2br ("http://localhost:81/04_intro_html.php \n");
echo nl2br ("\n");
echo  nl2br ("-- Intro to HTML -- \n");
echo  nl2br ("Intro \n");

$articles = [ "First post", "Another post", "Read this!" ];

if (empty($articles)) {
  echo "No articles found.";
} else {
  foreach ($articles as $article) {
    echo $article, ", ";
  }
}
echo nl2br ("\n");
/* index.html
<!DOCTYPE html>
<html>

  <head>
    <title>TitleName</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>heading</h1>
    <p>paragraph. blah blah <em>emphasis</em> blah </p>
    <a href="devdocs.io/html">LinkTitle</a>

    <p> <em>emphasis</em> make it italics </p>
    <p> <strong>strong</strong> make it bold </p>

    <h1>Undordered list</h1>
    <ul>
      <li>Undordered list item A</li>
      <li>Undordered list item B</li>
      <li>Undordered list item C</li>
    </ul>

    <h1>Ordered list</h1>
    <h4>with sublist created by nesting another list</h4>
    <ol start="3">
      <li>Ordered list item A</li>
      <li>Ordered list item B</li>
        <ol start="3">
          <li>Ordered sublist A</li>
          <li>Ordered sublist B</li>
          <li>Ordered sublist c</li>
        </ol>
      <li>Ordered list item c</li>
    </ol>

    <img src="images/photo.jpg" alt="alt use to describe image">

    <a href="devdocs.io/html" title=" title when hover over the link">Hyperlink Title, can be text or image</a>

//--------------------------------
    // Header

    // Navigation Links

    // Main content
    //  - Articles
    //  - Subheading
    //  - content

    // Related

    // Footer

//-------------------------------
<header></header>
<nav></nav>
<main>
  <article></article>
  <section></section>
  <aside></aside>
</main>
<footer></footer>

<div></div>
<span></span>

  </body>

</html>
*/

// HTML
