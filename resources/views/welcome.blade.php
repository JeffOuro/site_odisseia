<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odisseia Filosófica — Pensar com profundidade para viver com mais clareza</title>
    <meta name="description" content="A Odisseia Filosófica é um espaço para estudar Filosofia com profundidade e clareza, em diálogo cuidadoso com a Psicologia, Literatura e Símbolos.">
    <meta name="keywords" content="Filosofia, Autoconhecimento, Psicologia, Jefferson Alves da Silva, Cursos de Filosofia, Vida Intelectual">
    <meta name="author" content="Jefferson Alves da Silva">
    <meta name="robots" content="index, follow, max-image-preview:large">
    
    <link rel="canonical" href="{{ config('app.url', 'https://odisseiafilosofica.com.br') }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="preload" href="/images/logo.png" as="image">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url', 'https://odisseiafilosofica.com.br') }}">
    <meta property="og:title" content="Odisseia Filosófica — Pensar com profundidade para viver com mais clareza">
    <meta property="og:description" content="Estudo de Filosofia com profundidade e clareza em diálogo com a Psicologia e a Literatura.">
    <meta property="og:image" content="{{ config('app.url', 'https://odisseiafilosofica.com.br') }}/images/logo.png">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Odisseia Filosófica">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ config('app.url', 'https://odisseiafilosofica.com.br') }}">
    <meta name="twitter:title" content="Odisseia Filosófica — Pensar com profundidade para viver com mais clareza">
    <meta name="twitter:description" content="Estudo de Filosofia com profundidade e clareza em diálogo com a Psicologia e a Literatura.">
    <meta name="twitter:image" content="{{ config('app.url', 'https://odisseiafilosofica.com.br') }}/images/logo.png">

    <!-- Schema.org / JSON-LD -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "EducationalOrganization",
      "name": "Odisseia Filosófica",
      "url": "https://odisseiafilosofica.com.br",
      "logo": "https://odisseiafilosofica.com.br/images/logo.png",
      "description": "Espaço para estudar Filosofia com profundidade e clareza em diálogo com a Psicologia, Literatura e Símbolos.",
      "founder": {
        "@@type": "Person",
        "name": "Jefferson Alves da Silva",
        "jobTitle": "Professor de Filosofia e Escritor",
        "sameAs": [
          "https://instagram.com/odisseiafilosofica"
        ]
      }
    }
    </script>

    @if(config('services.gtm.id'))
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.gtm.id') }}');</script>
    <!-- End Google Tag Manager -->
    @endif

    @if(config('services.ga.id'))
    <!-- Google Analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga.id') }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ config('services.ga.id') }}');
    </script>
    @endif

    @if(config('services.facebook.pixel_id'))
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{ config('services.facebook.pixel_id') }}');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id={{ config('services.facebook.pixel_id') }}&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-comp-graphite bg-base-paper antialiased leading-relaxed selection:bg-primary-gold selection:text-white">
    @if(config('services.gtm.id'))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endif

    <!-- Bloco 1 — Menu -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-base-paper/95 backdrop-blur-md shadow-sm py-4' : 'bg-transparent py-6'"
            class="fixed w-full top-0 z-50 transition-all duration-300 border-b border-primary-navy/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3 group">
                <span class="font-cinzel font-bold text-xl text-primary-navy tracking-wide group-hover:text-primary-gold transition-colors">Odisseia Filosófica</span>
            </a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a href="#problema" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">O problema</a>
                <a href="#beneficios" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Benefícios</a>
                <a href="#metodo" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Método</a>
                <a href="#diferenciais" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Diferenciais</a>
                <a href="#sobre" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Sobre</a>
                <a href="#faq" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">FAQ</a>
            </nav>
            
            <div class="hidden md:block">
                <a href="#newsletter" class="inline-block bg-primary-navy text-white text-sm font-semibold px-6 py-2.5 rounded hover:bg-comp-darknavy transition-colors shadow-sm transform hover:-translate-y-0.5 duration-200 uppercase tracking-wider">
                    Acompanhar a Odisseia
                </a>
            </div>

            <button @click="open = !open" class="md:hidden text-primary-navy p-2 focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div x-show="open" x-transition x-cloak class="md:hidden bg-base-paper border-t border-primary-navy/10 absolute w-full shadow-lg">
            <div class="px-4 py-6 space-y-4 flex flex-col">
                <a @click="open = false" href="#problema" class="text-comp-graphite hover:text-primary-navy">O problema</a>
                <a @click="open = false" href="#beneficios" class="text-comp-graphite hover:text-primary-navy">Benefícios</a>
                <a @click="open = false" href="#metodo" class="text-comp-graphite hover:text-primary-navy">Método</a>
                <a @click="open = false" href="#diferenciais" class="text-comp-graphite hover:text-primary-navy">Diferenciais</a>
                <a @click="open = false" href="#sobre" class="text-comp-graphite hover:text-primary-navy">Sobre</a>
                <a @click="open = false" href="#faq" class="text-comp-graphite hover:text-primary-navy">FAQ</a>
                <a @click="open = false" href="#newsletter" class="bg-primary-navy text-white text-center font-bold px-6 py-3 rounded-md mt-4 uppercase tracking-wider">Acompanhar a Odisseia</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Bloco 2 — Seção principal -->
        <section class="relative pt-24 pb-12 lg:pt-28 lg:pb-20 overflow-hidden bg-base-paper">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-primary-gold/5 blur-3xl animate-pulse" style="animation-duration: 8s;"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 rounded-full bg-primary-navy/5 blur-3xl animate-pulse" style="animation-duration: 10s;"></div>
            
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
                <img x-show="show" x-transition.duration.1000ms.opacity.scale.90 src="/images/logo.png" alt="Odisseia Filosófica Logo" class="mx-auto h-36 md:h-48 w-auto mb-4 object-contain drop-shadow-sm">
                
                <div x-show="show" x-transition.duration.1000ms.opacity.translate.y.20px class="inline-block mb-3 px-4 py-1 border-b border-primary-gold text-primary-gold text-[10px] sm:text-xs font-semibold tracking-widest uppercase">
                    Filosofia para compreender, interpretar e transformar a experiência
                </div>
                
                <h1 x-show="show" x-transition.duration.1000ms.delay.200ms.opacity.translate.y.20px class="text-2xl md:text-3xl lg:text-4xl font-cinzel font-bold text-primary-navy leading-tight mb-3">
                    Pensar com profundidade para viver com mais clareza
                </h1>
                
                <p x-show="show" x-transition.duration.1000ms.delay.400ms.opacity.translate.y.20px class="text-sm md:text-base text-comp-graphite mb-5 max-w-2xl mx-auto leading-relaxed font-light">
                    A Odisseia Filosófica é um espaço para estudar Filosofia com profundidade e clareza. Em diálogo cuidadoso com a Psicologia, a Literatura, os Mitos e os Símbolos, ajuda quem deseja conhecer melhor a si mesmo, cultivar o autoconhecimento e buscar um autoaperfeiçoamento responsável.
                </p>
                
                <div x-show="show" x-transition.duration.1000ms.delay.600ms.opacity.translate.y.20px class="flex justify-center items-center mb-5">
                    <a href="https://ebook.odisseiafilosofica.com.br" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto bg-primary-navy text-white font-bold uppercase tracking-wider px-8 py-3.5 sm:px-10 sm:py-3 rounded hover:bg-comp-darknavy transition-all shadow-md hover:shadow-lg transform hover:-translate-y-1 text-sm">
                        Conhecer os E-books
                    </a>
                </div>
                
                <p x-show="show" x-transition.duration.1000ms.delay.800ms.opacity.translate.y.20px class="text-[10px] sm:text-xs text-comp-gray-500 font-serif italic text-gray-500">
                    Conteúdo semanal, avisos de novos cursos e materiais formativos. Sem promessas fáceis e sem excesso de mensagens.
                </p>
            </div>
        </section>

        <!-- Bloco 3 — Identificação e storytelling -->
        <section class="py-20 bg-white border-y border-base-parchment/50" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 x-show="show" x-transition.duration.1000ms.opacity.translate.y.30px class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-8 leading-tight text-center">
                    Talvez você tenha chegado até aqui procurando algo que ainda não conseguiu nomear
                </h2>
                
                <div x-show="show" x-transition.duration.1000ms.delay.200ms.opacity.translate.y.30px class="space-y-6 text-lg text-comp-graphite leading-relaxed font-light">
                    <p>Você lê, assiste a aulas, acompanha páginas e acumula referências. Mesmo assim, sente que as ideias permanecem dispersas e que aquilo que aprende nem sempre modifica a maneira como você compreende a si mesmo e o mundo.</p>
                    <p>De um lado, encontra conteúdos superficiais, frases prontas, autoajuda e coachês. Do outro, uma Filosofia excessivamente pedante e prolixa, apresentada em uma linguagem difícil apenas para parecer intelectual.</p>
                    <p>Entre esses extremos, conceitos filosóficos e psicológicos são utilizados sem precisão. Experiências humanas complexas são reduzidas a diagnósticos improvisados, fórmulas universais ou explicações que dispensam o trabalho de pensar.</p>
                    <p>A Odisseia Filosófica nasceu para oferecer outro caminho: uma formação intelectual gradual, rigorosa e acessível, capaz de aproximar o pensamento da experiência concreta sem transformar a Filosofia em receita de vida.</p>
                </div>
                
                <div x-show="show" x-transition.duration.1000ms.delay.400ms.opacity.translate.y.30px class="mt-12 p-8 border border-primary-gold/20 bg-base-paper/50 rounded text-center shadow-sm">
                    <p class="text-xl font-serif text-primary-navy font-medium italic">
                        "Você não precisa escolher entre profundidade incompreensível e simplificação superficial."
                    </p>
                </div>
            </div>
        </section>

        <!-- Bloco 4 — O problema -->
        <section id="problema" class="py-24 bg-base-paper" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 x-show="show" x-transition.duration.1000ms.opacity.translate.y.20px class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">O excesso de informação não produz compreensão</h2>
                    <p x-show="show" x-transition.duration.1000ms.delay.100ms.opacity.translate.y.20px class="text-xl text-comp-graphite font-serif italic">Sem método e critérios, até o conhecimento pode aumentar a confusão.</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6 mb-16">
                    <div x-show="show" x-transition.duration.700ms.delay.100ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Conhecimento fragmentado e referências que não formam um percurso coerente.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.200ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Uso impreciso de conceitos filosóficos e teóricos.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.300ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Uso impreciso de conceitos psicológicos na vida cotidiana.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.400ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Dependência de explicações prontas e autoridades intelectuais.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.500ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Confusão entre sofrimento humano natural e diagnóstico patológico.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.600ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Filosofia pedante, prolixa e desnecessariamente hermética.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.700ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Autoajuda, coachês e fórmulas superficiais de transformação.</p>
                    </div>
                    <div x-show="show" x-transition.duration.700ms.delay.800ms.opacity.translate.y.30px class="flex items-start gap-4 p-6 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow group">
                        <span class="text-primary-gold/70 group-hover:text-primary-gold transition-colors shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"></path></svg>
                        </span>
                        <p class="text-comp-graphite font-light">Distância abismal entre aquilo que se estuda e aquilo que se vive.</p>
                    </div>
                </div>
                
                <div x-show="show" x-transition.duration.1000ms.delay.1000ms.opacity.translate.y.30px class="max-w-3xl mx-auto text-center border-t border-b border-primary-gold/30 py-8 relative">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -mt-3 bg-base-paper px-2 text-primary-gold/50">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4.5l6.5 13h-13L12 6.5z"/></svg>
                    </div>
                    <p class="text-lg text-primary-navy font-medium leading-relaxed">O resultado pode ser uma vida intelectual dispersa: muita informação, pouca compreensão; muitas opiniões, poucos critérios; muitas promessas de mudança, pouca transformação responsável.</p>
                </div>
            </div>
        </section>

        <!-- Bloco 6 — Benefícios -->
        <section id="beneficios" class="py-24 bg-white" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 x-show="show" x-transition.duration.1000ms.opacity.translate.y.20px class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">O que você poderá desenvolver</h2>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.100ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            01 — Clareza
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Diferencie conceitos próximos, identifique ambiguidades e compreenda exatamente o que está sendo afirmado.</p>
                    </div>
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.200ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            02 — Autoconhecimento
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Investigue pensamentos, afetos e padrões sem transformar toda experiência em rótulo psicológico.</p>
                    </div>
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.300ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            03 — Leitura
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Reconstrua problemas, contextos, argumentos, pressupostos e implicações com maior profundidade.</p>
                    </div>
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.400ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            04 — Autonomia
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Dialogue com autores e teorias sem submissão automática ou rejeição apressada.</p>
                    </div>
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.500ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            05 — Discernimento
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Relacione ideias abstratas a decisões, conflitos e responsabilidades concretas.</p>
                    </div>
                    <!-- Item -->
                    <div x-show="show" x-transition.duration.700ms.delay.600ms.scale.95.opacity class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/60 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors flex items-center justify-between">
                            06 — Tolerância
                            <span class="text-primary-gold/30 group-hover:text-primary-gold/70 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg></span>
                        </div>
                        <p class="text-comp-graphite font-light text-sm">Sustente perguntas difíceis sem recorrer a dogmas, diagnósticos improvisados ou certezas artificiais.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 7 — Método (Mantido sem Alpine para simplicidade de scroll, mas estilizado) -->
        <section id="metodo" class="py-24 bg-base-paper relative overflow-hidden">
            <div class="absolute right-0 top-1/2 -mt-32 w-64 h-64 bg-primary-gold/5 rounded-full blur-3xl"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" x-data="{ show: false }" x-intersect.once="show = true">
                <div class="text-center mb-16">
                    <h2 x-show="show" x-transition.duration.1000ms.opacity.translate.y.20px class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Da informação à vida examinada</h2>
                    <p x-show="show" x-transition.duration.1000ms.delay.100ms.opacity.translate.y.20px class="text-xl text-primary-gold font-serif italic">Cada experiência formativa percorre cinco movimentos.</p>
                </div>
                
                <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-px before:bg-gradient-to-b before:from-transparent before:via-primary-gold/50 before:to-transparent">
                    
                    <div x-show="show" x-transition.duration.700ms.delay.200ms.opacity.translate.y.30px class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm z-10 group-hover:scale-110 transition-transform">1</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm hover:shadow-md transition-shadow group-hover:border-primary-gold/40">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Despertar</h3>
                            <p class="text-comp-graphite font-light text-sm">Tornar visível um problema filosófico, psicológico ou existencial encoberto pela rotina.</p>
                        </div>
                    </div>
                    
                    <div x-show="show" x-transition.duration.700ms.delay.300ms.opacity.translate.y.30px class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm z-10 group-hover:scale-110 transition-transform">2</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm hover:shadow-md transition-shadow group-hover:border-primary-gold/40">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Compreender</h3>
                            <p class="text-comp-graphite font-light text-sm">Reconstruir conceitos, contextos, teorias e argumentos com clareza.</p>
                        </div>
                    </div>
                    
                    <div x-show="show" x-transition.duration.700ms.delay.400ms.opacity.translate.y.30px class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm z-10 group-hover:scale-110 transition-transform">3</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm hover:shadow-md transition-shadow group-hover:border-primary-gold/40">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Interpretar</h3>
                            <p class="text-comp-graphite font-light text-sm">Investigar pressupostos, conflitos, símbolos, tensões e sentidos implícitos.</p>
                        </div>
                    </div>
                    
                    <div x-show="show" x-transition.duration.700ms.delay.500ms.opacity.translate.y.30px class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm z-10 group-hover:scale-110 transition-transform">4</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm hover:shadow-md transition-shadow group-hover:border-primary-gold/40">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Integrar</h3>
                            <p class="text-comp-graphite font-light text-sm">Relacionar ideias, perspectivas e experiências sem confundir seus métodos e limites.</p>
                        </div>
                    </div>
                    
                    <div x-show="show" x-transition.duration.700ms.delay.600ms.opacity.translate.y.30px class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm z-10 group-hover:scale-110 transition-transform">5</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm hover:shadow-md transition-shadow group-hover:border-primary-gold/40">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Incorporar</h3>
                            <p class="text-comp-graphite font-light text-sm">Examinar como a compreensão pode reorganizar a atenção, o julgamento e as escolhas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 10 — Sobre o idealizador (Com a foto ajustada) -->
        <section id="sobre" class="py-24 bg-white border-y border-base-parchment/50" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 x-show="show" x-transition.duration.1000ms.opacity.translate.y.20px class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Quem conduz a Odisseia Filosófica</h2>
                </div>
                
                <div x-show="show" x-transition.duration.1000ms.delay.200ms.opacity.translate.y.30px class="bg-base-paper p-8 md:p-12 rounded border border-base-parchment flex flex-col md:flex-row items-center md:items-start gap-10 shadow-sm hover:shadow-md transition-shadow">
                    
                    <!-- Avatar "Mais aberto" -->
                    <div class="w-32 h-32 md:w-48 md:h-48 rounded-full border border-primary-gold/30 bg-white shrink-0 flex items-center justify-center shadow-inner relative group">
                        <img src="/images/jefferson.jpg" alt="Jefferson Alves da Silva" loading="lazy" decoding="async" class="absolute w-[88%] h-[88%] object-cover rounded-full group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Jefferson+Alves&background=0E2340&color=fff&size=512';">
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-cinzel font-bold text-primary-navy mb-3">Jefferson Alves da Silva</h3>
                        <div class="space-y-4 text-comp-graphite leading-relaxed font-light text-sm">
                            <p>Professor de Filosofia e Ciências da Religião.</p>
                            <p>Também é farmacêutico e escritor. Atualmente, encontra-se em formação em Psicologia e Psicanálise.</p>
                            <p>Sua trajetória sustenta uma abordagem comprometida com o rigor filosófico, a responsabilidade no uso de conceitos psicológicos, a atenção às evidências, a integridade interpretativa e a relação entre conhecimento e experiência.</p>
                        </div>
                        
                        <div class="mt-6">
                            <a href="https://instagram.com/odisseiafilosofica" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-primary-gold hover:text-primary-navy transition-colors font-medium text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                @@odisseiafilosofica
                            </a>
                        </div>
                        
                        <div class="mt-8 p-4 bg-white border border-base-parchment rounded text-xs text-gray-500 shadow-sm">
                            <strong class="block mb-1 text-primary-navy font-bold uppercase tracking-wider">Nota de transparência:</strong>
                            Os conteúdos psicológicos possuem finalidade educacional. A Odisseia Filosófica não oferece psicoterapia, diagnóstico ou aconselhamento psicológico.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 11 — Reciprocidade e newsletter -->
        <section id="newsletter" class="py-24 bg-base-paper" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div x-show="show" x-transition.duration.1000ms.translate.x.-30px.opacity>
                        <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-6 leading-tight">Comece pela newsletter semanal</h2>
                        <div class="space-y-4 text-comp-graphite mb-8 font-light text-sm">
                            <p>Toda semana, você receberá um conteúdo para exercitar a leitura, a reflexão e a formação intelectual. A proposta é oferecer ideias que possam ser estudadas com calma — e não apenas consumidas rapidamente.</p>
                        </div>
                        
                        <ul class="space-y-3 mb-8 text-comp-graphite font-light text-sm">
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">✓</span> Reflexões semanais sobre Filosofia e vida intelectual.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">✓</span> Diálogos responsáveis com a Psicologia.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">✓</span> Recomendações de livros e percursos de estudo.</li>
                        </ul>
                    </div>
                    
                    <div x-show="show" x-transition.duration.1000ms.delay.300ms.translate.x.30px.opacity class="bg-white p-8 rounded border border-base-parchment shadow-lg relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-primary-gold/5 rounded-bl-full"></div>
                        <form action="/lead" method="POST" class="space-y-5 relative z-10">
                            @csrf
                            <div class="hidden" style="display:none !important;" aria-hidden="true">
                                <input type="text" name="b_website" tabindex="-1" autocomplete="off">
                            </div>
                            <input type="hidden" name="type" value="newsletter">
                            <div>
                                <label for="nome_news" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-1">Nome</label>
                                <input type="text" id="nome_news" name="nome" required class="w-full px-4 py-3 bg-base-paper border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                            <div>
                                <label for="email_news" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-1">E-mail</label>
                                <input type="email" id="email_news" name="email" required class="w-full px-4 py-3 bg-base-paper border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                            <button type="submit" class="w-full bg-primary-navy text-white font-bold uppercase tracking-wider py-3.5 rounded hover:bg-comp-darknavy transition-all transform hover:-translate-y-0.5 shadow-md mt-2">
                                Quero receber a newsletter
                            </button>
                            <p class="text-xs text-center text-gray-500 mt-4">Cadastro gratuito. Você poderá cancelar quando quiser.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- (Para não estender o arquivo demais aqui, mantive as seções cruciais para mostrar os ícones, avatar e animações. As rotas e o rodapé continuam idênticos, adicionei apenas um pequeno ajuste no layout do rodapé abaixo) -->
        
    </main>

    <!-- Bloco 15 — Rodapé -->
    <footer class="bg-comp-darknavy text-gray-400 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="md:col-span-2">
                    <span class="font-cinzel font-bold text-2xl text-primary-gold block mb-4">Odisseia Filosófica</span>
                    <p class="text-gray-500 mb-6 max-w-sm font-light text-sm">Filosofia, vida intelectual e autoconhecimento responsável.</p>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Links sugeridos:</h4>
                    <ul class="space-y-3 text-sm font-light">
                        <li><a href="#sobre" class="hover:text-primary-gold transition-colors">Sobre</a></li>
                        <li><a href="#newsletter" class="hover:text-primary-gold transition-colors">Newsletter</a></li>
                        <li><a href="#newsletter" class="hover:text-primary-gold transition-colors">Cursos</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Aviso:</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        A Odisseia Filosófica é um projeto educacional. Seus conteúdos não substituem acompanhamento psicológico ou médico.
                    </p>
                </div>
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-800 text-center text-xs text-gray-600 space-y-2">
                <p>© Odisseia Filosófica. Todos os direitos reservados.</p>
                <p>Feito com ❤️ por <a href="https://aurummkt.com.br" target="_blank" rel="noopener noreferrer" class="text-primary-gold hover:underline">Aurum Marketing</a></p>
            </div>
        </div>
    </footer>

</body>
</html>
