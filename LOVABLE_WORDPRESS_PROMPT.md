# Prompt para Lovable / WordPress - Landing Page Contentyx

## 📋 Visão Geral do Projeto

Crie uma landing page moderna, profissional e focada em conversão para o **Contentyx**, uma ferramenta SaaS de geração de conteúdo com IA voltada para Social Medias, Agências de Marketing, Influenciadores e Prestadores de Serviço.

**Objetivo Principal:** Conversão para cadastro em teste gratuito de 7 dias.

---

## 🎨 Identidade Visual

### Paleta de Cores

A identidade visual do Contentyx é vibrante e tecnológica, com gradientes marcantes:

| Cor | Código Hex | Código OKLCH | Uso |
|-----|------------|--------------|-----|
| **Azul Neon** | `#00A8FF` | `oklch(0.65 0.25 230)` | Cor principal, botões primários, destaques |
| **Azul Profundo** | `#0057FF` | `oklch(0.55 0.28 260)` | Contraste, profundidade, elementos secundários |
| **Laranja Neon** | `#FF8A00` | `oklch(0.70 0.22 50)` | Energia, CTAs secundários, acentos |
| **Amarelo Dourado** | `#FFD33D` | `oklch(0.85 0.18 85)` | Iluminação, detalhes, gradientes |
| **Preto** | `#000000` | `oklch(0.05 0 0)` | Fundo escuro (tema dark) |
| **Branco** | `#FFFFFF` | `oklch(1 0 0)` | Texto em fundos escuros, cards |

### Gradiente Principal

```css
background: linear-gradient(135deg, #00A8FF 0%, #FF8A00 100%);
```

Este gradiente deve ser usado em:
- Botões principais (CTAs)
- Títulos destacados (com `background-clip: text`)
- Elementos decorativos
- Bordas de cards premium

### Tipografia

- **Fonte Principal:** Inter (Google Fonts)
- **Pesos:** 400 (regular), 500 (medium), 600 (semibold), 700 (bold), 800 (extrabold), 900 (black)
- **Estilo:** Moderno, limpo, altamente legível
- **Hierarquia:**
  - H1: 4rem-6rem (64px-96px), font-weight: 900
  - H2: 3rem-5rem (48px-80px), font-weight: 900
  - H3: 2rem-3rem (32px-48px), font-weight: 700
  - Body: 1rem-1.25rem (16px-20px), font-weight: 400

### Tema

**Tema escuro (dark mode)** como padrão, com fundo preto/cinza muito escuro e elementos vibrantes que se destacam.

---

## 🏗️ Estrutura da Landing Page

### 1. Hero Section (Seção Principal)

**Objetivo:** Capturar atenção imediatamente e comunicar a proposta de valor.

**Elementos:**
- **Logo:** Centralizado no topo (usar logo com fundo escuro)
- **Badge:** "Ferramenta profissional para criadores de conteúdo" com ícone de estrela
- **Headline Principal:**
  ```
  Crie conteúdo em volume com consistência e estratégia
  ```
  - Destaque "com consistência" com gradiente azul-laranja
  - Tamanho: 5xl-7xl (muito grande)
  - Font-weight: 900 (black)

- **Subheadline:**
  ```
  O Contentyx transforma briefing, branding e posicionamento do seu cliente 
  em roteiros prontos, estruturados para reter, engajar e crescer.
  ```
  - Tamanho: xl-2xl
  - Cor: texto secundário (mais suave)
  - Destaque "roteiros prontos" em azul neon

- **CTAs (Call-to-Actions):**
  - **Primário:** "Começar Teste Gratuito" (botão com gradiente, grande, com ícone de seta →)
  - **Secundário:** "Ver Como Funciona" (botão outline transparente)

- **Trust Indicators:**
  - ✓ Teste grátis por 7 dias
  - ✓ Cancele quando quiser
  - ✓ Sem cartão de crédito

- **Elementos Visuais:**
  - Fundo com gradiente sutil de azul e laranja (blur extremo)
  - Círculos decorativos animados (float animation)
  - Indicador de scroll (mouse animado) no bottom

**Layout:** Centralizado, espaçoso, com muito ar (padding generoso)

---

### 2. Seção de Problemas (Social Proof Reverso)

**Objetivo:** Criar identificação com as dores do público-alvo.

**Título:**
```
Você já sabe criar. Agora é hora de escalar.
```
- Destaque "Agora é hora de escalar" com gradiente

**Subtítulo:**
```
Reconhece algum desses desafios no seu dia a dia?
```

**Grid de Problemas (2 colunas em desktop, 1 em mobile):**

1. **Falta de tempo para criar em volume**
   - Ícone: Relógio (Clock)
   - Descrição: "Você precisa entregar dezenas de conteúdos por semana, mas o tempo não é suficiente para manter a qualidade."

2. **Dificuldade de manter consistência**
   - Ícone: Alvo (Target)
   - Descrição: "Cada cliente tem sua voz única, e manter o mesmo estilo em todo conteúdo é um desafio constante."

3. **Travamento criativo**
   - Ícone: Lâmpada (Lightbulb)
   - Descrição: "Encontrar boas ideias todos os dias é exaustivo. O bloqueio criativo atrasa suas entregas."

4. **Pressão por resultados**
   - Ícone: Gráfico crescente (TrendingUp)
   - Descrição: "Clientes exigem conteúdo que engaja e converte. A pressão por performance é cada vez maior."

**Cards:**
- Fundo: card background
- Border: sutil, hover com borda azul neon
- Padding: generoso (2rem)
- Hover: elevação (shadow) e leve translação para cima

**Declaração de Transição:**
```
É hora de trabalhar com método, não com esforço.
```

---

### 3. Seção de Benefícios

**Objetivo:** Apresentar a solução e seus principais benefícios.

**Badge:** "A Solução Completa"

**Título:**
```
Volume não é sobre esforço. É sobre sistema.
```
- Destaque "É sobre sistema" com gradiente

**Subtítulo:**
```
O Contentyx entrega tudo que você precisa para escalar sua produção 
de conteúdo com qualidade profissional.
```

**Grid de Benefícios (3 colunas em desktop):**

1. **Padronização**
   - Ícone: CheckCircle
   - Badge: "100% consistente"
   - Descrição: "Seu conteúdo para cada cliente mantém coerência de linguagem. Crie uma identidade forte e reconhecível."

2. **Velocidade**
   - Ícone: Zap (raio)
   - Badge: "10x mais rápido"
   - Descrição: "Você entrega 30 conteúdos em 40 minutos, não em 2 dias. Multiplique sua produtividade sem aumentar a equipe."

3. **Estratégia**
   - Ícone: Brain (cérebro)
   - Badge: "IA estratégica"
   - Descrição: "Cada roteiro já vem com probabilidade de viralização, baseada em tendências e padrões de engajamento."

4. **Organização**
   - Ícone: FolderKanban
   - Badge: "Gestão completa"
   - Descrição: "Biblioteca para salvar, arquivar, renomear e organizar conteúdos por cliente. Tudo em um só lugar."

5. **Relevância Atual**
   - Ícone: TrendingUp
   - Badge: "Sempre atualizado"
   - Descrição: "A Home mostra tendências e assuntos quentes do dia, para você não perder timing e surfar nas trends."

**Cards:**
- Badge de métrica no topo direito (pequeno, com gradiente)
- Ícone grande em fundo com gradiente suave
- Hover: scale up do ícone, elevação do card

**Box de Destaque (Bottom):**
```
Sua operação de Social Media agora produz o dobro no mesmo tempo.
Menos improviso. Mais estratégia. Mais resultados.
```
- Fundo com gradiente suave
- Border com cor primária

---

### 4. Seção Como Funciona

**ID da seção:** `how-it-works` (para scroll suave)

**Título:**
```
Menos improviso. Mais estratégia.
```
- Destaque "Mais estratégia" com gradiente

**Subtítulo:**
```
Um processo simples e eficiente que transforma ideias em 
conteúdo profissional em minutos.
```

**4 Passos (Grid de 4 colunas em desktop):**

Cada passo tem:
- **Número grande:** 01, 02, 03, 04 (em badge circular com gradiente)
- **Ícone:** em fundo colorido
- **Título:** curto e direto
- **Descrição:** explicativa

**Passos:**

1. **Informe o contexto**
   - Ícone: FileText
   - "Nicho, voz e posicionamento do cliente. O Contentyx entende a identidade da marca."

2. **Escreva ou grave uma ideia**
   - Ícone: Mic (microfone)
   - "Digite um conceito ou grave um áudio. Simples e rápido, do jeito que você preferir."

3. **Receba roteiros prontos**
   - Ícone: Sparkles (estrelas)
   - "10+ roteiros estruturados com Hook + Desenvolvimento + CTA, otimizados para engajamento."

4. **Salve, edite e publique**
   - Ícone: Save
   - "Organize na biblioteca, faça ajustes finais e publique. Tudo em um só lugar."

**Elementos visuais:**
- Linha conectora entre os passos (horizontal, gradiente)
- Setas entre cards (apenas desktop)

**Declaração Bottom:**
```
De uma ideia simples a 10+ roteiros profissionais em minutos.
É assim que profissionais escalam sem perder qualidade.
```

---

### 5. Seção de Features/Diferenciais

**Título:**
```
O Contentyx entende o que importa
```
- Destaque "o que importa" com gradiente

**Subtítulo:**
```
Tecnologia de IA que vai além da geração de texto. 
Entende contexto, estratégia e objetivos.
```

**Grid de Features (3 colunas, 6 itens):**

1. **Análise de Nicho e Persona**
   - Ícone: Users
   - "Entende profundamente o público-alvo e adapta a linguagem para cada segmento."

2. **Adaptação de Linguagem**
   - Ícone: MessageSquare
   - "Mantém a voz única de cada cliente em todos os conteúdos gerados."

3. **Arquétipos de Comunicação**
   - Ícone: Palette
   - "Aplica arquétipos de marca para criar narrativas consistentes e impactantes."

4. **Objetivo Claro**
   - Ícone: Target
   - "Cada conteúdo é gerado com um objetivo específico: educar, engajar ou converter."

5. **Hook + Desenvolvimento + CTA**
   - Ícone: Zap
   - "Estrutura completa e profissional em todos os roteiros, pronta para publicar."

6. **Probabilidade de Viralização**
   - Ícone: BarChart3
   - "Análise baseada em tendências e padrões de engajamento para maximizar alcance."

**Box de Destaque - Biblioteca:**

Grande card com fundo gradiente e elementos decorativos:

**Título:**
```
Biblioteca de Conteúdos Organizados
```

**Descrição:**
```
Salve, arquive, renomeie e organize todos os seus conteúdos por cliente. 
Acesse o histórico completo e reutilize ideias vencedoras sempre que precisar.
```

**Tags:**
- 📁 Organização por cliente
- 🔍 Busca avançada
- ⭐ Favoritos
- 📊 Histórico completo

---

### 6. Seção de Depoimentos (Social Proof)

**Título:**
```
Quem usa, escala
```
- Destaque "escala" com gradiente

**Subtítulo:**
```
Profissionais que transformaram sua produção de conteúdo com o Contentyx.
```

**3 Depoimentos (Grid de 3 colunas):**

1. **"Hoje consigo atender 12 clientes sem precisar aumentar a equipe."**
   - Autor: Gestora de Social Media, 27 anos
   - Highlight: "12 clientes"

2. **"O Contentyx virou a base do meu fluxo de criação. Tempo é dinheiro."**
   - Autor: Dono de Mini Agência, 31 anos
   - Highlight: "Base do fluxo"

3. **"Agora meus conteúdos têm consistência e narrativa. Ficaram profissionais."**
   - Autor: Criador/Influenciador, 24 anos
   - Highlight: "Profissionais"

**Cards de Depoimento:**
- Ícone de aspas (Quote) no topo
- Badge com highlight
- Borda inferior com gradiente no hover
- Elevação e translação no hover

**Stats (4 colunas):**

| Métrica | Valor |
|---------|-------|
| Produtividade | **10x** |
| Tempo | **40min** para 30 conteúdos |
| Consistência | **100%** |
| Conteúdos | **∞** ilimitados |

---

### 7. Seção de Pricing

**ID da seção:** `pricing` (para scroll suave dos CTAs)

**Título:**
```
Comece hoje por R$ 25/mês
```
- Destaque "R$ 25/mês" com gradiente

**Subtítulo:**
```
Investimento que se paga no primeiro dia de uso.
```

**Card de Pricing (Único, centralizado):**

- **Border:** Gradiente azul-laranja (1-2px)
- **Badge:** "🎉 Teste Grátis por 7 Dias"
- **Preço:** R$ 25/mês (gigante, com gradiente)
- **Nota:** "Sem cartão de crédito no teste gratuito. Cancele quando quiser."

**Features incluídas (2 colunas):**
- ✓ Conteúdos ilimitados
- ✓ Todos os recursos incluídos
- ✓ Biblioteca de organização
- ✓ Tendências em tempo real
- ✓ Análise de viralização
- ✓ Suporte prioritário
- ✓ Atualizações constantes
- ✓ Cancele quando quiser

**Formulário de Cadastro:**
- Input de e-mail (grande, arredondado)
- Botão "Começar Grátis" (gradiente, com seta)
- Layout: flexbox (input + botão lado a lado em desktop)

**Nota legal:**
```
Ao se cadastrar, você concorda com nossos Termos de Uso e Política de Privacidade.
```

**Trust badges:**
- ✓ Pagamento seguro
- ✓ Dados protegidos
- ✓ Suporte em português

**Garantia:**
```
💯 Garantia de 7 dias
Não gostou? Devolvemos 100% do seu dinheiro, sem perguntas.
```

---

### 8. Seção de FAQ

**Título:**
```
Perguntas Frequentes
```
- Destaque "Frequentes" com gradiente

**Subtítulo:**
```
Tudo que você precisa saber sobre o Contentyx.
```

**Accordion com 8 perguntas:**

1. **Como funciona o teste gratuito?**
   - "Você tem 7 dias completos para testar todas as funcionalidades do Contentyx sem pagar nada. Não pedimos cartão de crédito no cadastro. Após o período de teste, você decide se quer continuar por apenas R$ 25/mês."

2. **Posso cancelar a qualquer momento?**
   - "Sim! Você pode cancelar sua assinatura a qualquer momento, sem multas ou taxas. O cancelamento é instantâneo e você mantém acesso até o final do período pago."

3. **Quantos conteúdos posso gerar?**
   - "Conteúdos ilimitados! Não há limite de geração. Você pode criar quantos roteiros precisar para todos os seus clientes, sem restrições."

4. **Funciona para qualquer nicho?**
   - "Sim! O Contentyx foi treinado para entender e adaptar-se a qualquer nicho de mercado. Seja moda, tecnologia, saúde, finanças ou qualquer outro segmento, a IA se adapta à linguagem e contexto específicos."

5. **Preciso de conhecimento técnico?**
   - "Não! O Contentyx foi desenvolvido para ser extremamente intuitivo. Se você sabe usar redes sociais, você sabe usar o Contentyx. Interface simples e processo guiado passo a passo."

6. **Os conteúdos são originais?**
   - "Sim! Cada conteúdo é gerado de forma única, baseado nas informações que você fornece. A IA cria roteiros originais, não copia de outras fontes. Você sempre terá conteúdo exclusivo."

7. **Posso editar os conteúdos gerados?**
   - "Claro! Todos os conteúdos podem ser editados, salvos e organizados na sua biblioteca pessoal. O Contentyx gera a base profissional, e você faz os ajustes finais que preferir."

8. **Tem suporte em português?**
   - "Sim! Todo o suporte é em português, com equipe dedicada para ajudar você. Respondemos dúvidas rapidamente por e-mail e chat."

**Estilo do Accordion:**
- Cards individuais com border
- Hover: border azul neon
- Ícone de + / - para expandir
- Transição suave

**CTA de Contato:**
```
Ainda tem dúvidas?
Nossa equipe está pronta para ajudar você.
```
- Botão: "Falar com Suporte"

---

### 9. CTA Final (Call-to-Action)

**Fundo:** Gradiente vibrante com elementos decorativos animados

**Título:**
```
Quem tem método, vence na consistência
```
- Destaque "vence na consistência" com gradiente

**Subtítulo:**
```
Sua operação de Social Media agora produz o dobro no mesmo tempo.
```

**CTA Principal:**
- Botão gigante: "Começar Agora Grátis" (com seta)
- Gradiente, shadow forte
- Hover: leve opacidade

**Trust indicators:**
- ✓ 7 dias grátis
- ✓ Sem cartão de crédito
- ✓ Cancele quando quiser
- ✓ Suporte em português

**Declaração final:**
```
Junte-se a centenas de profissionais que já escalaram sua produção de conteúdo.
```

---

### 10. Footer

**Layout:** 5 colunas em desktop (1 coluna em mobile)

**Coluna 1 - Brand (2 colunas de largura):**
- Logo
- Descrição curta: "Ferramenta profissional de geração de conteúdo com IA. Velocidade, estratégia e consistência para Social Medias, Agências e Criadores."
- Ícones de redes sociais (Instagram, Facebook, Twitter, LinkedIn, YouTube)

**Coluna 2 - Produto:**
- Recursos
- Como Funciona
- Preços
- FAQ

**Coluna 3 - Empresa:**
- Sobre Nós
- Blog
- Carreiras
- Contato

**Coluna 4 - Legal:**
- Termos de Uso
- Política de Privacidade
- Cookies
- LGPD

**Bottom Bar:**
- Copyright: "© 2024 Contentyx. Todos os direitos reservados."
- "Feito com 💙 para criadores de conteúdo"

**Estilo:**
- Fundo: card background
- Border top: sutil
- Links: hover com cor primária
- Ícones sociais: hover com fundo colorido

---

## 🎯 Diretrizes de Design

### Layout e Espaçamento

- **Container máximo:** 1280px
- **Padding lateral:** 1rem (mobile), 1.5rem (tablet), 2rem (desktop)
- **Espaçamento entre seções:** 6rem (96px) em desktop, 4rem (64px) em mobile
- **Espaçamento interno de cards:** 2rem (32px)
- **Border radius:** 0.75rem-1.5rem (12px-24px) para cards e botões

### Responsividade

- **Mobile-first:** Design pensado primeiro para mobile
- **Breakpoints:**
  - Mobile: < 640px
  - Tablet: 640px - 1024px
  - Desktop: > 1024px
- **Grid:** 1 coluna (mobile) → 2 colunas (tablet) → 3-4 colunas (desktop)

### Animações

**Animações suaves e profissionais:**

1. **Float animation** (elementos decorativos):
   ```css
   @keyframes float {
     0%, 100% { transform: translateY(0px); }
     50% { transform: translateY(-20px); }
   }
   animation: float 6s ease-in-out infinite;
   ```

2. **Fade-in** (elementos ao carregar):
   - Opacity: 0 → 1
   - Transform: translateY(20px) → translateY(0)
   - Duration: 0.6s

3. **Hover effects:**
   - Cards: translateY(-4px) + shadow increase
   - Buttons: opacity 0.9
   - Icons: scale(1.1)
   - Links: color change

4. **Scroll suave:**
   ```javascript
   element.scrollIntoView({ behavior: 'smooth' });
   ```

### Acessibilidade

- **Contraste:** Mínimo 4.5:1 para texto normal
- **Focus visible:** Sempre visível em elementos interativos
- **Alt text:** Em todas as imagens
- **Aria labels:** Em botões e links sem texto
- **Keyboard navigation:** Todos os elementos interativos acessíveis via teclado

---

## 💻 Tecnologias Recomendadas

### Para Lovable

- **Framework:** React 19
- **Styling:** Tailwind CSS 4
- **Componentes:** shadcn/ui
- **Animações:** CSS animations + Framer Motion (opcional)
- **Ícones:** Lucide React
- **Formulários:** React Hook Form + Zod (validação)

### Para WordPress

- **Page Builder:** Elementor Pro ou Bricks Builder
- **Tema:** Tema leve e customizável (Astra, GeneratePress, Kadence)
- **Plugins:**
  - Contact Form 7 ou WPForms (formulários)
  - Lottie animations (animações)
  - WP Rocket (performance)
  - Yoast SEO (otimização)

---

## 📝 Copywriting - Tom de Voz

### Características

- **Profissional** mas acessível
- **Seguro** e confiante
- **Inteligente** sem ser arrogante
- **Consultor** não guru
- **Método e precisão** sobre promessas vazias

### Palavras-chave

**Usar:**
- Escalar, sistema, método, estratégia, consistência
- Profissional, produtividade, eficiência
- Velocidade, organização, estrutura
- Roteiros, conteúdo, narrativa

**Evitar:**
- Mágico, milagroso, revolucionário
- Fácil demais, automático demais
- Linguagem muito casual ou gírias
- Promessas irreais

### Estrutura de Headlines

**Fórmula:** [Benefício claro] + [Diferencial] + [Resultado]

Exemplos:
- "Crie conteúdo em volume **com consistência** e estratégia"
- "Volume não é sobre esforço. **É sobre sistema**."
- "Menos improviso. **Mais estratégia**."

---

## 🚀 Funcionalidades Técnicas

### Formulário de Cadastro

**Campos:**
- E-mail (obrigatório, validação)

**Validações:**
- E-mail válido
- Campo não vazio
- Mensagem de erro clara

**Feedback:**
- Toast de sucesso: "Cadastro realizado! Verifique seu e-mail para começar o teste gratuito."
- Toast de erro: "Por favor, insira um e-mail válido."

**Integração:**
- Preparado para integração com backend/API
- Placeholder para envio de dados

### Scroll Suave

**Implementação:**
```javascript
const scrollToSection = (id) => {
  const element = document.getElementById(id);
  element?.scrollIntoView({ behavior: 'smooth' });
};
```

**IDs importantes:**
- `#how-it-works`
- `#pricing`
- `#faq`

### Performance

- **Lazy loading:** Imagens e componentes pesados
- **Otimização de imagens:** WebP, tamanhos responsivos
- **Minificação:** CSS e JS
- **Cache:** Headers apropriados
- **Core Web Vitals:** LCP < 2.5s, FID < 100ms, CLS < 0.1

---

## 📦 Assets Necessários

### Logos

Você tem acesso aos seguintes logos do Contentyx:

- `logo-full-white.jpg` - Logo completo com texto em fundo escuro
- `logo-full-black.png` - Logo completo com texto em fundo claro
- `logo-icon-white.png` - Ícone apenas (sem texto) em fundo escuro
- `logo-icon-black.jpg` - Ícone apenas (sem texto) em fundo claro
- `logo-text-black.png` - Texto "Contentyx" apenas
- `logo-icon-gradient.png` - Ícone com gradiente (melhor para fundos escuros)

**Uso recomendado:**
- Hero e Header: `logo-full-white.jpg` ou `logo-icon-gradient.png`
- Footer: `logo-full-white.jpg`
- Favicon: `logo-icon-gradient.png` (redimensionado)

### Ícones

Use biblioteca **Lucide React** ou **Font Awesome** para todos os ícones mencionados.

### Imagens Decorativas

**Opcional:** Adicione mockups ou screenshots do produto se disponível. Caso contrário, use elementos decorativos abstratos (círculos, gradientes, formas geométricas).

---

## ✅ Checklist de Implementação

### Design
- [ ] Paleta de cores aplicada corretamente
- [ ] Fonte Inter carregada e aplicada
- [ ] Gradientes nos elementos corretos
- [ ] Espaçamento consistente
- [ ] Border radius consistente

### Conteúdo
- [ ] Todas as 10 seções implementadas
- [ ] Copywriting seguindo o tom de voz
- [ ] CTAs claros e repetidos
- [ ] Trust indicators presentes

### Funcionalidades
- [ ] Formulário de cadastro funcional
- [ ] Scroll suave entre seções
- [ ] Accordion do FAQ funcionando
- [ ] Links do footer funcionando

### Responsividade
- [ ] Mobile (< 640px) testado
- [ ] Tablet (640px-1024px) testado
- [ ] Desktop (> 1024px) testado
- [ ] Imagens responsivas

### Performance
- [ ] Imagens otimizadas
- [ ] Lazy loading implementado
- [ ] CSS minificado
- [ ] JS minificado

### Acessibilidade
- [ ] Contraste adequado
- [ ] Alt text em imagens
- [ ] Navegação por teclado
- [ ] Aria labels

### SEO (WordPress)
- [ ] Meta title otimizado
- [ ] Meta description otimizada
- [ ] Heading hierarchy (H1, H2, H3)
- [ ] Schema markup (Organization, Product)

---

## 🎨 Exemplo de Código CSS (Lovable/Tailwind)

```css
/* Cores customizadas no Tailwind config */
:root {
  --brand-blue-neon: oklch(0.65 0.25 230);
  --brand-blue-deep: oklch(0.55 0.28 260);
  --brand-orange-neon: oklch(0.70 0.22 50);
  --brand-yellow-gold: oklch(0.85 0.18 85);
}

/* Gradiente principal */
.gradient-brand {
  background: linear-gradient(135deg, var(--brand-blue-neon) 0%, var(--brand-orange-neon) 100%);
}

/* Texto com gradiente */
.text-gradient {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-image: linear-gradient(135deg, var(--brand-blue-neon) 0%, var(--brand-orange-neon) 100%);
}

/* Animação float */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

/* Glow effects */
.glow-blue {
  box-shadow: 0 0 40px color-mix(in oklch, var(--brand-blue-neon), transparent 70%);
}

.glow-orange {
  box-shadow: 0 0 40px color-mix(in oklch, var(--brand-orange-neon), transparent 70%);
}
```

---

## 🔗 Integrações Futuras (Opcional)

Prepare a estrutura para futuras integrações:

1. **Analytics:**
   - Google Analytics 4
   - Facebook Pixel
   - Hotjar (heatmaps)

2. **Marketing:**
   - Mailchimp / SendGrid (e-mail marketing)
   - Intercom / Drift (chat)
   - Calendly (agendamento de demos)

3. **Pagamento:**
   - Stripe
   - PagSeguro / Mercado Pago

4. **CRM:**
   - HubSpot
   - Pipedrive
   - RD Station

---

## 📞 Informações de Contato (Placeholder)

Use estes placeholders até ter as informações reais:

- **E-mail:** contato@contentyx.com
- **Telefone:** +55 (11) 9999-9999
- **Endereço:** São Paulo, SP - Brasil
- **Redes Sociais:** @contentyx (Instagram, Facebook, Twitter, LinkedIn)

---

## 🎯 Métricas de Sucesso

**Objetivo:** Taxa de conversão > 3% (visitantes → cadastros)

**KPIs principais:**
1. Taxa de conversão do formulário
2. Tempo médio na página (> 2 minutos)
3. Taxa de rejeição (< 50%)
4. Scroll depth (> 75% chegam ao pricing)
5. Cliques nos CTAs

**Ferramentas de medição:**
- Google Analytics
- Hotjar (heatmaps)
- Microsoft Clarity
- A/B testing (Google Optimize)

---

## 🚀 Próximos Passos Após Implementação

1. **Testes A/B:**
   - Testar diferentes headlines
   - Testar cores de CTAs
   - Testar posições de formulário

2. **Otimizações:**
   - Adicionar vídeo explicativo no Hero
   - Adicionar calculadora de ROI
   - Adicionar chat ao vivo

3. **Conteúdo:**
   - Criar blog integrado
   - Adicionar case studies detalhados
   - Criar página de recursos

4. **SEO:**
   - Otimizar para palavras-chave
   - Criar backlinks
   - Otimizar velocidade

---

## 📄 Resumo Executivo

Esta landing page foi projetada para **maximizar conversões** através de:

1. **Proposta de valor clara** logo no Hero
2. **Identificação com problemas** do público-alvo
3. **Apresentação de benefícios tangíveis** com métricas
4. **Processo simples e visual** de como funciona
5. **Prova social** através de depoimentos reais
6. **Preço acessível** com teste gratuito sem fricção
7. **Redução de objeções** através do FAQ completo
8. **Múltiplos CTAs** estrategicamente posicionados

**Design moderno e profissional** que transmite confiança, com paleta vibrante que chama atenção sem ser agressiva.

**Público-alvo:** Social Medias, Agências de Marketing, Influenciadores e Prestadores de Serviço que precisam escalar produção de conteúdo mantendo qualidade e consistência.

---

**Boa sorte com a implementação! 🚀**
