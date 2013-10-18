<?php get_header(); ?>
            
           
		               
<?php

	if( have_posts()): 

		while(have_posts()): the_post();
			the_content();  

		endwhile; 
		else : ?>
		
		Não há conteúdo a ser exibido
		<?php  endif; ?>
                

		   
<?php get_footer(); ?>