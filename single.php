<?php get_header(); ?>

<main class="flex-grow flex flex-col justify-center pt-24 md:pt-40 container mx-auto px-4 py-16 md:py-32">
    <?php while (have_posts()):
        the_post(); ?>
        <article class="card-premium p-6 md:p-8 border border-gray-100 shadow-sm shadow-premium w-full">
            <?php if (has_post_thumbnail()): ?>
                <div class="overflow-hidden">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-48 md:h-64 object-cover']); ?>
                </div>
            <?php endif; ?>
            <div class="p-8 md:p-12">
                <h1 class="text-3xl md:text-5xl font-black text-gray-900 mb-6 tracking-tighter leading-tight">
                    <?php the_title(); ?></h1>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-[0.2em] mb-8"><?php echo get_the_date(); ?> —
                    por <?php the_author(); ?></p>

                <div class="prose prose-gray mb-8">
                    <?php the_content(); ?>
                </div>

                <?php $service_url = get_post_meta(get_the_ID(), 'service_url', true); ?>
                <?php if ($service_url): ?>
                    <section class="card-premium p-6 md:p-8 border border-white/80 shadow-lg shadow-gray-200/20">
                        <p class="text-gray-700 font-semibold mb-3">Más información:</p>
                        <a href="<?php echo esc_url($service_url); ?>" target="_blank" rel="noopener noreferrer"
                            class="inline-block px-6 py-3 bg-gray-900 text-white font-semibold rounded-lg hover:bg-gray-800 transition">
                            Ver Más →
                        </a>
                    </section>
                <?php endif; ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>