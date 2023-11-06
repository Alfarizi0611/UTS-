<h2 style="text-align: left;">Tabel Harga Barang</h2>
<?php
//A.Tabel Jumlah

$produk = array(
    array("Pepsodent", 20, 10000),
    array("Sunlight", 15, 11000),
    array("Baygon", 10, 16000),
    array("Dove", 18, 22000),
    array("Rinso", 15, 20000),
    array("Downy", 20, 11500),
    array("Le Mineral", 25, 5000)
);


echo "<table border ='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";


$total = 0;
foreach ($produk as $key => $item) {
    $jumlah = $item[1] * $item[2];
    $total += $jumlah;
    echo "<tr>";
    echo "<td>" . ($key+1) . "</td>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . $item[2] . "</td>";
    echo "<td>" . $jumlah . "</td>";
    echo "</tr>";
}

echo "<tr>";
echo "<td colspan='4'>Total</td>";
echo "<td>" . $total . "</td>";
echo "</tr>";
echo "</table>";


?>