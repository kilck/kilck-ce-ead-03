<?php

//recebe variaveis    
$nomealuno = $_POST["nomealuno"];
$nomedisciplina = $_POST["nomedisciplina"];
$nomecurso = $_POST["nomecurso"];
$linkimg = $_POST["linkimg"];
$va1 = $_POST["va1"];
$va2 = $_POST["va2"];
$va3 = $_POST["va3"];
$trabalhos = $_POST["trabalhos"];
$nomeprofessor = $_POST["nomeprofessor"];
$nomecoordenador = $_POST["nomecoordenador"];
$nao = '';

$notatotal = $va1 + $va2 + $va3 + $trabalhos;
	if ($notatotal >= 90) {
			$resultado = 'Excelente';
	 
	}
	elseif ($notatotal >= 80) {
			$resultado = 'Ótimo';
	}
	elseif ($notatotal >= 70) {
		   $resultado = 'Bom';
	}
	elseif ($notatotal >= 60) {
		   $resultado = 'Ruim';
	}
	else{
			 $resultado = 'Péssimo';
			 $nao = "<span class='nao'> NÃO</span>";
	}

	function cal ( $notaaluno, $total ) {
	 return  round(( $notaaluno / $total ) * 100) ;
	}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Banda</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" >

</head>
<body>
 
        <center>
                <img src=<?php echo '"'.$linkimg.'"' ?> alt='img' width="320">
                <h1>Declaração</h1>
        </center>
        <span align="center">
			Declaramos, para os devidos fins, que <?php echo $nomealuno; ?>  <?php echo $nao; ?>  concluiu satisfatoriamente as atividades da disciplina <?php echo $nomedisciplina; ?> do curso de <?php echo $nomecurso; ?>
		</span>
        <p>
			Segue o desempenho de <?php echo $nomealuno; ?>
        </p>

        <table class="center" border="1">
            <thead>
                <th>Critério</th>
                <th>Valor total</th>
				<th>Nota do alino</th>
				<th>Desempenho (%)</th>                
            </thead>
            <tbody>
				<tr>
					<td>Prova 1</td>
					<td>15</td>
					<td>
						<?php echo $va1 ?>
					</td>
					<td>
						<?php echo cal ($va1,15) ?>%
					</td>
				</tr>
                <tr>
					<td>Prova 2</td>
					<td>25</td>
					<td>
						<?php echo $va2 ?>
					</td>
					<td>
						<?php echo cal ($va2,25) ?>%
					</td>
                </tr>
                <tr>
					<td>Prova 3</td>
					<td>35</td>
					<td>
						<?php echo $va3 ?>
					</td>
					<td>
						<?php echo cal ($va3,35) ?>%
					</td>
                </tr>
                <tr>
					<td>Trabalhos</td>
					<td>25</td>
					<td>
						<?php echo $trabalhos ?>
					</td>
					<td>
						<?php echo cal ($trabalhos,25) ?>%
					</td>
                </tr>
            </tbody>
        </table>

       <br> 
        <p>
			Com esse resultado, o concito de <?php echo $nomealuno; ?> foi 
			<span class="resultado">
					<?php echo $resultado . ','?>
			</span>
			 já que sua nota total foi de 
			<span class="pontos">
					<?php echo $notatotal?>
			</span>
			 pontos
        </p>		
        <br> 
		<p class="center">
				Belo Horizonte, <?php echo date('d/m/y'); ?>
		</p>
		<p class="center">
				____________________________________ <br>
				<?php echo $nomeprofessor?> - Professor(a)
		</p>
		<p class="center">
				____________________________________ <br>
				<?php echo $nomecoordenador?> - Coordenador(a)
		</p> 
</body>
</html>