<?php
include '../AgendaReuniao/configuracoes.php';
?>



<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <!-- 
        <div class="user-panel">
          <div class="pull-left image">
             <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Usuário </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        -->
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">GERENCIAMENTO</li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-institution text-green"></i>
                    <span>Órgão</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?php echo URL_BASE; ?>orgao.php"><i class="fa fa-plus text-green"></i>Adicionar</a></li>
                    <li><a href="<?php echo URL_BASE; ?>orgao.php"><i class="fa fa-search text-aqua"></i>Buscar</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-reorder text-orange"></i>
                    <span>Setor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-plus text-green"></i>Adicionar</a></li>
                    <li><a href="#"><i class="fa fa-search text-aqua"></i>Buscar</a></li>
                </ul>
            </li>





            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home text-yellow"></i>
                    <span>Sala</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-plus text-green"></i>Adicionar</a></li>
                    <li><a href="#"><i class="fa fa-search text-aqua"></i>Buscar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user text-blue"></i>
                    <span>Usuario</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-plus text-green"></i>Adicionar</a></li>
                    <li><a href="#"><i class="fa fa-search text-aqua"></i>Buscar</a></li>
                </ul>
            </li>




            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Ajuda</span></a></li>
            <li class="header">RELATÓRIOS</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-pdf-o text-red"></i>
                    <span>Relatórios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-file-o text-red"></i>Usuários</a></li> 
                    <li><a href="#"><i class="fa fa-file-o text-red"></i>Órgãos</a></li> 
                    <li><a href="#"><i class="fa fa-file-o text-red"></i>Setores</a></li> 

                    <li><a href="#"><i class="fa fa-file-o text-red"></i>Salas para Reserva</a></li> 
                    <li><a href="#"><i class="fa fa-file-o text-red"></i>Reservas da Semana</a></li> 



                </ul>
            </li>



            <li><a href="#"><i class="fa  fa-power-off text-red"></i> <span>Sair</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Sobre</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>