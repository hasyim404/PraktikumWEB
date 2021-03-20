<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
<body class="sb-nav-fixed">
    <?php
        include 'navbar.php';
    ?>
    <div id="layoutSidenav">
        <?php
            include 'sidenav.php';
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Ini adalah Dashboard</h1>
                    <?php
                        include 'maincontent.php';
                    ?>
                </div>
            </main>
            <?php
                include 'footer.php';
            ?>
        </div>
    </div>
    <?php
        require 'script.php';
    ?>
    
</body>
</html>