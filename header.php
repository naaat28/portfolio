<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Natsumi Ohno Portfolio</title>
    <meta name="description" content="大野夏実のポートフォリオサイトです。" />
    <meta name="format-detection" content="telephone=no" />

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.ico' ); ?>" type="image/png" />
    


    <meta property="og:site_name" content="Natsumi Ohno Portfolio" />
    <meta property="og:url" content="URL" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Natsumi Ohno Portfolio" />
    <meta property="og:description" content="大野夏実のポートフォリオサイトです。" />
    <meta property="og:locale" content="ja_JP" />

    <?php wp_head(); ?>

  </head>

  <body class="js_body">

    <header class="l_header" >
      
      <nav class="l_header-nav js_nav">
        <ul class="l_header-nav_list">
          <li class="l_header-nav_item js_pcNav <?php if (is_front_page()) { echo 'is-active'; }  ?>" data-nav-target="top">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#top" class="l_header-nav_link js_nav-link">Top</a>
          </li>
          <li class="l_header-nav_item js_pcNav <?php if (is_page('about')) { echo 'is-page-about'; }  ?>" data-nav-target="about">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about" class="l_header-nav_link js_nav-link">About</a>
          </li>
          <li class="l_header-nav_item js_pcNav <?php if (is_singular('works')) { echo 'is-single-works' ;} ?>" data-nav-target="works">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>#works" class="l_header-nav_link js_nav-link">Works</a>
          </li>
          <li class="l_header-nav_item">
            <a href="https://github.com/naaat28" class="l_header-nav_link js_nav-link l_header-nav_img" target="_blank" rel="noopener noreferrer">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.373 0 0 5.373 0 12C0 17.623 3.872 22.328 9.092 23.63C9.036 23.468 9 23.28 9 23.047V20.996C8.513 20.996 7.697 20.996 7.492 20.996C6.671 20.996 5.941 20.643 5.587 19.987C5.194 19.258 5.126 18.143 4.152 17.461C3.863 17.234 4.083 16.975 4.416 17.01C5.031 17.184 5.541 17.606 6.021 18.232C6.499 18.859 6.724 19.001 7.617 19.001C8.05 19.001 8.698 18.976 9.308 18.88C9.636 18.047 10.203 17.28 10.896 16.918C6.9 16.507 4.993 14.519 4.993 11.82C4.993 10.658 5.488 9.534 6.329 8.587C6.053 7.647 5.706 5.73 6.435 5C8.233 5 9.32 6.166 9.581 6.481C10.477 6.174 11.461 6 12.495 6C13.531 6 14.519 6.174 15.417 6.483C15.675 6.17 16.763 5 18.565 5C19.297 5.731 18.946 7.656 18.667 8.594C19.503 9.539 19.995 10.66 19.995 11.82C19.995 14.517 18.091 16.504 14.101 16.917C15.199 17.49 16 19.1 16 20.313V23.047C16 23.151 15.977 23.226 15.965 23.315C20.641 21.676 24 17.236 24 12C24 5.373 18.627 0 12 0Z" fill="#686868"/>
              </svg>
            </a>
          </li>


        </ul>
      </nav>

      <button class="m_hamburger js_hamburger">
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
      </button>


    </header>