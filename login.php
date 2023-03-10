<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN | Eletroninho</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');

body{
    margin: 0;
    
}

body * {
    box-sizing: border-box;

}
.main-login{
    width: 100vw;
    height: 100vh;
    background: #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(194, 193, 193);
}
.left-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.left-login-img{
    width: 35vw;

}
.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card-login{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    background: #cccccc;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #0000001f;
}
.card-login > h1{
    color: rgb(119, 119, 119);
    font-weight: 600;
    letter-spacing: 3px;
    margin: 0;
    font-family: 'Questrial', sans-serif;
}
.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;

}
.textfield input{
    width: 100%;
    border:none;
    border-radius: 10px;
    padding: 15px;
    background: #ffffffb2;
    color:#979797de;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none ;
    box-sizing: border-box;
    font-family: 'Questrial', sans-serif;
}

.textfield label{
    color: rgb(119, 119, 119);
    font-family: 'Questrial', sans-serif;
    letter-spacing: 1px;

}

.textfield input::placeholder{
    color: #8a8a8a94;
}

.btn-login{
    width: 70%;
    padding: 16px 0px;
    margin: 25px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    color: #8a8a8abb;
    background-color: rgba(133, 133, 133, 0.603);
    cursor: pointer;
}
.btn-login:hover{
    background:#fff;
    color: #4d4d4d;
    border: 1px solid #4d4d4d;
}
@media only screen and (max-width:950px){
    .card-login{
        width: 85%;
    }
}

@media only screen and (max-width:600px){
    .main-login{
      flex-direction: column;
    }
    .left-login{
        width: 100%;
        height: auto;
    }
    .right-login{
        width: 100%;
        height: auto;
    }
    .left-login-img{
        width: 50vh;
}
.card-login{
    width: 90%;

}

}
	</style>
</head>
<body>
    <div class="main-login">
          <div class="left-login">
          <form action="painel.html">
            <img src="img/tecnico.svg" class="left-login-img"alt="tecnc">
 
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>ELETRONINHO</h1>
                <BR></BR>
                <div class="textfield">
                    <label for="usuario">Usu??rio</label>
                    <input type="
                    text" name="usuario" placeholder="Usu??rio">                   
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">                   
                </div>
                <input type="submit" class="btn-login" value="ENTRAR">
                </div>

            </div>
        </div>
    </div>
			<?php
           		/* Declara????o de Vari??veis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declara????o das vari??veis que possuem os usuarios e as senhas */
				$user1 = 'teste';
				$pass1 = '123';
				
				$user2 = 'teste1';
				$pass2 = '1';
				
        				/* Testa se o bot??o submit foi ativado */
				if($submit){
					
					/* Se o campo usu??rio ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script> alert('Por favor, preencha todos os campos!')</script>";
					}
					/* Caso o campo usuario e senha n??o 
						*estejam vazios vamos testar se o usu??rio e a senha batem 
					*iniciamos uma sess??o e redirecionamos o usu??rio para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.html");
						}
						/* Se o usuario ou a senha n??o batem alertamos o usuario */
						else{
							echo "<>alert('Usu??rio e/ou senha inv??lido(s), Tente novamente!');</>";
						}
					}
				}
			?>
	</body>
</html>			