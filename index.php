<html style="font-size: 16px;">
<head>
<style>
table {
    margin:5px;
    width:47%;
}
.tabel {
    float:right;
}
.submit { 
    margin-top:10px;
}
table, tr, th, td {
    border:1px solid black;
    border-collapse:collapse;
    }
tr {
    margin:2px 
}
</style>
<?php

$db = mysqli_connect("localhost", "frisoebber_friso", "Fe140989", "frisoebber_icvi");
$q1 = "SELECT * FROM `Reservingen`";
$q2 = "SELECT * FROM `Apparatuur`";
$r1 = mysqli_query($db,$q1);
$r2 = mysqli_query($db,$q2);

if ($r) {
    echo "Tabel Reserveringen";
} else {
    echo "connection failed";
}

mysqli_close($db);
?>
    <table>
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
    </table>
    </section>
    <table class="tabel">
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
    </table>

    <form action="insert.php" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam"><br>
    <label for="uur">Uur:</label><br>
    <input type="text" id="uur" name="uur"><br>
    <label for="lokaal">Lokaal:</label><br>
    <input type="text" id="lokaal" name="lokaal"><br>
    <label for="apparatuur">Apparatuur:</label><br>
    <input type="text" id="apparatuur" name="apparatuur"><br>
    <input class="submit" type="submit" value="Submit">
</form>
<?php } ?>
</body>
</html>