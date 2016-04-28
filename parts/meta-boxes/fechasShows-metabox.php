<?php
/*
Title: Info del Show
Post Type: imgd_casino_shows
Description: Fecha y ubicaciçon del Show del Show la fecha sirve para ordenar el mismo en el listado de shows
Order: 3
Context: side
*/

piklist('field', array(
    'type' => 'datepicker'
,'scope' => 'post_meta' // Not used for settings sections
,'field' => 'imgd_casino_show_date'
,'label' => 'Fecha'
,'description' => 'Seleccione la fecha del Show'
,'attributes' => array(
        'class' => 'text'
    )
,'options' => array(
        'dateFormat' => 'd M, yy'
    ,'firstDay' => '0'
    )
));

piklist('field', array(
    'type' => 'text'
,'scope' => 'post_meta' // Not used for settings sections
,'field' => 'imgd_casino_show_hora'
,'label' => __('Hora del Show', 'imgd')
,'value' => '22hs.'
,'attributes' => array(
        'class' => 'text'
    )
));

piklist('field', array(
    'type' => 'select'
    ,'scope' => 'post_meta'
    ,'field' => 'imgd_casino_show_salon'
    ,'label' => 'Salón Casino'
    ,'choices' => array(
                '' => 'Elija el Salón del Show'
            )
        + piklist(get_terms('imgd_casino_salon', array(
                'hide_empty' => false
            ))
            ,array(
                'term_id'
                ,'name'
            )
        )
));
