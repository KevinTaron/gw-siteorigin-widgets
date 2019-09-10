<?php
/**
 * @var array $instance
 * @var array $frames
 */
$this->clear_file_cache();
$count = 1;
?>

<div class="gw-so-timeline">
	<div class="gw-so-timeline-container">
		
		<?php foreach ( $frames as $frame ) : ?>
			<?php unset($color); ?>
			<?php if($frame['color']) $color = $frame['color']; ?>
			<div class="gw-so-timeline-item">
				<div class="gw-so-timeline-item-container">
					<div class="gw-so-timeline-head" <?php if(isset($color)) echo 'style="--bgsidecolor:' . $color . '; color:' . $color . '; background:' . $color . '"' ?>>
						<div class="gw-so-number-box">
							<span>
								<?php if($frame['date']): echo $frame['date']; ?>
								<?php else: echo $count; ?>
								<?php endif; ?>
							</span>
						</div>
						<h3><small><?php echo $frame['month'] ?></small><?php echo $frame['title']; ?></h3>
					</div>
					<div class="gw-so-timeline-body">
						<?php echo $frame['text']; ?>
					</div>
				</div>
			</div>
			<?php $count++; ?>
		<?php endforeach; ?>
	</div>
</div>