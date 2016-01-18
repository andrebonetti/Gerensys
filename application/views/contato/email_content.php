<html>
	
	<table>
		<tr>
			<td><b>Nome:</b></td>
			<td><?= $nome ?></td>
            <td><b>Empresa:</b></td>
			<td><?= $empresa ?></td>
		</tr>
        <tr>
			<td><b>Segmento:</b></td>
			<td><?= $segmento ?></td>
		</tr>
		<tr>
			<td><b>Cidade:</b></td>
			<td><?= $cidade ?></td>
			<td><b>Estado:</b></td>
			<td><?= $estado ?></td>
		</tr>
        <tr>
			<td><b>Bairro:</b></td>
			<td><?= $bairro ?></td>
		</tr>
		<tr>
            <td><b>E-mail:</b></td>
			<td><?= $email ?></td>
		    <td><b>Telefone:</b></td>
			<td><?= $telefone ?></td>
		</tr>
	</table>
	
	<h3><?= $assunto ?></h3>
	<p><?= $mensagem ?></p>
	
</html>