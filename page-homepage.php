<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<section id="home" class="relative h-screen min-h-[720px] flex items-center justify-center overflow-hidden">
    <!-- Gradient Overlay for Depth -->
    <div class="absolute inset-0 bg-black/30 z-[-1]"></div>

    <div class="relative container mx-auto h-full flex items-center justify-center px-6 pt-20 md:pt-24">
        <div class="text-center text-white max-w-5xl">
            <div class="overflow-hidden mb-6">
                <p
                    class="text-xs md:text-sm uppercase tracking-[0.4em] text-amber-500 font-black animate-fade-in-up text-shadow-soft">
                    Estudio de Dise&ntilde;o Minimalista
                </p>
            </div>

            <h1
                class="text-5xl md:text-8xl lg:text-9xl font-black leading-[0.95] tracking-tighter mb-10 animate-fade-in-up transition-all duration-700 hover:scale-[1.02] cursor-default text-shadow-premium">
                Pure<br class="md:hidden"> Design<span class="text-amber-500">.</span>
            </h1>

            <p
                class="mt-6 text-lg md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90 animate-fade-in-up delay-200 text-shadow-soft">
                Creamos experiencias digitales impecables con un enfoque minimalista y profesional.
            </p>

            <div class="mt-14 flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up delay-300">
                <a href="#services"
                    class="group relative inline-flex items-center gap-4 rounded-full bg-white text-black px-12 py-5 font-black uppercase text-xs tracking-[0.3em] hover:bg-amber-500 hover:text-black transition-all duration-700 shadow-2xl active:scale-95 animate-shine animate-breathe">
                    <span class="relative z-10 flex items-center gap-3">
                        Ver Proyectos
                        <svg class="w-5 h-5 transition-transform duration-700 group-hover:translate-x-2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>
                <a href="#contact"
                    class="inline-block rounded-full border-2 border-white/20 bg-white/5 backdrop-blur-md text-white px-12 py-5 font-black uppercase text-xs tracking-[0.3em] hover:bg-white hover:text-black transition-all duration-700 active:scale-95 min-w-[200px]">
                    Contacto
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div
        class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 animate-bounce opacity-50 hover:opacity-100 transition-opacity duration-300">
        <span
            class="text-[10px] uppercase tracking-[0.3em] font-bold text-white [writing-mode:vertical-lr]">Scroll</span>
        <div class="w-[1px] h-12 bg-gradient-to-b from-white to-transparent"></div>
    </div>
</section>



<main class="flex-grow flex flex-col justify-center pt-16 md:pt-24"> <!-- ajusta padding por header fijo -->
    <section id="about" class="container mx-auto px-6 pt-16 pb-24 md:pt-32 md:pb-48">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
            <!-- Text Content (7 columns on large) -->
            <div class="lg:col-span-7 space-y-8">
                <div class="overflow-hidden">
                    <p class="text-xs uppercase tracking-[0.4em] text-amber-600 font-black mb-4 animate-fade-in-up">
                        Agencia de Impacto</p>
                </div>

                <h2
                    class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tighter text-gray-900 leading-[0.9] animate-fade-in-up delay-100">
                    Creatividad Sin <br> Compromisos<span class="text-amber-500">.</span>
                </h2>

                <p class="text-lg md:text-2xl text-gray-600 leading-relaxed max-w-2xl animate-fade-in-up delay-200">
                    Dise&ntilde;o web moderno, branding minimalista y soluciones digitales con
                    enfoque en experiencia de usuario. Nuestro tema refleja una est&eacute;tica monocrom&aacute;tica y
                    una estructura
                    limpia.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6 animate-fade-in-up delay-300">
                    <div class="space-y-4">
                        <div class="h-1 w-10 bg-amber-500 rounded-full"></div>
                        <h4 class="text-xl font-bold text-gray-900">Enfoque UX/UI</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Dise&ntilde;o centrado en conversiones y una
                            navegaci&oacute;n fluida que garantiza resultados.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="h-1 w-10 bg-gray-900 rounded-full"></div>
                        <h4 class="text-xl font-bold text-gray-900">Performance</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">Implementaci&oacute;n r&aacute;pida con
                            WordPress y Tailwind para una velocidad de carga impecable.</p>
                    </div>
                </div>
            </div>

            <!-- Image Composition (5 columns on large) -->
            <div class="lg:col-span-5 relative group animate-fade-in-up delay-400">
                <div
                    class="relative z-10 card-premium shadow-premium shadow-premium-hover transition-all duration-700">
                    <img class="w-full h-[500px] object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80"
                        alt="Estrategia Digital" />
                </div>

                <!-- Accent Box -->
                <div
                    class="absolute -bottom-6 -left-6 md:-bottom-10 md:-left-10 w-32 h-32 md:w-48 md:h-48 bg-amber-500/10 rounded-3xl -z-10 animate-pulse">
                </div>
                <div
                    class="absolute -top-6 -right-6 md:-top-10 md:-right-10 w-24 h-24 md:w-32 md:h-32 border border-gray-100 rounded-full -z-10">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="border-b border-gray-200 py-16 md:py-32 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900">Nuestros Servicios</h2>
            <p class="text-center text-gray-500 mt-4 max-w-2xl mx-auto text-lg md:text-2xl italic leading-relaxed">
                Ofrecemos soluciones digitales a medida con un enfoque minimalista y profesional.</p>
            <?php
            $services_args = array(
                'post_type' => 'servicios',
                'posts_per_page' => 3,
            );
            $services_query = new WP_Query($services_args);

            if ($services_query->have_posts()): ?>
                <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <?php
                    while ($services_query->have_posts()):
                        $services_query->the_post();
                        ?>
                        <article
                            class="card-premium border border-gray-100 shadow-premium flex flex-col h-full">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="relative overflow-hidden w-full" style="padding-bottom: 62.5%;">
                                    <!-- ratio un poco más alto para premium -->
                                    <a href="<?php the_permalink(); ?>" class="absolute inset-0">
                                        <?php the_post_thumbnail('sixteen-nine', ['class' => 'w-full h-full object-cover transition-all duration-1000 group-hover:scale-110']); ?>
                                        <div
                                            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-500">
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="p-8 md:p-10 flex flex-col flex-grow">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 tracking-tight"><a
                                        href="<?php the_permalink(); ?>"
                                        class="hover:text-amber-500 transition-colors duration-300"><?php the_title(); ?></a>
                                </h3>
                                <p class="text-gray-500 leading-relaxed mb-8 flex-grow text-sm md:text-base">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>"
                                    class="inline-flex items-center text-xs font-black uppercase tracking-[0.2em] text-gray-900 group-hover:text-amber-600 transition-colors duration-300">
                                    Explorar <span
                                        class="ml-3 transform group-hover:translate-x-2 transition-transform duration-500">→</span>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>
                <div class="mt-16 text-center">
                    <a href="<?php echo get_post_type_archive_link('servicios'); ?>"
                        class="inline-block px-8 py-4 border-2 border-gray-900 text-gray-900 font-bold rounded-full hover:bg-gray-900 hover:text-white transition duration-300">Ver
                        todos los servicios</a>
                </div>
                <?php
            else:
                ?>
                <p class="text-center text-gray-600 mt-16">No hay servicios disponibles actualmente.</p>
                <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <section id="portfolio" class="py-16 md:py-32 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900">Portfolio</h2>
            <p class="text-center text-gray-500 mt-4 max-w-2xl mx-auto text-lg md:text-2xl italic leading-relaxed">Una
                selección de nuestros proyectos más destacados, donde la simplicidad se une a la innovación.</p>
            <?php
            $portfolio_args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
            );
            $portfolio_query = new WP_Query($portfolio_args);

            if ($portfolio_query->have_posts()): ?>
                <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <?php
                    while ($portfolio_query->have_posts()):
                        $portfolio_query->the_post();
                        ?>
                        <article
                            class="card-premium border border-gray-100 shadow-premium flex flex-col h-full">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="relative overflow-hidden w-full" style="padding-bottom: 62.5%;">
                                    <!-- ratio un poco más alto para premium -->
                                    <a href="<?php the_permalink(); ?>" class="absolute inset-0">
                                        <?php the_post_thumbnail('sixteen-nine', ['class' => 'w-full h-full object-cover transition-all duration-1000 group-hover:scale-110']); ?>
                                        <div
                                            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-500">
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="p-8 md:p-10 flex flex-col flex-grow">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 tracking-tight"><a
                                        href="<?php the_permalink(); ?>"
                                        class="hover:text-amber-500 transition-colors duration-300"><?php the_title(); ?></a>
                                </h3>
                                <p class="text-gray-500 leading-relaxed mb-8 flex-grow text-sm md:text-base">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>"
                                    class="inline-flex items-center text-xs font-black uppercase tracking-[0.2em] text-gray-900 group-hover:text-amber-600 transition-colors duration-300">
                                    Ver Proyecto <span
                                        class="ml-3 transform group-hover:translate-x-2 transition-transform duration-500">→</span>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>
                <div class="mt-16 text-center">
                    <a href="<?php echo get_post_type_archive_link('portfolio'); ?>"
                        class="inline-block px-8 py-4 border-2 border-gray-900 text-gray-900 font-bold rounded-full hover:bg-gray-900 hover:text-white transition duration-300">Ver
                        portfolio completo</a>
                </div>
                <?php
            else:
                ?>
                <p class="text-center text-gray-600 mt-16">No hay proyectos para mostrar en este momento.</p>
                <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <section id="contact"
        class="relative py-24 md:py-48 overflow-hidden bg-gray-900 text-white bg-fixed bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1504333638930-c8787321eba0?auto=format&fit=crop&w=1920&q=80');">
        <!-- Deep Gradient Overlay for Parallax Background -->
        <div class="absolute inset-0 bg-black/70"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-amber-500/5 rounded-full blur-[120px] -z-10 animate-pulse">
        </div>

        <div class="container mx-auto px-6 text-center max-w-4xl">
            <div class="overflow-hidden mb-6">
                <p
                    class="text-xs md:text-sm uppercase tracking-[0.4em] !text-white font-black animate-fade-in-up text-shadow-soft">
                    Conecta con nosotros</p>
            </div>

            <h2
                class="text-5xl md:text-8xl font-black tracking-tighter leading-[0.9] mb-10 animate-fade-in-up delay-100 text-shadow-premium">
                Hablemos de tu <br> Proyecto<span class="text-amber-500">.</span>
            </h2>

            <p
                class="text-lg md:text-2xl !text-white leading-relaxed mb-16 animate-fade-in-up delay-200 text-shadow-soft">
                &iquest;Listo para elevar tu presencia digital? <br> Hablemos de tu pr&oacute;ximo desaf&iacute;o y <br>
                creemos
                algo impecable juntos.
            </p>

            <div class="flex flex-col items-center gap-8 animate-fade-in-up delay-300">
                <a href="javascript:void(0)"
                    class="open-contact-modal btn-contact-premium group relative inline-flex items-center justify-center rounded-full bg-white text-black px-14 py-7 font-black uppercase text-xs tracking-[0.3em] active:scale-95 animate-shine animate-breathe">
                    <span class="relative z-10 flex items-center gap-4">
                        Enviar un Mensaje
                        <svg class="w-5 h-5 transition-transform duration-700 group-hover:translate-x-3" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>

                <div
                    class="flex flex-wrap justify-center gap-10 text-xs font-bold uppercase tracking-[0.2em] text-white/70">
                    <a href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>"
                        class="hover:text-white transition-colors duration-300"><?php echo esc_html(get_option('admin_email')); ?></a>
                    <span class="hidden md:inline text-white/20">•</span>
                    <span class="hover:text-white transition-colors duration-300 cursor-pointer">Instagram</span>
                    <span class="hidden md:inline text-white/20">•</span>
                    <span class="hover:text-white transition-colors duration-300 cursor-pointer">LinkedIn</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>