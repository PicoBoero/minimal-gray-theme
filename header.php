<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100 text-gray-900 antialiased flex flex-col min-h-screen'); ?>>
    <header class="text-white fixed inset-x-0 top-0 z-50 border-b border-white/10 shadow-xl" style="background: linear-gradient(to bottom, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.8) 100%); backdrop-blur-lg;">
        <div class="container mx-auto flex items-center justify-between px-6 py-5">
            <a href="<?php echo home_url(); ?>" class="text-2xl font-black tracking-tighter text-white hover:text-amber-500 transition-all duration-300">
                <span class="text-amber-500">Nevia</span>
            </a>
            
            <!-- Desktop Nav -->
            <div class="hidden xl:flex items-center gap-8">
                <nav class="text-sm font-semibold tracking-wide">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'items_wrap' => '<ul class="flex gap-10 items-center">%3$s</ul>',
                            'depth' => 2,
                        ));
                    } else {
                        echo '<ul class="flex gap-10 items-center opacity-40"><li><a href="#">Set Menu in Admin</a></li></ul>';
                    }
                    ?>
                </nav>
                <button id="open-contact-modal" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-black text-xs font-black uppercase tracking-widest rounded-xl transition-all duration-300 active:scale-95">
                    Enviar Mensaje
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="xl:hidden text-white focus:outline-none p-2.5 bg-white/5 hover:bg-white/10 rounded-xl transition-all active:scale-95">
                <svg class="h-7 w-7" id="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path class="menu-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 8h16M4 16h16"></path>
                    <path class="menu-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu (Glassmorphism) -->
        <div id="mobile-menu" class="hidden xl:hidden fixed inset-x-0 top-[72px] bottom-0 bg-black/90 backdrop-blur-xl z-40 overflow-y-auto animate-fade-in">
            <nav class="container mx-auto px-6 py-12">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'items_wrap' => '<ul class="flex flex-col gap-8 text-center text-3xl font-extrabold tracking-tighter">%3$s</ul>',
                    'depth' => 1,
                    'fallback_cb' => 'wp_page_menu'
                ));
                ?>
                <div class="mt-12 flex justify-center">
                    <a href="javascript:void(0)" class="open-contact-modal btn-contact-premium group relative inline-flex items-center justify-center rounded-full bg-white text-black px-14 py-7 font-black uppercase text-xs tracking-[0.3em] active:scale-95 animate-shine animate-breathe">
                        Enviar Mensaje
                    </a>
                </div>
                <div class="mt-16 text-center border-t border-white/10 pt-10">
                    <p class="text-gray-500 text-sm font-medium mb-4">Let's connect</p>
                    <div class="flex justify-center gap-6">
                        <!-- Social placeholders -->
                         <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10"></div>
                         <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10"></div>
                         <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10"></div>
                    </div>
                </div>
            </nav>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const button = document.getElementById('mobile-menu-button');
                const menu = document.getElementById('mobile-menu');
                const iconOpen = document.querySelector('.menu-open');
                const iconClose = document.querySelector('.menu-close');
                
                // Mobile Menu Toggle
                button.addEventListener('click', function() {
                    const isHidden = menu.classList.toggle('hidden');
                    document.body.style.overflow = isHidden ? '' : 'hidden'; 
                    iconOpen.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                });
                
                const links = menu.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                        document.body.style.overflow = '';
                        iconOpen.classList.remove('hidden');
                        iconClose.classList.add('hidden');
                    });
                });

                // Contact Modal Toggle
                const modal = document.getElementById('contact-modal');
                const openModalBtns = [
                    document.getElementById('open-contact-modal'),
                    ...document.querySelectorAll('.open-contact-modal-mobile'),
                    ...document.querySelectorAll('.open-contact-modal')
                ];
                const closeModalBtn = document.getElementById('close-contact-modal');

                const openModal = () => {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                };

                const closeModal = () => {
                    modal.classList.add('hidden');
                    // Only restore body overflow if mobile menu is also hidden
                    if (menu.classList.contains('hidden')) {
                        document.body.style.overflow = '';
                    }
                };

                openModalBtns.forEach(btn => {
                    if (btn) btn.addEventListener('click', openModal);
                });

                if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);

                // Close on click outside (overlay)
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeModal();
                });
            });
        </script>

        <!-- Contact Modal Overlay -->
        <div id="contact-modal" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-gray-900/40 backdrop-blur-sm px-4 py-6">
            <div class="relative w-full max-w-xl bg-gray-100 rounded-[2.5rem] p-10 shadow-3xl overflow-y-auto scrollbar-hidden max-h-[85vh] animate-fade-in border border-white/40">
                <button id="close-contact-modal" class="absolute top-6 right-6 w-10 h-10 flex items-center justify-center bg-white border border-gray-200 rounded-full text-gray-500 hover:bg-black hover:text-white transition-all duration-300 z-10 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="mb-4">
                    <h3 class="text-2xl font-black text-gray-900 tracking-tighter uppercase leading-none">Enviar un mensaje</h3>
                    <div class="h-1.5 w-12 bg-amber-500 rounded-full mt-3"></div>
                </div>

                <div id="contact-form-premium" class="form-compact-boutique">
                    <?php echo do_shortcode('[contact-form-7 id="87" title="Formulario Contacto Principal"]'); ?>
                </div>

                <div class="mt-10 pt-8 border-t border-gray-200 text-center">
                    <p class="text-[11px] uppercase font-black tracking-[0.2em] text-gray-400">Normalmente respondemos en menos de 24 horas</p>
                </div>
            </div>
        </div>
    </header>



