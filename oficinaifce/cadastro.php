
<?php
	require_once "config.php"; //aqui ela vai chamar  a pagina config
?>
<!doctype html>
<head>
	<title>Cadastro Oficinas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="css.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="jquery.maskedinput.min.js"></script>
	<script>
		$(function(){

			$("#cpf").mask("999.999.999-99");
			$("#telefone").mask("(99)9999.9999");
			$("#celular").mask("(99)9999.9999");
			$("#rg").mask("9999999999-9");
			$("#datanascimento").mask("99/99/9999");
			$("#cep").mask("99.999-999");
		});
	</script>	
	<style type="text/css">
body {
	background-image: url("fundo_transparente.png"),url("images.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size:850px 550px, 850px 1500px;

	}
</style>
</head>
<body bgcolor="#32CD32">

 <div id="titulo">
</div>
	<div id = "formulario">
	<p align="center" font-size="50px"><img src="IFCE-Campus-Fortaleza.png" width="300px"></p>
	<br><br>
	<h3><p align="center" font-size="150px" color="red"><font color="red">Preencha o Formulário de Cadastro</font></p></h3>
	
	<form method ="POST" action="?go=cadastrar">
		<p align="center" font-size="50px">
		Nome:<input type="text" name="nome" placeholder="Digite seu nome"required></br></br>
		
		CPF:<input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf" required></br></br >
	
		RG:<input type="text" name="rg" id="rg" placeholder="Digite seu rg"required>
		     UF:
		<select name="estado" id="uf"required>
			<option value="">--</option>
			<option value="AC">AC</option>
			<option value="AL">AL</option>
			<option value="AP">AP</option>
			<option value="AM">AM</option>
			<option value="BA">BA</option>
			<option value="CE">CE</option>
			<option value="DF">DF</option>
			<option value="ES">ES</option>
			<option value="GO">GO</option>
			<option value="MA">MA</option>
			<option value="MT">MT</option>
			<option value="MS">MS</option>
			<option value="MG">MG</option>
			<option value="PA">PA</option>
			<option value="PB">PB</option>
			<option value="PR">PR</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>
			<option value="RR">RR</option>
			<option value="SC">SC</option>
			<option value="SP">SP</option>
			<option value="SE">SE</option>
			<option value="TO">TO</option>
	 </select><br><br>
		Data Nascimento:<input type="text" name="datanascimento" id="datanascimento" placeholder="ex:  dd/mm/yyyy"required></br></br >
		Telefone:<input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone"></br></br>
		Celular:<input type="text" name="celular" id="celular" placeholder="Digite seu celular"required></br></br>
		Email:<input type="email" name="email" placeholder="Digite seu email"required></br></br >
		CEP:<input type="text" name="cep" id="cep" placeholder="Digite seu cep" required></br></br>
		Endereço:<input type="text" name="endereco" placeholder="Digite seu endereço"required></br></br >
		Número:<input type="text" name="numero" placeholder="Digite seu numero"required> Complemento:<input type="text" name="complemento"style="width:60px" ></br></br >
		Bairro:<input type="text" name="bairro" placeholder="Digite seu bairro"required></br></br >
		Cidade:<input type="text" name="cidade" placeholder="Digite sua cidade"required></br></br >
		
	<br>
		<h3><p align="center" font-size="50px"><font color="red">Você poderá se candidatar para até 03 (três) opções de oficinas. Sendo a primeira escolha às 13h00, <br>a segunda às 14h30 e a terceira às 16h00.</font><br>
	      <a href="Cronograma.pdf" title="Cronograma" target="_blank">visualize o cronograma</a><br></h3>
		
		<title></title>
	  <div id = "formulario1">
	<p align="center">Escolha sua Opção de Oficina:</br></br>
	
	<p align="center"><option value="">Selecione a 1º opção de Oficina as 13h00:</option>
		<select name="oficina1" id="of">
		<option value="">Escolha sua Opção</option>
		<option value="conhecendo a area de eventos">CONHECENDO A ÁREA DE EVENTOS</option>
		<option value="desenvolvendo tecnicas para o tcc">DESENVOLVENDO TECNICAS PARA O TCC</option>
		<option value="higiene e manipulacao de alimentos">HIGIENE E MANIPULAÇÃO DE ALIMENTOS</option>
		<option value="tecnicas de comunicacao oral:como falar em publico">TÉCNICAS DE COMUNICAÇÃO ORAL: COMO FALAR EM PÚBLICO</option>
		<option value="tecnicas de elaboracao de coqueteis">TÉCNICAS DE ELABORAÇÃO DE COQUETÉIS</option>
	 </select><br></p>
		</p>
	
	</div>
		
		<div id = "formulario2">
	
	<p align="center"><option value="">Selecione a 2º opção de Oficina as 14h30:</option>
		<select name="oficina2" id="of">
		<option value="">Escolha sua Opção</option>
		<option value="efetuandoreservas hoteleiras">EFETUANDO RESERVAS HOTELEIRAS</option>
		<option value="higiene e manipulacao">HIGIENE E MANIPULAÇÃO DE ALIMENTOS</option>
		<option value="tecnicas de comunicacao oral:como falar em publico">TÉCNICAS DE COMUNICAÇÃO ORAL: COMO FALAR EM PÚBLICO</option>
		<option value="relacoes interpessoais no mercado de trabalho">RELAÇÕES INTERPESSOAIS NO MERCADO DE TRABALHO</option>
		<option value="mise en place em restaurante">MISE EN PLACE EM RESTAURANTE</option>
	 </select><br>
		</p>
	
	</div>
		<div id = "formulario3">
	
	<p align="center"><option value="">Selecione a 3º opção de Oficina as 16h00:</option>
		<select name="oficina3" id="of">
		<option value="">Escolha sua Opção</option>
		<option value="dobradura de guardanapos">DOBRADURA DE GUARDANAPOS</option>
		<option value="mise en place em restaurante">MISE EN PLACE EM RESTAURANTE</option>
		<option value="panorama e processos de governanca hoteleira">PANORAMA E PROCESSOS DE GOVERNANÇA HOTELEIRA</option>
		<option value="tecnicas de cerimonial e protocolo aplicado a hotelaria">TÉCNICAS DE CERIMONIAL E PROTOCOLO APLICADO A HOTELARIA</option>
		
	 </select><br></p>
		</p>
	
	</div>
		
	<p align="center">	<input type="submit" value="Finalizar" name="fe"></p>
	</form>
	</div>	
	</body>
	
</html>
<?php   	
	if(@$_GET['go']=='cadastrar'){
	$nome = $_POST['nome'];
	$cpf =  $_POST['cpf'];
	$rg =  $_POST['rg'];
	$estado =  $_POST['estado'];
	$datanascimento =  $_POST['datanascimento'];
	$telefone =  $_POST['telefone'];
	$celular =  $_POST['celular'];
	$email =  $_POST['email'];
	$cep =  $_POST['cep'];
	$endereco =  $_POST['endereco'];
	$numero =  $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro =  $_POST['bairro'];
	$cidade =  $_POST['cidade'];
	$oficina1 =  $_POST['oficina1'];
	$oficina2 =  $_POST['oficina2'];
	$oficina3 =  $_POST['oficina3'];
		
			mysql_query("insert into aluno(nome,cpf,rg,estado,datanascimento,telefone,celular,email,cep,endereco,numero,complemento,bairro,cidade,oficina1_13h00,oficina2_14h30,oficina3_16h00)values('$nome','$cpf','$rg','$_POST[estado]','$datanascimento','$telefone','$celular','$email','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$_POST[oficina1]','$_POST[oficina2]','$_POST[oficina3]')");  
            echo"Usuario cadastrado com sucesso. Aguarde a confirmação via email pois ha um limte de 20 vagas para cada curso.";
            echo "<meta http-equiv='refresh' content='0, url=cadastro.php'>";     
	}
?>

