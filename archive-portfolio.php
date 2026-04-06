<?php get_header(); ?>

<main class="flex-grow flex flex-col justify-center pt-24 md:pt-40 container mx-auto px-4 py-16 md:py-32">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Portfolio</h1>

    <?php if (have_posts()) : ?>
        <div class="grid gap-6 md:gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php while (have_posts()) : the_post(); ?>
                <article class="card-premium border border-gray-100 shadow-premium w-full">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="overflow-hidden aspect-video relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('sixteen-nine', ['class' => 'w-full h-full object-cover transition-all duration-1000 group-hover:scale-110']); ?>
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3 tracking-tight">
                            <a href="<?php the_permalink(); ?>" class="hover:text-amber-500 transition-colors"><?php the_title(); ?></a>
                        </h2>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-4"><?php echo get_the_date(); ?></p>
                        <p class="text-gray-600 leading-relaxed line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center mt-6 text-xs font-black uppercase tracking-widest text-gray-900 group-hover:text-amber-600 transition-colors">Ver más <span class="ml-2 transform group-hover:translate-x-1 transition-transform">→</span></a>
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
        <p class="text-gray-600 text-center">No hay proyectos disponibles.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>