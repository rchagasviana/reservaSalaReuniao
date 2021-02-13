<?php
session_start();
?>

<?php
include './includes/cabecalhoLogin.php';
?>



<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><h3><b>Acesso Restrito</b></h3></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Entre para iniciar sua sessão</p>

            <?php
            if (isset($_SESSION['mensagem'])) {
                //echo $_SESSION['mensagem'];
                    if($_SESSION['mensagem'] == 0){
                        echo "<script>mensagemErroLogin();</script>";
                    } else if($_SESSION['mensagem'] == 1){
                        echo "<script>mensagemErroLoginBranco();</script>";
                    }
                
                unset($_SESSION['mensagem']);
            }
            ?>
            <form  id="loginform"  name="loginform" class="form-vertical" method="POST" action="login.php">
                <div class="form-group has-feedback">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário">
                </div>



                <div class="form-group has-feedback">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                </div>



                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" id="btLogin" name="btLogin" class="btn btn-success btn-block btn-flat" value="Entrar"/>
                    </div>
                </div>
            </form>


            <!-- /.social-auth-links -->

            <a href="#">Esqueceu sua senha?</a><br>
            <a href="#" class="text-center">Resgistre-se</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->



  



    <?php
    include './includes/rodapeLogin.php';
    ?>