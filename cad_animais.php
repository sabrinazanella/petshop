<?php
	include("cabecalho.inc.php");
?>
	<fieldset>
		<legend> Cadastre um PET no sistema: </legend>
			<form action="insere.php" method="POST">
				<label>Nome do PET:</label>
				<input type="text" name="nomepet" />
				<br>
				
				<label>Nome do(a) Dono(a):</label>
				<input type="text" name="nomedono" />
				<br>
				
				<label>Contato:</label>
				<input type="number" name="telefone" />
				<br>
				
				<input type="submit" value="Salvar" />
			</form>
	</fieldset>
		
<?php
	include("rodape.inc.php");
?>