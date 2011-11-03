<?php get_header(); ?>
    <div id="content">
        <div id="page-head">
              <h1>Blog</h1>
        </div>
        <div id="page">
          <div id="posts">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
            <div class="post">
              <div class="post-head">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="metadata">
                  <?php _e('Publicado el '); the_time('d/m/Y'); _e(' por '); _e(' '); the_author_posts_link(); edit_post_link('Editar', ' &#124; ', ''); ?></span>
              </div>
              <?php the_content(); ?>
              <span class="comment-count"><img alt="coment-icon" src="<?php bloginfo('template_directory'); ?>/images/comment-icon.png" width="16" /><?php comments_popup_link('Sin comentarios', '1 comentario', '% comentarios'); ?></span>
            </div>
              <?php endwhile; ?>
            <div class="comments-template">
              <?php comments_template(); ?>
            </div>
            <?php else : ?>
          <div class="post">
            <h2><?php _e('No se encontraron posts'); ?></h2>
          </div>
          <?php endif ?>            
          </div>
          <div id="sidebar">
            <?php get_sidebar(); ?>
          </div>
          <div class="clearbox"></div>  
        </div>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
