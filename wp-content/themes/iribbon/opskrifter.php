<?php
/*
  Template Name: Opskrifter
 */


get_header();
?>
<div class="container">
    <div class="row">
        <div class="span10 offset1">
            <h1>Opskrifter </h1>
            <p class="lead">Her kan du finde alle sidens opskrifter...</p>
            <?php
            $serverName = "localhost";
            $usrName = "spisetid-admin";
            $pass = "minimum64D.";
            $dbName = "spisetid";

            $conn = mysqli_connect($serverName, $usrName, $pass, $dbName);

            $query = "SELECT navn, kategori, imageurl FROM opskrifter";
            $data = mysqli_query($conn, $query);
            $savedData = mysqli_fetch_all($data, MYSQLI_ASSOC);
            mysqli_close($conn);
            ?>
            <table class="table" >
                <thead>
                    <tr>
                        <th>Navn</th>
                        <th>Kategori</th>
                        <th>Billede</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($savedData as $i => $recipe) {
                        ?>
                        <tr>
                            <td><?php echo $recipe['navn'] ?></td>
                            <td><?php echo $recipe['kategori'] ?></td>
                            <td><?php
                                $pic = $recipe['imageurl'];
                                $pic = explode("_", $pic)[0];
                                ?><img src="<?php echo $pic . "_97.jpg" ?>"></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>