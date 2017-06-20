<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5904a5425843e',
	'title' => 'Kontakata oss (Våra uppgifter)',
	'fields' => array (
		array (
			'key' => 'field_5904a5bb7c95a',
			'label' => 'Epost adress',
			'name' => 'email',
			'type' => 'email',
			'instructions' => 'Mashallagruppens epost adress',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'info@mashallagruppen.se',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_5904a6343c6ff',
			'label' => 'Adress',
			'name' => 'adress',
			'type' => 'google_map',
			'instructions' => 'Adress till Mashallahgruppen',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
		array (
			'key' => 'field_5904a6ad8b464',
			'label' => 'Telefonnummer',
			'name' => 'phone',
			'type' => 'number',
			'instructions' => 'Telefon nummer till Mashallahgruppen',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_593e276884fb2',
	'title' => 'Kontakt formulär',
	'fields' => array (
		array (
			'key' => 'field_593e27938a0ce',
			'label' => 'Input fält',
			'name' => 'input',
			'type' => 'repeater',
			'instructions' => 'Input fält för kontakt formulär, så som epost adress eller namn.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_593e27dd8a0cf',
					'label' => 'Input',
					'name' => 'input',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_593e286b8a0d0',
					'label' => 'Obligatoriskt fält',
					'name' => 'required',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Är fältet obligatoriskt?',
					'default_value' => 1,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array (
					'key' => 'field_593e28d58a0d1',
					'label' => 'Typ av fält',
					'name' => 'typOfField',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'text' => 'text',
						'number' => 'number',
						'email' => 'email',
						'textarea' => 'textarea',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
			),
		),
		array (
			'key' => 'field_593e3231a5092',
			'label' => 'Skicka knappen',
			'name' => 'sendBtn',
			'type' => 'text',
			'instructions' => 'Vad ska stå på skicka knappen',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Skicka',
			'placeholder' => 'Skicka',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '162',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_593ec458acb0f',
	'title' => 'Sid fot',
	'fields' => array (
		array (
			'key' => 'field_593ec4625c483',
			'label' => 'Sid fot vänster sida',
			'name' => 'leftFooterTitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Följ oss på sociala medier',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_593ec4a60bdee',
			'label' => 'sid fot mitten',
			'name' => 'centerFooterTitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_593ec4c40bdef',
			'label' => 'Sid fot höger sida',
			'name' => 'rightFooterTitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58ff66b341f03',
	'title' => 'Startsida omslagsbild',
	'fields' => array (
		array (
			'key' => 'field_58ff66e145807',
			'label' => 'Omslagsbild',
			'name' => 'hero',
			'type' => 'image',
			'instructions' => 'Omslagsbilden för startsidan',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_58ff673445808',
			'label' => 'Omslagsbild Titel',
			'name' => 'heroTitle',
			'type' => 'text',
			'instructions' => 'Titel för omslagsbilden. (Viktigt för SEO)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '21',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '150',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58ff67e82a892',
	'title' => 'Startsida Kropp',
	'fields' => array (
		array (
			'key' => 'field_58ff698aa0bd6',
			'label' => 'Startsida Kropp',
			'name' => 'indexBody',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58ff69cfa0bd7',
					'label' => 'Titel',
					'name' => 'title',
					'type' => 'text',
					'instructions' => 'Titel för statsidan. (Viktig för SEO)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'Mashallahgruppen är...',
					'placeholder' => 'Beskrivning',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58ff6a2da0bd8',
					'label' => 'Ingress',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => 'Ingress för startsidan.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '21',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '150',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58ff71330f9c8',
	'title' => 'Om oss omslagsbild',
	'fields' => array (
		array (
			'key' => 'field_58ff714338ee7',
			'label' => 'Omslagsbild',
			'name' => 'hero',
			'type' => 'image',
			'instructions' => 'Omslagsbild för om oss sidan',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_58ff756da23cd',
			'label' => 'Omslagsbild titel',
			'name' => 'heroTitel',
			'type' => 'text',
			'instructions' => 'Titel för omslagsbilden. (viktig för SEO)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '4',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '153',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58ff768401a30',
	'title' => 'Om oss kropp',
	'fields' => array (
		array (
			'key' => 'field_58ff76c068c33',
			'label' => 'Om oss kropp',
			'name' => 'aboutBody',
			'type' => 'repeater',
			'instructions' => 'Kroppen för om oss',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58ff771368c34',
					'label' => 'Titel',
					'name' => 'title',
					'type' => 'text',
					'instructions' => 'Titel för om oss (Viktig för SEO)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58ff77a168c35',
					'label' => 'Ingress',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => 'Ingress för om oss',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '4',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '153',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58ff7b2b632fc',
	'title' => 'Arbetsområden',
	'fields' => array (
		array (
			'key' => 'field_58ff7b634d13d',
			'label' => 'Titel text',
			'name' => 'titelTextFieldOfWork',
			'type' => 'textarea',
			'instructions' => 'Titel text för arbetsområden',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
		),
		array (
			'key' => 'field_58ff7b92cf7f7',
			'label' => 'Arbetsområde kropp',
			'name' => 'FieldOfWorkBody',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_58ff7bfbcf7f9',
					'label' => 'Arbetsområde logga',
					'name' => 'bodyImage',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_58ff7c2bcf7fa',
					'label' => 'Arbetsområde logga titel',
					'name' => 'bodyImageTitle',
					'type' => 'text',
					'instructions' => 'Titel för loggor på arbetsområde. (Viktigt för SEO)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58ff7bc6cf7f8',
					'label' => 'Ingress',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => 'Ingress för varje specifikt arbetsområde',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '8',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '158',
			),
		),
	),
	'menu_order' => 4,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5904981e9e3cb',
	'title' => 'Hållbarhet omslagsbild',
	'fields' => array (
		array (
			'key' => 'field_5904983be053d',
			'label' => 'Hållbarhet omslagsbild',
			'name' => 'hero',
			'type' => 'image',
			'instructions' => 'Omslagsbild för sidan hållbarhet.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5904989380e37',
			'label' => 'Hållbarhet omslagsbild titel',
			'name' => 'heroTitle',
			'type' => 'text',
			'instructions' => 'Titel för omslagsbilden. (Viktigt för SEO)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '10',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '160',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59049940abdfc',
	'title' => 'Hållbarhet kropp',
	'fields' => array (
		array (
			'key' => 'field_59049959251c7',
			'label' => 'Hållbarhet kropp',
			'name' => 'sustainabilityBody',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_5904999e251c8',
					'label' => 'Titel',
					'name' => 'title',
					'type' => 'text',
					'instructions' => 'Titel för Sidan hållbarhet',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_590499c6251c9',
					'label' => 'Ingress',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => 'Ingress för sidan hållbarhet',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '10',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '160',
			),
		),
	),
	'menu_order' => 6,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5904a1548a51a',
	'title' => 'Kontakt omslagsbild',
	'fields' => array (
		array (
			'key' => 'field_5904a16b751be',
			'label' => 'Kontakt omslagsbild',
			'name' => 'hero',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5904a1d0a4596',
			'label' => 'Kontakt omslagsbild titel',
			'name' => 'heroTitle',
			'type' => 'text',
			'instructions' => 'Titel för omslagsbilden. (Viktigt för SEO)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '162',
			),
		),
	),
	'menu_order' => 7,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5904a4662938c',
	'title' => 'Kontakt kropp',
	'fields' => array (
		array (
			'key' => 'field_5904a47ae7413',
			'label' => 'Kontakt kropp',
			'name' => 'contactBody',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_5904a49d03550',
					'label' => 'Titel',
					'name' => 'title',
					'type' => 'text',
					'instructions' => 'Titel för kontakt sidan',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5904a4b503551',
					'label' => 'Ingress',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => 'Ingress för kontaktsidan',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '12',
			),
		),
	),
	'menu_order' => 8,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5906ee3b4e77b',
	'title' => 'Sammarbetspartners',
	'fields' => array (
		array (
			'key' => 'field_5906ee5e19550',
			'label' => 'Sammarbetspartners titel',
			'name' => 'title',
			'type' => 'text',
			'instructions' => 'Titel för sammarbetspartners (Viktigt för SEO)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5906eea119551',
			'label' => 'Sammarbetspartners ingress',
			'name' => 'body',
			'type' => 'textarea',
			'instructions' => 'Ingress för sammarbetspartners',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '155',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5906eede47ea5',
	'title' => 'Sammarbetspartners loggotyper',
	'fields' => array (
		array (
			'key' => 'field_5906eefd0ca0d',
			'label' => 'Loggotyper',
			'name' => 'logos',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_5906ef2a0ca0e',
					'label' => 'Logga',
					'name' => 'logo',
					'type' => 'image',
					'instructions' => 'Logga för en sammarbetspartner',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_5906ef5b0ca0f',
					'label' => 'Sammarbetspartner namn',
					'name' => 'name',
					'type' => 'text',
					'instructions' => 'Namnet på sammarbetspartnern',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5906ef890ca10',
					'label' => 'Länk till sammarbetspartnern',
					'name' => 'partnerLink',
					'type' => 'url',
					'instructions' => 'Länka till partnerns hemsida eller sociala medier',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '155',
			),
		),
	),
	'menu_order' => 11,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
