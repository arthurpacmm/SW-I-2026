<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Jornada em Imagens</title>
</head>
<body>
    <h2>Minha Jornada em Imagens</h2>

    <div id="galeria" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;"></div>

    <script>
        const galeria = document.getElementById("galeria");

        for (let i = 1; i <= 20; i++) {
            const img = document.createElement("img");

            img.src = `img/IMGWynncraft${i}.png`;
            img.alt = `Wynncraft Print ${i}`;
            img.style.width = "100%";
            img.style.border = "2px solid #b38a2d";

            galeria.appendChild(img);
        }
    </script>
</body>
</html>