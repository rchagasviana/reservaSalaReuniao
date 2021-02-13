<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}
?>


<?php
include './includes/cabecalho-Inicial-SuperAdmin.php';
include './includes/menuSuperior-Inicial-SuperAdmin.php';
include './includes/menuLateral-Inicial-SuperAdmin.php';
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 901px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gerenciamento Administrativo

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo URL_BASE; ?>administracao.php"><i class="fa fa-dashboard"></i> Início</a></li>
            <li class="active">Painel Administrativo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>3</h3>

                        <p>Reuniões da Semana</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Salas para Reserva</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>1</h3>

                        <p>Usuários Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais detalhes<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>20</h3>

                        <p>Setores Cadastrados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-navicon"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable ui-sortable">



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
include './includes/rodape-Inicial-SuperAdmin.php';
?>