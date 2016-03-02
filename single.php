<?php

get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php
    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <section class="bg-portfolio" style="background-image: url('<?php echo $feat_image; ?>');">
        <div class="container">
        </div>

        <svg version="1.1" class="curved-border logo-cut" x="0px" y="0px" viewBox="0 0 189.8 64.81" enable-background="new 0 0 189.8 64.81" xml:space="preserve">
            <g>
                <path class="bg-light" d="M156.645,27.139c2.885-0.298,5.859-0.595,8.645-1.076c11.186-1.884,14.92-11.269,16.118-18.38
                    C181.906,3.158,181.445,0,181.445,0s-3.422,3.845-8.205,8.019c-0.139-2.228-0.367-4.57-0.729-7.096c0,0-6.329,14.336-16.179,17.151
                    c-9.666,2.777-17.781,8.378-21.443,16.076C139.551,28.863,148.218,27.985,156.645,27.139z"/>
                <path class="bg-light" d="M169.951,64.753c-2.758-4.784-6.916-10.079-10.666-13.283c4.749-0.114,8.229,0.313,8.229,0.313
                    c-1.557-1.175-3.067-2.25-4.532-3.258c6.181-0.473,11.17,0.191,11.17,0.191c-1.545-1.183-3.056-2.25-4.54-3.25
                    c5.192,0.275,8.988,1.091,8.988,1.091c-2.167-3.426-4.482-6.05-6.89-8.034c0.038-0.015,0.091-0.015,0.145-0.053
                    c15.824-5.402,17.945-23.431,17.945-23.431s-1.827,1.159-4.669,2.708c-2.93,6.47-8.412,13.063-18.563,13.398
                    c-2.884,0.099-5.917-0.015-8.843-0.114c-10.35-0.351-20.139-0.702-23.945,7.233l-0.222,0.458l-0.03,0.068
                    c-0.012,0.03-0.076,0.206-0.16,0.404c-12.456-2.518-24.499-1.755-31.297-0.908c-0.053-0.007-0.103,0.016-0.164,0.016
                    c-0.198,0.03-0.396,0.038-0.583,0.068c-0.122,0.016-0.252,0.031-0.378,0.054c-0.106,0.015-0.221,0.038-0.324,0.054
                    c-1.148,0.16-2.094,0.297-2.8,0.412l-2.899,0.419c-0.698,0.092-1.656,0.229-2.785,0.412c-0.103,0.016-0.218,0.046-0.321,0.062
                    c-0.129,0.015-0.251,0.045-0.389,0.045c-0.191,0.053-0.37,0.077-0.561,0.122c-0.072,0-0.126,0.015-0.183,0.015
                    c-6.581,1.167-17.907,3.815-28.829,9.553c-6.23-8.583-17.728-13.199-30.641-10.384C18.83,41.818,9.373,30.29,9.373,30.29
                    c0.713,2.449,1.473,4.685,2.293,6.737c-6.081-1.762-10.8-3.822-10.8-3.822s1.701,5.875,6.642,11.788
                    C3.113,44.176,0,43.298,0,43.298s7.283,16.664,23.996,17.175c0.045,0.023,0.095,0.023,0.152,0.023
                    c-0.87,1.312-1.667,2.762-2.38,4.372L169.951,64.753z"/>
            </g>
        </svg>

        <svg version="1.1" class="curved-border"  x="0px" y="0px" viewBox="0 401.6 612 11.4" style="enable-background:new 0 401.6 612 11.4;" xml:space="preserve">
            <path class="bg-light" d="M612,413H0v-11.4c0,0,92,11.4,306,11.4s306-11.4,306-11.4V413z"/>
        </svg>

    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 slider">
                    <?php
                    $image = get_field('logo');
                    $size = 'slider_size';
                    $thumb = $image['sizes'][ $size ];
                    $full = $image['sizes'][ 'large' ];
                    if( !empty($image) ): ?>

                    <?php endif; ?>

                    <ul class="carousel">
                        <?php $counter = 0; ?>
                        <?php $attachments = new Attachments( 'my_attachments' ); ?>
                        <?php if( $attachments->exist() ) : ?>

                            <?php while( $attachments->get() ) :  $counter = $counter+1;?>
                            <?php
                            $attachment_id = $attachments->id();
                            $sliderSizeUrl = wp_get_attachment_image_src( $attachment_id, $size);
                            $largeSizeUrl = wp_get_attachment_image_src( $attachment_id, 'large');
                            ?>
                              <?php if($counter == 3){ ?>
                              <li class="slider-logo" >
                                <a href="#" data-featherlight="<?php echo $full; ?>"><img class="zoom" src="<?php echo get_template_directory_uri(); ?>/img/zoom.svg"></a>
                                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                              </li>
                              <?php } ?>
                              <li>
                                <a href="#" data-featherlight="<?php echo $largeSizeUrl[0]; ?>"><img class="zoom" src="<?php echo get_template_directory_uri(); ?>/img/zoom.svg"></a>
                                <span style="background-image: url(<?php echo $sliderSizeUrl[0]; ?>);"></span>
                              </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $('.carousel').slick({
                            centerMode: true,
                            slidesToShow: 5,
                            initialSlide: 2
                        });                        
                        
                        $('.slick-center').next().addClass('nextslide');
                        $('.slick-center').prev().addClass('nextslide');
                        $('.slick-arrow').html('');
                        
                        $('.carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
                            $('.nextslide').removeClass('nextslide');
                            $('.slick-center').addClass('nextslide');
                            if(currentSlide == 0 && nextSlide != 1){
                                $('.slick-center').prev().prev().addClass('nextslide');
                            }
                            else {
                                if(nextSlide > currentSlide || nextSlide == 0 && currentSlide != 1){
                                    $('.slick-center').next().next().addClass('nextslide');
                                }else {
                                    $('.slick-center').prev().prev().addClass('nextslide');
                                }
                            }
                        });
                    });
                    </script>
                    
                    
                    
                </div>
            </div>
        </div>

        <div class="container paragraph-times">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="portfolio-title">
                        <?php the_title(); ?>,
                        <span><?php the_field('subtitle'); ?></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container paragraph-times">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <?php the_content(); ?>
                </div>
                <div class="col-md-6 text-justify">
                    <?php the_field('kolom2'); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>