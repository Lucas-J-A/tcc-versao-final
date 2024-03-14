<!DOCTYPE html>
<html lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aula </title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">O.A Lógica</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Aula.html">Aulas</a></li>
                    <li><a href="Calculadora.html">Calculadora</a></li>
                    <li><a href="Gerador.html">Exercícios</a></li>
                    <li><a href="Contato.html">Contato</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--END NAV SECTION -->


    <!--CONTACT SECTION-->


    <section>
        <div class="container">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                    <div class="col-md-12 col-sm-12 alert-info">
                        <h4> Contato </h4>
                        <p>
                            Mande seu feedback para nós, elogio,críticas,mudanças sua opinião será bem vinda !
                        </p>

                    </div>
                </div>
            </div>


        </div>
        <div class="container">


            <form id="form1" name="form1" action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="input_contato form-control" placeholder="Escreve seu nome" required>



                </div>


                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" name="email" class="input_contato form-control" placeholder="Escreve seu Email" required>




                </div>

                <label>Assunto:</label>
                <input type="text" name="assunto" class="input_contato form-control" placeholder="Escreve o assunto" required>
                <div>
                    <div class="form-group">
                        <label>Mensagem:</label>
                        <textarea cols="5" rows="10" placeholder="Escreve sua mensagem" name="mensagem" class="form-control" required></textarea>




                    </div>
                    <div class="form-group left">

                        <input type="submit" value="Enviar Mensagem" name="enviar" class="btn_contato btn btn-primary">
                    </div>
                    <div class="form-group">
                        <input type="reset" value="Limpar Mensagem" name="limpar" class="btn_contato btn btn-primary">
                    </div>
                </div>
            </form>

        </div>

    </section>
    <?php 

	if(isset($_POST['enviar'])){
			  
      $nome 	= utf8_decode($_POST['nome']);
	  $email 	= utf8_decode($_POST['email']);
	  $assunto 	= utf8_decode($_POST['assunto']);
	  $mensagem = utf8_decode($_POST['mensagem']);   
	  $assuntoemail = 'Mensagem enviada pelo site O.A Lógica';   

	$subject  =   '=?UTF-8?B?'.base64_encode($assuntoemail).'?='; //pega os dados que foi digitado no ID subject.
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
	$headers .= "Content-type:text/html; charset=iso-8859-1";
 
/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/
 
       $corpo = '<b>Mensagem Enviada:</b> <br>';
	   $corpo .= '<b>Nome:</b> ' . $nome . '<br>';
	   $corpo .= '<b>Email do Remetente:</b> ' . $email . '<br>';
       $corpo .= '<b>Assunto: </b>' . $assunto . '<br>';
	   $corpo .= '<b>Mensagem:</b><br> ' . $email . '<br>';
      

       $email_to = 'lucas-65@bol.com.br'; //substitua este email pelo seu email do seu site.
 
    $status = mail($email_to, $subject, $corpo, $headers); //enviando o email.
 
    if($status) {
        echo "<script> alert('Mensagem enviada com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha ao enviar a mensagem. Tente novamente mais tarde.'); </script>"; //se houve algum erro de envio.
    }
	echo "<script> window.location.href = 'Contato.php'; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário, dei um exemplo do meu site.
	
	}
	
            ?>

        <div id="footer">
            Copyright 2016 TCC ©

        </div>

        <script src="assets/plugins/jquery.js"></script>
        <script src="assets/plugins/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery.isotope.min.js"></script>
        <script src="assets/plugins/jquery.prettyPhoto.js"></script>
        <script src="assets/js/custom.js"></script>

</body>

</html>
