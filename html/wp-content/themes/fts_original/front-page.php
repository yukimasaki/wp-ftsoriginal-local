<?php

/**
 * @name:front-page.php
 */
?>

<?php get_header(); ?>

<main class="__hero __anime_mainVisual">
  <div class="__catchCopyGroup __anime___catchCopyGroup">
    <div class="__companyNameGroup">
      <span class="__companyNameEnglish __font_exo2">EFTOS, Inc.</span>
      <span class="__companyNameJapanese">株式会社エフトス</span>
    </div>
    <span class="__companyCatchCopy">誠実に、共に高みへ</span>
  </div>
</main>
<div class="__containerInfo __anime_fadeRightToLeft">
  <?php
  // ページ番号の取得
  // $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 動的に取得する場合
  $paged = 1; // 最新ページを取得する場合
  $args = array(
    'post_type' => 'post', //投稿タイプ
    'posts_per_page' => 2, //１ページの表示数
    'paged' => $paged //何ページ目の情報を取得するかを指定
  );

  // 以下、ループ構造
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php
      $cat = get_the_category(); // カテゴリの配列を返すWordPress関数
      $catslug = $cat[0]->slug; // カテゴリslugの変数
      $cat_name = $cat[0]->name; // カテゴリ名の変数
      ?>

      <div class="__infoItems">
        <a href="<?php echo the_permalink(); ?>">
          <dl>
            <!-- お知らせのカテゴリ名を表示（カテゴリ名slugでクラス付与・リンクなし) -->
            <dd><span class="<?php echo esc_attr($catslug); ?>"><?php echo esc_html($cat_name); ?></span></dd>
            <!-- お知らせのタイトルを表示 -->
            <dt><?php the_title(); ?></dt>
          </dl>
        </a>
      </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</div>

<div class="__subContainer">
  <section class="__sectionCompany">
    <img src="https://dummyimage.com/600x400" />
    <div>
      <h1 class="__title">Company</h1>
      <p class="__description">
        当社は各企業のシステム担当者として、最新の情報通信技術を生かしたシステム開発、サービスの提供、業務改善提案や経費削減提案を積極的に行うスタッフ集団です。情報通信という目に見えにくい世界だからこそ、常にお客様とのコミュニケーションを重視しお客様と共に高みを目指します。
      </p>
      <? get_template_part(
        slug: "components/navigation-button",
        args: [
          "text" => "エフトスについて",
          "link" => "/company",
        ]
      ); ?>
    </div>
  </section>
  <section class="__reverse">
    <img src="https://dummyimage.com/600x400" />
    <div>
      <h1 class="__title">Services</h1>
      <p class="__description">
        ネットワークの構築、業務支援システムの開発・提案、ホームページ制作のほか、社内コミュニケーションを円滑化するためのグループウェアの導入支援も行っております。日々進化するデジタル技術を取り入れお客様の業務効率化をサポートいたします。
      </p>
      <? get_template_part(
        slug: "components/navigation-button",
        args: [
          "text" => "事業内容について",
          "link" => "/services",
        ]
      ); ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>