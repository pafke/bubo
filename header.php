<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bubo bubo</title>

    <link href="<?php echo get_template_directory_uri(); ?>/css/slick.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/swipebox.min.css" rel="stylesheet" />
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.swipebox.min.js"></script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo get_site_url(); ?>"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_bubo.svg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    $items = wp_get_nav_menu_items( 'Main menu', $args );
                    foreach ($items as $value){
                        echo '<li><a href="'.$value->url.'">'.$value->title.'</a></li>';
                    }
                ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>