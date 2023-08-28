<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php wp_head( );?>
</head>

<body <?php body_class( )?>>
    <!--NAvbar start-->
    <section>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand logo" href="<?php echo site_url();?> ">Minimo</a>
                        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div>
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' =>'primary-menu',
                                    'menu_class' => 'nav',
                                ) );
                    ?>
                        </div>

                    </div>
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Photodiary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Music</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Travel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>

                        </ul>
                    </div> -->
                </nav>

            </div>
        </div>
    </section>
    <!--NAvbar end-->