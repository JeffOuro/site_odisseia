<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odisseia Filosófica — Pensar com profundidade para viver com mais clareza</title>
    <meta name="description" content="Filosofia para compreender, interpretar e transformar a experiência.">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-comp-graphite bg-base-paper antialiased leading-relaxed selection:bg-primary-gold selection:text-white">

    <!-- Bloco 1 — Menu -->
    <header x-data="{ open: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-base-paper/95 backdrop-blur-md shadow-sm py-4' : 'bg-transparent py-6'"
            class="fixed w-full top-0 z-50 transition-all duration-300 border-b border-primary-navy/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3 group">
                <img src="/images/logo.png" alt="Odisseia Filosófica Logo" class="h-10 w-auto group-hover:scale-105 transition-transform">
                <span class="font-cinzel font-bold text-xl text-primary-navy tracking-wide">Odisseia Filosófica</span>
            </a>
            
            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#problema" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">O problema</a>
                <a href="#beneficios" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Benefícios</a>
                <a href="#metodo" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Método</a>
                <a href="#diferenciais" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Diferenciais</a>
                <a href="#sobre" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Sobre</a>
                <a href="#faq" class="text-sm font-medium text-comp-graphite/80 hover:text-primary-navy transition-colors">Perguntas frequentes</a>
            </nav>
            
            <div class="hidden md:block">
                <a href="#newsletter" class="inline-block bg-primary-navy text-white text-sm font-semibold px-6 py-2.5 rounded hover:bg-comp-darknavy transition-colors shadow-sm transform hover:-translate-y-0.5 duration-200 uppercase tracking-wider">
                    Acompanhar a Odisseia
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden text-primary-navy p-2 focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition x-cloak class="md:hidden bg-base-paper border-t border-primary-navy/10 absolute w-full shadow-lg">
            <div class="px-4 py-6 space-y-4 flex flex-col">
                <a @click="open = false" href="#problema" class="text-comp-graphite hover:text-primary-navy">O problema</a>
                <a @click="open = false" href="#beneficios" class="text-comp-graphite hover:text-primary-navy">Benefícios</a>
                <a @click="open = false" href="#metodo" class="text-comp-graphite hover:text-primary-navy">Método</a>
                <a @click="open = false" href="#diferenciais" class="text-comp-graphite hover:text-primary-navy">Diferenciais</a>
                <a @click="open = false" href="#sobre" class="text-comp-graphite hover:text-primary-navy">Sobre</a>
                <a @click="open = false" href="#faq" class="text-comp-graphite hover:text-primary-navy">Perguntas frequentes</a>
                <a @click="open = false" href="#newsletter" class="bg-primary-navy text-white text-center font-bold px-6 py-3 rounded-md mt-4 uppercase tracking-wider">Acompanhar a Odisseia</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Bloco 2 — Seção principal -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-base-paper">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-primary-gold/5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 rounded-full bg-primary-navy/5 blur-3xl"></div>
            
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
                <div x-show="show" x-transition.duration.700ms.opacity.translate.y.20px class="inline-block mb-6 px-4 py-1.5 border-b border-primary-gold text-primary-gold text-sm font-semibold tracking-widest uppercase">
                    Filosofia para compreender, interpretar e transformar a experiência
                </div>
                
                <h1 x-show="show" x-transition.duration.700ms.delay.100ms.opacity.translate.y.20px class="text-4xl md:text-5xl lg:text-6xl font-cinzel font-bold text-primary-navy leading-tight mb-6">
                    Pensar com profundidade para viver com mais clareza
                </h1>
                
                <p x-show="show" x-transition.duration.700ms.delay.200ms.opacity.translate.y.20px class="text-lg md:text-xl text-comp-graphite mb-10 max-w-3xl mx-auto leading-relaxed font-light">
                    A Odisseia Filosófica é um espaço para estudar Filosofia com profundidade e clareza. Em diálogo cuidadoso com a Psicologia, a Literatura, os Mitos e os Símbolos, ajuda quem deseja conhecer melhor a si mesmo, cultivar o autoconhecimento e buscar um autoaperfeiçoamento responsável.
                </p>
                
                <div x-show="show" x-transition.duration.700ms.delay.300ms.opacity.translate.y.20px class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-8">
                    <a href="#newsletter" class="w-full sm:w-auto bg-primary-navy text-white font-bold uppercase tracking-wider px-8 py-3.5 rounded hover:bg-comp-darknavy transition-all shadow-md hover:shadow-lg">
                        Quero receber a newsletter
                    </a>
                    <a href="#cursos" class="w-full sm:w-auto bg-transparent text-primary-navy border border-primary-navy/30 font-semibold uppercase tracking-wider px-8 py-3.5 rounded hover:bg-primary-navy/5 transition-all">
                        Tenho interesse nos cursos
                    </a>
                </div>
                
                <p x-show="show" x-transition.duration.700ms.delay.400ms.opacity.translate.y.20px class="text-sm text-comp-gray-500 font-serif italic text-gray-500">
                    Conteúdo semanal, avisos de novos cursos e materiais formativos. Sem promessas fáceis e sem excesso de mensagens.
                </p>
            </div>
        </section>

        <!-- Bloco 3 — Identificação e storytelling -->
        <section class="py-20 bg-white border-y border-base-parchment/50">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-8 leading-tight text-center">
                    Talvez você tenha chegado até aqui procurando algo que ainda não conseguiu nomear
                </h2>
                
                <div class="space-y-6 text-lg text-comp-graphite leading-relaxed font-light">
                    <p>Você lê, assiste a aulas, acompanha páginas e acumula referências. Mesmo assim, sente que as ideias permanecem dispersas e que aquilo que aprende nem sempre modifica a maneira como você compreende a si mesmo e o mundo.</p>
                    <p>De um lado, encontra conteúdos superficiais, frases prontas, autoajuda e coachês. Do outro, uma Filosofia excessivamente pedante e prolixa, apresentada em uma linguagem difícil apenas para parecer intelectual.</p>
                    <p>Entre esses extremos, conceitos filosóficos e psicológicos são utilizados sem precisão. Experiências humanas complexas são reduzidas a diagnósticos improvisados, fórmulas universais ou explicações que dispensam o trabalho de pensar.</p>
                    <p>A Odisseia Filosófica nasceu para oferecer outro caminho: uma formação intelectual gradual, rigorosa e acessível, capaz de aproximar o pensamento da experiência concreta sem transformar a Filosofia em receita de vida.</p>
                </div>
                
                <div class="mt-12 p-8 border border-primary-gold/20 bg-base-paper/50 rounded text-center">
                    <p class="text-xl font-serif text-primary-navy font-medium italic">
                        "Você não precisa escolher entre profundidade incompreensível e simplificação superficial."
                    </p>
                </div>
            </div>
        </section>

        <!-- Bloco 4 — O problema -->
        <section id="problema" class="py-20 bg-base-paper">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">O excesso de informação não produz, por si só, compreensão</h2>
                    <p class="text-xl text-comp-graphite font-serif italic">Sem método e critérios, até o conhecimento pode aumentar a confusão.</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6 mb-16">
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Conhecimento fragmentado e referências que não formam um percurso coerente.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Uso impreciso de conceitos filosóficos.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Uso impreciso de conceitos psicológicos.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Dependência de explicações prontas e autoridades intelectuais.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Confusão entre sofrimento humano e diagnóstico psicológico.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Filosofia pedante, prolixa e desnecessariamente difícil.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Autoajuda, coachês e fórmulas superficiais de transformação.</p>
                    </div>
                    <div class="flex items-start gap-4 p-5 bg-white border border-base-parchment rounded shadow-sm hover:shadow-md transition-shadow">
                        <span class="text-primary-gold mt-0.5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg></span>
                        <p class="text-comp-graphite font-light">Distância entre aquilo que se estuda e aquilo que se vive.</p>
                    </div>
                </div>
                
                <div class="max-w-3xl mx-auto text-center border-t border-b border-primary-gold/30 py-6">
                    <p class="text-lg text-primary-navy font-medium">O resultado pode ser uma vida intelectual dispersa: muita informação, pouca compreensão; muitas opiniões, poucos critérios; muitas promessas de mudança, pouca transformação responsável.</p>
                </div>
            </div>
        </section>

        <!-- Bloco 5 — A proposta -->
        <section class="py-20 bg-primary-navy text-base-paper text-center">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-gold mb-8">A Filosofia como formação, não como decoração intelectual</h2>
                
                <div class="space-y-6 text-lg text-gray-200 leading-relaxed font-light text-left">
                    <p>A proposta da Odisseia Filosófica não é oferecer respostas prontas para todos os problemas. É ajudar você a formular perguntas melhores, compreender conceitos, interpretar experiências, avaliar argumentos e desenvolver critérios próprios.</p>
                    <p>A Filosofia ocupa o centro desse percurso. A Psicologia contribui para pensar a subjetividade, os afetos, os conflitos e os padrões humanos com responsabilidade, sem reduzir toda experiência a um diagnóstico.</p>
                    <p>A Literatura, os Mitos e os Símbolos ampliam a compreensão da experiência humana, revelando dimensões que nem sempre podem ser expressas apenas por definições abstratas.</p>
                    <p>Os estudos da religião também podem aparecer de maneira interdisciplinar e não confessional. A proposta não parte de uma religião específica nem de uma posição ateísta militante. Por isso, seus conteúdos podem ser aproveitados por religiosos, ateus e agnósticos interessados em compreender filosoficamente a religiosidade e a espiritualidade.</p>
                </div>
            </div>
        </section>

        <!-- Bloco 6 — Benefícios -->
        <section id="beneficios" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">O que você poderá desenvolver</h2>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">01 — Clareza conceitual</div>
                        <p class="text-comp-graphite font-light text-sm">Diferencie conceitos próximos, identifique ambiguidades e compreenda exatamente o que está sendo afirmado.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">02 — Autoconhecimento responsável</div>
                        <p class="text-comp-graphite font-light text-sm">Investigue pensamentos, afetos e padrões sem transformar toda experiência em rótulo psicológico.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">03 — Leitura mais profunda</div>
                        <p class="text-comp-graphite font-light text-sm">Reconstrua problemas, contextos, argumentos, pressupostos e implicações.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">04 — Autonomia intelectual</div>
                        <p class="text-comp-graphite font-light text-sm">Dialogue com autores e teorias sem submissão automática ou rejeição apressada.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">05 — Discernimento prático</div>
                        <p class="text-comp-graphite font-light text-sm">Relacione ideias abstratas a decisões, conflitos e responsabilidades concretas.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">06 — Tolerância à complexidade</div>
                        <p class="text-comp-graphite font-light text-sm">Sustente perguntas difíceis sem recorrer a dogmas, diagnósticos improvisados ou certezas artificiais.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">07 — Pensamento crítico</div>
                        <p class="text-comp-graphite font-light text-sm">Examine argumentos, reconheça falácias e avalie a qualidade das razões apresentadas.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">08 — Percurso de estudo orientado</div>
                        <p class="text-comp-graphite font-light text-sm">Avance por caminhos organizados, evitando a dispersão provocada pelo consumo aleatório de conteúdos.</p>
                    </div>
                    <!-- Item -->
                    <div class="p-8 bg-base-paper border border-base-parchment rounded hover:border-primary-gold/40 transition-colors group">
                        <div class="text-primary-gold font-cinzel text-xl font-bold mb-3 group-hover:text-primary-navy transition-colors">09 — Autoaperfeiçoamento com critérios</div>
                        <p class="text-comp-graphite font-light text-sm">Transforme a relação consigo mesmo de maneira gradual e responsável, sem fórmulas universais ou promessas milagrosas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 7 — Método -->
        <section id="metodo" class="py-20 bg-base-paper relative">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Da informação à vida examinada</h2>
                    <p class="text-xl text-primary-gold font-serif italic">Cada experiência formativa percorre cinco movimentos.</p>
                </div>
                
                <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-px before:bg-gradient-to-b before:from-transparent before:via-primary-gold/50 before:to-transparent">
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm">1</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Despertar</h3>
                            <p class="text-comp-graphite font-light text-sm">Tornar visível um problema filosófico, psicológico ou existencial encoberto pela rotina.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm">2</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Compreender</h3>
                            <p class="text-comp-graphite font-light text-sm">Reconstruir conceitos, contextos, teorias e argumentos com clareza.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm">3</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Interpretar</h3>
                            <p class="text-comp-graphite font-light text-sm">Investigar pressupostos, conflitos, símbolos, tensões e sentidos implícitos.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm">4</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Integrar</h3>
                            <p class="text-comp-graphite font-light text-sm">Relacionar ideias, perspectivas e experiências sem confundir seus métodos, pressupostos e limites.</p>
                        </div>
                    </div>
                    
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-primary-gold bg-white text-primary-gold font-cinzel font-bold shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 shadow-sm">5</div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white border border-base-parchment p-6 rounded shadow-sm">
                            <h3 class="text-lg font-bold text-primary-navy font-cinzel mb-1">Incorporar</h3>
                            <p class="text-comp-graphite font-light text-sm">Examinar como a compreensão pode reorganizar a atenção, o julgamento, as escolhas e a maneira de viver.</p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="mt-16 text-center text-lg text-primary-navy font-serif italic border-t border-primary-gold/30 pt-8">
                    <p>O objetivo não é apenas saber mais. É aprender a pensar melhor e permitir que o conhecimento participe da maneira como você compreende e conduz a própria vida.</p>
                </div>
            </div>
        </section>

        <!-- Bloco 8 — Diferenciais -->
        <section id="diferenciais" class="py-20 bg-white border-y border-base-parchment/50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4 max-w-4xl mx-auto leading-tight">Rigor que não esteriliza a experiência. Transformação que não abandona o rigor.</h2>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-12">
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Filosofia relacionada à vida</h3>
                        <p class="text-comp-graphite text-sm font-light">Sem reduzi-la a autoajuda, frases motivacionais ou receitas universais.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Psicologia sem psicologização</h3>
                        <p class="text-comp-graphite text-sm font-light">Conceitos estudados com atenção aos contextos, às evidências, às aplicações e aos limites.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Profundidade sem pedantismo</h3>
                        <p class="text-comp-graphite text-sm font-light">Ideias complexas apresentadas com clareza, sem linguagem obscura usada apenas como demonstração de erudição.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Interdisciplinaridade sem ecletismo</h3>
                        <p class="text-comp-graphite text-sm font-light">Campos diferentes conversam, mas conceitos e métodos não são misturados indiscriminadamente.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Transformação sem promessa fácil</h3>
                        <p class="text-comp-graphite text-sm font-light">Formação, método e comunidade para um processo gradual e responsável.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Pluralidade sem relativismo</h3>
                        <p class="text-comp-graphite text-sm font-light">Abertura ao diálogo sem abandonar critérios de coerência, evidência e precisão.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Percursos organizados, não dispersos</h3>
                        <p class="text-comp-graphite text-sm font-light">Os estudos são estruturados para formar uma trajetória progressiva, inclusive para iniciantes.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Formação de competências</h3>
                        <p class="text-comp-graphite text-sm font-light">O foco está em aprender a ler, interpretar, argumentar, avaliar e pensar com autonomia.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Leitura ativa</h3>
                        <p class="text-comp-graphite text-sm font-light">Perguntas, problemas, trechos comentados e exercícios de reflexão.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Autoconhecimento sem coachês</h3>
                        <p class="text-comp-graphite text-sm font-light">A investigação de si ocorre por meio da Filosofia e do diálogo com a Psicologia.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Comunidade de investigação</h3>
                        <p class="text-comp-graphite text-sm font-light">O aprendizado inclui espaço para perguntas, diálogo e confronto respeitoso entre perspectivas.</p>
                    </div>
                    <div class="border-l border-primary-gold pl-4">
                        <h3 class="text-primary-navy font-cinzel font-bold text-lg mb-1">Transparência intelectual</h3>
                        <p class="text-comp-graphite text-sm font-light">As credenciais, os métodos utilizados e os limites de cada campo são apresentados com clareza.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 9 — Contraste -->
        <section class="py-20 bg-base-paper">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Duas maneiras de se relacionar com o conhecimento</h2>
                </div>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-1 bg-white p-8 rounded border border-base-parchment shadow-sm">
                        <h3 class="text-xl font-cinzel font-bold text-gray-500 mb-6 border-b border-gray-200 pb-4">Sem uma formação intelectual organizada</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Consumir conteúdos isolados e esquecer rapidamente.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Repetir conceitos sem compreender seus pressupostos.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Confundir linguagem difícil com profundidade.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Buscar respostas rápidas para questões complexas.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Tornar-se dependente de influenciadores, autores ou escolas.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-gray-400 mt-1">✗</span>
                                <span class="text-comp-graphite font-light">Acumular informações sem relacioná-las à própria vida.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="flex-1 bg-primary-navy p-8 rounded border border-primary-navy shadow-md relative">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary-gold text-white text-xs font-bold px-4 py-1 rounded-full uppercase tracking-widest shadow-sm">Com a Odisseia Filosófica</div>
                        <h3 class="text-xl font-cinzel font-bold text-primary-gold mb-6 border-b border-primary-gold/30 pb-4 pt-2">Com a Odisseia Filosófica</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Construir um percurso progressivo de aprendizagem.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Compreender conceitos em seus contextos.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Reconhecer profundidade mesmo quando ela é apresentada com clareza.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Desenvolver paciência diante de problemas complexos.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Dialogar criticamente com diferentes autores e perspectivas.</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-primary-gold mt-1 font-bold">✓</span>
                                <span class="text-white font-light">Transformar conhecimento em discernimento e responsabilidade.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-16 text-center text-xl text-primary-navy font-serif italic max-w-3xl mx-auto leading-relaxed border-t border-b border-primary-gold/30 py-8">
                    <p>"A diferença não está apenas na quantidade de coisas que você sabe, mas na qualidade da atenção, do julgamento e das escolhas que você desenvolve."</p>
                </div>
            </div>
        </section>

        <!-- Bloco 10 — Sobre o idealizador -->
        <section id="sobre" class="py-24 bg-white border-y border-base-parchment/50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Quem conduz a Odisseia Filosófica</h2>
                </div>
                
                <div class="bg-base-paper p-8 md:p-12 rounded border border-base-parchment flex flex-col md:flex-row items-center md:items-start gap-10">
                    <div class="w-32 h-32 md:w-48 md:h-48 rounded-full border-2 border-primary-gold/50 bg-base-paper shrink-0 flex items-center justify-center overflow-hidden shadow-sm">
                        <img src="/images/jefferson.jpg" alt="Jefferson Alves da Silva" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Jefferson+Alves&background=0E2340&color=fff&size=512';">
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-cinzel font-bold text-primary-navy mb-3">Jefferson Alves da Silva</h3>
                        <div class="space-y-4 text-comp-graphite leading-relaxed font-light text-sm">
                            <p>Professor de Filosofia e Ciências da Religião.</p>
                            <p>Também é farmacêutico e escritor. Atualmente, encontra-se em formação em Psicologia e Psicanálise.</p>
                            <p>Sua trajetória sustenta uma abordagem comprometida com o rigor filosófico, a responsabilidade no uso de conceitos psicológicos, a atenção às evidências, a integridade interpretativa e a relação entre conhecimento e experiência.</p>
                            <p>A Odisseia Filosófica nasce desse encontro entre formação acadêmica, experiência docente e interesse contínuo pelas diferentes maneiras pelas quais os seres humanos procuram compreender a si mesmos e o mundo.</p>
                        </div>
                        
                        <div class="mt-8 p-4 bg-white border border-base-parchment rounded text-xs text-gray-500">
                            <strong class="block mb-1 text-primary-navy font-bold uppercase tracking-wider">Nota de transparência:</strong>
                            Os conteúdos psicológicos possuem finalidade educacional. A Odisseia Filosófica não oferece psicoterapia, diagnóstico ou aconselhamento psicológico.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 11 — Reciprocidade e newsletter -->
        <section id="newsletter" class="py-24 bg-base-paper">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-6 leading-tight">Comece pela newsletter semanal</h2>
                        <div class="space-y-4 text-comp-graphite mb-8 font-light text-sm">
                            <p>Toda semana, você receberá um conteúdo para exercitar a leitura, a reflexão e a formação intelectual. A proposta é oferecer ideias que possam ser estudadas com calma — e não apenas consumidas rapidamente.</p>
                            <p>Você também receberá materiais introdutórios, recomendações de leitura e avisos sobre novos cursos e experiências formativas.</p>
                        </div>
                        
                        <h3 class="text-lg font-cinzel font-bold text-primary-navy mb-4">Benefícios:</h3>
                        <ul class="space-y-3 mb-8 text-comp-graphite font-light text-sm">
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">•</span> Reflexões semanais sobre Filosofia e vida intelectual.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">•</span> Diálogos responsáveis com a Psicologia.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">•</span> Literatura, Mitos e Símbolos como caminhos de interpretação.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">•</span> Recomendações de livros, autores e percursos de estudo.</li>
                            <li class="flex items-center gap-3"><span class="text-primary-gold font-bold">•</span> Avisos antecipados sobre cursos, eventos e novas turmas.</li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-8 rounded border border-base-parchment shadow-md">
                        <form action="/lead" method="POST" class="space-y-5">
                            @csrf
                            <input type="hidden" name="type" value="newsletter">
                            <div>
                                <label for="nome_news" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-1">Nome</label>
                                <input type="text" id="nome_news" name="nome" required class="w-full px-4 py-3 bg-base-paper border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                            <div>
                                <label for="email_news" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-1">E-mail</label>
                                <input type="email" id="email_news" name="email" required class="w-full px-4 py-3 bg-base-paper border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                            <button type="submit" class="w-full bg-primary-navy text-white font-bold uppercase tracking-wider py-3.5 rounded hover:bg-comp-darknavy transition-colors mt-2">
                                Quero receber a newsletter
                            </button>
                            <p class="text-xs text-center text-gray-500 mt-4">Cadastro gratuito. Você poderá cancelar quando quiser.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bloco 12 — Cadastro de interesse nos cursos -->
        <section id="cursos" class="py-24 bg-white border-y border-base-parchment/50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Quer aprofundar seus estudos?</h2>
                    <p class="text-comp-graphite mb-4 max-w-2xl mx-auto font-light">Cadastre seu interesse para receber informações sobre os próximos cursos, temas, formatos, datas e condições de participação.</p>
                    <p class="text-xs text-gray-500 max-w-xl mx-auto border border-gray-200 p-3 rounded">O cadastro não representa uma compra nem gera qualquer obrigação. Ele apenas permite que você seja avisado quando novas experiências formativas forem abertas.</p>
                </div>
                
                <div class="bg-base-paper p-8 md:p-10 rounded border border-base-parchment shadow-sm">
                    <form action="/lead" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="type" value="curso">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">Nome</label>
                                <input type="text" id="nome" name="nome" required class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">E-mail</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                            </div>
                        </div>
                        
                        <div>
                            <label for="whatsapp" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">WhatsApp</label>
                            <input type="tel" id="whatsapp" name="whatsapp" placeholder="(11) 99999-9999" class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                        </div>
                        
                        <div>
                            <label for="nivel" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">Nível atual de contato com a Filosofia</label>
                            <select id="nivel" name="nivel" class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                                <option value="" disabled selected>Selecione uma opção</option>
                                <option value="Iniciante">Iniciante (Nunca estudei ou li pouco)</option>
                                <option value="Intermediário">Intermediário (Leio regularmente, conheço alguns autores)</option>
                                <option value="Avançado">Avançado (Estudo sistematicamente ou tenho formação)</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="temas" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">Temas de maior interesse</label>
                            <input type="text" id="temas" name="temas" placeholder="Ex: Ética, Mitologia, Psicologia Analítica..." class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                        </div>
                        
                        <div>
                            <label for="formato" class="block text-xs font-bold text-primary-navy uppercase tracking-wider mb-2">Formato de curso preferido</label>
                            <select id="formato" name="formato" class="w-full px-4 py-3 bg-white border border-base-parchment rounded focus:ring-1 focus:ring-primary-navy focus:border-primary-navy outline-none text-comp-graphite transition-colors">
                                <option value="" disabled selected>Selecione uma opção</option>
                                <option value="Ao vivo">Aulas on-line ao vivo</option>
                                <option value="Gravado">Aulas gravadas</option>
                                <option value="Grupo de Leitura">Grupos de leitura orientada</option>
                                <option value="Híbrido">Híbrido (Gravadas + Encontros ao vivo)</option>
                            </select>
                        </div>
                        
                        <div class="pt-6 border-t border-base-parchment/50">
                            <button type="submit" class="w-full bg-primary-gold text-white font-bold uppercase tracking-wider py-4 rounded hover:bg-[#9E7A3D] transition-all shadow-sm hover:shadow-md text-sm">
                                Quero ser avisado sobre os cursos
                            </button>
                            <p class="text-xs text-center text-gray-500 mt-4">Seus dados serão utilizados apenas para comunicações relacionadas à Odisseia Filosófica.</p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Bloco 13 — Perguntas frequentes -->
        <section id="faq" class="py-24 bg-base-paper">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-cinzel font-bold text-primary-navy mb-4">Perguntas frequentes</h2>
                </div>
                
                <div class="space-y-3" x-data="{ selected: null }">
                    @php
                    $faqs = [
                        ['q' => '1. Preciso ter formação em Filosofia ou Psicologia?', 'a' => 'Não. Os conteúdos são desenvolvidos para pessoas interessadas em estudar com seriedade, independentemente de sua formação acadêmica. Quando conceitos técnicos forem necessários, eles serão apresentados e contextualizados.'],
                        ['q' => '2. Qualquer pessoa pode aprender Filosofia?', 'a' => 'Sim. Aprender Filosofia não depende de pertencer a um grupo intelectual específico. Depende de interesse, disposição para ler, formular perguntas, revisar ideias e conviver com questões complexas. O percurso pode ser exigente, mas deve ser conduzido com clareza.'],
                        ['q' => '3. O conteúdo da Odisseia Filosófica é adequado para iniciantes?', 'a' => 'Sim. Os percursos serão organizados para que iniciantes compreendam os fundamentos antes de avançar. Pessoas com experiência prévia também encontrarão oportunidades de aprofundamento e revisão crítica.'],
                        ['q' => '4. O conteúdo é apenas teórico?', 'a' => 'Não. A teoria é indispensável para evitar interpretações superficiais, mas será relacionada a situações, decisões, conflitos e experiências concretas. Aplicação, porém, não significa transformar a Filosofia em receita pronta.'],
                        ['q' => '5. Preciso ler quais obras antes de entender os materiais de vocês?', 'a' => 'Não existe uma lista obrigatória de leituras anteriores. Sempre que uma obra for necessária, serão oferecidos contexto, orientações e indicações adequadas ao nível do conteúdo.'],
                        ['q' => '6. Como funciona para quem deseja aprofundar seu conhecimento em Filosofia?', 'a' => 'Além da newsletter e dos materiais introdutórios, serão oferecidos cursos e percursos temáticos com leituras orientadas, contextualização histórica, análise conceitual, exercícios de interpretação e espaços de diálogo.'],
                        ['q' => '7. Por que escolher a Odisseia Filosófica em vez de outros cursos de Filosofia? Qual é o diferencial?', 'a' => 'A Odisseia combina rigor e clareza, relaciona Filosofia e vida sem cair em autoajuda, utiliza a Psicologia sem psicologizar toda experiência e promove o diálogo interdisciplinar sem misturar métodos indiscriminadamente. O objetivo não é apenas transmitir repertório, mas formar competências intelectuais e autonomia.'],
                        ['q' => '8. O que são vida intelectual e formação intelectual? Por que eu deveria me interessar por isso?', 'a' => 'Vida intelectual é o cultivo contínuo da leitura, do estudo, da reflexão e do diálogo. Formação intelectual é o desenvolvimento das capacidades necessárias para compreender conceitos, avaliar argumentos, interpretar experiências e formar juízos responsáveis. Isso importa porque nossas decisões são influenciadas pela maneira como pensamos, mesmo quando não percebemos.'],
                        ['q' => '9. Como a Odisseia Filosófica pode contribuir para meu processo de autoconhecimento?', 'a' => 'A Filosofia oferece perguntas e conceitos para examinar valores, escolhas, contradições e modos de vida. Em diálogo responsável com a Psicologia, esse processo também pode ajudar a reconhecer afetos e padrões. A proposta é educativa e reflexiva, não terapêutica.'],
                        ['q' => '10. A Odisseia oferece terapia ou aconselhamento psicológico?', 'a' => 'Não. A Odisseia Filosófica é um projeto educacional. Seus conteúdos não substituem psicoterapia, avaliação psicológica, diagnóstico, acompanhamento médico ou atendimento de outros profissionais habilitados.'],
                        ['q' => '11. A Odisseia Filosófica segue alguma religião?', 'a' => 'Não. A abordagem é interdisciplinar e não confessional. As religiões podem ser estudadas como fenômenos históricos, culturais, filosóficos, psicológicos e simbólicos, sem promover uma tradição específica.'],
                        ['q' => '12. Posso participar sendo religioso, ateu ou agnóstico?', 'a' => 'Sim. O projeto foi pensado para acolher pessoas com diferentes convicções, desde que estejam abertas ao estudo, ao diálogo respeitoso e à análise crítica.'],
                        ['q' => '13. O que é a newsletter?', 'a' => 'É um conteúdo enviado por e-mail, normalmente uma vez por semana, com reflexões, textos, recomendações de leitura, materiais introdutórios e informações sobre novos cursos e eventos.'],
                        ['q' => '14. Como serão realizados os cursos?', 'a' => 'Os formatos poderão variar conforme a proposta de cada curso. Poderão existir aulas on-line ao vivo, conteúdos gravados, leituras orientadas, materiais complementares e encontros de discussão. Cada página de inscrição apresentará claramente o formato específico.'],
                        ['q' => '15. Haverá espaço para perguntas e diálogo?', 'a' => 'Sempre que o formato permitir, sim. A Odisseia entende a Filosofia como investigação e diálogo, não apenas como transmissão unilateral de conteúdo.'],
                        ['q' => '16. Quais serão os valores dos cursos?', 'a' => 'Os valores dependerão da duração, do formato, da quantidade de encontros e dos materiais oferecidos. Todas as condições serão divulgadas com transparência antes da abertura das inscrições. O cadastro de interesse é gratuito e não cria obrigação de compra.']
                    ];
                    @endphp

                    @foreach($faqs as $index => $faq)
                    <div class="border border-base-parchment rounded bg-white hover:border-primary-gold/50 transition-colors">
                        <button @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null" 
                                class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">
                            <span class="font-cinzel font-bold text-primary-navy text-sm md:text-base">{{ $faq['q'] }}</span>
                            <span class="text-primary-gold transform transition-transform duration-200" :class="{ 'rotate-180': selected === {{ $index }} }">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>
                        </button>
                        <div x-show="selected === {{ $index }}" x-collapse x-cloak>
                            <div class="px-6 pb-5 pt-2 text-comp-graphite font-light text-sm border-t border-base-parchment/30">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Bloco 14 — Chamada final -->
        <section class="py-32 bg-primary-navy text-center border-t-8 border-primary-gold">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-cinzel font-bold text-white mb-8 leading-tight tracking-wide">
                    Uma vida examinada começa com a disposição de olhar novamente
                </h2>
                
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto font-light leading-relaxed">
                    Você não precisa ter todas as respostas para começar. Precisa apenas estar disposto a questionar o que parece evidente, compreender com mais profundidade e construir uma relação mais consciente com o conhecimento e consigo mesmo.
                </p>
                <p class="text-xl text-primary-gold font-serif italic mb-12">
                    A Odisseia Filosófica é um convite para esse percurso.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mb-16">
                    <a href="#newsletter" class="w-full sm:w-auto bg-primary-gold text-white font-bold uppercase tracking-wider px-10 py-4 rounded hover:bg-[#9E7A3D] transition-all shadow-md">
                        Quero receber a newsletter
                    </a>
                    <a href="#cursos" class="w-full sm:w-auto border border-primary-gold text-primary-gold font-bold uppercase tracking-wider px-10 py-4 rounded hover:bg-primary-gold/10 transition-all">
                        Quero conhecer os próximos cursos
                    </a>
                </div>
                
                <p class="text-gray-400 text-xs max-w-xl mx-auto uppercase tracking-widest font-bold">
                    Filosofia, formação intelectual e autoconhecimento responsável para quem deseja pensar com profundidade e viver com mais clareza.
                </p>
            </div>
        </section>
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
                        <li><a href="#cursos" class="hover:text-primary-gold transition-colors">Cursos</a></li>
                        <li><a href="#" class="hover:text-primary-gold transition-colors">Política de Privacidade</a></li>
                        <li><a href="#" class="hover:text-primary-gold transition-colors">Termos de Uso</a></li>
                        <li><a href="#" class="hover:text-primary-gold transition-colors">Contato</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Aviso:</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        A Odisseia Filosófica é um projeto educacional. Seus conteúdos não substituem acompanhamento psicológico, médico ou qualquer outro atendimento profissional.
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
