<?php get_header(); ?>

<main class="flex-grow flex flex-col justify-center pt-32 md:pt-44 container mx-auto p-4 py-12">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="card-premium p-6 md:p-8 border border-gray-100 shadow-sm">
                <h1 class="text-2xl md:text-3xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="text-gray-700"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>