<?php
/*
Template Name: PAGE
*/
get_header();
?>

<main class="min-h-screen bg-gray-100 pt-32 md:pt-44 pb-16 md:pb-32">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Bloque de Contenido Principal (8 columnas) -->
            <article class="col-span-12 lg:col-span-8 animate-fade-in-up">
                <div class="bg-white rounded-[2rem] p-8 md:p-14 shadow-2xl shadow-gray-200/50">
                    <header class="mb-10">
                        <p class="text-[10px] uppercase tracking-[0.4em] text-amber-600 font-black mb-4">Página
                            Institucional</p>
                        <h1 class="text-4xl md:text-6xl font-black tracking-tighter leading-none text-gray-900 mb-6">
                            <?php the_title(); ?>
                        </h1>

                        <?php if (has_post_thumbnail()): ?>
                            <div class="overflow-hidden">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-48 md:h-64 object-cover']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="h-1 w-20 bg-amber-500 rounded-full"></div>
                    </header>

                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div class="prose prose-lg prose-gray max-w-none text-gray-600 leading-relaxed">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </article>

            <!-- Sidebar Boutique (4 columnas) -->
            <aside class="col-span-12 lg:col-span-4 space-y-8 animate-fade-in-up delay-200">
                <?php if (is_active_sidebar('sidebar-1')): ?>
                    <div
                        class="bg-gray-10 rounded-[2rem] p-8 shadow-xl shadow-gray-200/30 border border-white/50 backdrop-blur-sm">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    </div>
                <?php else: ?>
                    <!-- Estado vacío del Sidebar con estilo -->
                    <div
                        class="bg-gray-10 rounded-[2rem] p-10 shadow-xl shadow-gray-200/30 border border-white/50 border-dashed text-center">
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                            <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 012-2M5 11V9a2 2 0 01-2-2m0 0V5a2 2 0 012-2h14a2 2 0 012 2v2M5 7h14">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-sm font-black uppercase tracking-widest text-gray-900 mb-2">Boutique Sidebar</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Personaliza esta sección añadiendo widgets desde el panel de <br> <strong>Apariencia →
                                Widgets</strong>.
                        </p>
                    </div>
                <?php endif; ?>

                <!-- Bloque de Contacto Rápido en Sidebar -->
                <div
                    class="bg-amber-500 rounded-[2rem] p-8 text-black shadow-xl shadow-amber-500/20 group hover:scale-[1.02] transition-transform duration-500">
                    <h4 class="text-xl font-black tracking-tight mb-4 uppercase text-xs tracking-[0.2em]">¿Necesitas
                        ayuda?</h4>
                    <p class="text-sm font-medium mb-6 opacity-80 leading-relaxed">Estamos listos para llevar tu
                        proyecto al siguiente nivel con diseño de alta gama.</p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>"
                        class="inline-flex items-center gap-2 bg-black text-white px-6 py-3 rounded-full text-[10px] font-black uppercase tracking-widest hover:bg-gray-900 transition-colors">
                        Hablar ahora
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </aside>

        </div>
    </div>
</main>

<?php get_footer(); ?>