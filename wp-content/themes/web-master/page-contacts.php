<?php /*
* Template Name: Contacts
**/ ?>
<?php get_header(); ?>


<div id="primary" class="content-area contacts">
		<main id="main" class="site-main" role="main">
			
			<div class="container">
                <div class="borderRadius">


                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php endwhile; endif; ?>

                    <div class="myData">
                        <h3>Форма обратной связи - не работает</h3>

                        <form action="" method="POST" >
                            <fieldset>
                                <input type="text" placehoder="Ваше имя" />
                                <input type="number" placehoder="Ваш телефон" />
                                <input type="email" placehoder="Ваш телефон" />
                                <input type="submit" value="Отправить" />
                            </fieldset>
                            
                            

                        </form>

                        <a href="mailto:tbunitrade@gmail.com">tbunitrade@gmail.com</a>
                        <a href="skype:oleksandr.sonich.s-group">Skype:Oleksandr.sonich.s-group</a>
                        <a href="tel:+380685689578">+38-068-568-95-78</a>
                        

                    </div>

                    <div class="chat">
                        <h3>
                            <?php #the_field ('slogan') ;?>
                        </h3>

                        <p>
                            <?php #the_field ('slogan_text') ;?>
                        </p>
                        <a href="<?php #the_field ('telegram_chat') ;?>"><img src="<?php #the_field ('telegramimgbottom') ;?>"> -
                        <?php #the_field ('telegram_chat') ;?>
                        </a>

                    </div>
                </div>
			</div>
		</main>
</div>


<br>

<?php get_footer();?>