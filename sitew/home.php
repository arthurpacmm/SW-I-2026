<?php
$pagina = isset($_GET['page']) ? $_GET['page'] : 'home';
$caminho = $pagina . '.php';

if (!file_exists($caminho)) {
    $caminho = 'home_conteudo.php'; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Wynncraft Fan Site | <?php echo ucfirst($pagina); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="main-header">
        <!-- O menu fica dentro do banner, alinhado na parte de baixo -->
        <nav>
            <a href="?page=home">Home</a>
            <a href="?page=sobre">Sobre</a>
            <a href="?page=galeria">Galeria</a>
            <a href="?page=curiosidades">Curiosidades
            </a>
            <a href="?page=contato">Contato</a>
        </nav>
    </header>

    <main>
        <section class="content-box">
            <?php 
            if($pagina == 'home') {
            ?>
                <h2>Projeto Escolar: Site Dinâmico de Tema Livre.</h2>
                <p>Seja bem-vindo ao meu site! Este projeto é uma <strong>atividade escolar de tema livre</strong> desenvolvida para praticar conceitos de desenvolvimento web, como PHP, HTML e CSS.</p>

                <div class="objetivo-card">
                    <p><strong>Objetivo do Site:</strong> O intuito desta página é reunir informações, dicas e memórias sobre o servidor <em>Wynncraft</em>, demonstrando como estruturas dinâmicas em PHP podem ser aplicadas em um tema de entretenimento.</p>
                </div>

                <h3>Por que Wynncraft?</h3>
                <p>Escolhi este tema por ser um servidor de Minecraft no qual jogo frequentemente e tenho muito carinho, sou fascinado por cada detalhe e gostaria de compartilhar essa experiência.</p>

                <p>Navegue pelo menu acima para conhecer mais sobre o servidor, ver minha galeria de fotos ou conferir dicas de gameplay!</p>
            <?php 
            } else {
                include($caminho);
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - Arthur Campos | Sobre Wynncraft</p>
    </footer>

</body>
</html>