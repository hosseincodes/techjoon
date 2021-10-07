<?php
function wwsh_load_widget() {
	 register_widget( 'wwsh_widget' );
}
add_action( 'widgets_init', 'wwsh_load_widget' );
// Creating the widget
class wwsh_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'wwsh_widget',
// Widget name will appear in UI
__('آخرین مطالب (ویجت اختصاصی اسپید لرن)', 'wwsh_widget_domain'),
// Widget description
array( 'description' => __( 'آخرین مطالب سایت تان را به عنوان ویجت نمایش دهید! - اختصاصی قالب اسپید لرن', 'wwsh_widget_domain' ), )
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
	$the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '3' ) );
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
<p><?php _e( 'مطلبی یافت نشد ):' ); ?></p>
<?php endif;
echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'آخرین مطالب سایت', 'wwsh_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان المان:' ); ?></label>
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
///
///
///
///
///
include 'widgets-courses.php';
///
///
///
///
function states_load_widget() {
	 register_widget( 'states_widget' );
}
add_action( 'widgets_init', 'states_load_widget' );
// Creating the widget
class states_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'states_widget',
// Widget name will appear in UI
__('آمار و ارقام (اختصاصی اسپید لرن)', 'states_widget_domain'),
// Widget description
array( 'description' => __( 'آمار و ارقام صفحه‌ی اصلی را در المنتور یا بصورت یک ویجت وردپرس، در هر صفحه‌ای نمایش دهید! - اختصاصی قالب اسپید لرن', 'states_widget_domain' ), )
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

?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="promotus">
				<div class="lineprom1"></div>
				<div class="lineprom2"></div>
				<div class="lineprom3"></div>
				<div class="lineprom4"></div>
				<div class="lineprom5"></div>
				<div class="lineprom6"></div>
				<div class="infos">
					<p><?php echo ot_get_option('infos_p' , 'آمار و ارقام نشانگر') ?></p>
					<h4><?php echo ot_get_option('infos_h4' , 'موفقیت دانشجویان ما') ?></h4>
					<span style="width:100; display:block;"><?php echo ot_get_option('infos_span' , 'می باشد') ?></span>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="backnums">
				<ul>
					<li class="studentsnum fffelement">
						<div class="logor">
							<i class="fas fa-user-graduate"></i>
						</div>
						<div class="contentnuml">
							<div class="numc">
								<?php echo ot_get_option('count_hamyaris' , '78065') ?>
							</div>
							<div class="titlenumc">
								<?php echo ot_get_option('infos_hamyaris' , 'همیارجو') ?>
							</div>
						</div>
					</li>
					<li class="coursesnum blueelement">
						<div class="logor">
							<i class="fas fa-chalkboard-teacher"></i>
						</div>
						<div class="contentnuml">
							<div class="numc">
								<?php echo ot_get_option('count_courses' , '20') ?>
							</div>
							<div class="titlenumc">
								<?php echo ot_get_option('infos_courses' , 'دوره‌ی آموزشی') ?>
							</div>
						</div>
					</li>
					<li class="certificatenum blueelement">
						<div class="logor">
							<i class="fas fa-clipboard-check"></i>
						</div>
						<div class="contentnuml">
							<div class="numc">
								<?php echo ot_get_option('count_oksells' , '15248') ?>
							</div>
							<div class="titlenumc">
								<?php echo ot_get_option('infos_oksells' , 'فارغ التحصیل') ?>
							</div>
						</div>
					</li>
					<li class="hoursnum blueelement">
						<div class="logor">
							<i class="far fa-clock"></i>
						</div>
						<div class="contentnuml">
							<div class="numc">
								<?php echo ot_get_option('count_hours' , '2560') ?>
							</div>
							<div class="titlenumc">
								<?php echo ot_get_option('infos_hours' , 'ساعت آموزش') ?>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php

echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'آمار و ارقام وبسایت', 'states_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان المان:' ); ?></label>
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
//
///
/////
////////
/////////////////////////////////
/////////////////////////
//////////
//
//
//
//
//
function homeblog_load_widget() {
	 register_widget( 'homeblog_widget' );
}
add_action( 'widgets_init', 'homeblog_load_widget' );
// Creating the widget
class homeblog_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'homeblog_widget',
// Widget name will appear in UI
__('آخرین مطالب وبسایت (اختصاصی اسپید لرن)', 'homeblog_widget_domain'),
// Widget description
array( 'description' => __( 'آخرین مطالب وبسایت در صفحه‌ی اصلی را در المنتور یا بصورت یک ویجت وردپرس، در هر صفحه‌ای نمایش دهید! - اختصاصی قالب اسپید لرن', 'homeblog_widget_domain' ), )
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

?>
<div class="blog-posts-bg">
  <div class="container">
    <div class="row postshomebox">
      <?php
      $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '1' ) );
      $wwsh_category = get_the_category();
       ?>
      <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-8 col-12 first-post">
              <a class="postshome" href="<?php echo the_permalink() ?>">
                <figure>
                  <?php the_post_thumbnail( 'article-homesize' ); ?>
                </figure>
                <div class="blog-posts-inner">
                  <div class="categorytxt">
                    <ul>
                      <li>
                        <?php the_date('j F Y'); ?>
                      </li>
                    </ul>
                  </div>
                  <h2><?php the_title() ?></h2>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      <?php else : ?>
          <p><?php _e( 'محتوایی در سایت وجود ندارد ):' ); ?></p>
      <?php endif; ?>
      <div class="col-lg-4 col-12 another-posts">
        <?php
        $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '2' , 'offset' => '1' ) );
        $wwsh_category = get_the_category();
         ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="posthomemargin">
                <a class="postshome" href="<?php echo the_permalink() ?>">
                  <figure>
                    <?php the_post_thumbnail( 'article-homelittle' ); ?>
                  </figure>
                  <div class="blog-posts-inner">
                    <div class="categorytxt">
                      <ul>
                        <li>
                          <?php the_date('j F Y'); ?>
                        </li>
                      </ul>
                    </div>
                    <h2><?php the_title() ?></h2>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'مطالب بیشتری در سایت قرار دهید. مطلبی یافت نشد' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a class="allcoursesb" href="<?php echo ot_get_option('blog_link','mag') ?>">مقالات دیگر</a>
      </div>
    </div>
  </div>
</div>
<?php

echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'آخرین مطالب وبسایت', 'homeblog_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان المان:' ); ?></label>
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
//
///
/////
////////
/////////////////////////////////
/////////////////////////
//////////
//
//
//
//
//
function bookdl_load_widget() {
	 register_widget( 'bookdl_widget' );
}
add_action( 'widgets_init', 'bookdl_load_widget' );
// Creating the widget
class bookdl_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'bookdl_widget',
// Widget name will appear in UI
__('المان دانلود کتاب صفحه‌ی اصلی (اختصاصی اسپید لرن)', 'bookdl_widget_domain'),
// Widget description
array( 'description' => __( 'المان دانلود کتاب صفحه‌ی اصلی را در المنتور یا بصورت یک ویجت وردپرس، در هر صفحه‌ای نمایش دهید! - اختصاصی قالب اسپید لرن', 'bookdl_widget_domain' ), )
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

?>
<div class="container afterbloghome">
  <div class="row">
    <div class="col-md-7 col-12">
      <div class="backctabook">
        <div class="txtctabook">
          <p><?php echo ot_get_option('book_p' , 'روایتی واقعی از') ?></p>
          <h3><?php echo ot_get_option('book_h3' , 'ساختن کارخانه‌ی پولسازی در ایران') ?></h3>
          <span style="width:100%; display:block;"><?php echo ot_get_option('book_span' , 'همین الان رایگان دانلود کنید!!') ?></span>
          <a class="bctagosmart" href="<?php echo ot_get_option('book_button_link' , '') ?>"><?php echo ot_get_option('book_button_txt' , 'دانلود کتاب') ?></a>
        </div>
      </div>
    </div>
    <div class="col-5 d-none d-md-block">
      <div class="imgbackbook">
        <img src="
        <?php echo ot_get_option('book_img' , get_template_directory_uri().'/img/hamyar/money-making-factory-ebook-mockup-hamyarcp.png') ?>">
      </div>
    </div>
  </div>
</div>
<?php

echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'دانلود کتاب صفحه‌ی اصلی', 'bookdl_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان المان:' ); ?></label>
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
//
///
/////
////////
/////////////////////////////////
/////////////////////////
//////////
//
//
//
//
//
function proshome_load_widget() {
	 register_widget( 'proshome_widget' );
}
add_action( 'widgets_init', 'proshome_load_widget' );
// Creating the widget
class proshome_widget extends WP_Widget {
function __construct() {
parent::__construct(
// Base ID of your widget
'proshome_widget',
// Widget name will appear in UI
__('المان نمایش محصولات صفحه‌ی اصلی (اختصاصی اسپید لرن)', 'proshome_widget_domain'),
// Widget description
array( 'description' => __( 'المان نمایش محصولات صفحه‌ی اصلی را در المنتور یا بصورت یک ویجت وردپرس، در هر صفحه‌ای نمایش دهید! - اختصاصی قالب اسپید لرن', 'proshome_widget_domain' ), )
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
?>
<div class="container">
	<div class="row">
		<div class="pros colswpsh">
			<?php
			$count_products_in_home = ot_get_option('count_products_in_home' , '3') ;
			$the_query = new WP_Query( array( 'post_type' => 'product' , 'posts_per_page' => $count_products_in_home ) );
			$wwsh_category = get_the_category();
			 ?>
			<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post();
					global $product;
					?>
			<div class="col-lg-4 col-sm-6 col-12 colswpsh">
				<div class="everypro colswpsh">
					<a href="<?php echo the_permalink(); ?>">
						<div class="proheader">
							<?php the_post_thumbnail( 'wwshthumb' ); ?>
						</div>
					</a>
					<div class="prodetail">
						<div class="atitlepro">
							<a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></div>
						<p><?php echo $product->get_short_description(); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
		<p><?php _e( 'دوره‌ای در سایت وجود ندارد ):' ); ?></p>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php

echo $args['after_widget'];
}
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'نمایش محصولات صفحه‌ی اصلی', 'proshome_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'عنوان المان:' ); ?></label>
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
