<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
        <title><?= $titulo_page; ?></title>
    </head>
<body>
    <!--header-->
    <div class="header">
        <div class="header-title flex">
            <div class="width-auto text-left">
                <span class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </span>
                <span><?= $titulo_page ?></span>
            </div>
            <!--<div class="width-auto text-right">
                <span class="text-name">{Nome do Usuário}</span>                        
            </div>-->
        </div>
    </div>        


    <!--section-->
    <div class="section-info">
        <ul class="section-list">
            <li class="section-item-header flex">
                <div class="width-auto text-left">
                    <i class="fas fa-graduation-cap"></i> Lista de Visitantes
                </div>
                <div class="width-auto text-right">
                    <a href="<?= base_url('visita/adicionar/index'); ?>" class="btn btn-add">Adicionar</a>
                </div>
            </li>


            <!--content-section-item-->
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-3">
                    <div class="col-grid-item">
                        <strong>NOME</strong>
                    </div>
                    <div class="col-grid-item">
                        <strong>TELEFONE</strong>
                    </div>
                    <div class="col-grid-item text-right">
                        <!-- <strong>SÉRIE/ANO/INTERESSE</strong> -->
                    </div>
                </a>
            </li>

            <?php foreach($lista_visita as $row): ?>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-3">
                    <div class="col-grid-item"><?= $row['NMRESPONSAVEL']; ?></div>
                    <div class="col-grid-item"><?= $row['TELEFONE'] ?></div>
                    <div class="col-grid-item text-right">
                        <!--8º Ensino Fund. II/2021/Alto -->
                    </div>
                </a>
            </li>
            <?php endforeach; ?>

        </ul>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js');?>"></script>

</body>
</html>