<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
        <meta charset="UTF-8">
        <meta name=description content="Athens, GA Photographer">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" media="screen">        
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    </head>
    <body>
       
        
             <div id="wrapper">
            
        
        <div class="container-fluid">

            <div class="row top-buffer-header">
            <nav class="navbar navbar-custom" role="navigation">
             <div class="container-fluid">            
                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-custom" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-custom"></span>
                        <span class="icon-bar icon-bar-custom"></span>
                        <span class="icon-bar icon-bar-custom"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                 </div>
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                       <?php wp_list_pages(array('title_li' => '')); ?>
                </ul>
                </div>
              </div>  
            </nav>