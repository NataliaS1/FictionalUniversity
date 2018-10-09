 <?php
	get_header();
	
	while(have_posts()){
		the_post(); /*the post tells wordpress to get elements of next post*/ ?>
		  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>Interested in attending our school? Take a look at what we have to offer.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
	<?php $theParent = wp_get_post_parent_id(get_the_ID());	?>
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
	
    <?php 
	$testArray = get_pages(array(
		'child_of' => get_the_ID() #gets rid of menu if there's no parent or child pages
	));
	
	if($theParent or $testArray ){ #when there are parent or child pages, show menu?> 
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title($theParent); #make titles dynamic?></a></h2>  
      <ul class="min-list">
       <?php
			if($theParent){
			$findChildrenOf = $theParent;	#when there is no child page
			} else
				{ $findChildrenOf = get_the_ID(); #when there is a child page
				}
		wp_list_pages(array
		('title_li' => NULL, 
		'child_of' => $findChildrenOf #making an associative array
		));
	   ?>
      </ul>
    </div>
	<?php } ?>

	
    <div class="generic-content">
      <p><?php the_content(); ?></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
    </div>

  </div>
		
	  <?php
	}
	
	get_footer();

?>