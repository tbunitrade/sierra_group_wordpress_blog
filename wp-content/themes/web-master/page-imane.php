<?php /*
*Template Name: Imena
*/ ?>
<?php get_header(); ?>

<script  src="/resellers_form/jquery.js"></script>
<link rel="stylesheet" href="/resellers_form/check-form.css" media="all" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div id="main-reseller-form" class="main-reseller-form">
            <noindex>
            <!-- COPY THIS -->
                <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/api_forms.php';
                $RESELLER_ID = 1274;
                $form_config = array(
                    'template'		=> 'default',
                    'reseller_id'	=> $RESELLER_ID, // Your ResellerID
                    'lang'			=> 'ru' // 'ru','en'
                );

                if ($res = getForm( $form_config)) {
                    echo $res; // Responce of imena_form service
                }
                ?>
                <!-- END -->
            </noindex>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <main id="main-reseller-form-container" class="main-reseller-form-container" role="main">

            <h2>Доп. информация</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Как это работает ?</a></li>
                <li><a data-toggle="tab" href="#menu1">Таблица цен на домены</a></li>
                <li><a data-toggle="tab" href="#menu2">Информация</a></li>
                <li><a data-toggle="tab" href="#menu3">еще</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <h3>Общее</h3>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                </div>
                <div id="menu1" class="tab-pane fade">
                <h3>Таблица цен</h3>
                <?php  echo the_field('first_layer'); ?>
                </div>
                <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <?php  echo the_field('second_layer'); ?>
                
                </div>
                <div id="menu3" class="tab-pane fade">
                <h3>Еще</h3>
                <?php  echo the_field('third_layer'); ?>
                </div>
            </div>      
        </main><!-- #main -->
         <!-- END id="main-reseller-form"-->
    </div>
</div>
      
        
        




<?php get_footer(); ?>