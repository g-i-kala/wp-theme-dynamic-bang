<section class="section min-h-screen flex flex-col justify-center " id="hero">
  <div class="container space-y-16">
    <div class="section-header w-full md:w-1/2">
      <p class="w-full text-[2rem] text-sm/10 text-primary font-bold">
        <?= bloginfo('description') ?>
      </p>
      <h1 class="w-full text-[4rem] font-bold text-sm/20">
        <?= bloginfo('name');?>
      </h1>
      <p class="w-full text-xl text-black font-bold my-4">
        Holistyczne studio treningowe prowadzone przez Martę – dawną miss fitness, dziś przewodniczkę po drodze do
        zdrowia, siły i pewności siebie.
      </p>

      <div class="mt-4 py-4 text-center">
        <?php get_template_part('template-parts/components/button', 'orange',
            array(
              'href' => '#newsletter',
              'text' => 'Zacznij przygodę!',
              'class' => 'text-xl font-bold py-2 px-8'
        )); ?>
      </div>
    </div>

    <div class="grid grid-cols-6 grid-flow-row gap-8">

      <?php
        $services = [
            ['href' => '#', 'text' => 'Treningi personalne', 'icon' => 'fa-dumbbell text-secondary' ],
            ['href' => '#', 'text' => 'Konsultacje dietetyczne', 'icon' => 'fa-apple-alt text-mint'],
            ['href' => '#', 'text' => 'Kalistenika i mobilność', 'icon' => 'fa-person-running text-dark-accent'],
            ['href' => '#', 'text' => 'Tai Chi i oddech', 'icon' => 'fa-wind text-mint'],
            ['href' => '#', 'text' => 'Sauna i regeneracja', 'icon' => 'fa-hot-tub-person text-navy'],
            ['href' => '#', 'text' => 'LGBTQ+ friendly', 'icon' => 'fa-heart text-red-500'],
        ];

        foreach ($services as $card) {
            get_template_part('template-parts/components/card', 'service', $card);
        }
        ?>


    </div>

  </div>
</section>