<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Praktikum 1</h2>

<?php 
$fruits = ["mango", "banana", "melon", "orange"];

echo $fruits[1];
echo "<br>";
echo "jumlah buah = " . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
    echo "<li>Buah " . $fruit . "</li>";


}
echo "</ol>";


$fruits[] = "avocado";
$fruits[2] = "strawberry";

echo "<ol>";
foreach ($fruits as $i => $v)  {
    echo "<li>buah index ke-" . $i . " = " . $v . "</li>";
}
echo "</ol>";



?>

<?php
require_once 'footer.html';

?>