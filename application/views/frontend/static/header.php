<!-- Navbar -->
<nav class="navbar navbar-default  navbar-fixed-top header-nav" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Logo -->        
            <a class="navbar-brand" href="index-m.html">
                <img src="<?=base_url()?>assets/img/<?=strtolower($action)=="welcome" ? 'brand.png':'small_b.png'?>">
                <div class="clearfix"></div>
            </a>                     
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li     <?=strtolower($action)=="welcome" ? 'class="active"':''?>><a href="<?=base_url()?>">Welcome</a></li>
                <li     <?=strtolower($action)=="chisiamo" ? 'class="active"':''?>><a href="<?=base_url()?>chisiamo">Chi siamo</a></li>                                                                            
                <!--
                
                <li><a href="projects.html">Lavori</a></li>                    
                <li><a href="services.html">Certificati</a></li>                     
                
                -->
                <li  <?=strtolower($action)=="contatti" ? 'class="active"':''?>><a href="<?=base_url()?>contatti">Contatti</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- Navbar -->
