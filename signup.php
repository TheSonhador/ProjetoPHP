<?php 
    include_once 'header.php';
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-4 m-auto py-3 rounded wrapper">
            <h2 class="text-center pt-2">Cadastre-se Agora</h2>
            <p class="text-center text-muted lead">É de Graça e Leva Apenas um Minuto</p>
            <!--Form start-->
            <form action="includes/signup.inc.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                    <input type="text" class="form-control" name="name" placeholder="Nome Completo">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" name="pwd" placeholder="Senha">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                    <input type="password" class="form-control" name="pwdrepeat" placeholder="Repetir Senha">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
                    <p class="text-center mt-2">
                        Já tem uma conta? <a href="login.php"> Entre aqui</a>
                    </p>
                </div>
            </form>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='text-center fw-semibold text-danger'>Preencha todos os campos!</p>";
                    } else if ($_GET["error"] == "invalidusername") {
                        echo "<p class='text-center fw-semibold text-danger'>Escolha um Username apropriado!</p>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<p class='text-center fw-semibold text-danger'>Escolha um email apropriado!</p>";
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p class='text-center fw-semibold text-danger'>Senhas não se condizem!</p>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<p class='text-center fw-semibold text-danger'>Algo deu errado, tente novamente!</p>";
                    } else if ($_GET["error"] == "usernametaken") {
                        echo "<p class='text-center fw-semibold text-danger'>Username já cadastrado!</p>";
                    } else if ($_GET["error"] == "none") {
                        echo "<p class='text-center fw-semibold text-success'>Cadastro realizado com sucesso!</p>";
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php
    include_once 'footer.php';
?>