<?php 
    include_once 'header.php';
?>

<main>
    <div class="container d-flex justify-content-center">
        <?php
            if (isset($_SESSION["userUsername"])) {
                echo "<img src='./assets/img/huehue.gif' width='200' height='200'>";
            } else {
                echo "<img src='./assets/img/hello.png' width='200' height='200'>";
            }
        ?>
    </div>
</main>

<?php
    include_once 'footer.php';
?>