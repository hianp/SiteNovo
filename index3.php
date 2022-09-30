<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background: #ccc;">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card mt-5">
					<div class="card-body">
						<h5 class="card-title">Formulário de Contato</h5>
						<form action="enviar.php" method="POST">
							<div class="mb-3">
								<label>E-mail</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="mb-3">
								<label>Assunto</label>
								<input type="text" name="assunto" class="form-control">
							</div>
							<div class="mb-3">
								<label>Mensagem</label>
								<textarea name="mensagem" class="form-control"></textarea>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>