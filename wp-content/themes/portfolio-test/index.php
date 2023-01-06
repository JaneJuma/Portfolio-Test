<?php
/*
 *  Template Name: Portfolio page
 */

get_header();
?>


<div class="container" >
 <main>


    	<div class="row justify-content-md-between my-4">
    		<div class="col-12 banner-wrapper">
    			<div class="image-holder">
    			<img class="float-start" width="100%" src="<?php bloginfo('template_url');?>/images/keyboard.png">
    		    </div>
    		   <div class="details2">
    		   	 <button type="button" class="btn btn-sm btn-outline-secondary">Branding</button>

              <p class="details-text fw-bold">KeyBoard</p>
        

            </div>
    		</div>
    	</div>

      <div class="row mb-4">
         <?php
                $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'asc'
                 );
                 $arr_posts = new WP_Query( $args );
             
                 if ( $arr_posts->have_posts() ) :
             
                 while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
        <div class="col-6 mb-4">
        
              <div class="image-holder">
    			    <!-- <img class="" width="100%" src="<?php bloginfo('template_url');?>/images/sofa.png"> -->
              <?php
            if(has_post_thumbnail()){
                //the_post_thumbnail();
                $thumbs=wp_get_attachment_image_src(get_post_thumbnail_id(),"full",false);
                $img =$thumbs[0];
                ?>
                <img class="" src="<?php echo $img;?>" width="100%">
                <?php
            }
           ?>
    		    </div>

            <div class="details">
              <button type="button" class="btn btn-sm btn-outline-secondary"><?php the_content(); ?></button>
              <p class="details-text fw-bold"><?php the_title(); ?></p>
         
            </div>
     
        </div>

           <?php
             endwhile;
             endif;?>

 
</div>
    

      <div class="row">
      	<div class="col-12 dream-project">
      		<div class="col-6 float-start">
      			<h1 class="mb-4">Help To Build<br> Your Dream<br> Project</h1>
      			<p class="mb-4">A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.</p>
      			<a class="btn btn-primary btn-lg my-4" fill="#fff;" href="#" role="button">CONTACT NOW</a>
      		</div>
      		<div class="col-6 float-start"> 
      			<img width="100%;" src="<?php bloginfo('template_url');?>/images/pic.png">
      		</div>
      		
      	</div>
      </div>


 </main>

<?php get_footer(); ?>
 