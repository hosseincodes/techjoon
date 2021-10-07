<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5dd00f33e8534',
	'title' => 'عدم نمایش',
	'fields' => array(
		array(
			'key' => 'field_5dd00f3fa16a0',
			'label' => 'عدم نمایش بخش‌های "معرفی دوره"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd0e00b5d871',
			'label' => 'اعمال تنظیمات برای "عدم نمایش بخش‌های معرفی دوره"',
			'name' => 'show-set-settings1',
			'type' => 'true_false',
			'instructions' => 'برای اعمال تنظیمات روی این بخش، این گزینه را تیک بزنید.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5dd00fd1a16a2',
			'label' => 'عدم نمایش کلی باکس "معرفی دوره"',
			'name' => 'remove-course-intro',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd00f5aa16a1',
			'label' => 'عدم نمایش عنوان "معرفی دوره"',
			'name' => 'remove-course-intro-title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd0103ba16a3',
			'label' => 'عدم نمایش ویدیو در "معرفی دوره"',
			'name' => 'remove-course-intro-video',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd01082a16a4',
			'label' => 'عدم نمایش توضیحات در "معرفی دوره"',
			'name' => 'remove-course-intro-detail',
			'type' => 'true_false',
			'instructions' => 'با حذف این بخش، توضیحات و متن محصول، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),

		
		array(
			'key' => 'field_5dd2c4ebc2e69',
			'label' => 'عدم نمایش بخش‌های "ثبت نام در دوره"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd2c4fbc2e6a',
			'label' => 'عدم نمایش کلی باکس "ثبت نام در دوره"',
			'name' => 'remove-course-register',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd2c51fc2e6b',
			'label' => 'عدم نمایش بخش‌های "نظرات/دیدگاه‌ها"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd2c529c2e6c',
			'label' => 'عدم نمایش کلی باکس "نظرات/دیدگاه‌ها"',
			'name' => 'remove-comments',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));




acf_add_local_field_group(array(
	'key' => 'group_5e10553474580',
	'title' => 'تنظیمات سایدبار',
	'fields' => array(
		array(
			'key' => 'field_5e10554080e52',
			'label' => 'اطلاعات دوره',
			'name' => 'infos-course-reg',
			'type' => 'checkbox',
			'instructions' => 'این موارد را می‌توانید به این صورت وارد کنید:<br>
 شروع دوره: 16 مهر 1398<br>
 زمان دوره: ۸۷ ساعت<br>
 نحوه پرداخت: نقدی و اقساطی<br>
و...<br>
<br>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'شروع دوره: 16 مهر 1398' => 'شروع دوره: 16 مهر 1398',
				'زمان دوره: ۸۷ ساعت' => 'زمان دوره: ۸۷ ساعت',
				'نحوه پرداخت: نقدی و اقساطی' => 'نحوه پرداخت: نقدی و اقساطی',
			),
			'allow_custom' => 1,
			'save_custom' => 1,
			'default_value' => array(
			),
			'layout' => 'vertical',
			'toggle' => 1,
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));



acf_add_local_field_group(array(
	'key' => 'group_5ecbcce3192b0',
	'title' => 'باکس دانلود مقاله',
	'fields' => array(
		array(
			'key' => 'field_5ecbcf8eea79e',
			'label' => 'فعال بودن باکس دانلود',
			'name' => 'dl_box_onoff',
			'type' => 'true_false',
			'instructions' => 'فعال یا غیرفعال بودن باکس دانلود مقاله را مشخص کنید.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'فعال است',
			'ui_off_text' => 'غیرفعال است',
		),
		array(
			'key' => 'field_5ecbcd09ea79b',
			'label' => 'دانلود مقاله تنها برای کاربرانی که وارد شده‌اند',
			'name' => 'just_for_loggedin',
			'type' => 'true_false',
			'instructions' => 'تنها کسانی که وارد حساب کاربری‌شان شده‌اند بتوانند دانلود کنند. در صورتی که غیرفعال باشد، همه‌ی کاربران (هم کسانی که وارد شده‌اند و هم کسانی که وارد نشده‌اند) می‌توانند دانلود کنند.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'فعال بودن',
			'ui_off_text' => 'غیرفعال بودن',
		),
		array(
			'key' => 'field_5ecbcdf0ea79c',
			'label' => 'توضیحات باکس دانلود مقاله',
			'name' => 'downloadbox_desc',
			'type' => 'textarea',
			'instructions' => 'توضیحاتی را درباره‌ی لینک دانلود، نحوه‌ی استفاده، رمز فایل (اگر رمز دارد!)، برای چه چیزی هست و... بنویسید.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'دانلود رایگان این فایل صرفا برای کاربرانی است که وارد شده‌اند. چرا <a target="_blank" href="https://shayanweb.com/panel">عضو سایت</a> نمی‌شوید تا دیگر این پنجره را نبینید و مستقیم دانلود کنید؟! - <a target="_blank" href="https://shayanweb.com/panel">ورود به سایت</a>',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5ecbcf03ea79d',
			'label' => 'لینک دانلود',
			'name' => 'post_dl_url_link',
			'type' => 'url',
			'instructions' => 'در ابتدای این لینک دانلود، باید https:// یا http:// وجود داشته باشد. برای آپلود فایل، از یک هاست دانلود و یا (اگر کم حجم است) از بخش رسانه‌ها در وبسایت تان می‌توانید استفاده کنید؛ سپس لینک آن را در اینجا وارد کنید. <strong></strong>',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ecbd743a8fbd',
			'label' => 'متن دانلود',
			'name' => 'post_dl_txt',
			'type' => 'text',
			'instructions' => 'متن دکمه‌ی دانلود را وارد کنید. (حتما باید وارد شود!)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'دانلود فایل',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
endif;
