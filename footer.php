  <footer id="site-footer">
    <img id="site-footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tas-logo.png" alt="สมาคมดาราศาสตร์ไทย" />

    <div id="site-footer-tas-name">
      <div id="site-footer-tas-name-th">สมาคมดาราศาสตร์ไทย</div>
      <div id="site-footer-tas-name-en">The Thai Astronomical Society</div>
    </div>

    <!-- TODO: Social links -->
    <div id="site-footer-socials">
      <a href="https://facebook.com/theThaiAstro" title="เฟซบุ๊คของสมาคมดาราศาสตร์ไทย" class="site-footer-socials-link">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/theThaiAstro" title="ทวิตเตอร์ของสมาคมดาราศาสตร์ไทย" class="site-footer-socials-link">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://instagram.com/theThaiAstro" title="อิสตาแกรมของสมาคมดาราศาสตร์ไทย" class="site-footer-socials-link">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://youtube.com/theThaiAstro" title="อิสตาแกรมของสมาคมดาราศาสตร์ไทย" class="site-footer-socials-link">
        <i class="fab fa-youtube"></i>
      </a>
    </div>

    <div id="site-footer-sitemap">
      <!-- Primary footer menu (main links) -->
      <div id="site-footer-sitemap-main-links">
        <?php wp_nav_menu( array('theme_location' => 'footer_primary') ); ?>
        <!-- <ul>
          <li><a href="#">หน้าแรก</a></li>
          <li><a href="#">ข่าว</a></li>
          <li><a href="#">ปรากฏการณ์ท้องฟ้า</a></li>
          <li><a href="#">กิจกรรม</a></li>
          <li><a href="#">ห้องสมุด</a></li>
          <li><a href="#">สารพันคำถาม</a></li>
          <li><a href="#">เกี่ยวกับ</a></li>
          <li><a href="#">ติดต่อ</a></li>
        </ul> -->
      </div>
      <!-- /MAIN LINKS -->

      <!-- OTHER LINKS -->
      <div id="site-footer-sitemap-other-links">
        <?php wp_nav_menu( array('theme_location' => 'footer_secondary') ); ?>
        <!-- <ul>
          <li><a href="#">นโยบายความเป็นส่วนตัว</a></li>
          <li><a href="#">ข้อกำหนดการใช้งาน</a></li>
          <li><a href="#">ข้อปฏิเสธความรับผิดชอบ</a></li>
          <li><a href="#">ลิขสิทธิ์</a></li>
          <li><a href="#">ช่วยเหลือ</a></li>
          <li><a href="#">สำหรับสื่อ</a></li>
        </ul> -->
      </div>
      <!-- /OTHER LINKS -->
    </div>

    <div id="site-footer-copyright">
      &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) + 543 ); ?> สมาคมดาราศาสตร์ไทย
      <div id="site-footer-copyright-detail">
        เนื้อหาทั้งหมดเป็นลิขสิทธิ์ของสมาคมดาราศาสตร์ไทย ยกเว้นมีการระบุไว้เป็นอย่างอื่น โปรดดูหน้า<a href="licensing">ลิขสิทธิ์</a>สำหรับการนำไปใช้งาน
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
