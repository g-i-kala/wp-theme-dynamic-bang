<section class="section h-min-screen flex flex-col justify-center" id="oferta">
  <div class="container space-y-16">
    <div class="section-header w-full md:w-1/2">
      <p class="w-full text-[2rem] text-sm/10 text-primary font-bold">
        🏳️‍🌈 Razem do celu!
      </p>
      <h1 class="w-full text-[4rem] font-bold text-sm/20">
        Oferta 
      </h1>
      <p class="w-full text-xl text-black font-bold my-4">
        Odkryj naszą różnorodną ofertę, która łączy holistyczne podejście do zdrowia i kondycji. Niezależnie od tego,
        czy szukasz indywidualnego wsparcia, czy wspólnoty w grupowych zajęciach, znajdziesz u nas przestrzeń do rozwoju
        i relaksu.
      </p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 grid-flow-row gap-8">

      <?php

       $services = [
        [
            'href' => '#',
            'title' => 'Treningi personalne',
            'icon' => 'fa-dumbbell text-secondary',
            'description' => 'Indywidualny program, elastyczne godziny, cel: Twój komfort',
            'aos' => "data-aos=fade data-aos-delay=200",
            'modal_content' => 'modal-offer-1',

        ],
        [
            'href' => '#',
            'title' => 'Konsultacje dietetyczne',
            'icon' => 'fa-apple-alt text-mint',
            'description' => 'We współpracy z dietetykami klinicznymi – bo forma to więcej niż kalorie',
            'aos' => "data-aos=fade data-aos-delay=400",
            'modal_content' => 'modal-offer-2',
        ],
        [
            'href' => '#',
            'title' => 'Kalistenika i mobilność',
            'icon' => 'fa-person-running text-dark-accent',
            'description' => 'Ruch bez sprzętu – pełna kontrola nad ciałem i świadomość',
            'aos' => "data-aos=fade data-aos-delay=600",
            'modal_content' => 'modal-offer-3',
        ],
        [
            'href' => '#',
            'title' => 'Tai Chi i oddech',
            'icon' => 'fa-wind text-mint',
            'description' => 'Zajęcia z Wojtkiem – łączenie ruchu z relaksem',
            'aos' => "data-aos=fade data-aos-delay=800",
            'modal_content' => 'modal-offer-4',
        ],
        [
            'href' => '#',
            'title' => 'Sauna i regeneracja',
            'icon' => 'fa-hot-tub-person text-navy',
            'description' => 'Po treningu – czas dla ciała i głowy. Sauna, muzyka, chill',
            'aos' => "data-aos=fade data-aos-delay=1000",
            'modal_content' => 'modal-offer-5',
        ],
        [
            'href' => '#',
            'title' => 'Zajęcia grupowe dla kobiet',
            'icon' => 'fa-users text-red-200',
            'description' => 'Kameralne grupy, wspierająca atmosfera',
            'aos' => "data-aos=fade data-aos-delay=1200",
            'modal_content' => 'modal-offer-6',
        ]
    ];

      foreach ($services as $card) {
          get_template_part('template-parts/components/card', 'offer', $card);
      }
      ?>


    </div>

  </div>
</section>