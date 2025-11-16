# Guia de Instalação - Tema Contentyx para WordPress

Este guia completo vai te ajudar a instalar e configurar a landing page do Contentyx no WordPress, tanto como tema quanto com Elementor.

---

## 📋 Requisitos

- WordPress 5.0 ou superior
- PHP 7.4 ou superior
- MySQL 5.6 ou superior
- Recomendado: Elementor Pro (para edição visual completa)

---

## 🚀 Método 1: Instalação como Tema WordPress

### Passo 1: Preparar o Tema

1. Baixe a pasta `wordpress-theme/contentyx` deste repositório
2. Compacte a pasta `contentyx` em um arquivo `.zip`:
   ```bash
   cd wordpress-theme
   zip -r contentyx.zip contentyx/
   ```

### Passo 2: Upload no WordPress

1. Acesse o painel do WordPress (`seu-site.com/wp-admin`)
2. Vá em **Aparência → Temas**
3. Clique em **Adicionar Novo**
4. Clique em **Enviar Tema**
5. Escolha o arquivo `contentyx.zip`
6. Clique em **Instalar Agora**
7. Após a instalação, clique em **Ativar**

### Passo 3: Criar a Landing Page

1. Vá em **Páginas → Adicionar Nova**
2. Dê um título (ex: "Home" ou "Landing Page")
3. No lado direito, em **Atributos da Página**, selecione o template **"Landing Page Contentyx"**
4. Publique a página
5. Vá em **Configurações → Leitura**
6. Em "Sua página inicial exibe", selecione **"Uma página estática"**
7. Escolha a página que você criou como **Página Inicial**
8. Salve as alterações

### Passo 4: Configurar Menus e Widgets

1. **Menus:**
   - Vá em **Aparência → Menus**
   - Crie um menu com links para as seções (#pricing, #features, #faq)
   - Atribua ao local "Menu Principal"

2. **Widgets do Footer:**
   - Vá em **Aparência → Widgets**
   - Adicione widgets nas áreas **Footer 1, 2, 3**
   - Sugestões: Menu personalizado, Links úteis, Informações de contato

3. **Logo:**
   - Vá em **Aparência → Personalizar → Identidade do Site**
   - Faça upload do logo (`images/logo-full-text.png`)

### Passo 5: Personalizar Cores e Textos

1. Vá em **Aparência → Personalizar**
2. Ajuste:
   - **Identidade do Site:** Logo e tagline
   - **Cores do Contentyx:** Personalize se necessário
   - **Texto do CTA:** Altere o texto do botão principal
   - **URL do CTA:** Configure para onde o botão deve levar

---

## 🎨 Método 2: Usar com Elementor

### Passo 1: Instalar Elementor

1. Vá em **Plugins → Adicionar Novo**
2. Busque por "Elementor"
3. Instale e ative o **Elementor Page Builder**
4. (Opcional) Instale também o **Elementor Pro** para recursos avançados

### Passo 2: Instalar o Tema Base

1. Siga os passos do **Método 1** para instalar o tema Contentyx
2. Isso garante que todos os estilos CSS estejam disponíveis

### Passo 3: Criar Página no Elementor

1. Vá em **Páginas → Adicionar Nova**
2. Dê um título (ex: "Landing Page")
3. Clique em **Editar com Elementor**

### Passo 4: Importar Estrutura

Como o Elementor não permite importação direta de código HTML, você precisará recriar as seções manualmente ou usar este guia:

#### **Estrutura das Seções:**

1. **Hero Section**
   - Adicione uma seção com 1 coluna
   - Background: Gradient (Azul #00A8FF → Laranja #FF8A00)
   - Adicione:
     - Widget de Imagem (logo)
     - Widget de Título (H1)
     - Widget de Texto (subtítulo)
     - Widget de Botão (2 botões lado a lado)

2. **Seção de Problemas**
   - Adicione uma seção com 2 colunas
   - Background: #1A1A1A
   - Em cada coluna, adicione:
     - Widget de Ícone Box
     - Título e descrição do problema

3. **Seção de Benefícios**
   - Adicione uma seção com 3 colunas
   - Repita para 6 cards de benefícios
   - Use Widget de Ícone Box

4. **Como Funciona**
   - Seção com 4 colunas
   - Widget de Ícone Box com números

5. **Features**
   - Seção com 3 colunas
   - 6 cards de features

6. **Pricing**
   - Seção com 1 coluna centralizada
   - Widget de Pricing Table
   - Widget de Formulário (Elementor Pro) ou HTML personalizado

7. **FAQ**
   - Widget de Accordion (Elementor Pro) ou Toggle
   - Adicione as perguntas e respostas

8. **CTA Final**
   - Seção com background gradient
   - Título + botão

### Passo 5: Aplicar Estilos Personalizados

No Elementor, vá em **Configurações da Página** e adicione este CSS personalizado:

```css
/* Importar estilos do tema */
@import url('/wp-content/themes/contentyx/style.css');

/* Ajustes específicos do Elementor */
.elementor-section {
    padding: 6rem 0;
}

.elementor-button {
    font-weight: 700;
    border-radius: 0.75rem;
    padding: 1rem 2rem;
}
```

---

## 🎯 Método 3: Importar HTML Puro (Avançado)

Se você preferir usar o HTML original da React App:

### Passo 1: Criar Página HTML Personalizada

1. Instale o plugin **"Insert Headers and Footers"** ou **"Code Snippets"**
2. Crie uma nova página no WordPress
3. Use o editor de código (não o visual)
4. Cole o HTML completo da landing page
5. Adicione o CSS inline ou vincule ao `style.css` do tema

### Passo 2: Desabilitar Header e Footer

Adicione este código no `functions.php`:

```php
function contentyx_remove_header_footer() {
    if (is_page('landing-page')) {
        remove_action('wp_head', '_wp_render_title_tag', 1);
        remove_action('wp_head', 'wp_enqueue_scripts', 1);
    }
}
add_action('wp', 'contentyx_remove_header_footer');
```

---

## ⚙️ Configurações Avançadas

### Integração com Formulários

Para conectar o formulário de cadastro com serviços de e-mail marketing:

#### **Opção 1: Elementor Pro Forms**
1. Use o widget de formulário do Elementor Pro
2. Configure ações após envio:
   - Mailchimp
   - ActiveCampaign
   - Webhook personalizado

#### **Opção 2: Contact Form 7**
1. Instale o plugin **Contact Form 7**
2. Crie um formulário simples (apenas e-mail)
3. Use shortcode `[contact-form-7 id="123"]` na página

#### **Opção 3: WPForms**
1. Instale o **WPForms**
2. Crie um formulário de cadastro
3. Configure integrações com:
   - Mailchimp
   - ConvertKit
   - Drip
   - Zapier

### Otimização de Performance

1. **Instale plugins de cache:**
   - WP Super Cache
   - W3 Total Cache
   - WP Rocket (pago, mas excelente)

2. **Otimize imagens:**
   - Smush
   - ShortPixel
   - Imagify

3. **Minifique CSS/JS:**
   - Autoptimize
   - WP Rocket

### SEO

1. **Instale Yoast SEO ou Rank Math**
2. Configure:
   - Meta título: "Contentyx - Crie Conteúdo em Volume com IA"
   - Meta descrição: "Transforme briefing em roteiros prontos. Teste grátis por 7 dias."
   - Palavras-chave: geração de conteúdo, IA, social media, marketing digital

### Analytics

Adicione o código de rastreamento no `functions.php`:

```php
function contentyx_google_analytics() {
    ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <?php
}
add_action('wp_head', 'contentyx_google_analytics');
```

---

## 🐛 Solução de Problemas

### Problema: Estilos não aparecem

**Solução:**
1. Limpe o cache do WordPress e do navegador
2. Verifique se o arquivo `style.css` está na raiz do tema
3. Force o reload com `Ctrl + Shift + R`

### Problema: Formulário não envia

**Solução:**
1. Verifique se o jQuery está carregado
2. Adicione `wp_enqueue_script('jquery')` no `functions.php`
3. Use um plugin de formulário confiável

### Problema: Layout quebrado no mobile

**Solução:**
1. Verifique se o tema tem `<meta name="viewport">` no header
2. Teste com diferentes navegadores
3. Use as classes responsivas do CSS (`grid-cols-1`, `grid-cols-2`, etc.)

### Problema: Logo não aparece

**Solução:**
1. Verifique o caminho da imagem no código
2. Faça upload do logo via **Aparência → Personalizar → Logo**
3. Use o caminho completo: `<?php echo get_template_directory_uri(); ?>/images/logo-full-text.png`

---

## 📞 Suporte

Se precisar de ajuda adicional:

1. **Documentação WordPress:** https://wordpress.org/support/
2. **Documentação Elementor:** https://elementor.com/help/
3. **GitHub Issues:** https://github.com/Contentybr/contentyx-landing/issues

---

## ✅ Checklist Final

Antes de publicar, verifique:

- [ ] Tema ativado corretamente
- [ ] Landing page definida como página inicial
- [ ] Logo configurado
- [ ] Menus criados e atribuídos
- [ ] Formulário de cadastro funcionando
- [ ] Links de redes sociais atualizados
- [ ] Analytics instalado
- [ ] SEO configurado
- [ ] Cache ativado
- [ ] Testado em mobile e desktop
- [ ] Velocidade de carregamento < 3s

---

**Pronto! Sua landing page do Contentyx está no ar! 🚀**
