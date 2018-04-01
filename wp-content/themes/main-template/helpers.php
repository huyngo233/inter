<?php

register_nav_menus(
    	array(
            	'main-nav' => 'Main menu(main-nav)',
            	'footer-nav' => 'Footer menu(footer-nav)'
    	)
);

// show hidden button of Wp default editor
function ilc_mce_buttons($buttons){
  array_push($buttons,
 	"backcolor",
 	"anchor",
 	"hr",
 	"sub",
 	"sup",
 	"fontselect",
 	"fontsizeselect",
 	"styleselect",
 	"cleanup"
);
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");

function wpdocs_my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	</div>
	</form>';
 
	return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

//------------------------------------------------------------------------------------------
//Get list post demo
<?php
   					 $paged = (get_query_var('page')) ? get_query_var('page') : 1;
   			 	$args = array(
   			     	'post_type' => 'post',
   			     	'paged' => $paged,
   			     	'posts_per_page' => 3,
   			 	);
   			 	$wp_query = new WP_Query($args);
   		 ?>
    	<?php if (have_posts()) : ?>
   		 <?php while (have_posts()) : the_post();
            	global $post;
              	 
      	?>
     		 <div class="col-md-4">
     			 <div class="item">
     				 <div class="img">
     					 <a href="<?php echo get_permalink();?>">
         					 <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'medium'); ?>
               		 <img src="<?php echo $featured_image[0] ?>" data-id="<?php echo $product->id; ?>" />
         					 <h6><?php the_title(); ?></h6>
     					 </a>
     				 </div>
     				 <div class="info">
     					 <p>
     						 <span class="category">
     							 <?php
   							 	$categories = get_the_category();
   											 if ( ! empty( $categories ) ) {
   											 	echo esc_html( $categories[0]->name );   
   											 }
     							 ?>
     						 </span>
     						 <span class="author">
     							 <?php the_author(); ?>
     						 </span>
     						 <span class="published_date">
     							 <?php
     							 $date = date_create($post->post_date);
     							 echo date_format($date,"jS M,o");
     							 // the_date('jS M,o');
     							 ?>
     						 </span>
     					 </p>
     				 </div>
     				 <div class="content">
     					 <?php the_content(); ?>
     				 </div>
     			 </div>
     		 </div>
       	<?php endwhile; // end of the loop.   ?>
    	<?php endif; ?>
   			 </div>
   		 </div>
   		 <div class="pagination-wrap">
      	<div class="pagination">
      	<?php
     				 global $wp_query;
     				 $big = 999999999;
     				 echo paginate_links( array(
     				 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
     				 'format' => '?paged=%#%',
     				 'prev_text' => __('<'),
     				 'next_text' => __('>'),
     				 'current' => max( 1, $paged ),
     				 'total' => $wp_query->max_num_pages
     				 ) );
     				 ?>
     			 </div>
    	</div>
//----------------------------------------------------------------------------------------
//Get post by category
//https://wordpress.org/support/topic/how-to-list-posts-in-category-x

<?php query_posts('category_name=work&showposts=5'); ?>
<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li><?php the_title(); ?></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>

//----------------------------------------------------------------------------------------------

//Open hidden button on editer 
//http://thachpham.com/wordpress/wordpress-tutorials/them-nut-soan-thao-khong-can-plugin.html

//function.php
//…………….
function ilc_mce_buttons($buttons){
  array_push($buttons,
     "backcolor",
     "anchor",
     "hr",
     "sub",
     "sup",
     "fontselect",
     "fontsizeselect",
     "styleselect",
     "cleanup"
);
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");
//……..

//--------------------------------------------------------------------//-----------------------------------
//Get post content

//echo get_post_field('post_content',  get_the_ID());

//------------------------------------------------------------------//----------------------------------

//Show page content
 <?php
   					 // TO SHOW THE PAGE CONTENTS
   				 	while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
   				     	<div class="entry-content-page">
   				         	<?php the_content(); ?> <!-- Page Content -->
   				     	</div><!-- .entry-content-page -->

   				 	<?php
   				 	endwhile; //resetting the page loop
   				 	wp_reset_query(); //resetting the page query
   				 	?>
//------------------------------------------------------------------//---------------------------------


//Query post by category

//Add pagination with wp_pagenavi plugin

 <?php
              	$keyword =  $_POST['keyword'];
              	$query = "category_name=hoi-dap&posts_per_page=5";
              	$paged = get_query_var('paged');
              	$query = $query."&paged=".$paged;

              	if($keyword!=""){
                	$query.="&s=".$keyword;
              	}
                 	 
            	?>
            	<!-- end item -->
           		 <?php query_posts($query); ?>
   									 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   	       					 
   										 <div class="item section ">
   		             		 <div class="btn-toggle-silde bclose">+</div>
   		               	<div class="author">
   		                 	<span><?php
   					          		 $post_custom_values = get_post_custom_values('author', get_the_ID());
   					             	echo $post_custom_values[0];
   					           	?></span> on <?php the_date('d-m-Y'); ?>
   		               	</div>
   		               	<div class="question">
   		               	<?php
   					          		 // $post_custom_values = get_post_custom_values('question', get_the_ID());
   					            	//  echo $post_custom_values[0];
                    	the_content();
   					           	?>
   		               	</div>
   		               	<div class="answer silde" style="display:none"><span>Answer </span>
   		               	<?php
   					          		 $post_custom_values = get_post_custom_values('answer', get_the_ID());
   					             	echo $post_custom_values[0];
   					           	?>
   		               	</div>
   		             	</div>
   									 <?php endwhile; ?>
                	<div class="pagination">
   								 <?php endif;
                 	wp_pagenavi();
              	wp_reset_query();

              	?>






//--------------------------------------------------
//single-products.php
//Row 73, 
    //var show_popup = "<?php echo $show_popup;  ?>";


//------------------------------------------------------
//Query custom postype and custom taxonomy
//Function.php, add get custom value 

function add_query_vars_course_categories( $vars ){
  $vars[] = "course_categories";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_course_categories' );
……….



$course_categories = (get_query_var('course_categories')) ? get_query_var('course_categories') : '1';
        	$args = array();
        	if($course_categories!=""){
          	$args = array(
            	'post_type' => 'course_item',
            	'posts_per_page' => -1,
            	'tax_query' =>
              	array(
                	array(
                	'taxonomy' => 'course_categories',
                	'field'	=> 'slug',
                	'terms'	=>  $course_categories
              	),
            	),
          	);
              	 
        	}else{
          	$args = array(
            	'post_type' => 'course_item',
            	'posts_per_page' => -1
          	);
        	}
   				 
   			 	$wp_query = new WP_Query($args);


//-----------------------------------------------
//Add custom term, categories for post or custom post type


function create_portfolio_taxonomy() {

    register_taxonomy(
        'portfolio_cate',
        'portfolio_item',
        array(
            'label' => __( 'Portfolio Category' ),
            'rewrite' => array( 'slug' => 'portfolio-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_portfolio_taxonomy' );

//----------------------------------------------
Get terms on custom post type

<?php while (have_posts()) : the_post(); 
		                global $post; 
	
$terms = get_the_terms( $post->ID, 'portfolio_cate' ); 

//---------------------------------------------------

?>
