<?php

// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Sophia";
$link = "https://super.abril.com.br/especiais/o-misterio-da-inteligencia-animal/";
$bio = "Alguma coisa";
$imagem = "https://i.pinimg.com/736x/7b/4d/f7/7b4df7e626b806da4eff122774841f1f.jpg" // Pegue o link da SUA foto.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.
0">
<title>BioLink de <?php echo $nome; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<img width= 80px, height= 100px, src="<?php echo $imagem;  ?>" alt="Foto de Perfil" class="avatar" >
<h1> <?php echo $nome; ?> </h1>
<p> <?php echo $bio; ?> </p>
<div class="lista-links"></div>
</div>
</body>
</html>