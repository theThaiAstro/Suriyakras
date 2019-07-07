<!-- // * This part was written with hasitation, so it looks shitty -->
<!-- // TODO: Rewrite -->

<!-- Maybe we could add a picture as a thumbnail block and shrink the info box down like other sections -->

<section id="tonight-sky" class="card-section">
  <aside class="white-card">
    <h2 id="tonight-sky-title">ท้องฟ้าขณะนี้</h2>

    <span id="sky-details-date-time"></span> · <span id="sky-details-location"></span>

    <!-- ดวงจันทร์: <span id="sky-details-moon-phase"></span> -->

    <div class="tonight-sky-constellation-row">
      <div class="star-and-constellation">
        <div class="top-row">ดวงอาทิตย์ <span class="normal">(กลุ่มดาว<span id="sky-details-constellation-sun"></span>)</span></div>
        <div class="bottom-row">
          ขึ้น <span id="sky-details-sun-rise-time"></span> น. · ตก <span id="sky-details-sun-set-time"></span> น.
        </div>
      </div>

      <div class="star-and-constellation">
        <div class="top-row">ดวงจันทร์ <span class="normal">(กลุ่มดาว<span id="sky-details-constellation-moon"></span>)</span></div>
        <div class="bottom-row">ขึ้น <span id="sky-details-moon-rise-time"></span> น. · ตก <span id="sky-details-moon-set-time"></span> น.</div>
      </div>
    </div>

    <div class="tonight-sky-constellation-row">
      <div class="star-and-constellation">
        <div class="top-row">ดาวพุธ</div>
        <div class="bottom-row">กลุ่มดาว<span id="sky-details-constellation-mercury"></span> (<span id="sky-details-constellation-mercury-time"></span>)</div>
      </div>

      <div class="star-and-constellation">
        <div class="top-row">ดาวศุกร์</div>
        <div class="bottom-row">กลุ่มดาว<span id="sky-details-constellation-venus"></span> (<span id="sky-details-constellation-venus-time"></span>)</div>
      </div>

      <div class="star-and-constellation">
        <div class="top-row">ดาวอังคาร</div>
        <div class="bottom-row">กลุ่มดาว<span id="sky-details-constellation-mars"></span> (<span id="sky-details-constellation-mars-time"></span>)</div>
      </div>

      <div class="star-and-constellation">
        <div class="top-row">ดาวพฤหัสบดี</div>
        <div class="bottom-row">กลุ่มดาว<span id="sky-details-constellation-jupiter"></span> (<span id="sky-details-constellation-jupiter-time"></span>)</div>
      </div>

      <div class="star-and-constellation">
        <div class="top-row">ดาวเสาร์</div>
        <div class="bottom-row">กลุ่มดาว<span id="sky-details-constellation-saturn"></span> (<span id="sky-details-constellation-saturn-time"></span>)</div>
      </div>
    </div>

  </aside>
</section>