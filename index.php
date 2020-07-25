<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashish</title>
</head>
<body>
<h1>Ashish</h1>
<?php
$stuff = array('course' => 'PHP-Intro', 'topic' => 'Arrays');
echo isset($stuff['section']);
echo $stuff['course'];
?>

<p> The SHA256 hash of "Ashish"is 
<?php
print hash('sha256', 'Ashish');
?>
</p>
<pre>
"ASCII ART:

            ** **
           **   **
          **     **
         **       **
        ** ******* **
       **           **
      **             **
     **               **
"
<a href="check.php">Click here to chech the error setting</a>
<br>
<a href="fail.php">Click here to cause a traceback</a>
</pre>
</body>
</html>