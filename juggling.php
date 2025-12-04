<?php
include "include/header.php";

echo '<link rel="stylesheet" href="css/styles.css">';

$food1 = "Hinata Rolls";
$food2 = "Kageyama Rice";
$food3 = "Tsukishima Tea";
$food4 = "Nishinoya Ramen";
$food5 = "Kenma Balls";
$food6 = "Oikawa Milktea";

$foods = [$food1, $food2, $food3, $food4, $food5, $food6];

echo "<h2>Available Haikyuu-Themed Foods</h2>";

foreach ($foods as $index => $food) {
    echo "<p>Item " . ($index + 1) . ": $food</p>";
}

echo "<hr>";

echo "<h2>Simulating Customer Orders</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "<div class='order-box'>";
    echo "<h3>Customer $i Order:</h3>";

    if ($i % 2 == 0) {
        echo "<p>Even customer - Ordering in reverse menu order:</p>";
        for ($j = count($foods) - 1; $j >= 0; $j--) {
            echo "<p>Ordered: {$foods[$j]}</p>";
        }
    } else {
        echo "<p>Odd customer - Ordering in normal menu order:</p>";
        foreach ($foods as $food) {
            echo "<p>Ordered: $food</p>";
        }
    }

    echo "</div>";
}

echo "<hr>";

echo "<h2>Food Descriptions</h2>";

foreach ($foods as $food) {
    if (str_contains($food, "Roll")) {
        echo "<p>$food - Sweet and energetic, just like Hinata.</p>";
    } elseif (str_contains($food, "Rice")) {
        echo "<p>$food - Bitter and serious, like Kageyama.</p>";
    } elseif (str_contains($food, "Tea")) {
        echo "<p>$food - Sharp and salty, exactly like Tsukishima’s attitude.</p>";
    } elseif (str_contains($food, "Ramen")) {
        echo "<p>$food - Spicy and bold, just like Nishinoya.</p>";
    } else {
        echo "<p>$food - No description available.</p>";
    }
}

echo "<hr>";

if (file_exists("include/footer.php")) {
    require "include/footer.php";
}
?>
