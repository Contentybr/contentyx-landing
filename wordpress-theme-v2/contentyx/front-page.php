<?php
/**
 * The front page template file (Landing Page)
 *
 * @package Contentyx
 * @since 2.0.0
 */

get_header();
?>

<main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <?php if (has_custom_logo()) : ?>
                <div class="hero-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="hero-logo">
            <?php endif; ?>

            <h1 class="hero-title">
                Crie conteúdo em volume com <strong>consistência</strong> e <strong>estratégia</strong>
            </h1>

            <p class="hero-subtitle">
                O Contentyx transforma briefing simples em roteiros prontos para suas redes sociais. 
                Economize horas de planejamento e mantenha sua presença digital ativa todos os dias.
            </p>

            <div class="hero-cta">
                <a href="<?php echo esc_url(get_theme_mod('contentyx_cta_url', '#pricing')); ?>" class="btn btn-primary btn-large">
                    <?php echo esc_html(get_theme_mod('contentyx_cta_text', 'Começar Teste Gratuito')); ?>
                </a>
                <a href="#how-it-works" class="btn btn-secondary btn-large">
                    Ver Como Funciona
                </a>
            </div>
        </div>
    </section>

    <!-- Problems Section -->
    <section id="problems" class="section section-gray">
        <div class="container">
            <h2 class="section-title">Você está cansado de...</h2>

            <div class="grid grid-2">
                <div class="card">
                    <div class="card-icon">⏰</div>
                    <h3 class="card-title">Falta de tempo para planejar</h3>
                    <p class="card-description">
                        Horas gastas pensando em pautas, pesquisando tendências e organizando calendários editoriais.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🧠</div>
                    <h3 class="card-title">Bloqueio criativo constante</h3>
                    <p class="card-description">
                        Aquela sensação de "não sei o que postar hoje" que paralisa sua produção de conteúdo.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">📉</div>
                    <h3 class="card-title">Inconsistência nas postagens</h3>
                    <p class="card-description">
                        Semanas sem postar nada, perdendo relevância e engajamento com sua audiência.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3 class="card-title">Dificuldade em manter relevância</h3>
                    <p class="card-description">
                        Conteúdo genérico que não gera conexão nem resultados para seu negócio.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="section section-dark">
        <div class="container">
            <h2 class="section-title">Com o Contentyx, você consegue</h2>

            <div class="grid grid-3">
                <div class="card">
                    <div class="card-icon">⚡</div>
                    <h3 class="card-title">Produtividade 10x maior</h3>
                    <p class="card-description">
                        Gere semanas de conteúdo em minutos, não em horas. Foque no que realmente importa.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3 class="card-title">Consistência garantida</h3>
                    <p class="card-description">
                        Nunca mais fique sem ideias ou perca o timing de postar. Mantenha presença ativa.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">📈</div>
                    <h3 class="card-title">Crescimento acelerado</h3>
                    <p class="card-description">
                        Mantenha presença ativa e relevante em todas as plataformas simultaneamente.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🎨</div>
                    <h3 class="card-title">Criatividade sob demanda</h3>
                    <p class="card-description">
                        IA que entende seu nicho e gera ideias alinhadas com sua estratégia.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3 class="card-title">Estratégia clara</h3>
                    <p class="card-description">
                        Roteiros completos e estruturados que guiam sua produção de conteúdo.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🗂️</div>
                    <h3 class="card-title">Organização total</h3>
                    <p class="card-description">
                        Biblioteca de conteúdos salvos para reutilizar e adaptar quando precisar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section section-gray">
        <div class="container">
            <h2 class="section-title">Como funciona</h2>

            <div class="grid grid-4">
                <div class="card text-center">
                    <div class="card-icon text-gradient">1</div>
                    <h3 class="card-title">Defina o briefing</h3>
                    <p class="card-description">
                        Informe tema, tom de voz e objetivo do conteúdo
                    </p>
                </div>

                <div class="card text-center">
                    <div class="card-icon text-gradient">2</div>
                    <h3 class="card-title">IA gera roteiros</h3>
                    <p class="card-description">
                        Conteúdo estruturado é criado instantaneamente
                    </p>
                </div>

                <div class="card text-center">
                    <div class="card-icon text-gradient">3</div>
                    <h3 class="card-title">Revise e ajuste</h3>
                    <p class="card-description">
                        Personalize conforme sua necessidade
                    </p>
                </div>

                <div class="card text-center">
                    <div class="card-icon text-gradient">4</div>
                    <h3 class="card-title">Publique e cresça</h3>
                    <p class="card-description">
                        Use nos seus canais e acompanhe resultados
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section section-dark">
        <div class="container">
            <h2 class="section-title">Tudo que você precisa em um só lugar</h2>

            <div class="grid grid-3">
                <div class="card">
                    <div class="card-icon">📝</div>
                    <h3 class="card-title">Geração ilimitada</h3>
                    <p class="card-description">
                        Crie quantos roteiros precisar, sem limites ou restrições
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🎨</div>
                    <h3 class="card-title">Múltiplos formatos</h3>
                    <p class="card-description">
                        Posts, stories, reels, threads e muito mais
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3 class="card-title">Análise de tendências</h3>
                    <p class="card-description">
                        Sugestões baseadas em dados e tendências do mercado
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🗂️</div>
                    <h3 class="card-title">Biblioteca organizada</h3>
                    <p class="card-description">
                        Salve e reutilize seus melhores conteúdos
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">⚡</div>
                    <h3 class="card-title">Velocidade extrema</h3>
                    <p class="card-description">
                        Resultados em segundos, não em horas
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon">🔄</div>
                    <h3 class="card-title">Atualizações constantes</h3>
                    <p class="card-description">
                        Novos recursos e melhorias toda semana
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="section section-gray">
        <div class="container">
            <h2 class="section-title">Comece hoje mesmo</h2>

            <div class="card" style="max-width: 600px; margin: 0 auto;">
                <div class="text-center">
                    <div class="mb-2">
                        <span style="background: var(--gradient-brand); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.875rem; font-weight: 700;">
                            OFERTA DE LANÇAMENTO
                        </span>
                    </div>

                    <h3 style="font-size: 4rem; font-weight: 800; margin: 1rem 0;">R$ 25<span style="font-size: 1.5rem; font-weight: 400;">/mês</span></h3>
                    
                    <p style="font-size: 1.25rem; color: var(--brand-orange-neon); margin-bottom: 2rem;">
                        Primeiro mês GRÁTIS
                    </p>

                    <ul style="list-style: none; text-align: left; margin: 2rem 0;">
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Geração ilimitada de conteúdo
                        </li>
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Todos os formatos disponíveis
                        </li>
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Biblioteca de templates
                        </li>
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Suporte prioritário
                        </li>
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Atualizações gratuitas
                        </li>
                        <li style="margin-bottom: 0.75rem; padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: var(--brand-blue-neon);">✓</span>
                            Cancele quando quiser
                        </li>
                    </ul>

                    <form id="contentyx-form" class="mt-3">
                        <div class="form-group">
                            <input 
                                type="email" 
                                name="email" 
                                class="form-input" 
                                placeholder="Seu melhor e-mail" 
                                required
                            >
                        </div>
                        <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">
                            Começar Teste Gratuito
                        </button>
                        <p style="font-size: 0.875rem; color: var(--color-gray-light); margin-top: 1rem;">
                            7 dias grátis. Sem cartão de crédito.
                        </p>
                    </form>

                    <div id="form-message" style="margin-top: 1rem; display: none;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final Section -->
    <section class="section section-gradient">
        <div class="container text-center">
            <h2 style="font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 1rem; color: white;">
                Quem tem método, vence na consistência
            </h2>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 700px; margin-left: auto; margin-right: auto;">
                Junte-se a centenas de criadores que já transformaram sua produção de conteúdo
            </p>
            <a href="<?php echo esc_url(get_theme_mod('contentyx_cta_url', '#pricing')); ?>" class="btn btn-large" style="background: white; color: var(--brand-blue-neon);">
                Começar Teste Gratuito →
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
