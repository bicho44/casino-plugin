<?php
/*
Title: Pozos Casino
Setting: casino_settings
Tab: Pozos
*/

piklist('field', array(
        'type' => 'group'
    , 'field' => 'casino_pozos'
    , 'label' => __('Pozos Acumulados en el Casino', 'imgd')
    , 'columns' => 12
    , 'add_more' => true
    , 'fields' => array(

            array(
                'type' => 'text'
            , 'field' => 'casino_name'
            , 'columns' => 4
            , 'attributes' => array(
                'placeholder' => __('Nombre del Casino', 'imgd')
            )
            )
        , array(
                'type' => 'text'
            , 'field' => 'casino_pozo'
            , 'columns' => 4
            , 'attributes' => array(
                    'placeholder' => __('Pozo Acumulado', 'imgd')
                )
            )
        , array(
                'type' => 'text'
            , 'field' => 'casino_pozo_incremento'
            , 'columns' => 4
            , 'attributes' => array(
                    'placeholder' => __('Valor incremento diario', 'imgd')
                )
            )
        , array(
                'type' => 'select'
            , 'field' => 'casino_sector'
            , 'columns' => 4
            , 'value' => '' // Sets default to Option 2
            , 'label' => ''
            , 'description' => __('Este esl sector donde está ubicada la máquina', 'imgd')
            , 'attributes' => array(
                    'class' => 'text'
                )
            , 'choices' => array(
                    '' => 'Elija un Sector'
                , 'estrella' => 'Sector Estrella'
                , 'princess' => 'Sector Princess'
                )
            )
        , array(
                'type' => 'file'
            , 'field' => 'casino_logo'
            , 'label' => __('Elija Logo', 'imgd')
            , 'description' => __('Seleccione Aquí el logo.', 'imgd')
            , 'options' => array(
                    'basic' => true
                )
            )
        , array(
                'type' => 'hidden'
            , 'field' => 'casino_pozo_date'
            , 'value' => 'test'
            )

        )
    )
);