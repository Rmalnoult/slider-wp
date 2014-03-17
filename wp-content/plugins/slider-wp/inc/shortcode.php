<?php

class wsf_shortcode {

	function __construct() {
		add_shortcode( 'wsf-date', array( __CLASS__, 'shortcode_wsf_date' ));
		add_shortcode( 'wsf-project-list', array( __CLASS__, 'shortcode_project_list' ));
	}

	public static function shortcode_wsf_date($atts) {

		extract(shortcode_atts( array(
			'format' => 'd/m/y',
			), $atts ));
	  return "<p>nous sommes le " . date($format) . "</p>";
	}
	public static function shortcode_project_list($atts) {

		$project_query = new WP_QUERY( array(
			'post_type' => 'post',
			'post_per_page' => 3,
			'orderby' => 'rand'
		));

		if (!$project_query->have_posts() ) {
			return false;
		}

		?>

		<h3>D'autres projets</h3>
		<ul>
			<?php while ( $project_query->have_posts() ) : 
				$project_query->the_post(); ?>
				<li><?php the_title(); ?></li>
			<?php endwhile ?>

		</ul>
		<?php

	}

}




// fonction basique shortcode
// function shortcode_wsf_date() {
//   return "<p>nous sommes le " . date("d/m/y") . "</p>";
// }


// fonction shortcode avec parametres modifiables dans le back office de wp
// function shortcode_wsf_date($atts) {

// 	extract(shortcode_atts( array(
// 		'format' => 'd/m/y',
// 		), $atts ));
//   return "<p>nous sommes le " . date($format) . "</p>";
// }