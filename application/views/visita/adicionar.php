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
       <form id="form-visita-add" class="app-form">
            
            <div class="col-grid col-grid-template-2">
                <div class="col-item">
                    <div class="label-float">
                        <input type="text" id="p_nmresponsavel" name="p_nmresponsavel" placeholder=" "/>
                        <label>Nome do Responsável</label>
                    </div>
                </div>
                <div class="col-item">
                    <div class="label-float">
                        <input type="text" id="p_email" name="p_email" placeholder=" "/>
                        <label>E-Mail</label>
                    </div>
                </div>
            </div>

            <div class="col-grid col-grid-template-3">
                <div class="col-item">
                    <div class="label-float">
                        <input type="text" id="p_telefone" name="p_telefone" placeholder=" "/>
                        <label>Telefone</label>
                    </div>
                </div>
                <div class="col-item">
                    <div class="label-float">
                        <input type="text" id="p_datahora" name="p_datahora" value="<?= date('d/m/Y H:i:s'); ?>" placeholder=" "/>
                        <label>Data e Hora</label>
                    </div>    
                </div>
                <div class="col-item">
                    <div class="label-float">
                        <select name="p_pretensao" id="p_pretensao" placeholder=" ">
                            <option value="A">Alta</option>
                            <option value="M">Média</option>
                            <option value="B">Baixa</option>
                        </select>
                        <label>Pretensão</label>
                    </div>  
                </div>      
            </div>    

            <div class="col-grid col-grid-template-1">
                <div class="col-item">
                    <div class="label-float">
				        <textarea name="p_observacao" id="p_observacao" placeholder=" "></textarea>
				        <label>Observação</label>
			        </div>   
                </div>    
            </div> 


        
            <div class="label-btn">
                <button class="btn-width-auto btn-status-solution"  onclick="addForm('<?= base_url('visita/acao/add_visita'); ?>','#form-visita-add'); return false;">
                    <i class="fas fa-plus"></i> Salvar
                </button>
			</div>
        </form>
    </div>



    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.mask.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js'); ?>"></script>
    <script>
        $("#p_telefone").mask("(99) 9999-9999"); 
    </script>
    <script src="<?= base_url('assets/js/main.js');?>"></script>


</body>
</html>