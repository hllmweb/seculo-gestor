<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
        <title>Seculo Gestor</title>
    </head>
    <body>

        <!--header-->
        <div class="header">
            <div class="header-title flex">
                
                <div class="width-auto text-left">
                    <span class="menu-toggle">
                       <i class="fas fa-bars"></i>
                    </span>
                   <span>Dashboard</span>
                </div>
                <div class="width-auto text-right">
                    <span class="text-name">{Nome do Usuário}</span>                        
                </div>

            </div>
        </div>        
    
        <!--chart & info-->       
        <div class="section-info">
            <div class="row">
                <div class="flex">
                    <div class="item-col-2">
                        <div id="chart-pizza"></div>
                    </div>
                    <div class="item-col-2">
                        
                        <div class="row-grid">
                            <div class="row-title"><i class="fas fa-vote-yea"></i> Classificação</div>
                            <div class="row-container row-border row-scroll font-10">
                                <div class="row-col-1">Texto #01</div>
                                <div class="row-col-1">Texto #02</div>
                                <div class="row-col-1">Texto #03</div>
                                <div class="row-col-1">Texto #04</div>
                                <div class="row-col-1">Texto #05</div>
                                <div class="row-col-1">Texto #06</div>
                                <div class="row-col-1">Texto #07</div>
                                <div class="row-col-1">Texto #08</div>
                                <div class="row-col-1">Texto #09</div>
                                <div class="row-col-1">Texto #10</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>        

        <!--section-->
        <div class="section">
            <div class="col-grid col-grid-template-3">
                
                <!--col 1-->
                <div class="col-grid-3">
                    <div class="col-title"><i class="fas fa-angle-right"></i> Próximas Atividades</div>
                    <div class="col-container col-scroll row-border font-10">
                        <div class="col-grid col-grid-template-1">
                            <div class="row-col-header-1 font-10 bold uppercase text-left">Atividades</div>
                        </div>

                        <ul id="dragdrop-list-1">
                            <li class="ui-state-default row-col-1 text-left">Texto #01</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #02</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #03</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #04</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #05</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #06</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #07</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #08</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #09</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #10</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #11</li>
                        </ul> 
                    </div>
                </div>

                <!--col 2-->
                <div class="col-grid-3">
                    <div class="col-title"><i class="fas fa-angle-right"></i> Em Andamentos</div>
                    <div class="col-container col-scroll row-border font-10">
                        <div class="col-grid col-grid-template-1">
                            <div class="row-col-header-1 font-10 bold uppercase text-left">Atividades</div>
                        </div>

                        <ul id="dragdrop-list-2">
                            <li class="ui-state-default row-col-1 text-left">Texto #01</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #02</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #03</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #04</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #05</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #06</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #07</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #08</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #09</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #10</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #11</li>
                        </ul> 
                    </div>
                </div>
                
                <!--col 3-->
                <div class="col-grid-3">
                    <div class="col-title"><i class="fas fa-angle-right"></i> Concluídos Hoje</div>
                    <div class="col-container col-scroll row-border font-10">
                        <div class="col-grid col-grid-template-1">
                            <div class="row-col-header-1 font-10 bold uppercase text-left">Atividades</div>
                        </div>

                        <ul id="dragdrop-list-3">
                            <li class="ui-state-default row-col-1 text-left">Texto #01</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #02</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #03</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #04</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #05</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #06</li>
                            <li class="ui-state-default row-col-1 text-left">Texto #07</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #08</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #09</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #10</li> 
                            <li class="ui-state-default row-col-1 text-left">Texto #11</li>
                        </ul> 
                    </div>
                </div>

            </div>
        </div>


        <!-- <div id="container-2"></div> -->     
        <!-- <div id="container"></div>   -->
<!--   <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
    <div id="draggable" class="ui-widget-content">
      <p>Drag me to my target</p>
    </div>
     
    <div id="droppable" class="ui-widget-header">
      <p>Drop here</p>
    </div> -->

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts.js') ?>"></script>
    <script src="<?= base_url('assets/js/data.js'); ?>"></script>
    <script src="<?= base_url('assets/js/drilldown.js'); ?>"></script>
    <script src="<?= base_url('assets/js/exporting.js'); ?>"></script>
    <script src="<?= base_url('assets/js/export-data.js'); ?>"></script>
    <script src="<?= base_url('assets/js/accessibility.js'); ?>"></script>
    <script src="<?= base_url('assets/js/graficos-dados.js') ?>"></script>
    <script>
        $("#dragdrop-list-1, #dragdrop-list-2, #dragdrop-list-3").sortable();
        $("#dragdrop-list-1, #dragdrop-list-2, #dragdrop-list-3").disableSelection();
    </script>

<!--   <script>
  $(function() {
        $("#draggable" ).draggable();
        
        $("#droppable" ).droppable({
          drop: function(event, ui) {
            $(this).addClass("ui-state-highlight").find("p").html("Dropped!");
          }
        });
  });
  </script> -->

    </body>
</html>