<?php get_header(); ?>
    <main>
        <section id="welcome">
            <div class="welcome-message">
                <p class="main">Lorem ipsum dolor</p>
                <p class="">-Lorem ipsum dolor sit amet.-</p>
            </div>
        </section>
        <section id="about" class="section-title fadeIn">
            <div class="heading">
                <p data-title="当社について">About Us</p>
            </div>
            <div class="container">
                <div class="img-container">
                    <img src="https://placehold.jp/350x340.png" alt="">
                </div>
                <div class="content-container">
                    <div>
                        <p class="text">私たちは、お客様の夢を現実に変える、伴走型のパートナーです。常に寄り添い、共に課題を解決し、新たな可能性を切り拓きます。</p>
                    </div>
                    <div>
                        <p class="description">私たちは、お客様の未来を共に創造する、革新的で信頼性の高いパートナーです。最先端の技術と深い洞察力を融合させ、複雑な経営課題に対して、常に独自の創造的なソリューションを提供します。</p>
                    </div>
                    <div class="btn">
                        <button type="button arrow" onclick="location.href='<?php echo home_url('/about'); ?>'">Learn more</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="section-title fadeIn">
            <div class="heading">
                <p data-title="事業内容">Our Services</p>
            </div>
            <div class="container">
                <div class="content-container">
                    <div>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                    </div>
                    <div class="btn">
                        <button type="button arrow" onclick="location.href='./service.html'">Learn more</button>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service-panel">
                        <a href="./service01.html" class="service-1-panel">
                            <div>
                                <span>01</span>Service 1
                            </div>
                        </a>
                    </div>
                    <div class="service-panel">
                        <a href="./service02.html" class="service-2-panel">
                            <div>
                                <span>02</span>Service 2
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="section-title fadeIn">
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
    <section id="news" class="section-title fadeIn">
        <div class="heading">
            <p data-title="ニュース">NEWS</p>
        </div>
        <div class="news-row">
            <div class="main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="news-article">
                    <a href="<?php the_permalink(); ?>">
                        <div class="head">
                            <time datetime="2024-10-23">2024.10.23</time>
                            <p class="news-tag info">お知らせ</p>
                        </div>
                        <div class="body">
                            <h2><?php the_title(); ?></h2>
                            <i class="fas fa-arrow-right fa-fw"></i>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>記事がありません。</p>
            <?php endif; ?>
                <!-- <article class="news-article">
                    <a href="">
                        <div class="head">
                            <time datetime="2024-10-01">2024.10.01</time>
                            <div class="news-tag imp">重要なお知らせ</div>
                        </div>
                        <div class="body">
                            <h2>スマートフォンのバッテリー、24時間で充電0％から100％に回復する技術が発表</h2>
                            <i class="fas fa-arrow-right fa-fw"></i>
                        </div>
                    </a>
                </article>
                <article class="news-article">
                    <a href="">
                        <div class="head">
                            <time datetime="2024-09-13">2024.09.13</time>
                            <div class="news-tag info">お知らせ</div>
                        </div>
                        <div class="body">
                            <h2>未来の都市、エコロジーに配慮した空中浮遊交通システムを導入</h2>
                            <i class="fas fa-arrow-right fa-fw"></i>
                        </div>
                    </a>
                </article> -->
            </div>
            <div class="btn">
                <button type="button arrow" onclick="location.href='./news.html'">Learn more</button>
            </div>
        </div>
    </section>
    <section class="direct-form">
        <div class="form-panel">
            <div>
                <h2>まずはご相談ください</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vel placeat quos aperiam, maiores optio neque sapiente distinctio porro totam aliquam, provident molestias cupiditate eum </p>
            </div>
            <a href="">
                <div>
                    <span>CONTACT FORM</span>
                    <i class="fas fa-arrow-right fa-fw"></i>
                </div>
            </a>
        </div>
    </section>
    </main>
<?php get_footer(); ?>