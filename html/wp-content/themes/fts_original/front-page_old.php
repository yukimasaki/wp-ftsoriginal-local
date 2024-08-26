<?php

/**
 * @name:front-page.php
 */
?>

<?php get_header(); ?>

<section class="relative h-svh">
  <div class="absolute bottom-10 md:bottom-20 left-0 w-full flex flex-col py-10 gap-y-5">
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

        <div class="__fade-left bg-white md:w-fit w-full md:pl-20 p-5 text-sm">
          <a href="<?php echo the_permalink(); ?>">
            <dl class="flex md:flex-row gap-x-4 flex-col">
              <!-- お知らせのカテゴリ名を表示（カテゴリ名slugでクラス付与・リンクなし) -->
              <dd><span class="<?php echo esc_attr($catslug); ?>"><?php echo esc_html($cat_name); ?></span></dd>
              <!-- お知らせのタイトルを表示 -->
              <dt><?php the_title(); ?></dt>
            </dl>
          </a>
        </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif;
    ?>
  </div>
  <div class="container px-5 mx-auto flex md:flex-row h-full">
    <div class="flex flex-col justify-center h-full md:h-[800px]">
      <div class="__catchcopy-company-name pl-8 mb-2">
        <h1 class="pb-1 font-black">
          <?php get_template_part("components/company-logo"); ?>
        </h1>
        <p class="pb-1 text-lg font-semibold __fade-up-fast">Business Integrity, Ascending Together</p>
        <p class="text-lg font-semibold __fade-up-fast">誠実に、共に高みへ</p>
      </div>
      <p class="text-sm __fade-up-slow">当社は「商道誠意」をモットーとして、より価値のあるサービス・商品をお客様に提供いたします。</p>
    </div>
  </div>

</section>

<section class="py-16">
  <div class="__fade-in-sections container flex flex-col md:flex-row md:px-5 mx-auto">
    <div class="md:w-1/2 px-5 pb-5 md:pb-0"><img src="https://dummyimage.com/720x400" alt="Company Image"></div>
    <div class="md:w-1/2 px-5 md:pl-10">
      <div class="__catchcopy-other pl-8">
        <h1 class="font-bold text-7xl">Company</h1>
      </div>
      <p class="text-sm py-10">当社は各企業のシステム担当者として、最新の情報通信技術を生かしたシステム開発、サービスの提供、業務改善提案や経費削減提案を積極的に行うスタッフ集団です。情報通信という目に見えにくい世界だからこそ、常にお客様とのコミュニケーションを重視しお客様と共に高みを目指します。</p>
      <? get_template_part(
        slug: "components/navigation-button",
        args: [
          "text" => "エフトスについて",
          "link" => "/company",
        ]
      ); ?>
    </div>
  </div>
</section>

<section class="bg-white py-16">
  <div class="__fade-in-sections container flex flex-col md:flex-row-reverse md:px-5 mx-auto">
    <div class="md:w-1/2 px-5 pb-5 md:pb-0"><img src="https://dummyimage.com/720x400" alt="Company Image"></div>
    <div class="md:w-1/2 px-5 md:pr-10">
      <div class="__catchcopy-other pl-8">
        <h1 class="font-bold text-7xl">Services</h1>
      </div>
      <p class="text-sm py-10">ネットワークの構築、業務支援システムの開発・提案、ホームページ制作のほか、社内コミュニケーションを円滑化するためのグループウェアの導入支援も行っております。日々進化するデジタル技術を取り入れお客様の業務効率化をサポートいたします。</p>
      <? get_template_part(
        slug: "components/navigation-button",
        args: [
          "text" => "事業内容について",
          "link" => "/services",
        ]
      ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>