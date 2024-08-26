<?php

/**
 * @company.php
 */
?>

<?php get_header(); ?>

<section>
  <?php
  if (have_posts()) {
    while (have_posts()) : the_post();
  ?>
      <div class="__fade-in-header w-full bg-gray-100 h-[300px]">
        <div class="flex container mx-auto h-full items-center px-5 md:pl-0">
          <?php get_template_part(
            slug: "components/heading-page-name",
            args: [
              "page_name" => ucfirst($post->post_name),
            ]
          ); ?>
        </div>
      </div>
      <div class="w-full bg-white">
        <div class="__fade-up-fast container mx-auto h-full px-5 md:pl-0 py-10">
          <!-- 経営理念 -->
          <section class="pb-16">
            <?php get_template_part(
              slug: "components/heading-section",
              args: [
                "section_name" => "Philosophy",
                "description" => "経営理念"
              ]
            ); ?>
            <p class="text-base md:text-lg font-bold text-black pb-5">Business Integrity, Ascending Together</p>
            <p class="text-4xl font-bold text-black pb-10">誠実に、共に高みへ</p>
            <p class="text-base md:text-lg font-bold text-black pb-10 leading-10">私たちは「商道誠意」をモットーに掲げ、お客様により価値のあるサービスと商品を提供しています。</br>情報通信技術の進歩により、私たちはシステム開発、サービス提供、業務改善提案、経費削減提案など、お客様のビジネスをサポートし、より良い社会を目指しています。</p>
          </section>
          <!-- 会社概要 -->
          <section class="pb-16">
            <?php get_template_part(
              slug: "components/heading-section",
              args: [
                "section_name" => "Overview",
                "description" => "会社概要"
              ]
            ); ?>
            <table class="md:w-full text-sm md:text-base border-collapse border border-gray-200">
              <tbody>
                <tr>
                  <th class="p-1 md:p-5 bg-gray-200 font-normal border border-gray-200 border-b-white"><span>会社名</span></th>
                  <td class="p-1 md:p-5 border border-gray-200"><span>株式会社エフトス</span></td>
                </tr>
                <tr>
                  <th class="p-1 md:p-5 bg-gray-200 font-normal border border-gray-200 border-b-white"><span>代表取締役</span></th>
                  <td class="p-1 md:p-5 border border-gray-200"><span>友久千秀</span></td>
                </tr>
                <tr>
                  <th class="p-1 md:p-5 bg-gray-200 font-normal border border-gray-200 border-b-white"><span>登録番号</span></th>
                  <td class="p-1 md:p-5 border border-gray-200">
                    <ul>
                      <li>
                        <dl>
                          <dt><span>適格請求書発行事業者登録番号</span></dt>
                          <dd>
                            <div><span>T4080401011386</span></div>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th class="p-1 md:p-5 bg-gray-200 font-normal border border-gray-200"><span>所在地</span></th>
                  <td class="p-1 md:p-5 border border-gray-200">
                    <ul>
                      <li>
                        <dl>
                          <dt><span>本社</span></dt>
                          <dd>
                            <div>
                              <span>〒441-8113 愛知県豊橋市西幸町333-9 豊橋サイエンスコア307号室 <a href="#">[MAP]</a></span>
                              <span></span>
                            </div>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
          <!-- アクセス -->
          <section class="pb-16">
            <?php get_template_part(
              slug: "components/heading-section",
              args: [
                "section_name" => "Access",
                "description" => "アクセス"
              ]
            ); ?>
            <p class="text-base md:text-lg font-bold text-black pb-10 leading-10">私たちは「商道誠意」をモットーに掲げ、お客様により価値のあるサービスと商品を提供しています。</br>情報通信技術の進歩により、私たちはシステム開発、サービス提供、業務改善提案、経費削減提案など、お客様のビジネスをサポートし、より良い社会を目指しています。</p>
          </section>
        </div>
      </div>
  <?php
    endwhile;
  }
  ?>
</section>

<?php get_footer(); ?>