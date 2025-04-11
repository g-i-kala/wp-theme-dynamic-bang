<div class="border-2 border-black py-2 px-2 md:py-10 md:px-10 lg:py-12 lg:px-16 my-4">
    <?php 
    the_post_navigation( array(
        'next_text' => '<span class="bg-white hover:bg-black text-black hover:text-white font-bold border-1 border-black px-4 py-1 uppercase inline-block ">' . __( 'Next Post', 'fitness_pleasure' ) . '</span>',
        'prev_text' => '<span class="bg-white hover:bg-black text-black hover:text-white font-bold border-1 border-black px-4 py-1 uppercase inline-block ">' . __( 'Previous Post', 'fitness_pleasure' ) . '</span>',
        'screen_reader_text' => __( 'Continue Reading', 'fitness_pleasure' )
    )); ?>
</div>
