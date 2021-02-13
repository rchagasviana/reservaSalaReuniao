<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versão</b> 1.0.1</div>
    <strong>Copyright © 2019 <a href="https://adminlte.io">Rafael Viana</a>.</strong> Todos direitos
    reservados.
</footer>

</div>




<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->








<script>
    $(document).ready(function ()
    {
        $('#orgao').dataTable({
            "oLanguage": {
                "sUrl": "dist/traducao/br.txt"
            },
            "sPaginationType": "full_numbers",
            "pagingType": "full_numbers",
            buttons: [
                'pdf'
            ]
            // "lengthMenu": [[10, 25, 50, 100], [3, 5, 15, "All"]],

            //pageLength: 7 //DEFINE A QUANTIDADE DE RESULTADOS POR PÁGINA
            //"displayStart": 25




        });
    });


    function inserirModal(id) {
        //CAPTURA O VALOR DO CAMPO DA COLUNA CONRRESPONDENTE AO ID PASSADO
        nome = document.getElementById(id).firstChild.nodeValue;

        document.getElementById('idOrgaoAtualizar').value = id;
        document.getElementById('nomeOrgaoAtualizar').value = nome;


    }





</script>


<!-- 

<script>

configuração para retorno Json
    $(document).ready(function ()
    {
        $('#orgao').dataTable({
            "oLanguage": {
                "sUrl": "dist/traducao/br.txt"
            },
            "sPaginationType": "full_numbers",
            "pagingType": "full_numbers",
            buttons: [
                'pdf'
            ],
             "ajax": "orgaoJson.php",
             "columns": [
            { "data": "idOrgao" },
            { "data": "nome" }
        ]

        });
    });
</script>

-->







</body>
</html>
