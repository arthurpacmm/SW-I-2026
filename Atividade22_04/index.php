<?php
// Array com as páginas
$_MENU = [
    'Home' => '<h1>Bem-vindo!</h1><p>Este é um site dinâmico feito com PHP.</p>',
    
    'Sobre' => '<h1>Sobre</h1><p>Este site foi criado para demonstrar o uso de arrays e páginas dinâmicas em PHP.</p>',
    
    'Experiências' => '<h1>Experiências</h1><p>Tenho poucas experiências profissionais na área de tecnologia.</p>',
    
    'Projetos' => '<h1>Projetos</h1><p>Meus projetos podem ser vistos no meu Github: https://github.com/arthurpacmm.</p>',
    
    'Contato' => '<h1>Contato</h1><p>Email: arthurcapos@gmail.com</p>'
];

// Define página padrão
$_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site Dinâmico PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2>Meu Site PHP</h2>
    <nav>
        <?php
        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a>';
        }
        ?>
    </nav>
</header>

<main>
    <?php
    if(array_key_exists($_pagina, $_MENU)){
        echo $_MENU[$_pagina];
    } else {
        echo '<h1>Página não encontrada</h1>';
    }
    ?>
</main>

<footer>
    <p>© 2026 - Arthur Campos </p>
</footer>

</body>
</html>