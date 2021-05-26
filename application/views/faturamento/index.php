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
                <!--
                <span class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </span>
                -->
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
            <li class="section-item-header">
                <i class="fas fa-graduation-cap"></i> Academico
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Quantidade de Alunos (integral)</div>
                    <div class="col-grid-item text-right">
                        (ano anterior/atual) 
                        <?= $qtd_aluno_integral_ano_anterior[0]['QUANTIDADE']?>/ 
                        <?= $qtd_aluno_integral_ano_atual[0]['QUANTIDADE'] ?>
                    </div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Quantidade de Alunos (parcial)</div>
                    <div class="col-grid-item text-right">
                        (ano anterior/atual) 
                        <?= $qtd_aluno_parcial_ano_anterior[0]['QUANTIDADE'] ?>/
                        <?= $qtd_aluno_parcial_ano_atual[0]['QUANTIDADE']?>
                    </div>
                </a>
            </li>

            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Quantidade de Alunos (bolsistas 100%)</div>
                    <div class="col-grid-item text-right">
                        (ano anterior/atual) 
                        <?= $qtd_bolsista_inteira_ano_anterior[0]['QUANTIDADE']; ?>/
                        <?= $qtd_bolsista_inteira_ano_atual[0]['QUANTIDADE']; ?>
                    </div>
                </a>
            </li>

            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Quantidade de Alunos (bolsistas 50%)</div>
                    <div class="col-grid-item text-right">
                        (ano anterior/atual) 
                        <?= $qtd_bolsista_meia_ano_anterior[0]['QUANTIDADE']; ?>/
                        <?= $qtd_bolsista_meia_ano_atual[0]['QUANTIDADE']; ?>
                    </div>
                </a>
            </li>

            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Quantidade de Alunos (bolsa e desconto)</div>
                    <div class="col-grid-item text-right">
                        (ano anterior/atual) 
                        <?= $qtd_bolsista_desconto_ano_anterior[0]['QUANTIDADE'] ?>/<?= $qtd_bolsista_desconto_ano_atual[0]['QUANTIDADE']?>
                    </div>
                </a>
            </li>


            <li class="section-item">
                <a href="" class="col-grid col-grid-template-1 section-bg-check">
                    <div class="col-grid-item">Quantidade de Visitas na Escola</div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Hoje</div>
                    <div class="col-grid-item text-right"><?= $qtd_visitante_hoje[0]['QUANTIDADE'] ?></div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Semana</div>
                    <div class="col-grid-item text-right"><?= $qtd_visitante_semana[0]['QUANTIDADE']; ?></div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Mês</div>
                    <div class="col-grid-item text-right"><?= $qtd_visitante_mes[0]['QUANTIDADE']; ?></div>
                </a>
            </li>


        </ul>

        <ul class="section-list">
            <li class="section-item-header">
                <i class="fas fa-file-invoice-dollar"></i> Financeiro
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-1 section-bg-check">
                    <div class="col-grid-item">Faturamento Bruto</div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Mês Anterior</div>
                    <div class="col-grid-item text-right">R$ <?= number_format($lista_faturamento_mes_anterior[0]['VALOR_LIQUIDO_MES'],2,",","."); ?></div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Mês</div>
                    <div class="col-grid-item text-right">R$ <?= number_format($lista_faturamento_mes[0]['VALOR_LIQUIDO_MES'],2,",","."); ?></div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Ano</div>
                    <div class="col-grid-item text-right">R$ <?= number_format($lista_faturamento_ano[0]['VALOR_LIQUIDO_ANO'],2,",","."); ?></div>
                </a>
            </li>

            <li class="section-item">
                <a href="" class="col-grid col-grid-template-1 section-bg-check">
                    <div class="col-grid-item">Despesas</div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Mês</div>
                    <div class="col-grid-item text-right">R$ <?= number_format($lista_dispesas_mes[0]['VALOR_LIQUIDO_MES'],2,",","."); ?></div>
                </a>
            </li>
            <li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Por Ano</div>
                    <div class="col-grid-item text-right">R$ <?= number_format($lista_dispesas_ano[0]['VALOR_LIQUIDO_ANO'],2,",","."); ?></div>
                </a>
            </li>
            <!--<li class="section-item">
                <a href="" class="col-grid col-grid-template-2">
                    <div class="col-grid-item">Contas Pagas Mês</div>
                    <div class="col-grid-item text-right">R$ 00.000,00</div>
                </a>
            </li>-->

            <li class="section-sublist">
                <a href="" class="col-grid col-grid-template-1 section-bg-check">
                    <div class="col-grid-item">Custo por Centro de Custo</div>
                </a>
                
                <ul>
                    <?php foreach($lista_centro_custo_adm as $row): ?>
                    <li class="section-subitem">
                        <a href="" class="col-grid col-grid-template-2">
                            <div class="col-grid-item"><?= $row['NOME']; ?></div>
                            <div class="col-grid-item text-right">R$ <?= number_format($row['VALOR'],2,",","."); ?></div>
                        </a>
                    </li>
                    <?php endforeach; ?>

                    <li class="section-subitem">
                        <a href="" class="col-grid col-grid-template-2">
                            <div class="col-grid-item"><?= $lista_centro_custo_aca[0]['NOME']; ?></div>
                            <div class="col-grid-item text-right">R$ <?= number_format($lista_centro_custo_aca[0]['VALOR'],2,",","."); ?></div>
                        </a>
                    </li>

            
                </ul>
            
            </li>
        </ul>
    </div>




</body>
</html>