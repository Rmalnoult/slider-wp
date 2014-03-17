<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_galerie',
    'title' => 'galerie',
    'fields' => array (
      array (
        'key' => 'field_5325bc055bd6b',
        'label' => 'caption',
        'name' => 'caption',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'galerie',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}