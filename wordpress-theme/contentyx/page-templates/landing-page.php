<?php
/**
 * Template Name: Landing Page Contentyx
 * Template Post Type: page
 *
 * @package Contentyx
 * @since 1.0.0
 */

get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('landing-page'); ?>>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <!-- Logo -->
            <div class="mb-8 animate-fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-full-text.png" alt="Contentyx" class="hero-logo">
            </div>

            <!-- Badge -->
            <div class="hero-badge animate-fade-in">
                <span>🚀</span>
                <span>Teste Grátis por 7 Dias</span>
            </div>

            <!-- Título -->
            <h1 class="hero-title animate-fade-in">
                Crie conteúdo em volume<br>
                com <span class="text-gradient">consistência</span> e<br>
                <span class="text-gradient">estratégia</span>
            </h1>

            <!-- Subtítulo -->
            <p class="hero-subtitle animate-fade-in">
                O Contentyx transforma briefing simples em roteiros prontos, organizados e estratégicos. 
                Pare de improvisar. Comece a escalar.
            </p>

            <!-- CTAs -->
            <div class="hero-cta animate-fade-in">
                <a href="#pricing" class="btn btn-primary btn-lg">
                    Começar Teste Gratuito
                </a>
                <a href="#how-it-works" class="btn btn-outline btn-lg">
                    Ver Como Funciona
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="trust-indicators animate-fade-in">
                <div>✓ Sem cartão de crédito</div>
                <div>✓ Cancele quando quiser</div>
                <div>✓ Suporte em português</div>
            </div>
        </div>
    </div>
</section>

<!-- Problems Section -->
<section id="problems" class="py-8" style="background: var(--card);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">O PROBLEMA</span>
            <h2 class="section-title">
                Você já sabe criar. <span class="text-gradient">Agora é hora de escalar.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 grid-cols-2">
            <div class="card">
                <h3 class="mb-2">📅 Falta de tempo para planejar</h3>
                <p>Você passa mais tempo decidindo o que postar do que criando o conteúdo em si.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">🎯 Dificuldade de manter consistência</h3>
                <p>Cada post parece uma batalha nova. Não há sistema, só improviso.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">📊 Conteúdo sem estratégia</h3>
                <p>Você posta, mas não sabe se está construindo autoridade ou apenas enchendo feed.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">😓 Bloqueio criativo recorrente</h3>
                <p>A página em branco te paralisa. Você sabe o que fazer, mas não consegue começar.</p>
            </div>
        </div>

        <div class="text-center mt-6">
            <p class="hero-subtitle">
                E isso te impede de <span class="text-gradient">crescer</span>, não é sobre talento.
            </p>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section id="benefits" class="py-8">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">A SOLUÇÃO</span>
            <h2 class="section-title">
                Volume não é sobre esforço. <span class="text-gradient">É sobre sistema.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 grid-cols-3">
            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">⚡</div>
                <h3 class="mb-2">Produtividade</h3>
                <p>Gere 30 dias de conteúdo em menos de 1 hora. Roteiros prontos, organizados e estratégicos.</p>
            </div>

            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">🎯</div>
                <h3 class="mb-2">Consistência</h3>
                <p>Mantenha sua presença ativa sem depender de inspiração. Sistema que funciona sempre.</p>
            </div>

            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">📈</div>
                <h3 class="mb-2">Estratégia</h3>
                <p>Cada conteúdo tem propósito. Construa autoridade, não apenas presença.</p>
            </div>

            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">🧠</div>
                <h3 class="mb-2">Organização</h3>
                <p>Biblioteca de conteúdos organizados por tema, formato e objetivo.</p>
            </div>

            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">💡</div>
                <h3 class="mb-2">Ideias Ilimitadas</h3>
                <p>Nunca mais fique sem saber o que postar. IA gera ideias baseadas no seu nicho.</p>
            </div>

            <div class="card">
                <div class="mb-3" style="font-size: 3rem;">⏱️</div>
                <h3 class="mb-2">Economia de Tempo</h3>
                <p>Reduza 80% do tempo gasto em planejamento e criação de conteúdo.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-8" style="background: var(--card);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">COMO FUNCIONA</span>
            <h2 class="section-title">
                Menos improviso. <span class="text-gradient">Mais estratégia.</span>
            </h2>
            <p class="section-subtitle">
                4 passos simples para transformar briefing em conteúdo pronto
            </p>
        </div>

        <div class="grid grid-cols-1 grid-cols-4">
            <div class="card text-center">
                <div class="mb-3" style="font-size: 3rem; color: var(--primary);">1</div>
                <h3 class="mb-2">Defina o briefing</h3>
                <p>Conte sobre seu nicho, público e objetivos. Quanto mais contexto, melhor o resultado.</p>
            </div>

            <div class="card text-center">
                <div class="mb-3" style="font-size: 3rem; color: var(--primary);">2</div>
                <h3 class="mb-2">IA gera roteiros</h3>
                <p>Algoritmo cria dezenas de ideias estratégicas, organizadas por formato e objetivo.</p>
            </div>

            <div class="card text-center">
                <div class="mb-3" style="font-size: 3rem; color: var(--primary);">3</div>
                <h3 class="mb-2">Revise e ajuste</h3>
                <p>Personalize os roteiros com sua voz e estilo. Você tem controle total.</p>
            </div>

            <div class="card text-center">
                <div class="mb-3" style="font-size: 3rem; color: var(--primary);">4</div>
                <h3 class="mb-2">Publique e escale</h3>
                <p>Conteúdo pronto para usar. Foque em criar, não em planejar.</p>
            </div>
        </div>

        <div class="text-center mt-6">
            <p class="hero-subtitle mb-4">
                De briefing vazio para calendário completo em minutos.
            </p>
            <a href="#pricing" class="btn btn-primary btn-lg">
                Começar Agora
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-8">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">RECURSOS</span>
            <h2 class="section-title">
                O Contentyx entende <span class="text-gradient">o que importa</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 grid-cols-2 grid-cols-3">
            <div class="card">
                <h3 class="mb-2">📝 Análise de Briefing Inteligente</h3>
                <p>IA entende seu nicho e público para gerar conteúdo relevante.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">🎨 Adaptação de Tom e Voz</h3>
                <p>Conteúdo que soa como você, não como robô.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">📊 Planejamento Estratégico</h3>
                <p>Cada post tem objetivo claro: educar, engajar ou converter.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">🗂️ Biblioteca de Conteúdos</h3>
                <p>Organize e reutilize seus melhores roteiros.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">⚡ Geração em Massa</h3>
                <p>Crie 30, 60 ou 90 dias de conteúdo de uma vez.</p>
            </div>

            <div class="card">
                <h3 class="mb-2">🔄 Personalização Ilimitada</h3>
                <p>Edite, ajuste e adapte cada roteiro ao seu estilo.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-8" style="background: var(--card);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">PREÇO</span>
            <h2 class="section-title">
                Comece hoje por <span class="text-gradient">R$ 25/mês</span>
            </h2>
            <p class="section-subtitle">
                7 dias grátis. Sem cartão de crédito. Cancele quando quiser.
            </p>
        </div>

        <div class="card" style="max-width: 600px; margin: 0 auto; border: 2px solid var(--primary);">
            <div class="text-center mb-4">
                <h3 style="font-size: 3rem; font-weight: 900;">R$ 25<span style="font-size: 1.5rem;">/mês</span></h3>
                <p class="text-muted-foreground">Plano Mensal</p>
            </div>

            <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">✓ Geração ilimitada de conteúdo</li>
                <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">✓ Biblioteca de roteiros organizados</li>
                <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">✓ Adaptação de tom e voz</li>
                <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">✓ Planejamento estratégico</li>
                <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border);">✓ Suporte prioritário</li>
                <li style="padding: 0.75rem 0;">✓ Atualizações constantes</li>
            </ul>

            <!-- Formulário de Cadastro -->
            <form class="contentyx-form form-group">
                <input type="email" placeholder="Seu melhor e-mail" required>
                <button type="submit" class="btn btn-primary">
                    Começar Teste Gratuito
                </button>
            </form>

            <p class="text-center mt-3" style="font-size: 0.875rem; color: var(--muted-foreground);">
                7 dias grátis • Sem cartão • Cancele quando quiser
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-8">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">PERGUNTAS FREQUENTES</span>
            <h2 class="section-title">
                Dúvidas? <span class="text-gradient">Respondemos aqui.</span>
            </h2>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item card mb-3">
                <div class="faq-question" style="cursor: pointer; font-weight: 700;">
                    Como funciona o teste gratuito?
                </div>
                <div class="faq-answer" style="display: none; margin-top: 1rem; color: var(--muted-foreground);">
                    Você tem 7 dias para testar todas as funcionalidades sem pagar nada. Não pedimos cartão de crédito no cadastro.
                </div>
            </div>

            <div class="faq-item card mb-3">
                <div class="faq-question" style="cursor: pointer; font-weight: 700;">
                    Posso cancelar quando quiser?
                </div>
                <div class="faq-answer" style="display: none; margin-top: 1rem; color: var(--muted-foreground);">
                    Sim! Sem multas, sem burocracia. Cancele direto na plataforma em poucos cliques.
                </div>
            </div>

            <div class="faq-item card mb-3">
                <div class="faq-question" style="cursor: pointer; font-weight: 700;">
                    Funciona para qualquer nicho?
                </div>
                <div class="faq-answer" style="display: none; margin-top: 1rem; color: var(--muted-foreground);">
                    Sim! A IA se adapta ao seu mercado, público e objetivos. Quanto mais contexto você der, melhor o resultado.
                </div>
            </div>

            <div class="faq-item card mb-3">
                <div class="faq-question" style="cursor: pointer; font-weight: 700;">
                    Preciso de conhecimento técnico?
                </div>
                <div class="faq-answer" style="display: none; margin-top: 1rem; color: var(--muted-foreground);">
                    Não! A interface é simples e intuitiva. Se você sabe usar redes sociais, sabe usar o Contentyx.
                </div>
            </div>

            <div class="faq-item card mb-3">
                <div class="faq-question" style="cursor: pointer; font-weight: 700;">
                    Tem limite de geração?
                </div>
                <div class="faq-answer" style="display: none; margin-top: 1rem; color: var(--muted-foreground);">
                    Não! Gere quantos roteiros precisar, sem limites ou cobranças extras.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-8" style="background: linear-gradient(135deg, var(--brand-blue-neon) 0%, var(--brand-orange-neon) 100%);">
    <div class="container text-center">
        <h2 style="font-size: clamp(2rem, 4vw, 4rem); color: white; margin-bottom: 1rem;">
            Quem tem método, <span style="text-decoration: underline;">vence na consistência</span>
        </h2>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 700px; margin-left: auto; margin-right: auto;">
            Teste grátis por 7 dias. Sem cartão. Sem compromisso.
        </p>
        <a href="#pricing" class="btn btn-lg" style="background: white; color: var(--brand-blue-neon); font-weight: 900;">
            Começar Teste Gratuito →
        </a>
        <p style="margin-top: 1rem; font-size: 0.875rem; color: rgba(255,255,255,0.8);">
            Junte-se a centenas de criadores que já escalaram sua produção
        </p>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>
