<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
        <div id="header-left">
            <a href="<?php echo home_url(''); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="会社ロゴ">
                <span>Company_name</span>
            </a>
        </div>
        <div id="header-right">
            <nav id="header-nav">
                <ul>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/about'); ?>" data-title="当社について">About</a>
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