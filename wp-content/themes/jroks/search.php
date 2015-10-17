<?php $options = get_option('bloggie'); ?>
<?php get_header(); ?>
<div id="page">
	<div class="content">
		<article class="article">
			<div id="content_box">
<h1><?php echo get_search_query(); ?></h1>
		<div class="metasingle-aftertitle">
			<div class="ktz-inner-metasingle">
	<span class="byline">by <span class="author vcard">
	<a class="url fn n" href="">

	<script language="JavaScript">
	var r_text = new Array ();
	r_text[0] = "Jackie Evancho";
	r_text[1] = "Taylor Hardick";
	r_text[2] = "Owen Dempsey";
	r_text[3] = "Lucas Till";
	r_text[4] = "Madison Pettis";
	r_text[5] = "Yara Shahidi";
	r_text[6] = "Alexandria DeBerry";
	r_text[7] = "Frank Lebouf"
	r_text[8] = "De Bozz"
	r_text[9] = "Telkomnyet"
	var i = Math.floor(7*Math.random())
	document.write(r_text[i]);
	</script>

	</a></span></span>

<span class="posted-on">on <a href="" rel="">
	<time class="entry-date published updated">

	<script type="text/javascript"> 
	var d=new Date()
	var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
 	var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
 	document.write(weekday[d.getDay()] + " ")
 	document.write(d.getDate() + ". ")
 	document.write(monthname[d.getMonth()] + " ")
 	document.write(d.getFullYear())
 	</script>
	</time>
	</a>
	</span>
</div></div>
<?php echo spp(get_search_query());?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
							<header>
                                <div class="frontImgBox">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
								<?php if ( has_post_thumbnail() ) { ?> 
								<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
								<?php } else { ?>
								<div class="featured-thumbnail">
								<img width="200" height="147" src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
								</div>
								<?php } ?>
								</a>
						        </div>
								<h2 class="title">
									<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h2>
								<div class="post-info">
								</div>
							</header><!--.header-->
							
							<div class="post-content image-caption-format-1">
								<?php echo excerpt(20);?>
							</div>
                            <div class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">Read More &rarr;</a></div>
                            <div class="tablePost">
                            <div class="authorColumn"><?php _e('By ', 'mythemeshop'); the_author_posts_link(); ?></div>
                            <div class="dateColumn"><?php the_time('F j, Y'); ?></div>
                            <div class="catColumn"><?php $category = get_the_category(); echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a>';?></div>
                            </div>
						</div><!--.post excerpt-->
					<?php endwhile; else: ?>
						
					<?php endif; ?>
						
<?php if ($options['mts_pagenavigation'] == '1') { ?>
<?php pagination($additional_loop->max_num_pages);?>
<?php } else { ?>
<div class="pnavigation2">
<div class="nav-previous"><?php next_posts_link( __( '&larr; '.'Older posts', 'mythemeshop' ) ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts'.' &rarr;', 'mythemeshop' ) ); ?></div>
</div>
<?php } ?>
							
			</div>
		</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>