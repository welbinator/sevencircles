<?php

class CustomCustomizer
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'register_customize_sections'));
    }
    public function register_customize_sections($wp_customize)
    {
        /*
        * Add settings to sections.
        */
        $this->author_section($wp_customize);
        $this->slider_section($wp_customize);
    }

    /* Sanitize Inputs */
    public function sanitize_custom_option($input)
    {
        return ($input === "No") ? "No" : "Yes";
    }
    public function sanitize_custom_text($input)
    {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input)
    {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* Slider Section */
    private function slider_section($wp_customize)
    {
        $wp_customize->add_section('slides', array(
            'title'          => 'Slides',
            'priority'       => 2,
        ));

        $wp_customize->add_setting('first_slide', array(
            'default'        => '',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'first_slide', array(
            'label'   => 'First Slide',
            'section' => 'slides',
            'settings'   => 'first_slide',
        )));

        $wp_customize->add_setting('second_slide', array(
            'default'        => '',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_slide', array(
            'label'   => 'Second Slide',
            'section' => 'slides',
            'settings'   => 'second_slide',
        )));

        $wp_customize->add_setting('third_slide', array(
            'default'        => '',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'third_slide', array(
            'label'   => 'Third Slide',
            'section' => 'slides',
            'settings'   => 'third_slide',
        )));
    }



    /* Author Section */
    private function author_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('author-section', array(
            'title' => 'Author',
            'priority' => 2,
            'description' => __('The Author section is only displayed on the Blog page.', 'theminimalist'),
        ));

        $wp_customize->add_setting('author-display', array(
            'default' => 'No',
            'sanitize_callback' => array($this, 'sanitize_custom_option')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'author-display-control', array(
            'label' => 'Display this section?',
            'section' => 'author-section',
            'settings' => 'author-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
        $wp_customize->add_setting('author-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'author-control', array(
            'label' => 'About Author',
            'section' => 'author-section',
            'settings' => 'author-text',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('author-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'author-image-control', array(
            'label' => 'Image',
            'section' => 'author-section',
            'settings' => 'author-image',
            'width' => 442,
            'height' => 310
        )));
    }
}
