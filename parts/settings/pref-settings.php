<?php
/*
Title: Paginas
Order: 10
Setting: casino_settings
Tab: Datos
*/

piklist('field', array(
    'type' => 'radio'
,'field' => 'imgd_magic_tabs'
,'label' => __('Tabs Automáticas', 'imgd')
,'value' => 'no',
    'description'=>__('Esta opción transforma las páginas "hijas" en Tabs','imgd')
,'choices' => array(
        'si' => __('Si', 'imgd')
    ,'no' => __('No', 'imgd')
    )
));