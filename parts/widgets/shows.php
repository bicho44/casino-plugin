<?php
/**
 * Title: Shows
 * Class: custom-class-1 custom-class-2
 * Width: 500
 *
 *
 * Widget para mostarr los próximos Shows
 * User: bicho44
 * Date: 2/23/16
 * Time: 7:49 PM
 */

//piklist::pre($settings);

$title = "";
$cant = "";
$orden = "";

//global $imgd_email;
if (isset($settings['imgd_shows_widget_title'])){
    $title = $settings['imgd_shows_widget_title'];
}


if (isset($settings['imgd_shows_widget_cantidad']))  $cant = $settings['imgd_shows_widget_cantidad'][0];



//if (isset($settings['imgd_shows_widget_orden']))  $image = $settings['lateral_image'];

if (isset($settings['imgd_shows_widget_orden'])) $orden = $settings['imgd_shows_widget_orden'];


/*
 * Array
(
    [imgd_shows_widget_title] => Próximos Shows
    [imgd_shows_widget_cantidad] => Array
        (
            [0] => 5
        )

    [imgd_shows_widget_orden] => fecha
)
 */


echo $before_title;

echo $title;

echo $after_title;

echo $before_widget;
// Acá seleciono las Páginas que voy a mostrar en la Home
$args = array(
    'post_type' => array('imgd_casino_shows'),
    'post_status' => 'publish',
    'post_per_page' => intval($cant)
);
//echo var_dump($args);
$loop = new WP_Query($args);

if ($loop->have_posts()) {
    $x = 0;
    ?>

    <ul id="shows" class="list-unstyled">
        <?php
        while ($loop->have_posts()) : $loop->the_post();
            $fechatexto = "";
            $hora = "";
            $salon = "";
            $lugar = "";
            $fecha = "";
            ?>
            <li class="news-item">
                <?php $salones = get_post_meta(get_the_ID() , 'imgd_casino_show_salon');
                //echo var_dump($salones);
                $salon = get_term( $salones[0],'imgd_casino_salon');?>
                <?php
                $fecha = get_post_meta(get_the_ID() , 'imgd_casino_show_date');

                if (!empty($fecha)) {
                    $fechatexto .= 'El '.$fecha[0];
                }

                $hora = get_post_meta(get_the_ID() , 'imgd_casino_show_hora', true);

                if ($hora!=="") {
                    $fechatexto .= ' a las '. $hora;
                }



                //piklist::pre($salon);

                ?>

                <?php
                if (has_post_thumbnail()) { ?>
                    <a href="<?php echo get_permalink(); ?>">
                        <?php the_post_thumbnail(array(80,80),array('class'=>'img-circle')); ?>
                    </a>
                <?php } ?>
                <a href="<?php echo get_permalink(); ?>">
                    <?php if (!empty($salon->name)) {
                        echo '<h4>'.$salon->name.'</h4>';
                    }?>
                    <h3><?php the_title(); ?></h3>
                    <?php
                    if ($fechatexto!=="") {
                        echo '<h5>'.$fechatexto.'</h5>';
                    }
                    ?>
                </a>
                <?php //the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>



                <!--               <a href='#' class='btn btn-primary btn-small'>Reservá tu mesa ahora</a>-->

                <?php
                //piklist::pre(get_post_meta( get_the_ID(), 'imgd_casino_show_ubicacion'));

                $x++;
                ?>
            </li>
            <?php
        endwhile;
        ?>
    </ul>
<?php } ?>
<?php wp_reset_query();


echo $after_widget;