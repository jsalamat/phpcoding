<?php

echo  nl2br ("http://localhost:81/05_mixing_php_html.php \n");
echo nl2br ("\n");
echo  nl2br ("-- Mixing PHP and HTML -- \n");
echo  nl2br (" \n");

//--------------------------------
/*
echo "<!DOCTYPE html>";
echo "<html>";
echo "  <head>";
echo "    <title>TitleName</title>";
echo "  </head>";
echo "  <body>";
echo "    <h1>heading</h1>";
echo "    <p>paragraph. blah blah <em>emphasis</em> blah </p>";
echo "    <a href='devdocs.io/html'>LinkTitle</a>";
echo "    <p> <em>emphasis</em> make it italics </p>";
echo "    <p> <strong>strong</strong> make it bold </p>";
echo "  </body>";
echo "</html>";
*/
?>

<?php
//---------------VS--------------
// Mixing php with html
// need create variable within
$name_a = "Echo Tag A";
$name_b = "Echo Tag B";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mixing PHP and HTML</title>
    <meta charset="utf-8">
  </head>
  <body>

    <h3>shorter echo tag</h3>
    <p>Original echo tag <em> <?php echo $name_a; ?></em> </p>
    <p>Shorter echo tag <strong> <?= $name_b; ?></strong> </p>

<?php
//--------------------------------------
// Alternative Control Structure Syntax
/*
HTML- <h1>Heading</h1>
PHP- <?php if (condition) {
        echo "<p>.............</p>";
      } ?>
HTML <p>more html</p>
//--------------------------------------
// This how you put php Control Structure into html code
//--------------------------------------
HTML- <h1>Heading</h1>
PHP- <?php if (condition): ?>
HTML-    <p>.............</p>
PHP- <?php endif;  ?>
HTML <p>more html</p>
//--------------------------------------
*/
// Example
?>
    <h3>Alternative Control Structure Syntax</h3>
    <?php
    $hour_a = 11;
    if ($hour_a < 12) {
      echo "Good Morning";
    } elseif ($hour_a < 18) {
      echo "Good Afternoon";
    } elseif ($hour_a < 22) {
      echo "Good Evening";
    } else {
      echo "Good Night";
    }
    ?>

    <p>This how you put php Control Structure into html code </p>
    <?php $hour_b = 24; ?>
    <p>Also is good practice to put php tag above html doc tag </p>
    <?php if ($hour_b < 12): ?>
      Good Morning
    <?php elseif ($hour_b < 18): ?>
      Good Afternoon
    <?php elseif ($hour_b < 22): ?>
      Good Evening
    <?php else: ?>
      Good Night
    <?php endif;    ?>
    <p>This can be applied to whileloop, forloop, etc</p>
    <p>Just need to apply closing brace to:</p>
    <ul>
      <li>endif</li>
      <li>endfor</li>
      <li>endforeach</li>
      <li>endswitch</li>
    </ul>

    <a href="htmlformatter.com">htmlformatter</a>
    <p>php coding recommened to use PSR-2 Standards</p>
    <a href="www.php-fig.org/psr/psr-1/">PHP-FIG</a>
    <a href="phpio.net/tools/csfixer">Online PHP Coding Standards Fixer</a>
    <a href="cs.sensiolabs.org">PHP Fixer</a>
    <!-- this is comment for html -->
    <?php
    // single line comment in php

    /*
      This for multiline comment
    */
     ?>
    </body>
</html>

<?php
/* Exercise
<?php
$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>

    <!-- put your code below this line -->
    <h1>Fruit</h1>
    <ol>
      <?php foreach($fruit as $f): ?>
          <li><?= $f ?></li>
      <?php endforeach; ?>
    </ol>

    </body>
</html>

//------------OR-------------------
<ol>
<?php for($i = 0; $i < count($fruit); $i++): ?>

    <li> <?php echo $fruit[$i] ?> </li>

<?php endfor; ?>
</ol>
