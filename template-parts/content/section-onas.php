<section class="section min-h-screen flex flex-col justify-center" id="onas">
  <div class="container space-y-8">
    <div class="flex flex-col md:flex-row gap-8">

      <div class="section-top-right w-full md:w-1/2">
        <img src="https://picsum.photos/seed/9144/400" class="w-full rounded-2xl" />
      </div>
      <div class="section-top-left w-full md:w-1/2">
        <p class="w-full text-[2rem] text-sm/10 text-primary font-bold">
          Poznajmy się.
        </p>
        <h1 class="w-full text-[4rem] font-bold text-sm/20">
          O Nas
        </h1>
        <p class="w-full text-xl text-black font-semibold my-4">
          Mam na imię Marta. Kiedyś zdobywałam medale w fitness, dziś pomagam innym zdobywać własne podium. Dynamic Bang
          to moje serce – miejsce stworzone z myślą o kobietach, osobach LGBTQ+ i wszystkich, którzy chcą trenować
          mądrze,
          bez oceniania.
        </p>
      </div>

    </div>

    <div class="space-y-4 my-32">
      <h2 class="text-4xl font-bold text-center">🎯 Misja i wartości:</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php
                    $values = [
              ['title' => 'Holistyczne podejście', 'text' => 'Trening, dieta, regeneracja – wszystko w jednym miejscu', 'icon' => '🌱', 'aos' => "data-aos=fade-right data-aos-delay=400" ],
              ['title' => 'Bezpieczna przestrzeń', 'text' => 'Otwartość, różnorodność, wspólnota', 'icon' => '🏳️‍🌈', 'aos' => "data-aos=fade data-aos-delay=600"  ],
              ['title' => 'Eksperci z pasją', 'text' => 'Trenerki i trenerzy z sercem i bickiem', 'icon' => '❤️', 'aos' => "data-aos=fade-left data-aos-delay=800"  ],
                    ];
        foreach ($values as $value) {
            get_template_part('template-parts/components/card', 'values', $value);
        }
        ?>
      </div>
    </div>
  </div>
</section>