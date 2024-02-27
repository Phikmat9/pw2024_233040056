<?php
echo date('j/n/Y');
echo "<br>";
echo date('l, d F Y'); 
echo "<br>";
echo date("l", time());
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date ( "l", mktime(0, 0, 0, 9, 25, 2004));
echo "<br>";
echo mb_language();
