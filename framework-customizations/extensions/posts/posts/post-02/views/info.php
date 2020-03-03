<?php
    $post_info = slz_get_db_settings_option('post-info', array());
    $array_html = array();

?>
<ul class="block-info">
    <li>
        <?php
        $format = '<span class="link date">'.esc_html__('on', 'holycross').' %2$s</span>';
        $post_info = slz_get_db_settings_option('post-info', array());
        if(in_array('date', $post_info)) echo ( $module->get_date($format) );
        ?>
    </li>
</ul>

<?php the_title( '<h1 class="title">', '</h1>' ); ?>

<ul class="block-info">
    <?php
    $array_html['category'] = esc_html__('categories: ', 'holycross') . '<a href="%1$s" class="%3$s">%2$s</a>';
    echo ($module->get_meta_data_format('', array('date'), $array_html));
    ?>
</ul>