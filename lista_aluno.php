<html>
	<style type="text/css">	
        html{
            background-color:rgb(0, 19, 37);
        }
        button{
            color: #000000;
            margin-top: 50px;
            width: 300px;
            border-radius: 17px;
            text-align: center;
            font-size: 17px;
            background-color: #8aa7d3;
        }
		h1{
			font-family: "Glamor";
		}
        fieldset{
            color:#000000;
            font-size: 1.1em;
            text-align:center;
            border-radius: 30px;
            width: 50em;
            padding: 50px;
            width: 50%; margin: 10px auto;
            background-color: rgb(231, 228, 240);
        }
    </style>
	<fieldset>
		<?php
			@$server = "localhost";
			@$user = "root";
			@$senha = ''; 
			@$dbname = "escola";
		
			$con = mysqli_connect($server, $user, $senha, $dbname);
			
			if (!$con) { 
				die("Conecção com falha: " . mysqli_connect_error());
				
			}else

			echo "<h1>Conectado com sucesso</h1> <br>";

			$query = "SELECT * FROM tb_alunos";

			$result = mysqli_query($con, $query);
			
			echo'<br>';
			echo  '<tr>
					<td>Nome</td>
					<td>1º Nota</td>
					<td>2º Nota</td>
					<td>Curso</td><br><br>	
				</tr>';
					
			while($row = mysqli_fetch_array($result)) {
			echo  '<tr>
					<td>'.$row["nome"].'</td>
					<td>'.$row["nota1"].'</td>
					<td>'.$row["nota2"].'</td>
					<td>'.$row["curso"].'</td><br><br>	
				</tr>';
			}						
			
			mysqli_close($con);
			
		?>
		<a href="index.php">
			<button>Página Inicial</button>
		</a>
		</fieldset>	
</html>