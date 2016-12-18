<?php
/*
  Template Name: Opskriftsside
 */


get_header();

$serverName = "localhost";
$usrName = "spisetid-admin";
$pass = "minimum64D.";
$dbName = "spisetid";

$conn = mysqli_connect($serverName, $usrName, $pass, $dbName);
$opskriID = 3;
$query = "SELECT id, navn, kategori, antal, fremgangsmaade, importurl, imageurl FROM opskrifter WHERE id = " . $opskriID;
$data = mysqli_query($conn, $query);
$savedData = mysqli_fetch_all($data, MYSQLI_ASSOC);

$queryIng = "SELECT ing_num, ing_meas, ing_name FROM ingredienser WHERE opskrifterid = " . $opskriID;
$ingredientData = mysqli_query($conn, $queryIng);
$ingredientDataSaved = mysqli_fetch_all($ingredientData, MYSQLI_ASSOC);
mysqli_close($conn);
?>

<div class="container">
    <div class="row-fluid">
        <div class="span10 offset1">
            <div class="row">
                <table class="table table-borderless">
                    <tbody>
                        <tr><?php
                            foreach ($savedData as $i => $info) {
                                ?>
                                <td>
                                    <h2><?php echo $info['navn']?></h2>
                                    </br>Mad til <b><?php echo $info['antal']?></b> personer</br>
                                    Kategori: <b><?php echo $info['kategori']?></b>
                                </td>
                                <td><div class="offset2"><img src=<?php echo $info['imageurl']?>></div></td>
                            </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4 offset1">
            <table class="table table-borderless">
                <tr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ingredienser</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ingredientDataSaved as $i => $ingredient) {
                            ?>
                            <tr>
                                <td><?php echo $ingredient['ing_num'] ?></td>
                                <td><?php echo $ingredient['ing_meas'] ?></td>
                                <td><?php echo $ingredient['ing_name'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                </tr>
        </div>
        <div class="span5 offset1">
            <tr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Fremgangsmåde</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php
                        foreach ($savedData as $i => $recipe) {
                            ?>
                            <td><?php echo $recipe['fremgangsmaade'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            </tr>
        </div>
        </table>
    </div>
</div>
</div>
<?php get_footer(); ?>