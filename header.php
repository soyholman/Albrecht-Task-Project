
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Albrecht</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo ('template_directory');?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo ('template_directory');?>/css/responsive.css">
  <link rel="stylesheet" href="<?php bloginfo ('template_directory');?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php bloginfo ('template_directory');?>/css/owl.carousel.min.css">
  
</head>

<header>
      <?php wp_head();?>  
      <style>
          html {
    margin: 0px !important;
    overflow:auto;
}
      </style>
<?php $home = get_field('home');?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                       
        
                    
                            <a class="navbar-brand" href="<?php  
                            add_action( 'template_redirect', 'redirect_to_other_page' );
                            function redirect_to_other_page() {
                                if ( is_page( 143 ) ) {
                                  
                                  wp_redirect( '"'.home_url().'front-page"', 301 );
                                  
                                exit;
                                }
                            }
                            
                            
                            ?>">
                            <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.svg"  alt="logo"></a>
                 
               
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>
                     
                        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                     
                        
                        <?php wp_nav_menu(array ('theme_location'=>'top_menu',
                       'menu'=>'Top menu',
                        'menu_class'=>'navbar navbar-expand-lg',
                        'container_class'=>'',
                        'li_class'=>'nav-item',
                        'a_class'=>'nav-link ',
                        'active_class'=>'active'
                   
         
                        )) ;
                        ?>
                            <!-- <ul class="navbar-nav align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sobre nos</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solucoes</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contato</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul> -->
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar por produto ou serviço" aria-label="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="nav-item dropdown language">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class    ="dropdown-item" href="#">PT</a>
                                    <a class="dropdown-item" href="#">ES</a>
                                    <a class="dropdown-item" href="#">EN</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    
</html>
