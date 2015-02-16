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
        <title>LARX - Interior Design Responsive Template</title>
        <meta name="description" content="A Template by Denis Griu"/>
        <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, onepage, responsive, mobile"/>
        <meta name="author" content="Denis Griu"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon"> 

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
    <body> 

        <!--Start Preloader -->
        <div id="preloader">
            <div class="preloader-container">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader-->

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top header-nav" role="navigation">
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
                    <a class="navbar-brand" href="index-m.html"><img height="24px" src="<?=base_url()?>assets/img/brand.png"></a>                     
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index-m.html">Home</a></li>
                        <li><a href="about.html">About</a></li>                                                                            
                        <li><a href="projects.html">Projects</a></li>                    
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <i class="fa fa-angle-down fa-lg"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="onepage_dark.html">One Page Dark</a></li>
                                <li><a href="onepage_slider.html">One Page Slider</a></li>
                                <li><a href="onepage_video.html">One Page Video</a></li>
                                <li><a href="onepage_nav_bottom.html">One Page Bottom Nav</a></li>
                                <li><a href="onepage-canvas.html">One Page Off-Canvas</a></li>
                                <li><a href="index-m.html">Multi-Page</a></li>
                                <li class="divider"></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>    
                                <li><a href="404_page.html">404 Error</a></li>                                    
                                <li><a href="coming_soon.html">Coming Soon</a></li>                                    
                            </ul>
                        </li>                        
                        <li><a href="contact.html">Contact</a></li>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- Navbar -->
    
        <!-- Slider -->
        <div class="tp-banner-container" id="home">
            <div class="tp-banner">

                <ul>    

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="<?=base_url()?>assets/img/slider-images/thumb1.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url()?>assets/img/lg/0.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->                        

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"        
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">We are a creative interior<br>design studio
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"        
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"><a href="projects.html" class="btn gold-btn">Get In Touch</a>                                                    
                        </div>

                    </li>
                    <!-- END SLIDE -->

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="<?=base_url()?>assets/img/slider-images/thumb2.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url()?>assets/img/lg/0.jpg"  alt="fullslide8"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- END MAIN IMAGE -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">A beautiful way to show<br>your projects
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"><a href="projects.html" class="btn gold-btn">Get In Touch</a>                                                    
                        </div>

                    </li>
                    <!-- END SLIDE  -->

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="<?=base_url()?>assets/img/slider-images/thumb3.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="<?=base_url()?>assets/img/slider-images/image3.jpg"  alt="fullslide8"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- END MAIN IMAGE -->                               

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Larx a creative template<br>for your business
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"><a href="projects.html" class="btn gold-btn">Get In Touch</a>                                                    
                        </div>

                    </li>
                    <!-- END SLIDE  -->

                </ul>                      

            </div>
        </div>  
        <!-- End Slider -->         

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- Who We Are -->            
            <div class="container padding-bottom">              
                    
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 about-caption text-center">
                        <!-- Section General Title -->
                        <div class="general-title">
                            <h2>Who We Are</h2>
                            <div class="space-bottom-2x"></div>   
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <div class="space-bottom-2x"></div>   
                    </div>                            
                </div>                
                <div class="row">    
                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                            <i class="fa fa-html5 fa-2x"></i>                                    
                        </div>
                        <div class="col-sm-10">
                            <h3>Bootstrap 3.2</h3>                                                                        
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                        </div>
                    </div> 

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                            <i class="fa fa-desktop fa-2x"></i>                                                                                
                        </div>
                        <div class="col-sm-10">
                            <h3>ULTRA RESPONSIVE LAYOUT</h3>                                           
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                            <i class="fa fa-font fa-2x"></i>                                                                                
                        </div>
                        <div class="col-sm-10">
                            <h3>GOOGLE FONTS</h3>                                                                                            
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>                                
                        </div>
                    </div>    

                </div><!-- /row -->                      
            </div><!-- /container -->                   
            <!-- End Who We Are -->

            <!-- Projects -->            
            <div class="container-fluid bg-color projects">                
                <div class="row">
                    
                    <div class="container">
                        <!-- Section General Title -->
                        <div class="general-title text-center">
                            <div class="space-bottom-2x"></div>      
                            <h2>Our Latest Works</h2>   
                            <div class="space-bottom-2x"></div>                            
                        </div>                                                        
                    </div>
                    
                                                                                                                             
                    <!-- Project Item (image, link and description for your project) -->
                    <div class="col-sm-6 col-md-4">
                        <div class="project-inner">
                            <a href="projects.html">  
                                <!-- Image -->                                               
                                <img src="<?=base_url()?>assets/img/projects/3big.jpg" alt="Specifie an alternate text for an image" >                                                                    
                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">                                           
                                        <h3>Penthouse Walding</h3>
                                        <p>2013/08</p>                                               
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 

                    <!-- Project Item (image, link and description for your project) -->
                    <div class="col-sm-6 col-md-4">
                        <div class="project-inner">
                            <a href="projects.html">    
                                <!-- Image -->                
                                <img src="<?=base_url()?>assets/img/projects/2big.jpg" alt="Specifie an alternate text for an image">                    
                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">                                        
                                        <h3>Villa in Cannes</h3>
                                        <p>2014/02</p>                                                
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                                                          
                    <!-- Project Item (image, link and description for your project) -->
                    <div class="col-sm-6 col-md-4">
                        <div class="project-inner">
                            <a href="projects.html">  
                                <!-- Image -->                  
                                <img src="<?=base_url()?>assets/img/projects/1big.jpg" alt="Specifie an alternate text for an image" >                    
                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">                                           
                                        <h3>New York Summer House</h3>
                                        <p>2012/01</p>                                               
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 

                </div><!-- /row -->                                                                                                                
            </div><!-- /container -->                                    
            <!-- End Projects -->            
            
            <!-- Our Services -->            
            <div class="container padding-bottom padding-top-x2 text-center" id="services">                                 
                
                <div class="row"> 

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box">  
                        <!-- Icon -->                    
                        <i class="fa fa-desktop fa-3x"></i>

                        <!-- Title and Description -->
                        <div class="service-title">    
                            <h3>Minimal Design</h3>                      
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box service-box-l">  
                        <!-- Icon -->   
                        <i class="fa fa-folder-open-o fa-3x"></i>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Fully Documented</h3>      
                        </div>                
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>                        

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box service-box-l">   
                        <!-- Icon -->  
                        <i class="fa fa-cubes fa-3x"></i>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Built with Bootstrap</h3>                      
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>                                                              

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none">   
                        <!-- Icon -->  
                        <i class="fa fa-laptop fa-3x"></i>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Responsive Layout</h3>                      
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none service-box-l">   
                        <!-- Icon -->  
                        <i class="fa fa-cog fa-3x"></i>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Seo Optimized</h3>                      
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none service-box-l">   
                        <!-- Icon -->  
                        <i class="fa fa-file-code-o fa-3x"></i> 
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Clean Code</h3>                      
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>            
                    </div>

                </div><!-- /row -->                           
            </div><!-- /container -->
            <!-- End Our Services -->
                
            <!-- Testimonials -->
            <div id="testimonials">
                <div class="container text-center padding-bottom padding-top-x2">
                    <!-- Section General Title -->
                    <div class="general-title">
                        <h2>From Clients</h2>
                        <div class="space-bottom-2x"></div>   
                    </div>
                    <div class="row">
                        <div id="owl-testimonials" class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>                                    
                                    <b>- Hermione Granger</b>
                                </div>                     
                            </div>

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>                                    
                                    <b>- Harry Potter</b>
                                </div>                     
                            </div>

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <b>- Ginny Wesley</b>
                                </div>                     
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->

            <!-- From Blog -->
            <section class="padding-top-x2 padding-bottom" id="blog">
                <div class="container">
                    <!-- Section General Title -->
                    <div class="general-title text-center">
                        <h2>From Blog</h2>  
                        <div class="space-bottom-2x"></div>                       
                    </div>
                    <div class="row">
                                                                                                                                                                    
                        <div id="grid-container" class="cbp-l-grid-blog">
                        <ul>
                            <!-- Blog Item -->
                            <li class="cbp-item ideas motion">
                                <a href="blog-posts/post1.html" class="cbp-caption cbp-singlePage">
                                    <!-- Blog Image -->
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="<?=base_url()?>assets/img/blog/blog_1.jpg" alt="Specifie an alternate text for an image">                    
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">View Post</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Blog Information -->
                                <div class="text-center">
                                    <a href="blog-posts/post1.html" class="cbp-l-grid-blog-title cbp-singlePage">Lorem ipsum dolor sit amet</a>
                                    <div class="cbp-l-grid-blog-date">20 december 2013</div>
                                    <div class="cbp-l-grid-blog-split">|</div>
                                    <a href="#" class="cbp-l-grid-blog-comments">12 comments</a>
                                </div>
                                <div class="cbp-l-grid-blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat magna aliquam erat volutpat.</div>                            
                            </li>

                            <!-- Blog Item -->
                            <li class="cbp-item house-design decoration">
                                <a href="blog-posts/post2.html" class="cbp-caption cbp-singlePage">
                                    <!-- Blog Image -->
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="<?=base_url()?>assets/img/blog/blog_2.jpg" alt="Specifie an alternate text for an image">                    
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">View Post</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Blog Information -->
                                <div class="text-center">
                                    <a href="blog-posts/post2.html" class="cbp-l-grid-blog-title cbp-singlePage">Consectetuer adipiscing elit sed diam </a>
                                    <div class="cbp-l-grid-blog-date">11 december 2013</div>
                                    <div class="cbp-l-grid-blog-split">|</div>
                                    <a href="#" class="cbp-l-grid-blog-comments">1 comments</a>
                                </div>
                                <div class="cbp-l-grid-blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat magna aliquam erat volutpat.</div>
                            </li>

                            <!-- Blog Item -->
                            <li class="cbp-item ideas motion">
                                <a href="blog-posts/post3.html" class="cbp-caption cbp-singlePage">
                                    <!-- Blog Image -->
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="<?=base_url()?>assets/img/blog/blog_3.jpg" alt="Specifie an alternate text for an image">                    
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">View Post</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Blog Information -->
                                <div class="text-center">
                                    <a href="blog-posts/post3.html" class="cbp-l-grid-blog-title cbp-singlePage">Nonummy nibh euismod tincidunt</a>
                                    <div class="cbp-l-grid-blog-date">2 december 2013</div>
                                    <div class="cbp-l-grid-blog-split">|</div>
                                    <a href="#" class="cbp-l-grid-blog-comments">22 comments</a>
                                </div>
                                <div class="cbp-l-grid-blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat magna aliquam erat volutpat.</div>
                            </li>
                                                
                        </ul>                                                
                        </div>                                                                                                                    

                    </div><!-- /row -->
                </div><!-- /container -->                              
            </section>
            <!-- End From blog -->

            <!-- Our Clients -->                
            <div id="our-clients">
                <div class="padding-top-x2 padding-bottom container text-center">  
                    <!-- Section General Title -->
                    <div class="general-title">
                        <h2>Our Clients</h2>    
                        <div class="space-bottom-2x"></div>                      
                    </div>                            
                    <div class="row">                                
                
                        <div id="owl-demo">
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_1.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_2.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_3.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_4.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_5.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_6.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_3.png" alt="Owl Image"></a>
                            <a href="#"><img src="<?=base_url()?>assets/img/about/client_4.png" alt="Owl Image"></a>
                        </div>                                

                    </div><!-- /row -->  
                </div><!-- /container -->
            </div>                    
            <!-- End Our Clients -->  

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper --> 

        <!-- Call to Action -->
        <div class="cta-section padding-top-x2 padding-bottom">
            <div class="container text-center">
                <div class="cta-title">
                    <h2>Want to work with us?</h2>
                    <div class="space-bottom-2x"></div>     
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam.</p>                    
                        <div class="space-bottom-2x"></div>     
                        <a href="contact.html" class="btn gold-btn">Get In Touch</a>                                                                            
                    </div>
                </div>
            </div>    
        </div>
        <!-- End Call to Action -->                     

        <!-- Footer -->  
        <div class="footer-big">
            <div class="container">
                <div class="row">

                    <!-- About Us Information -->
                    <div class="col-md-3 col-sm-6">                           
                        <div class="f-logo">
                            <h2>Our<br>Offices</h2>                                                                    
                        </div>
                    </div>
                    
                    <!-- Recent Posts -->
                    <div class="col-md-3 col-sm-6 f-inner">                        
                        <div class="col-sm-2">
                            <i class="fa fa-map-marker fa-lg"></i> 
                        </div>
                        <div class="col-sm-10">
                            <strong>New York</strong>
                            <div class="f-space"></div>
                            <address>                                
                                795 Folsom Ave, Suite 600<br>                                
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                first.last@example.com
                            </address>                           
                        </div>
                    </div>

                    <!-- Latest Tweet -->
                    <div class="col-md-3 col-sm-6 f-inner">
                        <div class="col-sm-2">
                            <i class="fa fa-map-marker fa-lg"></i> 
                        </div>
                        <div class="col-sm-10">
                            <strong>London</strong>
                            <div class="f-space"></div>
                            <address>                                
                                795 Folsom Ave, Suite 600<br>                                
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                first.last@example.com
                            </address>
                        </div>
                    </div>

                    <!-- Recent Works -->
                    <div class="col-md-3 col-sm-6 f-inner">   
                        <div class="col-sm-2">
                            <i class="fa fa-map-marker fa-lg"></i> 
                        </div>
                        <div class="col-sm-10">
                            <strong>Berlin</strong>
                            <div class="f-space"></div>
                            <address>                                
                                795 Folsom Ave, Suite 600<br>                                
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                first.last@example.com
                            </address>
                        </div>      
                    </div>                           

                </div>
            </div>
        </div>   

        <div id="footer">
            <div class="container">   
                <div class="row">                                                         
                    <!-- Copyright -->                                                       
                    <div class="col-sm-6 col-md-6 f-copyright">                        
                        <span>© Copyright LARX - All Rights Reserved</span>                        
                    </div>                      
                    <div class="col-sm-6 col-md-6">
                        <!-- Social Icons -->                              
                        <ul class="footer-social">
                            <li><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                            <li><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                            <li><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-skype fa-stack-1x fa-inverse"></i></span></a></li>
                            <li><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                        </ul>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div>        
        <!-- End Footer -->
                    
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