<?php get_header(); ?>

	<section id="subheader">
        
		<div class="container">
        
			<div class="row">
        
				<div class="span12">
        
					<h1>
                    
						<span><?php esc_html_e( 'Search', 'nova-lite' ) ?></span>
						<?php esc_html_e( ' results for', 'nova-lite' ) ?>
						<strong><?php echo $s; ?></strong>
					
                    </h1>
                    
				</div>
		
			</div>
        
		</div>
        
	</section>

        <div id="content" class="container content ">
            
            <div class="row" >

			<?php if ( ( novalite_template('sidebar') == "left-sidebar" ) || ( novalite_template('sidebar') == "right-sidebar" ) ) : ?>
                
                <div class="<?php echo novalite_template('span') .' '. novalite_template('sidebar'); ?>"> 
                <div class="row"> 
                
            <?php endif; ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
                        <div class="pin-article <?php echo novalite_template('span'); ?>">
                
                            <?php do_action('novalite_postformat'); ?>
                    
                            <div style="clear:both"></div>

                        </div>
                        
                <?php endwhile; else:  ?>
        
                        <div class="pin-article <?php echo novalite_template('span'); ?>">
                            <article class="article">
        
                            <h1 class="title"><?php esc_html_e( 'Not Found',"nova-lite" ) ?></h1>
                                
                            <p> <?php esc_html_e( 'You can repeat your search with the following form.',"nova-lite" ) ?> </p>
                        
                            <section class="contact-form searchform">
                                <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                     <div>
                                     <input type="text" placeholder="<?php esc_html_e( 'Search here', 'nova-lite' ) ?>"  name="s" id="s" class="input-search"/>
                                     <input type="submit" id="searchsubmit" class="button-search" value="<?php esc_html_e( 'Search', 'nova-lite' ) ?>" />
                                     </div>
                                </form>
                            <div class="clear"></div>  
                            </section>
                        
                            </article>
                            
                            <div style="clear:both"></div>
							
                        </div>
                        
                <?php endif; ?>

		<?php if ( ( novalite_template('sidebar') == "left-sidebar" ) || ( novalite_template('sidebar') == "right-sidebar" ) ) : ?>
            
            </div>
            </div>
            
        <?php endif; ?>
    
        <?php if ( novalite_template('span') == "span8" ) : ?>
            
            <section id="sidebar" class="span4">
                <div class="row">
					<?php if ( is_active_sidebar('side_sidebar_area')) { 
                        
                    	dynamic_sidebar('side_sidebar_area');
                        
                    } else { 
            
                        the_widget( 'WP_Widget_Archives','',
                    	array("title"=> esc_html__('Archives','nova-lite')),
                        	array('before_widget' => '<div class="pin-article span4"><div class="article">',
								  'after_widget'  => '</div></div>',
								  'before_title'  => '<h3 class="title">',
							      'after_title'   => '</h3>'
                            )
                        );
            
                        the_widget( 'WP_Widget_Categories','',
                    	array("title"=> esc_html__('Categories','nova-lite')),
                        	array('before_widget' => '<div class="pin-article span4"><div class="article">',
								  'after_widget'  => '</div></div>',
								  'before_title'  => '<h3 class="title">',
							      'after_title'   => '</h3>'
                            )
                        );
                            
                   		the_widget( 'WP_Widget_Calendar',
                    	array("title"=> esc_html__('Calendar','nova-lite')),
                        	array('before_widget' => '<div class="pin-article span4"><div class="article">',
								  'after_widget'  => '</div></div>',
								  'before_title'  => '<h3 class="title">',
							      'after_title'   => '</h3>'
                            )
                        );
                        
                	} ?>
                </div>
            </section>
        
        <?php endif; ?>

    </div>
    
	<?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>