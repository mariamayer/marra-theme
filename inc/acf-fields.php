<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_top_banner',
    'title' => 'Top Banner Settings',
    'fields' => array(
        array(
            'key' => 'field_top_banner_text',
            'label' => 'Top Banner Text',
            'name' => 'top_banner_text',
            'type' => 'text',
            'instructions' => 'Enter the text to display in the top banner',
            'required' => 0,
            'default_value' => '',
        ),
        array(
            'key' => 'field_top_banner_active',
            'label' => 'Show Top Banner',
            'name' => 'top_banner_active',
            'type' => 'true_false',
            'instructions' => 'Toggle to show/hide the top banner',
            'required' => 0,
            'default_value' => 0,
            'ui' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-general-settings',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

acf_add_local_field_group(array(
    'key' => 'group_home_hero',
    'title' => 'Home Hero Section',
    'fields' => array(
        array(
            'key' => 'field_home_hero_subtitle',
            'label' => 'Hero Subtitle (Top)',
            'name' => 'home_hero_subtitle',
            'type' => 'text',
            'instructions' => 'Small text above the main title',
            'required' => 0,
        ),
        array(
            'key' => 'field_home_hero_title',
            'label' => 'Hero Title',
            'name' => 'home_hero_title',
            'type' => 'text',
            'instructions' => 'Main hero title',
            'required' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'template-homepage.php',
            ),
        ),
    ),
));

acf_add_local_field_group(array(
    'key' => 'group_home_services',
    'title' => 'Home Services Section',
    'fields' => array(
        array(
            'key' => 'field_home_services_section_title',
            'label' => 'Section Title',
            'name' => 'home_services_section_title',
            'type' => 'text',
            'instructions' => 'Small text above the main heading',
            'required' => 0,
        ),
        array(
            'key' => 'field_home_services_heading',
            'label' => 'Main Heading',
            'name' => 'home_services_heading',
            'type' => 'wysiwyg',
            'instructions' => 'Main heading, you can use <em> for italics',
            'required' => 1,
            'media_upload' => 0,
            'tabs' => 'visual',
            'toolbar' => 'basic',
        ),
        array(
            'key' => 'field_home_services_description',
            'label' => 'Description',
            'name' => 'home_services_description',
            'type' => 'textarea',
            'instructions' => 'Short description below the heading',
            'required' => 0,
            'rows' => 3,
        ),
        array(
            'key' => 'field_home_services_cards',
            'label' => 'Service Cards',
            'name' => 'home_services_cards',
            'type' => 'repeater',
            'instructions' => 'Add service cards',
            'required' => 0,
            'min' => 1,
            'layout' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_home_services_card_title',
                    'label' => 'Card Title',
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_home_services_card_image',
                    'label' => 'Card Illustration',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_home_services_card_button_text',
                    'label' => 'Button Text',
                    'name' => 'button_text',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_home_services_card_button_link',
                    'label' => 'Button Link',
                    'name' => 'button_link',
                    'type' => 'url',
                    'required' => 0,
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'template-homepage.php',
            ),
        ),
    ),
));

endif; 