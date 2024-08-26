<?php

/**
 * @footer.php
 */
?>
</main>
<footer class="flex flex-col bg-black text-white md:items-center">
  <div class="flex flex-col md:flex-row md:w-fit">
    <!-- 会社情報 -->
    <div class="flex flex-col p-5 lg:p-10 border-b border-gray-700">
      <span class="text-3xl font-bold pb-2">Eftos</span>
      <span class="text-sm md:text-xs font-normal">
        株式会社エフトス</br>
        〒441-8113 愛知県豊橋市西幸町333-9</br>
        豊橋サイエンスコア307号室 <a href="#">[MAP]</a></br>
        TEL 0532-44-1322
      </span>
    </div>

    <!-- サイトマップ -->
    <div class="flex flex-col lg:flex-row gap-y-5 p-5 lg:p-10 lg:gap-x-32 border-b border-gray-700">
      <div class="flex flex-col gap-y-2">
        <span class="text-base font-bold"><a href="/services">Services</a></span>
        <div class="flex gap-y-2 md:gap-x-4 flex-col md:flex-row lg:flex-col">
          <span class="text-sm md:text-xs"><a href="/network">ネットワーク構築</a></span>
          <span class="text-sm md:text-xs"><a href="/system">システム開発</a></span>
          <span class="text-sm md:text-xs"><a href="/workspace">Google Workspace導入支援</a></span>
        </div>
      </div>
      <div class="flex flex-col gap-y-2">
        <span class="text-base font-bold"><a href="/company">Company</a></span>
        <div class="flex gap-y-2 md:gap-x-4 flex-col md:flex-row lg:flex-col">
          <span class="text-sm md:text-xs"><a href="/company/#philosophy">経営理念</a></span>
          <span class="text-sm md:text-xs"><a href="/company/#overview">会社概要</a></span>
          <span class="text-sm md:text-xs"><a href="/company/#access">アクセス</a></span>
        </div>
      </div>
      <div class="flex flex-col gap-y-2">
        <span class="text-base font-bold"><a href="/information">Information</a></span>
        <div class="flex gap-y-2 md:gap-x-4 flex-col md:flex-row lg:flex-col">
          <span class="text-sm md:text-xs"><a href="/Information">お知らせ</a></span>
          <span class="text-sm md:text-xs"><a href="/contact">お問い合わせ</a></span>
          <span class="text-sm md:text-xs"><a href="/privacy">個人情報保護方針</a></span>
        </div>
      </div>
    </div>
  </div>

  <!-- コピーライト -->
  <span class="text-xs font-bold self-center py-2">©2024 Eftos Inc.</span>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>