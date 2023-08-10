<!doctype html>
<html lang="en">
    <!-- Head. -->
    <head>
        <!-- Bootstrap call. --> 
        <?php
        include_once('bootstrap.php');
        ?>
        <!-- Title. -->
        <title>Edit/Delete - AT2 Sprint 1</title>
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>
        <div class="container-fluid">
            <!-- Heading. -->
            <h2>Edit or Delete a Painting</h2>
            <?php
            $statement = "SELECT * FROM paintings";
            //Calling Table
            include_once('paintings_table_edit.php');
            ?>
        </div>
    </body>
</html>
