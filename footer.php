<footer class="bg-black text-white pt-24 pb-12 mt-auto relative overflow-hidden">
    <!-- Subtle Gradient Accent -->
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[1px] bg-gradient-to-r from-transparent via-gray-800 to-transparent">
    </div>

    <div class="container mx-auto px-6 max-w-7xl">
        <!-- Top row: Brand + Nav columns -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-16 pb-16">

            <!-- Brand col (4 columns) -->
            <div class="md:col-span-4 space-y-8">
                <a href="<?php echo home_url(); ?>"
                    class="text-3xl font-black tracking-tighter text-white hover:text-amber-500 transition-all duration-700 block">
                    <span class="text-amber-500">Nevia</span>
                </a>
                <p class="text-gray-500 text-sm leading-relaxed max-w-sm">
                    <?php echo esc_html(get_theme_mod('footer_description', get_bloginfo('description') . ' — Elevamos marcas a través de un diseño minimalista, funcional y de alto impacto técnico.')); ?>
                </p>
                <!-- Social icons Boutique -->
                <div class="flex gap-4">
                    <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>" aria-label="LinkedIn"
                        class="w-11 h-11 flex items-center justify-center rounded-xl bg-gray-900/50 border border-gray-800 text-gray-500 hover:bg-amber-500 hover:text-black hover:border-amber-500 transition-all duration-500 group">
                        <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_instagram', '#')); ?>" aria-label="Instagram"
                        class="w-11 h-11 flex items-center justify-center rounded-xl bg-gray-900/50 border border-gray-800 text-gray-500 hover:bg-amber-500 hover:text-black hover:border-amber-500 transition-all duration-500 group">
                        <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_x', '#')); ?>" aria-label="X"
                        class="w-11 h-11 flex items-center justify-center rounded-xl bg-gray-900/50 border border-gray-800 text-gray-500 hover:bg-amber-500 hover:text-black hover:border-amber-500 transition-all duration-500 group">
                        <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.261 5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation col (2 columns) -->
            <div class="md:col-span-2 space-y-6">
                <h4 class="text-[10px] uppercase tracking-[0.4em] font-black text-gray-400">Navegación</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'fallback_cb' => false,
                    'items_wrap' => '<ul class="space-y-4">%3$s</ul>',
                    'walker' => new class extends Walker_Nav_Menu {
                    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
                    {
                        $url = $item->url ?? '#';
                        $title = $item->title ?? '';
                        $output .= '<li><a href="' . esc_url($url) . '" class="text-sm font-bold text-gray-500 hover:text-white transition-all duration-300">' . esc_html($title) . '</a></li>';
                    }
                    }
                ));
                ?>
            </div>

            <!-- Contact col (3 columns) -->
            <div class="md:col-span-3 space-y-6">
                <h4 class="text-[10px] uppercase tracking-[0.4em] font-black text-gray-400">Ubícanos</h4>
                <ul class="space-y-5">
                    <li class="flex items-start gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 flex items-center justify-center shrink-0 group-hover:bg-amber-500 group-hover:text-black transition-all duration-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[9px] uppercase tracking-widest text-gray-600 font-bold mb-1">Email</p>
                            <a href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>"
                                class="text-sm font-bold text-gray-300 hover:text-amber-500 transition-colors">
                                <?php echo esc_html(get_option('admin_email')); ?>
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 flex items-center justify-center shrink-0 group-hover:bg-amber-500 group-hover:text-black transition-all duration-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
            <div>
                <p class="text-[9px] uppercase tracking-widest text-gray-600 font-bold mb-1">Ubicación</p>
                <span class="text-sm font-bold text-gray-300"><?php echo esc_html(get_theme_mod('location_text', 'Buenos Aires, Argentina')); ?></span>
            </div>
                    </li>
                </ul>
            </div>

            <!-- Ready Col (3 columns) -->
            <div class="md:col-span-3">
                <div
                    class="card-premium-dark p-8 border border-gray-800 hover:border-amber-500/50">
                    <h4 class="text-lg font-black tracking-tight text-white mb-3"><?php echo esc_html(get_theme_mod('footer_cta_title', '¿Listo para el impacto?')); ?></h4>
                    <p class="text-xs text-gray-500 leading-relaxed mb-6"><?php echo esc_html(get_theme_mod('footer_cta_desc', 'Tu próximo gran proyecto merece un diseño a medida y funcional.')); ?></p>
                    <a href="javascript:void(0)"
                        class="open-contact-modal inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-widest text-amber-500 hover:text-white transition-all duration-500 group-hover:gap-5">
                        Conecta ahora
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom row: copyright + legal -->
        <div class="pt-8 border-t border-gray-900 flex flex-col md:flex-row items-center justify-between gap-8">
            <p class="text-[10px] uppercase tracking-widest text-gray-600 font-bold">
                © <?php echo date('Y'); ?> <span class="text-amber-500">Nevia</span>. <span
                    class="hidden md:inline">— <?php echo esc_html(get_theme_mod('copyright_extra', 'Disfruta del Minimalismo.')); ?></span>
            </p>
            <div class="flex gap-8">
                <a href="#"
                    class="text-[9px] uppercase tracking-[0.2em] font-black text-gray-500 hover:text-white transition-colors">Privacidad</a>
                <a href="#"
                    class="text-[9px] uppercase tracking-[0.2em] font-black text-gray-500 hover:text-white transition-colors">Términos</a>

            </div>
        </div>
    </div>
</footer>

<!-- Botón Boutique Volver Arriba -->
<button id="scroll-to-top"
    class="fixed bottom-8 right-8 w-12 h-12 bg-amber-500 text-black rounded-xl shadow-2xl flex items-center justify-center z-50 translate-y-20 opacity-0 transition-all duration-700 hover:scale-110 active:scale-95"
    aria-label="Volver arriba">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scrollBtn = document.getElementById('scroll-to-top');

        const toggleVisible = () => {
            if (window.pageYOffset > 400) {
                scrollBtn.classList.remove('translate-y-20', 'opacity-0');
            } else {
                scrollBtn.classList.add('translate-y-20', 'opacity-0');
            }
        };

        window.addEventListener('scroll', toggleVisible);
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>