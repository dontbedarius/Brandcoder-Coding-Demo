<?php
get_header();
?>
<div id="primary" class="container py-5">
   <main id="main" class="site-main">
      <?php while (have_posts()) : the_post(); ?>
         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
               <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
               <div class="row">
                  <div class="col-md-4">
                     <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image">
                           <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                        </div>
                     <?php endif; ?>
                  </div>
                  <div class="col-md-8">
                     <h2><strong>Price: </strong>$<?php echo get_post_meta(get_the_ID(), 'product_price', true); ?></h2>
                     <h4><strong>Description:</strong> <?php echo get_post_meta(get_the_ID(), 'product_description', true); ?></h4>
                  </div>
               </div>
            </div>
         </article>
      <?php endwhile; ?>
   </main>
</div>
<?php get_footer(); ?>