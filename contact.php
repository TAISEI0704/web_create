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
                <h1>Contact</h1>
                <p>お問い合わせ</p>
            </div>
            <div class="location">
                <a href="./index.html">HOME <span>></span></a>
                <span>Contact</span>
            </div>
        </div>
        <section id="form" class="section-title">
            <div class="heading">
                <p data-title="お問い合わせ">Contact Form</p>
            </div>
            <div class="form-container">
                <p>ご質問やさらに詳しい情報など、お問い合わせフォームよりお気軽にお問い合わせください。</p>
                <ul>
                    <li>入力</li>
                    <li>確認</li>
                    <li>完了</li>
                </ul>
                <form action="">
                    <table>
                        <tbody>
                            <tr>
                                <th class="non-required">企業名</th>
                                <td>
                                    <input type="text" class="text-form">
                                </td>
                            </tr>
                            <tr>
                                <th class="required">お名前（漢字）</th>
                                <td>
                                    <input type="text" class="text-form">
                                </td>
                            </tr>
                            <tr>
                                <th class="required">お名前（カナ）</th>
                                <td>
                                    <input type="text" class="text-form">
                                </td>
                            </tr>
                            <tr>
                                <th class="required">メールアドレス</th>
                                <td>
                                    <input type="text" class="text-form">
                                </td>
                            </tr>
                            <tr>
                                <th class="required">お問い合わせ内容</th>
                                <td>
                                    <textarea name="お問い合わせ内容" id=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th class="required">個人情報の取扱い</th>
                                <td>
                                    <input type="checkbox" class="checkbox">同意する
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit">入力内容の確認画面へ</button>
                </form>
                <div class="tel-number">
                    <span>お電話でのお問い合わせ</span>
                    <span class="num">080-1234-5678</span>
                    <span>受付時間:10:00~19:00</span>
                </div>
            </div>
        </section>
        <section class="section-title"></section>
    </main>
    <footer>
        <div class="container">
            <div class="footer-logo">
                <a href="">
                    <img src="./assets/img/logo.jpg" alt="会社ロゴ">
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