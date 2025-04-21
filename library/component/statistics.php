<?php

$title = get_sub_field( 'title' );
$intro = get_sub_field( 'intro' );

?>
<div class="statistics-container">
	<div class="statistics-header">
		<div class="statistics-header-title">
			<h2><?php print $title ?></h2>
			<div class="stars"></div>
		</div>
		<div class="statistics-header-intro"><?php print $intro ?></div>
	</div>
	<div class="statistics-graphs">
		<?php while ( have_rows( 'graphs' ) ) : the_row(); ?>
		<div class="graph-column">
			<div class="graph">
				<div class="single-chart">
					<svg viewBox="0 0 36 36" class="circular-chart blue">
					<path class="circle-bg"
						d="M18 2.0845
						a 15.9155 15.9155 0 0 1 0 31.831
						a 15.9155 15.9155 0 0 1 0 -31.831"
					/>
					<path class="circle"
						stroke-dasharray="<?php the_sub_field( 'number-current' ); ?>, <?php the_sub_field( 'number-max' ); ?>"
						d="M18 2.0845
						a 15.9155 15.9155 0 0 1 0 31.831
						a 15.9155 15.9155 0 0 1 0 -31.831"
					/>
					<text x="18" y="20.35" class="percentage"><?php the_sub_field( 'number-current' ); ?>%</text>
					</svg>
				</div>
			</div>
			<div class="graph-title">
				<h4><?php the_sub_field( 'description') ?></h4>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<div class="statistics-datapoints">
	<?php while ( have_rows( 'datapoints' ) ) : the_row(); ?>
	<div class="datapoint-column">
		<h3><?php the_sub_field( 'number' ); ?></h3>
		<h4><?php the_sub_field( 'description' ); ?></h4>
	</div>
	<?php endwhile; ?>
</div>

