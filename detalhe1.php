<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 63%, rgba(10, 212, 255, 40) 100%);
            color: #fff;
            font-family: 'Cabin', sans-serif;
        }

        .cont {
            margin: auto;
            max-width: 860px;
            max-height: 600px;
        }

        .cont a {
            text-decoration: none;
            background-color: aqua;
            padding: 5px;
            border-radius: 5px;
        }

        .cont img {
            max-width: 360px;
        }

        .titulo {
            margin: auto;
            text-align: center;
            margin-bottom: 50px;
        }

        .produto {
            margin: auto;
            max-width: 850px;
            max-height: 580px;
        }

        .foto {
            float: left;
            max-width: 350px;
            max-height: 550px;
        }

        .descritivo {
            float: left;
            max-width: 460px;
            max-height: 550px;
            padding: 0 15px;
        }

        #preco {
            color: orange;
        }
    </style>
</head>

<body>
    <div class="titulo">
        <h2> Carrinho de Compras</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
    </div>
    <div class="cont">
        <div class="produto">
            <div class="foto">
                <img src="img/ssd3.webp">
            </div>

            <div class="descritivo">
                <p> Marca: Kingston</p>
                <p> Modelo:SA400S37/240G</p>
                <p>- Formato: 2,5 pol</p>
                <p>- Interface: SATA Rev. 3.0 (6Gb/s) — compatível com a versão anterior SATA Rev. 2.0 (3Gb/s)</p>
                <p>- Capacidades: 240GB</p>
                <p>- NAND: TLC</p>
                <p>- Performance de referência - até 500MB/s para leitura e 350MB/s para gravação</p>
                <p>- Temperatura de armazenamento: -40 °C a 85 °C</p>
                <p>- Temperatura de operação: 0 °C a 70 °C</p>
                <p>- Vibração quando em operação: 2,17G pico (7 – 800 Hz)</p>
                <p>- Vibração quando não está em operação: 20G pico (10 – 2000 Hz)</p>
                <p>- Expectativa de vida útil: 1 milhão de horas MTB</p>

                 De <s>R$ 200,00</s>
                <h2 id="preco">R$ 189,00</h2>
                <a href="index.php"> Retornar a lista de produtos</a>
            </div>
        </div>
    </div>
</body>

</html>