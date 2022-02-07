<?php
get_header(); ?>

<div id="main-content-wrap ruby-page-404" class="row clearfix page404">
	<div class="ruby-container">
		<div class="page-404-content-wrap">
			<div class="page-404-content-header">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/404_dog.svg'; ?>"/>
				<h1>Psiepraszamy. Nie ma takiej strony. Szukaj dalej!</h1>
			</div>
			<?php get_search_form( true ); ?>
			<a href="<?php echo get_home_url(); ?>" class="btn btn--back btn--white"><span>Wróć do bloga</span></a>
		</div>
	</div>
</div>

<?php
get_footer();