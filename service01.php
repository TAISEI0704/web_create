<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<body>
    <header>
        <div id="header-left">
            <a href="/" class="logo">
                <img src="./assets/img/logo.png" alt="会社ロゴ">
                <span>Company_name</span>
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
                        <a href="./work.html" data-title="制作実績">Works</a>
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
            <input type="checkbox" id="checkbox">
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
        <div class="appeal">
            <div class="title">
                <h1>Service01</h1>
                <p>サービス01</p>
            </div>
            <div class="location">
                <a href="./index.html">HOME <span>></span></a>
                <a href="./service.html">Service <span>></span></a>
                <span>Service01</span>
            </div>
        </div>
        <section id="service-desc-section" class="section-title">
            <div class="container">
                <div class="img-container">
                    <img src="https://placehold.jp/400x250.png" alt="">
                </div>
                <div class="content-container">
                    <div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
                    </div>
                    <div>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="img-container">
                    <img src="https://placehold.jp/400x250.png" alt="">
                </div>
                <div class="content-container">
                    <div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
                    </div>
                    <div>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="img-container">
                    <img src="https://placehold.jp/400x250.png" alt="">
                </div>
                <div class="content-container">
                    <div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel.</p>
                    </div>
                    <div>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nibh, auctor ac consectetur id.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="section-title">
            <div class="heading">
                <p data-title="実績">Our Works</p>
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
    <footer>
        <div class="container">
            <div class="footer-logo">
                <a href="">
                    <img src="./assets/img/logo.png" alt="会社ロゴ">
                    <span>company_name</span>
                </a>
                <!-- <div class="footer-icon">
                    <span>Official</span>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div> -->
            </div>
            <div class="footer-nav">
                <div class="page-nav">
                    <div class="nav-container">
                        <a href="./about.html">about</a>
                        <a href="./service.html">services</a>
                        <a href="./work.html">works</a>
                    </div>
                    <div class="nav-container">
                        <a href="./company.html">company</a>
                        <a href="./news.html">news</a>
                        <a href="./contact.html">contact</a>
                    </div>
                </div>
                <div class="other-nav">
                    <ul>
                        <li>
                            <a href="">プライバシーポリシー</a>
                        </li>
                        <li>
                            <a href="">免責事項</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <small id="copylight">&copy; company_name .inc</small>
    </footer>
    <script src="./assets/js/main.js"></script>
</body>
</html>