<?php get_header(); ?>

<main class="flex-grow flex flex-col justify-center pt-32 md:pt-44 container mx-auto px-4 py-16 md:py-32">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Blog</h1>

    <?php if (have_posts()) : ?>
        <div class="grid gap-6 md:gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php while (have_posts()) : the_post(); ?>
                <article class="card-premium border border-gray-100 shadow-premium w-full">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover transition duration-300 hover:scale-105']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-gray-700"><?php the_title(); ?></a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-4"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                        <p class="text-gray-700"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-gray-900 font-semibold hover:text-gray-700">Leer más</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Paginación Premium -->
        <div class="pagination-premium">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '<span class="prev">← Ant</span>',
                'next_text' => '<span class="next">Sig →</span>',
                'class' => 'pagination-container'
            ));
            ?>
        </div>
    <?php else : ?>
        <p class="text-gray-600 text-center">No hay posts disponibles.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>