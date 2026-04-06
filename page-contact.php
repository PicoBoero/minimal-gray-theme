<?php
/* Template Name: Contacto */
get_header();
?>

<main
    class="min-h-screen bg-gray-100 pt-28 md:pt-36 pb-12 md:pb-16 relative overflow-hidden flex flex-col justify-center">

    <!-- Elementos Decorativos de Marca (Fondo) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden select-none">
        <!-- Marca de Agua Tipográfica -->
        <div
            class="absolute -left-10 top-1/2 -translate-y-1/2 rotate-90 text-[15rem] font-black text-gray-900/[0.03] leading-none whitespace-nowrap">
            <?php bloginfo('name'); ?> — <?php bloginfo('name'); ?>
        </div>

        <!-- Isotipos Geométricos Flotantes (Glassmorphism) -->
        <div class="absolute top-[15%] right-[10%] w-64 h-64 bg-amber-500/10 rounded-full blur-[100px] animate-pulse">
        </div>
        <div class="absolute bottom-[20%] left-[15%] w-80 h-80 bg-gray-300/30 rounded-full blur-[120px]"></div>

        <!-- Isotipo Vidriado -->
        <div
            class="absolute top-[25%] right-[20%] w-32 h-32 bg-white/20 backdrop-blur-3xl rounded-3xl rotate-12 border border-white/30 shadow-2xl animate-float">
        </div>
        <div
            class="absolute bottom-[30%] left-[25%] w-20 h-20 bg-amber-500/20 backdrop-blur-2xl rounded-full -rotate-12 border border-white/20 shadow-xl animate-float-delayed">
        </div>
    </div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">

        <!-- Header de Sección de Impacto -->
        <div class="mb-2 animate-fade-in-up text-center lg:text-left">
            <div
                class="inline-flex items-center gap-3 px-4 py-1 rounded-full bg-white/50 backdrop-blur-md border border-white/80 shadow-sm mb-2">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>
                <p class="text-[10px] uppercase tracking-[0.4em] text-gray-600 font-black">Ready to scale?</p>
            </div>
            <h1
                class="text-6xl md:text-8xl lg:text-9xl font-black tracking-[-0.05em] leading-[0.85] text-gray-900 mb-4">
                Comencemos tu <br> <span class="">Historia</span><span class="text-amber-500">.</span>
            </h1>
        </div>

        <div class="grid lg:grid-cols-12 gap-4 items-center">

            <!-- Columna Izquierda: Mensaje y Detalles (Compacta) -->
            <div class="lg:col-span-5 space-y-4 animate-fade-in-up delay-200">
                <div class="max-w-md">
                    <p
                        class="text-lg md:text-xl font-bold text-gray-600 leading-tight border-l-4 border-amber-500 pl-6 py-2">
                        Transformamos ideas complejas en experiencias digitales de <span class="text-gray-900">lujo
                            minimalista</span>.
                    </p>
                </div>

                <!-- Info Blocks Compactos -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6 pt-6">
                    <!-- Email Card -->
                    <div
                        class="card-premium p-5 border border-white/80 shadow-lg shadow-gray-200/20">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-gray-900 text-white flex items-center justify-center shrink-0 shadow-lg shadow-gray-900/20 group-hover:bg-amber-500 group-hover:text-black transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-[9px] uppercase tracking-widest font-black text-gray-400 mb-0.5">Let's
                                    talk</p>
                                <a href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>"
                                    class="text-sm font-black text-gray-900 truncate block">
                                    <?php echo esc_html(get_option('admin_email')); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Card -->
                    <div
                        class="card-premium p-5 border border-white/80 shadow-lg shadow-gray-200/20">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-gray-900 text-white flex items-center justify-center shrink-0 shadow-lg shadow-gray-900/20 group-hover:bg-amber-500 group-hover:text-black transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-[9px] uppercase tracking-widest font-black text-gray-400 mb-0.5">Schedule
                                </p>
                                <p class="text-sm font-black text-gray-900">Lun - Vie / 09h - 18h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer de Social Icons -->
                <div class="flex gap-3 pt-4">
                    <?php
                    $socials = ['In' => '#', 'Ig' => '#', 'Be' => '#'];
                    foreach ($socials as $label => $url): ?>
                        <a href="<?php echo $url; ?>"
                            class="w-10 h-10 rounded-xl bg-white border border-gray-200 flex items-center justify-center text-[10px] font-black text-gray-500 hover:bg-black hover:text-white hover:border-black transition-all duration-500 shadow-sm">
                            <?php echo $label; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Columna Derecha: Formulario Boutique (Super Compacto) -->
            <div class="lg:col-span-7 relative animate-fade-in-up delay-400">
                <div
                    class="card-premium bg-white/60 backdrop-blur-3xl p-4 shadow-3xl shadow-gray-400/20 border border-white/60">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-2xl font-black text-gray-900 tracking-tight">Escríbenos</h3>
                            <div class="h-1 w-10 bg-amber-500 rounded-full mt-2"></div>
                        </div>
                        <div class="hidden sm:block text-right">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400">Response time</p>
                            <p class="text-[10px] font-black text-amber-600">~24 Hours</p>
                        </div>
                    </div>

                    <div id="contact-form-premium" class="form-compact-boutique">
                        <?php echo do_shortcode('[contact-form-7 id="87" title="Formulario Contacto Principal"]'); ?>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-200/50 flex items-center justify-center gap-3">
                        <svg class="w-3.5 h-3.5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z">
                            </path>
                        </svg>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-gray-500 font-bold">Secure connection
                            encrypted</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>



<?php get_footer(); ?>