<?php get_header();  ?>
<main>
    <section id="welcome">
        <div class="welcome-message">
            <p>Lorem ipsum dolor</p>
            <p class="sub">-Lorem ipsum dolor sit amet.-</p>
        </div>
    </section>
    <section id="about" class="section-title">
        <div class="heading">
            <p data-title="当社について">About Us</p>
        </div>
        <div class="content-container">
            <div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
            </div>
            <div>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
            </div>
            <div class="btn">
                <button type="button arrow" onclick="location.href='./about.html'">Learn more</button>
            </div>
        </div>
    </section>
    <section id="service" class="section-title">
        <div class="heading">
            <p data-title="事業内容">Our Services</p>
        </div>
        <div class="container">
            <div class="content-container">
                <!-- <div>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
                </div> -->
                <div>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                </div>
                <div class="btn">
                    <button type="button arrow" onclick="location.href='./about.html'">Learn more</button>
                </div>
            </div>
            <div class="service-container">
                <div class="service-panel">
                    <a href="./" class="service-1">
                        <div>
                            <span>01</span>Service 1
                        </div>
                    </a>
                </div>
                <div class="service-panel">
                    <a href="./" class="service-2">
                        <div>
                            <span>02</span>Service 2
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="section-title">
        <div class="heading">
            <p data-title="実績">Our Works</p>
        </div>
        <div class="content-container">
            <!-- <div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
            </div> -->
            <div>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
            </div>
        </div>
        <div>
            <ul class="card">
                <li class="card-item">
                    <a href="">
                        <div class="img-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_01.jpg" alt="">
                        </div>
                        <div class="text-area">
                            <p class="card-title">
                                Work 1
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum voluptatibus delectus necessitatibus ad rem eius amet eligendi error, sed consequuntur architecto esse vol
                            </p>
                        </div>
                    </a>
                </li>
                <li class="card-item">
                    <a href="">
                        <div class="img-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_02.jpg" alt="">
                        </div>
                        <div class="text-area">
                            <p class="card-title">
                                Work 2
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum voluptatibus delectus necessitatibus ad rem eius amet eligendi error, sed consequuntur architecto esse vol
                            </p>
                        </div>
                    </a>
                </li>
                <li class="card-item">
                    <a href="">
                        <div class="img-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_03.jpg" alt="">
                        </div>
                        <div class="text-area">
                            <p class="card-title">
                                Work 3
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum voluptatibus delectus necessitatibus ad rem eius amet eligendi error, sed consequuntur architecto esse vol
                            </p>
                        </div>
                    </a>
                </li>
                <li class="card-item">
                    <a href="">
                        <div class="img-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work_04.jpg" alt="">
                        </div>
                        <div class="text-area">
                            <p class="card-title">
                                Work 4
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum voluptatibus delectus necessitatibus ad rem eius amet eligendi error, sed consequuntur architecto esse vol
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="btn">
                <button type="button arrow" onclick="location.href='./about.html'">Learn more</button>
            </div>
        </div>
    </section>
    <section id="news" class="section-title">
        <div class="heading">
            <p data-title="ニュース">NEWS</p>
        </div>
        <div class="news-container">
            <ul class="news-body">
                <li>
                    <a href="" class="news-item">
                        <div class="time">2024.07.30</div>
                        <div class="content">NEWS01</div>
                    </a>
                </li>
                <li>
                    <a href="" class="news-item">
                        <div class="time">2024.07.14</div>
                        <div class="content">NEWS02</div>
                    </a>
                </li>
                <li>
                    <a href="" class="news-item">
                        <div class="time">2024.04.10</div>
                        <div class="content">NEWS03</div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer();  ?>