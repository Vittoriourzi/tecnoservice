<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->        
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tecno Service - Giovanni Privitera</title>
        <meta name="description" content="Tecno Service - Giovanni Privitera"/>
        <meta name="keywords" content="tecno service, giovanni privitera, edilizia, manutenzione, edile, appalti, certificati"/>
        <meta name="author" content="Tecno Service - Giovanni Privitera"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?=base_url()?>assets/favico.ico" type="image/x-icon"> 
        <!-- Web Fonts -->        
        <link href='http://fonts.googleapis.com/css?family=Raleway:600,500,300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <!-- Css Global Compulsory -->
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css"> 
        <!-- Css Implementing Plugins -->
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css">                          
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/revolution/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/revolution/css/extralayers.css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/revolution/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/owl/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/owl/owl-carousel/owl.theme.css">         
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/cube/cubeportfolio.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jquery.mmenu.css">
        <!-- Css Theme -->           
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    </head>
    <body style="overflow-x: hidden;" class="<?=$action?>"> 
        <?$this->load->view("frontend/static/preload");?>
        <?$this->load->view("frontend/static/header");?>
        <? if (isset($action))
            !isset($action_args) ?
                $this->load->view("frontend/subview/".$action)
            :$this->load->view("frontend/subview/".$action,$action_args);
        ?>
        <?$this->load->view("frontend/static/footer");?>
        <!-- jQuery Plugins -->                     
        <script src="<?=base_url()?>assets/plugins/jquery-1.11.1.min.js"></script>                    
        <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/plugins/revolution/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
        <script src="<?=base_url()?>assets/plugins/revolution/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script src="<?=base_url()?>assets/plugins/cube/jquery.cubeportfolio.min.js"></script>      
        <script src="<?=base_url()?>assets/plugins/owl/owl-carousel/owl.carousel.js"></script>
        <script src="<?=base_url()?>assets/plugins/moderniz.js"></script>    
        <script src="<?=base_url()?>assets/plugins/jquery.sticky.js"></script>   
        <script src="<?=base_url()?>assets/plugins/jquery.mmenu.min.js"></script>                     
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>     
        <script src="<?=base_url()?>assets/js/app.js"></script>        
    </body>
</html>