<?php

$look_max_width       = absint( $this->get( 'content_max_width' ) );
$look_amp_logo        = look_ruby_core::get_option( 'amp_logo' );
$look_amp_footer_logo = look_ruby_core::get_option( 'amp_footer_logo' );

$look_bg_color = look_ruby_core::get_option( 'amp_header_bg' );
if ( empty( $look_bg_color ) ) {
	$look_bg_color = '#ffffff';
}

$look_bg_body = look_ruby_core::get_option( 'amp_bg_body' );
if ( empty( $look_bg_body ) ) {
	$look_bg_body = '#ffffff';
}
$look_text_color = look_ruby_core::get_option( 'amp_body_color' );
if ( empty( $look_text_color ) ) {
	$look_text_color = '#242424';
}

$look_title_color = look_ruby_core::get_option( 'amp_title_color' );
if ( empty( $look_title_color ) ) {
	$look_title_color = '#111';
}

$look_meta_color = look_ruby_core::get_option( 'amp_meta_color' );
if ( empty( $look_meta_color ) ) {
	$look_meta_color = '#bbbbbb';
}

$look_link_color = look_ruby_core::get_option( 'amp_link_color' );
if ( empty( $look_link_color ) ) {
	$look_link_color = '#111';
}

//footer
$look_footer_color = look_ruby_core::get_option( 'amp_footer_color' );
if ( empty( $look_footer_color ) ) {
	$look_footer_color = '#ffffff';
}

$look_footer_bg = look_ruby_core::get_option( 'amp_footer_bg' );
if ( empty( $look_footer_bg ) ) {
	$look_footer_bg = '#282828';
} ?>
/* Generic WP styling */

.alignright {
float: right;
}

.alignleft {
float: left;
}

.aligncenter {
display: block;
margin-left: auto;
margin-right: auto;
}

.amp-wp-enforced-sizes {
/** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
max-width: 100%;
margin: 0 auto;
}

.amp-wp-unknown-size img {
/** Worst case scenario when we can't figure out dimensions for an image. **/
/** Force the image into a box of fixed dimensions and use object-fit to scale. **/
object-fit: contain;
}

/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
<?php if ( $look_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $look_max_width ); ?>;
<?php endif; ?>
}

html {
background: <?php echo sanitize_hex_color( $look_bg_body ); ?>;
}

body {
background: <?php echo sanitize_hex_color( $look_bg_body ); ?>;
color: <?php echo sanitize_hex_color( $look_text_color ); ?>;
font-family: 'Merriweather', 'Times New Roman', Times, Serif;
font-weight: 300;
line-height: 1.75em;
}

p,
ol,
ul,
figure {
margin: 0 0 1em;
padding: 0;
}

a {
color: #111;
font-weight: bold;
}


a:hover,
a:active,
a:focus,
a:visited {
color: <?php echo sanitize_hex_color( $look_text_color ); ?>;
text-decoration: underline;
}

/* Quotes */

blockquote {
color: <?php echo sanitize_hex_color( $look_text_color ); ?>;
background: rgba(0,0,0,.02);
border-left: 2px solid <?php echo sanitize_hex_color( $look_link_color ); ?>;
margin: 8px 0 24px 0;
padding: 16px;
}

blockquote p:last-child {
margin-bottom: 0;
}

/* UI Fonts */

.amp-wp-meta,
.amp-wp-header div,
.amp-wp-title,
.wp-caption-text,
.amp-wp-tax-category,
.amp-wp-tax-tag,
.amp-wp-comments-link,
.amp-wp-footer p,
.amp-wp-footer ul,
.back-to-top {
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
}

.amp-wp-header {
text-algin: center;
-ebkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,0.03);
-moz-box-shadow: 0 1px 2px 0 rgba(0,0,0,0.03);
box-shadow: 0 1px 2px 0 rgba(0,0,0,0.03);
background-color: <?php echo sanitize_hex_color( $look_bg_color ); ?>;
}

.amp-wp-header div {
text-align: center;
font-size: 1em;
font-weight: 400;
margin: 0 auto;
max-width: calc(840px - 32px);
padding: .875em 16px;
position: relative;
}

.amp-wp-header a {
text-decoration: none;
}

.amp-wp-article-content amp-carousel amp-img,
.amp-wp-article-content figure amp-img{
margin: 0 auto;
}

.alignleft {
float: left;
display: inline;
margin-top: .5em;
margin-right: 2em;
margin-left: 0;
max-width: 300px;
}

.alignright {
float: right;
display: inline;
margin-top: .5em;
margin-bottom: 1.25em;
margin-left: 2em;
max-width: 300px;
}

.alignnone {
display: block;
margin-top: 2em;
margin-bottom: 2em;
}

<?php if ( $look_amp_logo['url'] ): ?>
	.amp-wp-header a {
	display: block;
	background-size: contain;
	background-position: center center;
	background-image: url( '<?php echo esc_url( $look_amp_logo['url'] ); ?>' );
	background-repeat: no-repeat;
	height: 40px;
	width: 300px;
	margin: 0 auto;
	text-indent: -9999px;
	}
<?php else: ?>
	.amp-wp-header a {
	display: inline-block;
	text-decoration: none;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 900;
	margin: auto;
	}
<?php endif; ?>


/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
/** site icon is 32px **/
border-radius: 50%;
position: absolute;
right: 18px;
top: 10px;
}

/* Article */

.amp-wp-article {
color: <?php echo sanitize_hex_color( $look_text_color ); ?>;
font-weight: 400;
margin: 1.5em auto;
max-width: 840px;
overflow-wrap: break-word;
word-wrap: break-word;
}

/* Article Header */

.amp-wp-article-header {
align-items: center;
align-content: stretch;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 1.5em 16px 1.5em;
}

.amp-wp-title {
font-size: 30px;
line-height: 1.2em;
color: <?php echo sanitize_hex_color( $look_title_color ); ?>;
display: block;
flex: 1 0 100%;
font-weight: 900;
margin: 0 0 .625em;
width: 100%;
}

/* Article Meta */

.amp-wp-meta {
color: <?php echo sanitize_hex_color( $look_meta_color ); ?>;
display: inline-block;
flex: 2 1 50%;
font-size: .875em;
line-height: 1.5em;
margin: 0;
padding: 0;
}

.amp-wp-article-header .amp-wp-meta:last-of-type {
text-align: right;
}

.amp-wp-article-header .amp-wp-meta:first-of-type {
text-align: left;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
display: inline-block;
vertical-align: middle;
}

.amp-wp-byline amp-img {
position: relative;
margin-right: 6px;
}

.amp-wp-posted-on {
text-align: right;
}

/* Featured image */

.amp-wp-article-featured-image {
margin: 0 0 1em;
}
.amp-wp-article-featured-image amp-img {
margin: 0 auto;
}
.amp-wp-article-featured-image.wp-caption .wp-caption-text {
margin: 0 18px;
}

.amp-wp-meta.amp-wp-byline img{
border-radius: 50%;
-webkit-border-radius: 50%;
}

/* Article Content */

.amp-wp-article-content {
margin: 0 16px;
}

.amp-wp-article-content ul,
.amp-wp-article-content ol {
margin-left: 1em;
}

.amp-wp-article-content amp-img {
margin: 2em auto;
}

.amp-wp-article-content amp-img.alignright {
margin: 0 0 1em 16px;
}

.amp-wp-article-content amp-img.alignleft {
margin: 0 16px 1em 0;
}

/* Captions */

.wp-caption {
padding: 0;
}

.wp-caption.alignleft {
margin-right: 16px;
}

.wp-caption.alignright {
margin-left: 16px;
}

.wp-caption .wp-caption-text {
color: <?php echo sanitize_hex_color( $look_meta_color ); ?>;
font-size: .875em;
line-height: 1.5em;
margin: 0;
padding: .66em 10px .75em;
}

/* AMP Media */

amp-carousel {
background: rgba(0,0,0,.07);
margin: 0 -16px 1.5em;
}
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
background: rgba(0,0,0,.07);
margin: 0 -16px 1.5em;
}

.amp-wp-article-content amp-carousel amp-img {
border: none;
}

amp-carousel > amp-img > img {
object-fit: contain;
}

.amp-wp-iframe-placeholder {
background: #f2f2f2 url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
background-size: 48px 48px;
min-height: 48px;
}

p.has-drop-cap:not(:focus)::first-letter {
float: left;
font-size: 8.4em;
line-height: .68;
font-weight: 100;
margin: .05em .1em 0 0;
text-transform: uppercase;
font-style: normal;
}

/* Article Footer Meta */

.amp-wp-article-footer .amp-wp-meta {
display: block;
clear: both;
overflow: hidden;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
color: <?php echo sanitize_hex_color( $look_meta_color ); ?>;
font-size: .875em;
line-height: 1.5em;
margin: 1.5em 16px;
}

.amp-wp-comments-link {
color: <?php echo sanitize_hex_color( $look_meta_color ); ?>;
font-size: .875em;
line-height: 1.5em;
text-align: center;
margin: 2.25em 0 1.5em;
}

.amp-wp-comments-link a {
color: #fff;
background-color: <?php echo sanitize_hex_color( $look_link_color ); ?>;
cursor: pointer;
display: block;
font-size: 14px;
font-weight: 600;
line-height: 18px;
margin: 0 auto;
max-width: 200px;
padding: 11px 16px;
text-decoration: none;
width: 50%;
-webkit-transition: background-color 0.2s ease;
transition: background-color 0.2s ease;
}

.amp-wp-comments-link a:hover {
background-color: #282828;
}

/* AMP Footer */

.amp-wp-footer {
margin: 40px 0 0 0;
background-color: <?php echo sanitize_hex_color( $look_footer_bg ); ?>;
color: <?php echo sanitize_hex_color( $look_footer_color ); ?>;
}

.amp-wp-footer div {
margin: 0 auto;
max-width: calc(840px - 32px);
padding: 40px 20px;
position: relative;
}

.amp-wp-footer h2 {
display: block;
text-align: center;
line-height: 1.375em;
margin: 0 0 .5em;
}

<?php if ( $look_amp_footer_logo['url'] ): ?>
	.amp-wp-footer h2 {
	display: block;
	background-size: contain;
	background-position: center center;
	background-image: url( '<?php echo esc_url( $look_amp_footer_logo['url'] ); ?>' );
	background-repeat: no-repeat;
	height: 60px;
	width: 400px;
	margin: 0 auto;
	margin-bottom: 20px;
	text-indent: -9999px;
	}
<?php endif; ?>

blockquote *{
font-style: italic;
}

.amp-wp-footer p {
color: <?php echo sanitize_hex_color( $look_meta_color ); ?>;
font-size: .8em;
line-height: 1.5em;
margin: 0 85px 0 0;
}

.amp-wp-footer a {
color: <?php echo sanitize_hex_color( $look_footer_color ); ?>;
text-decoration: none;
opacity: .7;
transition: all .25s ease;
-webkit-transition: all .25s ease;
}

.amp-wp-footer a:hover {
opacity: 1;
}

.back-to-top {
position: fixed;
display: block;
top: auto;
font-size: 20px;
right: 25px;
bottom: 25px;
color: #fff;
height: 40px;
line-height: 36px;
text-align: center;
width: 40px;
vertical-align: middle;
background-color: #282828;
transition: all .25s ease;
-webkit-transition: all .25s ease;
}

body .back-to-top {
top: auto;
color: #fff;
}

.back-to-top:hover {
background-color: <?php echo sanitize_hex_color( $look_link_color ); ?>;
}

.amp-wp-footer p {
text-align: center;
margin: 20px auto 0 auto;
max-width: calc(840px - 32px);
}

.amp-wp-footer li {
display: inline-block;
list-style: none;
font-size: 12px;
padding: 0 10px;
font-weight: 400;
text-transform: uppercase;
}

.amp-wp-footer .menu {
padding: 0;
text-align: center;
}