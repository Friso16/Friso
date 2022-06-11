<html>
<style>
table {
    margin:5px;
    width:47%;
}
.tabel2 { 
    float:right;
}
table, tr, th, td {
    border:1px solid black;
    border-collapse:collapse;
    }
tr {
    margin:2px 
}
</style>
<header>
</header>
<body>
<?php

$db = mysqli_connect("localhost", "frisoebber_friso", "Fe140989", "frisoebber_icvi");
$q1 = "SELECT * FROM `Reservingen`";
$q2 = "SELECT * FROM `Apparatuur`";
$r1 = mysqli_query($db,$q1);
$r2 = mysqli_query($db,$q2);
if ($r1) {
    echo "Tabel Reserveringen";
} else {
    echo "connection failed";
}
mysqli_close($db);

?>
<section>
    <table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Uur</th>
        <th>Lokaal</th>
        <th>Apparatuur</th>
    </tr>
    <?php foreach ($r1 as $element) { ?>
    <tr>
        <td><?=$element["ID"]?></td>
        <td><?=$element["Naam"]?></td>
        <td><?=$element["Uur"]?></td>
        <td><?=$element["Lokaal"]?></td>
        <td><?=$element["Apparatuur"]?></td>
    </tr>
    <?php } ?>
    </table>
    <table class="tabel2">
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Bijzonderheden</th>
    </tr>
    <?php foreach ($r2 as $element) { ?>
    <tr>
        <td><?=$element["ID"]?></td>
        <td><?=$element["Naam"]?></td>
        <td><?=$element["Bijzonderheden"]?></td>
    </tr>
    <?php } ?>
    </table>
</section>
</body>
</html>