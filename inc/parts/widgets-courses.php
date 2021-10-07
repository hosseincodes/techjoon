<?php
function courses_load_widget() {
	 register_widget( 'courses_widget' );
}
add_action( 'widgets_init', 'courses_load_widget' );
// Creating the widget
class courses_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'courses_widget',
// Widget name will appear in UI
__('نمایش دوره‌ها (ویجت اختصاصی اسپید لرن)', 'courses_widget_domain'),
// Widget description
array( 'description' => __( 'دوره‌های سایت تان را در المنتور یا بصورت یک ویجت وردپرس، در هر صفحه‌ای نمایش دهید! - اختصاصی قالب اسپید لرن', 'courses_widget_domain' ), )
);
}
// Creating widget front-end
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
// This is where you run the code and display the output
	$the_query = new WP_Query( array( 'post_type' => 'product' , 'posts_per_page' => '3' ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="everyart row">
		<div class="col-md-4">
			<a class="d-block" href="<?php echo the_permalink() ?>">
				<figure>
				<?php the_post_thumbnail( 'wwshthumb' ); ?>
				</figure>
			</a>
		</div>
		<div class="col-md-8">
			<a class="d-block" href="<?php echo the_permalink() ?>">
				<div class="blog-posts-inner">
					<h2><?php echo the_title(); ?></h2>
				</div>
			</a>
		</div>
	</div>
<?php endwhile;
wp_reset_postdata();
else : ?>
<p><?php _e( 'دوره‌ای یافت نشد ):' ); ?></p>
<?php endif;
echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'دوره‌های آموزشی وبسایت', 'courses_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان ابزارک:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
}
