<h2 style="text-align: left;">Struk Jumlah dan Diskon </h2>
<?php

// B.Diskon
$tanggal = "06 November 2023";
$produk1 = "Pepsodent (2X10.000)";
$produk2 = "Rinso (1X20.000)";
$produk3 = "Dove (2X22.000)";
$total_belanja = 2 * 10000 + 1 * 20000 + 2 * 22000;


if ($total_belanja >= 100000) {
    $diskon = 0.2 * $total_belanja;
} elseif ($total_belanja >= 50000) {
    $diskon = 0.1 * $total_belanja;
} else {
    $diskon = 0;
}
$total_pembayaran = $total_belanja - $diskon;
?>

<table border='1'  cellspacing="0">
    <tr>
        <td>Tanggal Transaksi : </td>
        
        <td><?php echo $tanggal; ?></td>
    </tr>
    <tr>
        <td>Produk : </td>
        
        <td><?php echo $produk1; ?></td>
    </tr>
    <tr>
        <td></td>
        
        <td><?php echo $produk2; ?></td>
    </tr>
    <tr>
        <td></td>
        
        <td><?php echo $produk3; ?></td>
    </tr>
    <tr>
        <td>Total : </td>
        
        <td><?php echo $total_belanja; ?></td>
    </tr>
    <tr>
        <td>Diskon : </td>
        
        <td><?php echo $diskon; ?></td>
    </tr>
    <tr>
        <td>Total Pembayaran : </td>
        
        <td><?php echo $total_pembayaran; ?></td>
    </tr>
</table>