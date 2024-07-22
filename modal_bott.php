<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 63%, rgba(10, 212, 255, 40) 100%);
            color: #fff;
        }

        .cont {
            margin: auto;
            max-width: 950px;
            max-height: 100vh;
        }
        .lado{
            float: left;
            padding: 6px;
            
        }
    </style>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Venda de eletrônico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav><br><br>
    <div class="cont">
        <!-- nav bar -->
        <div class="lado">
        <!-- card -->
        <div class="card" style="width: 18rem;">
            <img src="img/ssd3.webp" class="card-img-top" alt="...">
            <div class="card-body ">
                <h5 class="card-title"> ssd kingstone 240gb</h5>
                <p class="card-text"> De <s>R$ 200,00</s>
                <h3>R$ 189,00</h3>
                </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ver especificações

                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/ssd3.webp" width="400px">
                                <p> Marca: Kingston</p>
                                <p> Modelo:SA400S37/240G</p>
                                <p>- Formato: 2,5 pol</p>
                                <p>- Interface: SATA Rev. 3.0 (6Gb/s) </p>
                                <p>— compatível com a versão anterior SATA Rev. 2.0 (3Gb/s)</p>
                                <p>- Capacidades: 240GB</p>
                                <p>- NAND: TLC</p>
                                <p>- Performance de referência - até 500MB/s para leitura e 350MB/s para gravação</p>
                                <p>- Temperatura de armazenamento: -40 °C a 85 °C</p>
                                <p>- Temperatura de operação: 0 °C a 70 °C</p>
                                <p>- Vibração quando em operação: 2,17G pico (7 – 800 Hz)</p>
                                <p>- Vibração quando não está em operação: 20G pico (10 – 2000 Hz)</p>
                                <p>- Expectativa de vida útil: 1 milhão de horas MTB</p>

                                De <s>R$ 200,00</s>
                                <h2>R$ 189,00</h2>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lado">
        <!-- card2 -->
        <div class="card" style="width: 18rem;">
            <img src="img/memo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> memoria ram 8gb</h5>
                <p class="card-text"> De <s>R$ 300,00</s>
                <h3>R$ 260,00</h3>
                </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Ver especificações

                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/memo.jpg" width="400px">
                                <p>Marca: Kingston</p>
                                <p>Modelo: KF426C16BB/8</p>

                                <p>Geral:<br>
                                    - Fator de forma: DDR4<br>
                                    - Velocidades: 2666 MHz<br>
                                    - Latências: CL16<br>
                                    - Capacidades: 8 GB</p>

                                De <s>R$ 300,00</s>
                                <h2>R$ 260,00</h2>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- card2 -->
        <div class="lado">
        <!-- card3 -->
        <div class="card" style="width: 18rem;">
            <img src="img/teclado.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> teclado dell</h5>
                <p class="card-text"> De <s>R$ 100,00</s>
                <h3>R$ 90,00</h3>
                </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Ver especificações

                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/teclado.png" width="400px">
                                <p> Padrão do teclado ABNT2 <br>
                                    1. Teclas programáveis <br>
                                    2. Teclas dedicadas <br>
                                    3. Trava de maiúsculas<br>
                                    4. Trava do teclado numérico </p>

                                De <s>R$ 100,00</s>
                                <h2>R$ 90,00</h2>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card3 -->
        </div>
      

        <!-- card4 -->
        <!-- <div class="card" style="width: 18rem;">
            <img src="img/mouseped.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> Mousepad Gamer Havit Control, Extra Grande</h5>
                <p class="card-text"> De <s>R$ 49,90</s>
                <h3></h3>
                </p> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Ver especificações

                </button> -->

                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="img/mouseped.png" width="400px">
                                <p> Padrão do teclado ABNT2 <br>
                                    1. Teclas programáveis <br>
                                    2. Teclas dedicadas <br>
                                    3. Trava de maiúsculas<br>
                                    4. Trava do teclado numérico </p>

                                De <s></s>
                                <h2>R$ 49,90/h2>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
      
        <!-- card4 -->

        <!-- card -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>