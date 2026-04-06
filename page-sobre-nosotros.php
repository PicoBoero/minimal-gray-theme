<?php
/*
Template Name: Nuestra Filosofía
*/
get_header();
?>

<main class="flex-grow bg-white">
    <!-- Hero / Intro centered -->
    <section class="container mx-auto px-6 pt-32 pb-16 md:pt-48 md:pb-24 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-xs uppercase tracking-[0.5em] text-amber-600 font-black mb-10 animate-fade-in-up">Manifiesto
                Digital</h1>
            <h2
                class="text-4xl md:text-7xl font-black text-gray-900 leading-tight tracking-tighter mb-12 animate-fade-in-up delay-100">
                Diseñamos con pureza, <br> construimos con <span class="text-amber-500">propósito.</span>
            </h2>
            <div class="h-[1px] w-24 bg-gray-200 mx-auto mb-12"></div>
            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-3xl mx-auto font-medium">
                En Minimal Gray, el minimalismo no es solo una elección estética; es una ventaja estratégica. Destilamos
                cada proyecto hasta su esencia para proyectar una autoridad impecable.
            </p>
        </div>
    </section>

    <!-- Pillars: 3-column Grid (Clean & Stable) -->
    <section class="py-24 md:py-32 bg-gray-100">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:gap-12">
                <!-- Pilar 01 -->
                <div class="card-premium p-10 bg-white border border-gray-100 h-full flex flex-col">
                    <span class="text-6xl font-black text-amber-500 mb-6 block leading-none">01</span>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 tracking-tight">Simplicidad</h3>
                    <p class="text-gray-500 leading-relaxed text-sm md:text-base">
                        Eliminamos el ruido visual para que tu mensaje sea el protagonista. Diseño que respira y
                        convierte.
                    </p>
                </div>

                <!-- Pilar 02 -->
                <div class="card-premium p-10 bg-white border border-gray-100 h-full flex flex-col">
                    <span class="text-6xl font-black text-amber-500 mb-6 block leading-none">02</span>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 tracking-tight">Precisión</h3>
                    <p class="text-gray-500 leading-relaxed text-sm md:text-base">
                        Cada decisión de diseño responde a una estrategia. Construimos sistemas visuales exactos y
                        eficientes.
                    </p>
                </div>

                <!-- Pilar 03 -->
                <div class="card-premium p-10 bg-white border border-gray-100 h-full flex flex-col">
                    <span class="text-6xl font-black text-amber-500 mb-6 block leading-none">03</span>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 tracking-tight">Impacto</h3>
                    <p class="text-gray-500 leading-relaxed text-sm md:text-base">
                        Buscamos una elegancia que resista el paso del tiempo. Minimalismo que proyecta valor y
                        profesionalismo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Statement: Centered Quote -->
    <section class="py-24 md:py-48 container mx-auto px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-3xl md:text-6xl font-black text-gray-900 mb-16 tracking-tighter leading-tight italic">
                "El minimalismo es la <span class="text-amber-500 font-medium not-italic">presencia perfecta</span> de
                lo necesario."
            </h3>

            <a href="javascript:void(0)"
                class="open-contact-modal inline-flex items-center gap-6 px-12 py-6 rounded-full bg-gray-900 text-white text-xs font-black uppercase tracking-[0.5em] hover:bg-amber-600 transition-all duration-500 shadow-xl hover:shadow-amber-500/20">
                Empieza el cambio
                <span
                    class="transform translate-x-0 group-hover:translate-x-2 transition-transform duration-500">→</span>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>