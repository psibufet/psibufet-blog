<?php
if ( has_post_format( 'video' ) ) {
	echo '<div class="post-format-info is-video-format">';
	echo '<span class="post-format-icon"><i class="fa-rb fa-play"></i></span>';
	echo '</div>';
} elseif ( has_post_format( 'audio' ) ) {
	echo '<div class="post-format-info is-audio-format">';
	echo '<span class="post-format-icon"><i class="fa-rb fa-volume-up"></i></span>';
	echo '</div>';
} elseif ( has_post_format( 'gallery' ) ) {
	echo '<div class="post-format-info is-gallery-format">';
	echo '<span class="post-format-icon"><i class="fa-rb fa-camera"></i></span>';
	echo '</div>';
}
