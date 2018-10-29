<?php
	// Criar variáveis
	$date = new DateTime('2000-01-01');
	$id_veiculo			=(Int) $_POST["id_veiculo"];
	$id_cliente			= (int) $_POST["id_cliente"];
	$tipo_de_serviço			=(string) $_POST["tipo_de_serviço"];
	$hora_agendamento		= (time($time)) $_POST["hora_agendamento"];
	$dia_do_agendamento			= (date($date)) $_POST["dia_do_agendamento"];
	$obs			= (string) $_POST["obs"];
	
	
	// validar dados
	if ( strlen($id_cliente) <2 )
		die("Informe um codigo de cliente valido.");
	if ( strlen($id_veiculo) <2 )
		die("Informe um codigo de veiculo valido.");
	
	if ( $tipo_de_serviço == "" )
		die("Escolha um serviço!");
	
	if ( $hora_agendamento == "")
		die("Por favor escolha um horario de agendamento");

	if ( $dia_do_agendamento == "")
		die("Por favor escolha uma data de agendamento");

	
	// exibir dados
	echo "<h2>Dados Recebidos</h2>";
	echo "codigo do cliente: $id_cliente<br>"
	echo "codigo do veiculo: $id_veiculo<br>";
	echo "serviço selecionado: $tipo_de_serviço <br>";
	echo "hora do agendamento: $hora_agendamento<br>";
	echo "dia do agendamento: $dia_do_agendamento<br>";
	echo "observações: $obs <br>";
	
/* 3 – Transferência dos arquivos da pasta temporária para a  
          pasta criada arquivos. Arquivo da foto veio? 
      Vamos conferir. Não queremos transferir algo que não veio.
   */
   if( ($foto <> "") and ($tamanho > 0) )
   {
       $destino = "Arquivos/" . $foto ;
	if (move_uploaded_file ($nomeTemporario , $destino ) )
	   echo "Arquivo da Foto recebido com sucesso<br>";
       else
         echo "Erro no recebimento do arquivo da Foto :" . 
               $_FILES["foto"]["error"];
   }

   echo"<hr>";
   echo "Conectando ao MySQL...<br><br>";
   //Variavel &con responsavel por conectar ao servidor, 1º endereço, 2º usuario, 3º senha
   $con = mysqli_connect("localhost", "root", "");
   
   echo "Abrindo o banco petshop...<br>";
   //comando responsavel por conectar ao banco
   mysqli_select_db($con,"petshop") or
   die("Erro na seleção do banco." . mysql_error($con)); //or die serve para dar mensagem caso algo deu erro
   
   $comandoSQL = "INSERT into pets(
   nome, sexo, tipo, codigoDono,
   idade, peso, vacinado, medico,
   ultimaVisita, obs, foto)
   
   VALUES (
   '$nome', '$sexo, '$tipo', '$codigoDono,
   '$idade', '$peso', '$vacinado', '$medico',
   '$ultimaVisita', '$obs', '$foto');";
   
   echo $comandoSQL;
   
   mysqli_query($con, $comandoSQL) or
   die ("Erro na execução do comando
   de inserção de registro MySQL:".mysqli_error($con) );
   
   echo "Os dados foram gravados com sucesso!";
   
   
   
   
   /*if( ($nomeArqFicha <> "") and ($tamanhoFicha > 0) )
   {
       $destino = "Arquivos/" . $nomeArqFicha;
	if (move_uploaded_file ($nomeTempArqFicha, $destino ) )
	   echo "Arquivo da Ficha recebido com sucesso<br>";
       else
         echo "Erro no recebimento do arquivo da Ficha :" . 
               $_FILES["ficha"]["error"];
   }
   
    // Conectando no servidor MySQL
	$con = mysqli_connect('localhost' , 'root', '') or 
		die('Erro no MYSQL: ' . mysqli_error($con) ) ;

	// Selecionando o banco de dados petshop
	mysqli_select_db($con , 'petshop') or 
		die('Erro no MYSQL: ' . mysql_error($con) ) ;

	// Criando o string com o comando SQL de Inserção de dados
	$comandoSQL = "INSERT INTO pets 
		( nome,     sexo,    tipo,    codigoDono, idade,  peso,  vacinado,   medico, 
			ultimaVisita,     obs,    foto )
		VALUES
		( '$nome', '$sexo', '$tipo', $codigoDono, $idade, $peso, $vacinado, '$medico', 
			'$ultimaVisita', '$obs', '$foto' ) " ;
*/
	
?>