    <?php
        $args = array( 'category' => 9, 'post_type' =>  'post', 'posts_per_page' => 8, ); 
        $postslist = get_posts( $args );    
        foreach ($postslist as $post) :  setup_postdata($post); 
        ?>   
              <a class="box-o" href="<?php the_permalink(); ?>">
                    
                    <div class="frame-img-news" style="background:url(<?php the_post_thumbnail_url('large');?>);">


                    </div>
                    
                    <?php the_title(); ?>
                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                    <?php the_excerpt(); ?>
                     
                </a>
      
    <?php endforeach; ?> 
