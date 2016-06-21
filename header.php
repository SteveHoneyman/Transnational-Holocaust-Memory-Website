<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- touch and apple -->

    <!--[if lt IE 9 ]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body>

    <div id="site-wrapper">
   
        <header role="banner">
            <div class="masthead">
                <h1>Transnational Holocaust Memory</h1>   
            </div>
                <nav role="navigation">
                  
                    
                    <div class="nav-toggle">
                    
                       
                        <label for="toggle-1"><span class="hamburger">&#9776;</span></label> 
                        <input type="checkbox" id="toggle-1">
                          
                    
                        <?php
                            $args = array (
                                'menu' => 'main-menu',
                                'menu_class' => 'nav-test'
                                );
                            
                            wp_nav_menu ( $args );
                        ?>
                    
                    </div>    
                    
                </nav>
        </header>  



        



