<?php
declare(strict_types=1);

include "include/header.php";

$products = [
    "Hinata Roll" => ["price" => 50, "stock" => 8],
    "Kageyama Rice" => ["price" => 60, "stock" => 15],
    "Tsukishima Tea" => ["price" => 45, "stock" => 5],
    "Nishinoya Ramen" => ["price" => 70, "stock" => 20],
    "Kenma Balls" => ["price" => 55, "stock" => 12],
    "Oikawa Milktea" => ["price" => 65, "stock" => 7],
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $stock): float {
    return $price * $stock;
}

function get_tax_due(float $price, int $stock, int $tax = 0): float {
    return ($price * $stock) * ($tax / 100);
}
?>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value (Php)</th>
        <th>Tax Due (Php)</th>
    </tr>

    <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= $product_name; ?></td>
            <td><?= $data['stock']; ?></td>
            <td><?= get_reorder_message($data['stock']); ?></td>
            <td><?= number_format(get_total_value($data['price'], $data['stock']), 2); ?></td>
            <td><?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include "include/footer.php"; ?>
