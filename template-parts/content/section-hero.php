<section class="section h-screen flex flex-col justify-center" id="hero">
  <div class="container ">
    <div class="section-header">
      <h1 class="w-full text-[4rem] font-bold text-sm/20">
        <?= bloginfo('name');?>
      </h1>
      <h2 class="w-full text-[2rem] text-sm/10 ">
        <?= bloginfo('description') ?>
      </h2>
    </div>

    <div class="section-content">
      <!-- Replace this block with cards, columns, images, etc. -->
      <div class="content-box">
        <h3>Box Title</h3>
        <p>Brief paragraph of content. Can be replaced with ACF field or looped content.</p>
        <a href="#" class="btn">Call to Action</a>
      </div>
    </div>
  </div>
</section>