<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}
?>


<?php
include './includes/cabecalhoOrgao.php';
include './includes/menuSuperior-Inicial-SuperAdmin.php';
include './includes/menuLateral-Inicial-SuperAdmin.php';
?>




<?php
//NOTIFICAÇÃO PARA OPERAÇÃO DE ATUALIZAÇÃO DO SISTEMA

if (isset($_SESSION['mensagemAtualizacao'])) {
    //echo $_SESSION['mensagem'];
    if (($_SESSION['mensagemAtualizacao'])) {
        echo "<script>mensagemAtualizacao();</script>";
    }
    unset($_SESSION['mensagemAtualizacao']);
}


if (isset($_SESSION['mensagemAdicionado'])) {
    //echo $_SESSION['mensagem'];
    if (($_SESSION['mensagemAdicionado'])) {
        echo "<script>mensagemAdicionado();</script>";
    }
    unset($_SESSION['mensagemAdicionado']);
}


if (isset($_SESSION['mensagemAdicionadoCampoVazio'])) {
    echo "<script>mensagemAdicionadoErro();</script>";
    unset($_SESSION['mensagemAdicionadoCampoVazio']);
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 901px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 hidden="true">
            Gereciamento de Órgãos 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo URL_BASE; ?>administracao.php"><i class="fa fa-dashboard"></i> Início</a></li>
            <li class="active">Órgão</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable ui-sortable">
                <br>
                <div class="row">
                    <div class="col-xs-8">
                        <form id="formAdicionarOrgao" name="formAdicionarOrgao" class="form-inline" method="POST" action="orgaoController.php">

                            <div class="form-group mx-sm-3 mb-2">

                                <label for="inputBotaoOrgao" class="sr-only">Nome</label>
                                <input name="nomeOrgao" type="text" class="form-control" id="inputBotaoOrgao" placeholder="Nome">
                            </div>
                            <input name="botaoOrgao" type="submit" class="btn btn-success mb-2" value="Adicionar"/>
                        </form>

                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header"></div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="orgao" class="table table-striped table-bordered" cellspacing="0" width="70%" style="text-align: center;" >
                                    <thead>
                                        <tr>

                                            <th>Nome</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require './OrgaoDao.php';
                                        $orgao = new OrgaoDAO();
                                        $resultado = $orgao->buscarTodos();

                                        foreach ($resultado as $coluna) {
                                            echo "<tr>";
                                            echo "<td id='{$coluna['idOrgao']}'>" . $coluna['nome'] . "</td>";
                                            echo "<td>"
                                            . "<button type='button'  data-toggle='modal' data-target='#modalAtualizar'  class='btn btn-warning btn-xs' onclick = 'inserirModal({$coluna['idOrgao']});'>"
                                            . "<i class='fa fa-pencil'></i> " . "Editar"
                                            . "</button> "
                                            . "<button id='{$coluna['idOrgao']}' type='button' class='btn btn-danger btn-xs' onclick = 'alert(this.id)'>"
                                            . "<i class='fa fa-trash'></i> " . " Exluir"
                                            . "</button>"
                                            . ""
                                            . "</td>";

                                            echo " </tr>";
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="modalAtualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edição de Órgão</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="formAtualizarOrgao" name="formAtualizarOrgao" method="POST" action="orgaoController.php">
                                                    <div class="form-group">
                                                        <!--<label for="recipient-name" class="col-form-label">Código:</label>-->
                                                        <input id="idOrgaoAtualizar" name="idOrgaoAtualizar" type="hidden"  class="form-control"  readonly="true">

                                                        <label for="message-text" class="col-form-label">Nome:</label>
                                                        <input id="nomeOrgaoAtualizar" name="nomeOrgao" type="text" class="form-control">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <input type="submit" id="btnAtualizarOrgao" name="botaoOrgao"  class="btn btn-success" value="Atualizar">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>




<?php
include './includes/rodapeOrgao.php';
?>