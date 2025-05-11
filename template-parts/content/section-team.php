<section class="section min-h-screen flex flex-col justify-center" id="team">
  <div class="container space-y-8">

    <div class="section-bottom w-full md:w-1/2">
      <p class="w-full text-[2rem] text-sm/10 text-primary font-bold">
        Poznaj Nas
      </p>
      <h1 class="w-full text-[4rem] font-bold text-sm/20">
        Team
      </h1>
      <p class="w-full text-xl text-black font-semibold my-4">
        Oto zespół, który nie tylko zna się na rzeczy, ale przede wszystkim kocha ludzi.
      </p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-5 grid-flow-row gap-8">

      <?php

        $team_members = [
          [
              'href' => '#',
              'name' => 'Marta',
              'description' => 'szefowa, dusza zespołu, ex-miss fitness, motywatorka',
              'photo' => 'https://picsum.photos/seed/234/400'
          ],
          [
              'href' => '#',
              'name' => 'Magda',
              'description' => 'specjalistka od kalisteniki i stretchingu, uśmiechnięta, precyzyjna',
              'photo' => 'https://picsum.photos/seed/532/400'
          ],
          [
              'href' => '#',
              'name' => 'Michał',
              'description' => 'trener personalny i model, opanowany, cierpliwy',
              'photo' => 'https://picsum.photos/seed/531/400'
          ],
          [
              'href' => '#',
              'name' => 'Wojtek',
              'description' => 'były tancerz, obecnie prowadzi tai chi i mobilność',
              'photo' => 'https://picsum.photos/seed/4442/400'
          ],
          [
              'href' => '#',
              'name' => 'Anna',
              'description' => 'recepcjonistka, vibe managerka, zawsze z herbatą i uśmiechem',
              'photo' => 'https://picsum.photos/seed/1123/400'
          ],
        ];

      foreach ($team_members as $member) {
          get_template_part('template-parts/components/card', 'team-member', $member);
      }
      ?>

    </div>
  </div>
</section>