<?php get_header(); ?>

<main id="main-content">
  <!-- For outlining and semantic purpose -->
  <h1 style="display: none;">หน้าหลัก - homepage</h1>

  <?php get_template_part('templates/featured-article'); ?>

  <!-- Recent articles -->
  <section id="recent-articles">
    <h2 class="section-title">บทความล่าสุด</h2>

    <a class="card-link" href="#">
      <div class="card-container">
        <img alt="{{image alt}}" class="card-image-featured" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2562</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้ นาซาก็พาเธอกลับมาไม่ได้ นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>
  </section>

  <!-- Events -->
  <?php get_template_part('templates/events'); ?>
  

  <!-- Phenomena -->
  <section id="sky-phenomena">
    <h2 class="section-title">ปรากฏการณ์ท้องฟ้า</h2>

    <a class="card-link" href="#">
      <div class="card-container">
        <img alt="{{image alt}}" class="card-image-featured" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>
  </section>

  <!-- Gallery -->
  <section id="gallery">
    <h2 class="section-title">ห้องภาพท้องฟ้า</h2>

    <a class="card-link" href="#">
      <div class="card-container">
        <img alt="{{image alt}}" class="card-image-featured" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>

    <a class="card-link" href="#">
      <div class="card-container regular">
        <img alt="{{image alt}}" class="card-image-regular" src="./assets/img/featured-background.jpg" />
        <div class="card-text">
          <div class="category-badge small">หมวดหมู่</div>
          <h3 class="card-title">นาซาก็พาเธอกลับมาไม่ได้</h3>
          <div class="card-time regular">29 กุมภาพันธ์ 2563</div>
        </div>
      </div>
    </a>
  </section>
</main>

<?php get_footer(); ?>
