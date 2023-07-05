<?php get_header(); ?>
<div class="background-top"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="flex flex-col gap-2 py-10 my-2">
                <p class="text-center text-sm uppercase m-0 pb-1">sewanagala ayurweda</p>
                <h2 class="text-center text-base uppercase m-0">featured <b class="txt-green-500">products</b></h2>
                <div class="align-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo do_shortcode('[products columns=3 limit=6]'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 my-1">
                            <div class="flex-box align-center">
                                <button type="button">
                                    <a href="<?php echo site_url('/shop'); ?>" class="text-base">Browse</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3 col-background">
        <div class="col-sm-7">
            
        </div>
        <div class="col-sm-5">
            <div class="flex-card py-3">
                <h3 class="text-start text-base capitalize mb-4">keeping your ride brand new everyday</h3>
                <p>
                    Lorem ipsum dolor sit
                    amet consectetur adipisicing elit.
                    Quod fugit illo quasi quia doloribus voluptas officiis dolore vel,
                    esse recusandae repellendus. Officiis soluta omnis perspiciatis et, ut reiciendis aliquam atque!
                </p>
                <button>
                    <a href="#">learn more</a>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="flex flex-1 py-4">
                <h2 class="text-center text-base capitalize m-3">products</h2>
                <div class="card align-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="flex-box align-center py-2 mx-2">
                                <a href="#">all products</a>
                                <a href="#">hair oil</a>
                                <a href="#">adult care</a>
                                <a href="#">cough syrups</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo do_shortcode('[products columns=3 limit=6]'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 my-1">
                            <div class="flex-box align-center">
                                <button type="button">
                                    <a href="<?php echo site_url('/shop'); ?>">View All</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="flex flex-row py-3 mx-2 my-1 items-center justify-center w-80">
                <h3>Founder's Treatment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, accusantium fuga recusandae perferendis </p>
                <button type="button">
                    <a href="#">learn more</a>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="flex-section">
                <h2>keeping your ride looking brand new everyday</h2>
                <div class="flex px-2 py-4">
                    <?php if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class="card">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <button type="button">
                                    <a href="<?php the_permalink(); ?>">
                                        Read More
                                    </a>
                                </button>
                            </div>
                        <?php endwhile; ?>


                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="background-base-footer"></div>
</div>

<?php get_footer(); ?>