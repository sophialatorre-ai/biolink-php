<?php
// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Sophia";
$links = [
    "Instagram" => "https://www.instagram.com/",
    "WhatsApp" => " https://web.whatsapp.com/ ",
    "Gemini" => "https://gemini.google.com/app?is_sa=1&is_sa=1&android-min-version=301356232&ios-min-version=322.0&campaign_id=skws&utm_source=sem&utm_source=google&utm_medium=paid-media&utm_medium=cpc&utm_campaign=skws&utm_campaign=2024ptBR_gemfeb&pt=9008&mt=8&ct=p-growth-sem-skws&gclsrc=aw.ds&gad_source=1&gad_campaignid=20437330530&gbraid=0AAAAApk5BhlUK-qk1O7oxqqc97srp9OUy&gclid=Cj0KCQiAiqDJBhCXARIsABk2kSmn0SGxZXeIuqMxDVdZeL0HXrJXJDDYJqDH9FTlxJmP3BdFqGYMUo4aAl5sEALw_wcB",
    "Música do Momento" => "https://youtu.be/fLexgOxsZu0?si=18m7DZHaJRbgYHH6"
];
$bio = "Alguma coisa 😁";
$imagem = "https://i.pinimg.com/736x/7b/4d/f7/7b4df7e626b806da4eff122774841f1f.jpg" // Pegue o link da SUA foto.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img width= 80px, height= 100px, src="<?php echo $imagem;  ?>" alt="Foto de Perfil" class="avatar" >
        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>
        <div class="lista-links" >
            <?php
                foreach ($links as $texto => $url) {
                    $classe_extra = "";

                    if ($texto == "WhatsApp" ){
                        $classe_extra ="destaque";
                    }

                    echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                    </a>";
                }
            ?>
        </div>
        <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
    </div>
</body>
</html>