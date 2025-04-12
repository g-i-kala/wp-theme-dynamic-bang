<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="w-full mx-auto border-2 border-black py-2 px-2 md:py-10 md:px-10 lg:py-16 lg:px-16 my-4">
    <?php if ( have_comments() ) : ?>
        <h2 class="text-xl font-semibold mb-4">
            <?php
            printf(
                esc_html( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ) ),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h2>
        <ul class="space-y-4">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'avatar_size'=> 50,
                    'callback'   => function( $comment, $args, $depth ) {
                        ?>
                        <li class="border p-4">
                            <div class="flex items-start space-x-4">
                                <?php echo get_avatar( $comment, 50, '', '', ['class' => 'rounded-full'] ); ?>
                                <div>
                                    <p class="font-semibold"><?php echo get_comment_author(); ?></p>
                                    <p class="text-sm text-gray-500"><?php echo get_comment_date(); ?></p>
                                    <div class="mt-2 text-gray-700"><?php comment_text(); ?></div>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                )
            );
            ?>
        </ul>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
        <h3 class="text-lg font-semibold mt-4">Write a Comment</h3>

        <div x-data="{ showFields: false }">
            <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post">
                <!-- Comment Field -->
                <div class="mb-4">
                    <label for="comment" class="sr-only">Comment</label>
                    <textarea id="comment" name="comment" rows="4" required 
                        class="w-full px-4 py-2 border focus:ring focus:ring-primary transition-all"
                        x-on:focus="showFields = true" placeholder="Write your comment here..." 
                        aria-required="true" aria-describedby="comment-help"></textarea>
                        <div id="comment-help" class="screen-reader-text">
                            Please write your comment here. This is a required field.
                        </div>
                </div>

                <!-- Hidden Fields (Name, Email, Submit) -->
                <div x-show="showFields" x-transition class="space-y-4">
                    <div>
                        <label for="author" class="block text-gray-700 font-medium">Name</label>
                        <input id="author" name="author" type="text" required 
                            class="w-full px-4 py-2 border focus:ring focus:ring-primary"
                            aria-required="true" aria-describedby="author-help">
                            <div id="author-help" class="screen-reader-text">
                                Please enter your full name. This is a required field.
                            </div>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input id="email" name="email" type="email" required 
                            class="w-full px-4 py-2 border focus:ring focus:ring-primary"
                            aria-required="true" aria-describedby="email-help">
                            <div id="email-help" class="screen-reader-text">
                                Please enter your email address. This is a required field.
                            </div>
                    </div>

                    <button type="submit" class="my-4 bg-black hover:bg-white text-white hover:text-black font-bold border-2 border-black px-4 py-1 uppercase" 
                            aria-label="Post your comment">
                        Post Comment
                    </button>
                </div>
            </form>
        </div>

    <?php endif; ?>
</div>


