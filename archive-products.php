<?php
/*
Template Name: Product Archive
*/

get_header();


$args = array(
   'post_type' => 'products',
   'posts_per_page' => -1,
);

$query = new WP_Query($args);
echo '<div class="container mt-5">';
if ($query->have_posts()) :
   echo '<div class="row">';
   while ($query->have_posts()) : $query->the_post();
      $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0];
      $price = get_post_meta(get_the_ID(), 'product_price', true);
?>
      <div class="col-md-4 py-4">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $featured_image; ?>" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title"><?php the_title(); ?></h5>
               <?php if ($price) : ?>
                  <p class="card-price">$<?php echo $price; ?></p>
               <?php endif; ?>
               <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go To Product</a>
            </div>
         </div>
      </div>
<?php
   endwhile;
   echo '</div>';
else :
   echo '<p>No products found.</p>';
endif;

echo '</div>';
get_footer();
