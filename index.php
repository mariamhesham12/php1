<?php
foreach (range('A','Z') as $letters){
    echo $letters." ";
}

$current= 'A';
// $next= ++$current;

echo "<br>"."The current = ".$current."<br>";
echo "The next = ".++$current."<br>";



$string='https://ieee-bub.com/about.php';
$exploded=explode("/",$string);
echo end($exploded);

?>

