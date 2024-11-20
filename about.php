<?php
/*
Template Name: about Page
*/
get_header();
?>
<?php
$featuer_content = get_post_meta( get_the_ID(), 'feature_content', true );
$featuer_1_content = get_post_meta( get_the_ID(), 'feature01', true );
$featuer_2_content = get_post_meta( get_the_ID(), 'feature02', true );
$featuer_3_content = get_post_meta( get_the_ID(), 'feature03', true );
$featuer_4_content = get_post_meta( get_the_ID(), 'feature04', true );
// var_dump($section_1_title);
?>
    <main>
        <div class="appeal">
            <div class="title">
                <h1>About Us</h1>
                <p>当社について</p>
            </div>
            <div class="location">
                <a href="./index.html">HOME <span>></span></a>
                <span>About Us</span>
            </div>
        </div>
        <section id="about-container" class="section-title">
            <div class="head-text">
                <?php the_content(); ?>
            </div>
            <div class="heading">
                <p data-title="######">#########</p>
            </div>
            <div class="content-container">
                <div>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                </div>
            </div>
            <div class="dec-card">
                <img src="https://placehold.jp/162x100.png" alt="">
            </div>
            <div class="heading">
                <p data-title="当社の特徴">Features</p>
            </div>
            <div class="content-container">
                <div>
                    <p class="description"><?php echo $featuer_content; ?></p>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-item">
                    <?php echo $featuer_1_content; ?>
                </div>
                <div class="grid-item">
                    <?php echo $featuer_2_content; ?>
                </div>
                <div class="grid-item">
                    <?php echo $featuer_3_content; ?>
                </div>
                <div class="grid-item">
                    <?php echo $featuer_4_content; ?>
                </div>
            </div>
        </section>
        <section id="work" class="section-title">
            <div class="heading">
                <p data-title="実績">Our Works</p>
            </div>
            <div class="content-container">
                <div>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                </div>
            </div>
            <div>
                <div class="work-row">
                    <article>
                        <div class="work-view">
                            <a href="">
                                <img src="https://placehold.jp/150x100.png" alt="">
                            </a>
                            <div>
                                <h3>
                                    <a href="">Work01</a>
                                </h3>
                                <p>company_name</p>
                                <p>category</p>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="work-view">
                            <a href="">
                                <img src="https://placehold.jp/150x100.png" alt="">
                            </a>
                            <div>
                                <h3>
                                    <a href="">Work02</a>
                                </h3>
                                <p>company_name</p>
                                <p>category</p>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="work-view">
                            <a href="">
                                <img src="https://placehold.jp/150x100.png" alt="">
                            </a>
                            <div>
                                <h3>
                                    <a href="">Work03</a>
                                </h3>
                                <p>company_name</p>
                                <p>category</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="btn">
                    <button type="button arrow" onclick="location.href='./work.html'">Learn more</button>
                </div>
            </div>
        </section>
        <section class="direct-form section-title">
            <div class="form-panel">
                <div>
                    <h2>まずはご相談ください</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vel placeat quos aperiam, maiores optio neque sapiente distinctio porro totam aliquam, provident molestias cupiditate eum </p>
                </div>
                <a href="">
                    <span>CONTACT FORM</span>
                    <i class="fas fa-arrow-right fa-fw"></i>
                </a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
