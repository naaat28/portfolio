
<?php get_header(); ?>

  <main class="top_main">
    <div class="top_kv m_section-top" id="top">
      <div class="l_container l_container__sm">
        <div class="top_kv-inner">
          <div class="top_kv-img_wrapper">
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/img/kv01-img.webp' ); ?>"
              alt="himawari"
              class="top_kv-img"
              width="716"
              height="716"
            />
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/img/kv02-img.webp' ); ?>"
              alt="NatsumiOhno"
              class="top_kv-img"
              width="802"
              height="378"
            />
          </div>
          <p class="top_kv-txt">
            Welcome to my portfolio. <br class="u_break__sp" />
            Thank you for taking time to visit !
          </p>
        </div>

        <div class="top_scroll-wrap js_scroll">
          <p class="top_scroll-txt">Scroll</p>
        </div>
      </div>
    </div>
    <!-- /.top_kv -->


    <section class="top_about l_section m_section-top" id="about">
      <div class="l_container l_container__sm">
        <h2 class="m_section_title">
          <p class="m_section_title__en">About</p>
          <p class="m_section_title__ja">私について</p>
        </h2>

        <div class="top_about-contents l_content">
          <div class="top_about-contents_inner">
            <div class="top_about-img_wrapper">
              <img
                src="<?php echo esc_url( get_template_directory_uri() . '/img/about-img.webp' ); ?>"
                alt="プロフィール写真"
                class="top_about-img"
                width="526"
                height="724"
              />
            </div>
            <!-- /.about_img-wrapper -->

            <div class="top_about-profile">
              <div class="top_about-profile_name">
                <p class="top_about-profile_name__ja">オオノ　ナツミ</p>
              </div>
              <!-- /.top_about-profile_name -->

              <p class="top_about-txt">
                1995年生まれ。福島県会津若松市出身、宮城県仙台市在住。<br />
                約7年間、医療事務職に従事しておりました。<br>
                その後、キャリアを考える中でWeb制作に出会い、独学で学ぶうちに、この分野で仕事をしたいという思いが強くなりました。<br>
                さらにスキルを深めるため、プログラミングスクールに入学し、本格的に学び始めました。<br>
                Web制作を通して、お客様とその先のお客様の笑顔のきっかけを作りたいと考えています。
              </p>

              <div class="m_btn-box">
                <div class="m_btn-wrapper">
                  <!-- <a href="<?php echo esc_url(get_template_directory_uri() . '/page-about.php'); ?>" class="m_btn">View More</a> -->
                  <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="m_btn">View More</a>
                </div>
                <!-- /.m_btn-wrapper -->
              </div>
              <!-- /.top_about-btn -->
            </div>
            <!-- /.about-profile -->
          </div>
          <!-- /.top_about-contents_inner -->
        </div>
        <!-- /.top_about-contents -->
      </div>
      <!-- /.l_container l_container__md -->
    </section>

    <section class="top_works l_section m_section-top" id="works">
      <div class="l_container l_container__sm js_scroll-trigger">
        <h2 class="m_section_title">
          <p class="m_section_title__en">Works</p>
          <p class="m_section_title__ja">制作したもの</p>
        </h2>

        <?php
          $args = array(
            'post_type' => 'works', 
            'posts_per_page' => 9,  
          );

          $works_query = new WP_Query($args);

          if ($works_query->have_posts()) :
            echo '<ul class="m_works-list l_content">';
            while ($works_query->have_posts()) : $works_query->the_post();
          ?>
              <li class="m_works-item">
                <a href="<?php the_permalink(); ?>" class="m_works-link">
                  <div class="m_works-img_wrapper">
                    <img
                      src="<?php the_field( 'mockup' ); ?>"
                      alt="<?php the_title(); ?>"
                      width="573"
                      height="573"
                      class="m_works-img"
                    />
                  </div>
                  
                </a>
                <div class="m_works-meta">
                  <p class="m_works-title"><?php the_title(); ?></p>
                  <p class="m_works-scope"><?php the_field('scope'); ?></p>
                </div>
              </li>
          <?php
            endwhile;
            echo '</ul>';
            wp_reset_postdata();
          else :
            echo '<p>実績が見つかりませんでした。</p>';
          endif;
          ?>

      </div>
      <!-- /.l_container l_container__md -->
    </section>

  </main>
<?php get_footer(); ?>
