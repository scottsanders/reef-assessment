<?php get_header(); ?>

	<section class="page" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
		
		<div class="absolute-container">
		
		<?php if (have_posts()) while(have_posts()) : the_post(); ?>

			<div class="primary-content">
				
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

			</div>
			<div class="overlay"></div>
			<div class="secondary-content">
				
				<header>
					<h3>We need <span>10,000 signatures</span></h3>
				</header>
				
				<aside>
					
					<div class="progress">
						<span class="bar" style="width:50%">
							<span class="label">8,179 already!</span>
						</span>
					</div>

					<p>If we can together raise our voice in concern for the reef, we’ll be able to do something about it for generations to come.</p>
				
					<form action="">
						<input id="first_name" type="text" placeholder="First Name" required>
						<input type="text" placeholder="Last Name" required>
						<input type="email" placeholder="Email" required>
						<input type="text" placeholder="Postcode">
						<label><input type="checkbox">Send me occasional campaign updates</label>
						<input type="submit" class="button-secondary" value="Add your signature">
					</form>
				</aside>
				

			</div>

		<?php endwhile; ?>

		</div>
	
	</div>

	<section class="sub-page" >
		
		<a href="#close" class="close">Close</a>
		
		<?php $more = get_pages('child_of='.$post->ID);
		foreach($more as $post): setup_postdata($post); ?>

		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>

		<?php endforeach; ?>

	</div>
<?php get_footer(); ?>
