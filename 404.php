<?php get_header();?>

  <main class="notFound_top">
    <div class="notFound_contents">
      <div class="notfound_inner">
        <div class="notFound_img-wrapper">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/img/404.webp' ); ?>"
            alt="404 Not found"
            class="notFound_img"
            width="1164"
            height="464"
          />
        </div>
        <p class="notFound_txt">ページが見つかりませんでした。</p>
        <div class="m_btn-box">
          <div class="m_btn-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="m_btn">Topへ戻る</a>
          </div>
          <!-- /.m_btn-wrapper -->
        </div>
      </div>
    </div>
  </main>
<?php wp_footer(); ?>
