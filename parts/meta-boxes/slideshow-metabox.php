<?php
/*
Title: Preferencias Pagina Inicio
Post Type: imgd_casino_shows
Description: Opciones para decidir sobre la aparición de este item en la Página Principal
Priority: high
Order: 3
Collapse: true
Context: side
*/

piklist('field',
    array(
        'type' => 'radio'
    , 'scope' => 'post_meta' // Not used for settings sections
    , 'field' => 'imgd_destacado'
    , 'value' => '0' // Sets default to Option 2
    , 'label' => __('Destacada', 'imgd')
    , 'description' => __('Destaque el Show en la Home Page', 'imgd')
    , 'attributes' => array(
        'class' => 'radio'
    )
    , 'position' => 'start'
    , 'choices' => array(
        '0' => __('No','imgd')
    , '1' => __('Si','imgd')
    )
    ));

piklist('field',
    array(
        'type' => 'radio'
    , 'scope' => 'post_meta' // Not used for settings sections
    , 'field' => 'imgd_sin_titulo'
    , 'value' => '1' // Sets default to Option 2
    , 'label' => __('Mstrar el Título', 'imgd')
    , 'description' => __('Mostrar o no el título en el Destacado', 'imgd')
    , 'attributes' => array(
        'class' => 'radio'
    )
    , 'position' => 'start'
    , 'choices' => array(
        '0' => __('No','imgd')
    , '1' => __('Si','imgd')
    )
    ));

piklist (
    'field',
    array(
        'type' => 'radio',
        'scope' => 'post_meta',
        'field' => 'imgd_slideshow',
        'label' => __('Mostrar en SlideShow', 'imgd'),
        'value' => 0,
        'attributes' => array(
            'class' => 'radio'
        ),
        'choices' => array(
            0 => __('No mostrar', 'imgd'),
            1 => __('Mostrar', 'imgd')
        ),
        'position' => 'wrap'
    )
);


piklist('field', array(
        'type' => 'file'
    ,'field' => 'imgd_image_slideshow' // Use these field to match WordPress featured images.
    ,'scope' => 'post_meta'
    ,'label' => __('Imagen SlideShow', 'imgd')
    ,'options' => array(
            'title' => __('Imagen SlideShow en Home Page', 'imgd')
        , 'modal_title' => __('Agregue Imagen', 'imgd')
        ,'button' => __('Agregue la Imagen', 'imgd')
        ),
        'validate' => array(
            array(
                'type' => 'limit'
            ,'options' => array(
                'min' => 0
            ,'max' => 1
            )
            ,'message' => __('Sólo puede agregar un máximo de 1 imagen', 'imgd')
            )
        )
));
