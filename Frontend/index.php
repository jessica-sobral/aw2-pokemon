<?php
$url = "https://6508e92156db83a34d9cbf8f.mockapi.io/api/pokemon";
$ch  = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch));
$url_atual = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Pokémon</title>
</head>

<body>
    <header class="custom-header pb-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="logo col col-lg-4">
                    <a class="navbar-brand m-auto"><img src="img/pngimg.com - pokemon_logo_PNG9.png" class="img-fluid" width="180"></a>
                </div>
                <div class="app-title">Aplicação PHP</div>
            </nav>
        </div>
    </header>

    <!-- Cards -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-3 scrollspy-col">
                <div data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" class="scrollspy-nav">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo $url_atual ?>">Todos</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?php echo $url_atual . "?tipo=Fogo" ?>">Fogo</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $url_atual . "?tipo=Água" ?>">Água</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $url_atual . "?tipo=Elétrico" ?>">Elétrico</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $url_atual . "?tipo=Psíquico" ?>">Psíquico</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $url_atual . "?tipo=Planta" ?>">Planta</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8 cards-col">
                <div class="row">
                    <?php
                    foreach ($resultado as $pokemon) :
                    ?>
                        <div class="col-md-4">
                            <div class="card" id="pokemon" data-bs-toggle="modal" data-bs-target="#<?php echo $pokemon->nome ?>">
                                <img src="<?php echo $pokemon->imagem; ?>" class="card-img-top img-fluid" alt="<?php echo $pokemon->nome ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $pokemon->nome ?></h5>
                                    <p class="card-text"><?php echo $pokemon->tipo ?></p>
                                </div>
                                <div class="card-footer">
                                    <i class="bi bi-x"></i>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modais -->
    <?php
    foreach ($resultado as $pokemon) :
    ?>
        <div class="modal fade" id="<?php echo $pokemon->nome ?>" tabindex="-1" aria-labelledby="clefairyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="clefairyModalLabel"><?php echo $pokemon->nome ?></h5>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <?php echo $pokemon->descricao ?>
                        <h6 class="mt-3">Outras informações:</h6>
                        <ul class="list-circle">
                            <li><span class="fw-semibold">Elemento:</span> <?php echo $pokemon->elemento ?></li>
                            <li><span class="fw-semibold">Altura:</span> <?php echo $pokemon->altura ?></li>
                            <li><span class="fw-semibold">Peso:</span> <?php echo $pokemon->peso ?></li>
                        </ul>
                        <img src="<?php echo $pokemon->imagem; ?>" class="img-modal card-img-top img-fluid max-width: 100 align-self-center" alt="<?php echo $pokemon->nome ?>">
                    </div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    ?>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3 mt-3" style="background-color: rgba(146, 146, 146, 0.2);">
            Projeto para a disciplina Aplicação para Web 2 - Informática
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>