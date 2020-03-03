<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

// Get column value from vc option
$column = !empty($model->attributes['column']) ? 'slz-column-'.$model->attributes['column'] : 'slz-column-2';
// Check style has image
$has_image = isset( $model->attributes['show_thumbnail'] ) && $model->attributes['show_thumbnail'] != 'none' ? 'has-image' : '';
// Image size for featured image
$thumb_size = 'large';

// Label
$team_label     = slz_get_db_settings_option( 'pf-translate-text/pf-team-label', esc_html__( 'Sermon from:', 'holycross' ) );
$category_label = slz_get_db_settings_option( 'pf-translate-text/pf-category-label', esc_html__( 'Categories:', 'holycross' ) );

// Html format for render
$html_options = array(
    'title_format'           => '<a href="%2$s" class="block-title">%1$s</a>',
    'category_format'        => '<li><span class="title">'. $category_label .'</span>%1$s</li>',
    'team_format'            => '<li><a href="%2$s" class="block-team"><span class="author-label">'. $team_label .'</span><span class="author-text">%1$s</span></a></li>',
    'date_format'            => '<li><a href="%2$s" class="block-date">'. esc_html__( 'On', 'holycross' ) .' %1$s</a></li>',
    'excerpt_format'         => '%s',
    'image_format'           => '<a href="%2$s" class="link">%1$s</a>',
    'attachment_block_format' => '<ul class="tool-list">%1$s</ul>',
    'attachment_item_format'  => '<li><a href="%1$s" class="link %2$s" %4$s><i class="fa fa-%3$s"></i></a></li>',
);

// Merge Html format
$html_options = $model->set_default_options( $html_options );
?>

<div class="slz-list-block <?php echo esc_attr( $column ); ?>">
    <?php while ( $model->query->have_posts() ) {
        $model->query->the_post();
        $model->loop_index();?>
        <div class="item <?php echo esc_attr($model->get_post_class())?>">
            <div class="slz-block-item-01 portfolio-list style-6 <?php echo esc_attr( $has_image ); ?>">
                <?php if( $f_image = $model->get_post_image( $html_options, $thumb_size, false, true ) ): ?>
                <div class="block-image"><?php echo wp_kses_post($f_image); ?></div>
                <?php endif;?>
                <div class="block-content">
                    <div class="block-content-wrapper">
                        <?php $model->get_title( $html_options, true )?>
                        <?php if(!empty($model->attributes['show_meta_info']) && $model->attributes['show_meta_info']=='yes' ): ?>
                        <ul class="block-info">
                            <?php echo ($model->get_meta_team( $html_options )); ?>
                            <?php echo ($model->get_terms( $html_options )); ?>
                            <?php echo ($model->get_date( $html_options )); ?>
                        </ul>
                        <?php endif;?>
                        <?php if( $desc = $model->get_meta_description() ) :?>
                        <?php echo '<div class="block-text">'.$desc.'</div>';?>
                        <?php endif;?>
                        <?php
                        if( !empty( $model->attributes['show_attachments'] ) && $model->attributes['show_attachments'] == 'yes' ) {
                            $model->get_attachment_block( $html_options, true );
                        }
                        ?>
                        <?php $model->get_button_readmore(true)?>
                    </div>
                </div>
            </div>
        </div><?php
    }//end while
    $model->reset();
    ?>
</div>
<?php $model->pagination(); ?>
