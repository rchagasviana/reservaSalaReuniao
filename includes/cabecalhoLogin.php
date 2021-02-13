<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agenda Reunião</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
       
         <!-- ARQUIVOS ÚTEIS PARA SISTEMA DE NOTIFICAÇÃO -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="bower_components/extra/wnoty.css">
        <script src="bower_components/extra/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bower_components/extra/wnoty.js"></script>

        <script>

            function mensagemErroLogin() {
                $.wnoty({
                    type: 'error',
                    message: 'Erro - Verifique seu usuário e senha',
                    autohideDelay: 5000


                });
            }
            
            function mensagemErroLoginBranco() {
                $.wnoty({
                    type: 'warning',
                    message: 'Atenção - Preencha os campos!',
                    autohideDelay: 5000


                });
            }
        </script>





        <!-- 
            MENSAGEM DE NOTIFICAÇÃO TIPO 2 - RETIRADA DO SOFTWARE, MAS FUNCIONA
               <script src="bower_components/extra/jquery-1.11.1.min.js"></script>
               <script src="bower_components/extra/alert.js"></script>
               <script type="text/javascript">
                   function mensagemErroLogin() {
                       $.alert('Login e Senha incorretos!!', {
                           title: 'Erro',
                           closeTime: 3000,
                           autoClose: '1',
                           position: ['top-right'],
                           // withTime: '0',
                           type: 'danger'
                                   // isOnly: !$('#isOnly').is(':checked')
                       });
                   }
               </script>
        -->




    </head>