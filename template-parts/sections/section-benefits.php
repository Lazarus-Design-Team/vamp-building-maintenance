<?php
if (have_rows('benefits')) {
    while (have_rows('benefits')) {
        the_row(); 
        $heading = get_sub_field('heading'); 
        $description = get_sub_field('description'); 
?>
        <section class="section-benefits">
            <div class="container-fluid">
                <div class="row center-xs middle-xs">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <?php if($heading): ?>
                            <h2 class="mt-0 mb-30 cl-blue animate__animated fadeBottom" data-animation="fadeBottom" data-duration="1.75s"><?php echo $heading; ?></h2>
                        <?php endif; ?> 
                        <?php if($description): ?>
                            <div class="dp-1 mt-0 cl-dark animate__animated fadeBottom" data-animation="fadeBottom" data-duration="2.75s">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?> 
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="service-cards-container flex row center-xs">
                    <?php
                    if (have_rows('service_card')) { $animation_delay = 1.75;
                        while (have_rows('service_card')) {
                            the_row(); 
                            $icon = get_sub_field('icon'); 
                            $svg_code = get_sub_field('svg_icon'); 
                            $heading = get_sub_field('heading'); 
                            $link = get_sub_field('link'); 
                            $duration = $animation_delay . 's';  ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 animate__animated fadeBottom" data-animation="fadeBottom" data-duration="<?php echo $duration;?>">
                                <?php if ($link): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a tabindex="0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" aria-label="<?php echo esc_html( $link_title ); ?>" title="<?php echo esc_html( $link_title ); ?>"> 
                                <?php endif; ?>

                                <div class="service-card benefit-card bg-white">
                                    <?php if($svg_code){ ?>
                                        <?php echo $svg_code; ?>
                                     <?php }else{ ?>   
                                    <?php if ($icon): ?>
                                        <?php echo wp_get_attachment_image($icon['ID'], 'full'); ?>
                                    <?php endif; ?>
                                    <?php } ?>

                                    <?php if($heading): ?>
                                        <span class="little-heading center-text cl-dark"><?php echo $heading;?></span>
                                    <?php endif; ?> 
                                </div>

                                <?php if ($link): ?>
                                </a>
                                <?php endif; ?>
                            </div>
                    <?php 
                       $animation_delay += 0.75;  } 
                    } 
                    ?>   
                    </div> 
                    </div>
                </div> 
            </div> 
        </section> 
<?php 
    } 
} 
?>
