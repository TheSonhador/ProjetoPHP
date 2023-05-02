<?php 
    include_once 'header.php';
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-4 m-auto py-3 rounded wrapper">
            <h2 class="text-center py-2">Entre Agora</h2>
            <!--Form start-->
            <form action="includes/login.inc.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username/Email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-success">Entrar</button>
                    <p class="text-center mt-2">
                        Se não tiver uma conta ainda <a href="signup.php"> Cadastre Agora </a>
                    </p>
                </div>
            </form>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='text-center fw-semibold text-danger'>Preencha todos os campos!</p>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<p class='text-center fw-semibold text-danger'>Informação de login incorreta!</p>";
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php
    include_once 'footer.php';
?>