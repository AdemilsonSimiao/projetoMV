<head>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL_CSS ?>list-page.css">
</head>
<body>
    <div class="list-content">
        <div class="filters">
            <nav class="navbar navbar-light">            
                <div class="container-fluid bg-primary">
                    <div class="sort">
                        <h4>Filtrar:</h4>
                        <form action="" class="sort-form">
                            <input type="text" class="form-select" id="date-range" name="daterange" value="" />
                            <button class="btn btn-light" type="submit">Filtrar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="config-buttons">
            <a href="<?=URL_RAIZ?>upload-file" ><button type="button" class="btn btn-primary" id="new-upload">Novo upload</button></a>
            <a href="<?=URL_RAIZ?>uploads"><button type="button" class="btn btn-light">Uploads da comunidade</button></a>
        </div>
        <?php foreach ($uploads as $upload) :?>
        <a href="<?=URL_RAIZ?>upload/<?= $upload->getId()?>">
            <div class="upload-block">
                <h3><?= $upload->getDescricao()?></h3>
            </div>
        </a>
        <?php endforeach ?>
        <div class="page-buttons">
            <?php if (isset($_GET['daterange'])) : ?>
                <?php if ($pagina > 1) : ?>
                    <a href="<?= URL_RAIZ . 'uploads/meus-uploads?daterange='. $_GET['daterange'] .'&p=' . ($pagina-1) ?>"><button type="button" class="btn btn-light">P??gina anterior</button></a>
                <?php endif ?>
                <?php if ($pagina < $ultimaPagina) : ?>
                    <a href="<?= URL_RAIZ . 'uploads/meus-uploads?daterange='. $_GET['daterange'] .'&p=' . ($pagina+1) ?>"><button type="button" class="btn btn-light">Pr??xima p??gina</button></a>
                <?php endif ?>
            <?php else : ?>
                <?php if ($pagina > 1) : ?>
                    <a href="<?= URL_RAIZ . 'uploads/meus-uploads?p=' . ($pagina-1) ?>"><button type="button" class="btn btn-light">P??gina anterior</button></a>
                <?php endif ?>
                <?php if ($pagina < $ultimaPagina) : ?>
                    <a href="<?= URL_RAIZ . 'uploads/meus-uploads?p=' . ($pagina+1) ?>"><button type="button" class="btn btn-light">Pr??xima p??gina</button></a>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>

    <script src="<?= URL_JS ?>list-page.js"></script>
</body>