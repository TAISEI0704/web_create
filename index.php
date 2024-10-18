<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./style.css"> -->
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div id="header-left">
            <a href="/">
                <img class="logo" src="https://placehold.jp/110x30.png" alt="会社ロゴ">
            </a>
        </div>
        <div id="header-right">
            <nav id="header-nav">
                <ul>
                    <li class="nav-item">
                        <a href="./about.html" data-title="当社について">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="./service.html" data-title="サービス">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="./work.html" data-title="実績">Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="./company.html" data-title="会社概要">Company</a>
                    </li>
                    <li class="nav-item">
                        <a href="./news.html" data-title="お知らせ">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.html" data-title="お問い合わせ">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="header-hamburger">
            <input type="checkbox" class="checkbox">
            <div class="span-container">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="nav-hamburger">
                <ul>
                    <li class="nav-item">
                        <a href="./about.html" data-title="当社について">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="./service.html" data-title="サービス">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="./work.html" data-title="実績">Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="./company.html" data-title="会社概要">Company</a>
                    </li>
                    <li class="nav-item">
                        <a href="./news.html" data-title="お知らせ">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.html" data-title="お問い合わせ">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
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
    </main>

    <footer>

    </footer>
</body>
</html>