<?php get_header(); ?>


<main>
  <section class="works_section l_section">
    <div class="l_container l_container__sm">
      <div class="works_contents">
        <h2 class="m_works-title_top"><?php the_field('title'); ?></h2>
          <?php if (get_field('url_txt')): ?>
            <p class="works_url">
              URL&nbsp;:&nbsp;<a href="<?php the_field('url_txt'); ?>" class="works_link" target="_blank" rel="noopener noreferrer">
                <?php the_field('url_txt'); ?>
              </a>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/arrow-square-out.svg' ); ?>" class="works_arrow" alt="" width="24" height="24">
            </p>
          <?php endif; ?>


        <div class="works_img-wrapper">
          <img
            src="<?php the_field( 'mockup' ); ?>"
            alt="制作物モックアップ"
            class="works_img"
            width="1402"
            height="1016"
          />
        </div>
        <!-- /.works_img-wrapper -->

        <dl class="works_desc-list l_content">
          <?php if (get_field('project_time')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">担当・期間</dt>
              <dd class="works_desc__dd"><?php the_field('project_time'); ?></dd>
            </div>
          <?php endif; ?>

          <?php if (get_field('tool')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">使用ツール</dt>
              <dd class="works_desc__dd"><?php the_field('tool'); ?></dd>
            </div>
          <?php endif; ?>

          <?php if (get_field('target')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">ターゲット</dt>
              <dd class="works_desc__dd"><?php the_field('target'); ?></dd>
            </div>
          <?php endif; ?>

          <?php if (get_field('purpose')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">目的</dt>
              <dd class="works_desc__dd"><?php the_field('purpose'); ?></dd>
            </div>
          <?php endif; ?>

          <?php if (get_field('plan')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">情報設計</dt>
              <dd class="works_desc__dd"><?php the_field('plan'); ?></dd>
            </div>
          <?php endif; ?>

          <?php if (get_field('design')) : ?>
            <div class="works_desc-meta">
              <dt class="works_desc__dt">デザイン</dt>
              <dd class="works_desc__dd"><?php the_field('design'); ?></dd>
            </div>
          <?php endif; ?>
        </dl>

      </div>
      <!-- /.works_contents -->
        
      <div class="l_container l_container__sm">
        <div class="works_overall-img_box l_content">
          <div class="works_overall-img_wrapper">
            <?php if (get_field('pc_img')): ?>
              <img
                src="<?php the_field('pc_img'); ?>"
                alt="pc"
                class="works_overall-img"
                width="406"
                height="4114"
              />
            <?php endif; ?>
          </div>

          <div class="works_overall-img_wrapper">
            <?php if (get_field('sp_img')): ?>
              <img
                src="<?php the_field('sp_img'); ?>"
                alt="sp"
                class="works_overall-img"
                width="972"
                height="3286"
              />
            <?php endif; ?>
          </div>

          <!-- /.works_overall-img_wrapper -->
        </div>
        <!-- /.works_overall-img_box -->
      </div>
      <!-- /.l_container l_container__sm -->
    </div>
    <!-- /.l_container l_container__md -->
  </section>

  <section class="top_works l_section m_section-top">
    <div class="l_container l_container__sm js_scroll-trigger">
      <h2 class="m_section_title">
        <p class="m_section_title__en">Works</p>
        <p class="m_section_title__ja">制作したもの</p>
      </h2>


          <?php
          $current_id = get_the_ID(); // 現在の投稿IDを取得

          $all_works = get_posts(array(
            'post_type'      => 'works',
            'posts_per_page' => -1, 
            'orderby'        => 'date',  
            'order'          => 'DESC'   
          ));

          // 現在の投稿が何番目か
          $all_ids = wp_list_pluck($all_works, 'ID'); // IDだけの配列を作成
          $current_index = array_search($current_id, $all_ids);

          $total_works = count($all_works);

          // 次の3件を取得（最後まで行ったらループ）
          $next_works = [];
          for ($i = 1; $i <= 3; $i++) {
            $next_index = ($current_index + $i) % $total_works;
            $next_works[] = $all_works[$next_index];
          }


          if (!empty($next_works)) :
            echo '<ul class="m_works-list">';
            foreach ($next_works as $work) :
          ?>
              <li class="m_works-item">
                <a href="<?php echo get_permalink($work->ID); ?>" class="m_works-link">
                  <div class="m_works-img_wrapper">
                    <img
                      src="<?php echo get_field('mockup', $work->ID); ?>"
                      alt="<?php echo get_the_title($work->ID); ?>"
                      width="573"
                      height="573"
                      class="m_works-img"
                    />
                  </div>
                </a>
                <div class="m_works-meta">
                  <p class="m_works-title"><?php echo get_the_title($work->ID); ?></p>
                  <p class="m_works-scope"><?php the_field('scope', $work->ID); ?></p>
                  
                </div>
              </li>
          <?php
            endforeach;
            echo '</ul>';
          else :
            echo '<p>他の実績が見つかりませんでした。</p>';
          endif;
          ?>

      </li>
      <!-- /.m_works-list -->
      <div class="m_btn-box">
        <div class="m_btn-wrapper">
          <a href="<?php echo home_url(); ?>#works" class="m_btn">All Works</a>
        </div>
        <!-- /.m_btn-wrapper -->
      </div>
      <!-- /.top_about-btn -->
    </div>
    <!-- /.l_container l_container__md -->
  </section>
</main>

<?php get_footer(); ?>
