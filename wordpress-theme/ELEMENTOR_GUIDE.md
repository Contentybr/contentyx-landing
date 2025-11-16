# Guia de Uso com Elementor - Tema Contentyx

Este guia mostra como usar o tema Contentyx com o Elementor para criar sua landing page.

---

## 🎯 Passo a Passo Completo

### 1. Instalar Plugins Necessários

1. Acesse **Plugins → Adicionar Novo**
2. Instale e ative:
   - **Elementor** (obrigatório)
   - **Elementor Pro** (opcional, mas recomendado para formulários)

### 2. Criar Nova Página

1. Vá em **Páginas → Adicionar Nova**
2. Dê um título: **"Landing Page"** ou **"Home"**
3. **NÃO adicione conteúdo ainda**
4. No lado direito, em **Atributos da Página**, selecione um dos templates:
   - **Elementor Canvas** (sem header/footer - recomendado para landing page)
   - **Elementor Full Width** (com header/footer do tema)
5. Publique a página

### 3. Editar com Elementor

1. Na mesma página, clique no botão **"Editar com Elementor"** (azul, no topo)
2. O Elementor vai abrir em modo de edição visual

### 4. Criar as Seções da Landing Page

Agora você vai recriar as seções da landing page usando os widgets do Elementor:

#### **Seção 1: Hero (Topo)**

1. Clique em **"+"** para adicionar nova seção
2. Escolha **1 coluna**
3. Configurações da seção:
   - **Estilo → Background:**
     - Tipo: Gradient
     - Cor 1: `#00A8FF` (Azul Neon)
     - Cor 2: `#FF8A00` (Laranja Neon)
     - Ângulo: 135deg
   - **Layout:**
     - Altura mínima: 100vh
     - Alinhamento vertical: Centro

4. Adicione widgets na coluna:
   - **Widget de Imagem:**
     - Faça upload do logo (`logo-full-text.png`)
     - Alinhamento: Centro
     - Largura: 300px

   - **Widget de Título:**
     - Texto: "Crie conteúdo em volume com **consistência** e **estratégia**"
     - Tag HTML: H1
     - Cor: Branco
     - Alinhamento: Centro
     - Tamanho: 60px (desktop), 36px (mobile)

   - **Widget de Texto:**
     - Texto: "O Contentyx transforma briefing simples em roteiros prontos..."
     - Cor: Cinza claro (#A3A3A3)
     - Alinhamento: Centro
     - Tamanho: 20px

   - **Widget de Botão:**
     - Texto: "Começar Teste Gratuito"
     - Link: #pricing
     - Estilo:
       - Background: Gradient (Azul → Laranja)
       - Cor do texto: Branco
       - Padding: 20px 40px
       - Border Radius: 12px

#### **Seção 2: Problemas**

1. Nova seção com **2 colunas**
2. Background: `#1A1A1A` (cinza escuro)
3. Padding: 80px (topo/baixo)

4. Em cada coluna, adicione **Widget de Ícone Box:**
   - Ícone: Escolha um emoji ou ícone relevante
   - Título: Ex: "Falta de tempo para planejar"
   - Descrição: Texto do problema
   - Cor do título: Branco
   - Cor da descrição: Cinza claro

5. Repita para 4 problemas (2 linhas, 2 colunas cada)

#### **Seção 3: Benefícios**

1. Nova seção com **3 colunas**
2. Background: Preto (`#0D0D0D`)
3. Padding: 80px

4. Em cada coluna, adicione **Widget de Ícone Box:**
   - Ícone: ⚡, 🎯, 📈, etc.
   - Título: "Produtividade", "Consistência", etc.
   - Descrição: Benefício detalhado
   - Estilo:
     - Border: 1px solid `#333333`
     - Border Radius: 16px
     - Padding: 30px
     - Hover: Border azul (`#00A8FF`)

6. Repita para 6 benefícios

#### **Seção 4: Como Funciona**

1. Nova seção com **4 colunas**
2. Background: `#1A1A1A`
3. Padding: 80px

4. Em cada coluna:
   - **Widget de Contador:**
     - Número: 1, 2, 3, 4
     - Cor: Azul Neon (`#00A8FF`)
     - Tamanho: 48px
   
   - **Widget de Título:**
     - Texto: "Defina o briefing", etc.
   
   - **Widget de Texto:**
     - Descrição do passo

#### **Seção 5: Features**

1. Nova seção com **3 colunas** (2 linhas)
2. Background: Preto
3. Padding: 80px

4. Use **Widget de Ícone Box** para cada feature:
   - 6 cards no total
   - Ícones: 📝, 🎨, 📊, 🗂️, ⚡, 🔄

#### **Seção 6: Pricing**

1. Nova seção com **1 coluna**
2. Background: `#1A1A1A`
3. Padding: 80px
4. Largura do conteúdo: 600px (centralizado)

5. Adicione:
   - **Widget de Título:**
     - Texto: "R$ 25/mês"
     - Tamanho: 72px
     - Cor: Branco
   
   - **Widget de Lista:**
     - Itens: ✓ Geração ilimitada, ✓ Biblioteca, etc.
   
   - **Widget de Formulário** (Elementor Pro):
     - Campo: E-mail
     - Botão: "Começar Teste Gratuito"
     - Ação: Mailchimp/Webhook/E-mail

   **OU se não tiver Elementor Pro:**
   
   - **Widget HTML:**
     ```html
     <form class="contentyx-form">
       <input type="email" placeholder="Seu melhor e-mail" required>
       <button type="submit" class="btn btn-primary">
         Começar Teste Gratuito
       </button>
     </form>
     ```

#### **Seção 7: FAQ**

1. Nova seção com **1 coluna**
2. Background: Preto
3. Padding: 80px
4. Largura: 800px (centralizado)

5. Adicione **Widget de Accordion** (ou Toggle):
   - Adicione 5-6 perguntas frequentes
   - Estilo:
     - Background: `#1A1A1A`
     - Border: `#333333`
     - Cor do título: Branco
     - Cor do conteúdo: Cinza

#### **Seção 8: CTA Final**

1. Nova seção com **1 coluna**
2. Background: Gradient (Azul → Laranja)
3. Padding: 100px
4. Alinhamento: Centro

5. Adicione:
   - **Widget de Título:**
     - Texto: "Quem tem método, vence na consistência"
     - Cor: Branco
     - Tamanho: 48px
   
   - **Widget de Botão:**
     - Texto: "Começar Teste Gratuito →"
     - Background: Branco
     - Cor do texto: Azul (`#00A8FF`)
     - Tamanho: Grande

### 5. Aplicar Estilos Globais

1. No Elementor, clique no ícone de **Hambúrguer** (☰) no canto superior esquerdo
2. Vá em **Site Settings → Global Colors**
3. Adicione as cores da marca:
   - Primary: `#00A8FF`
   - Secondary: `#FF8A00`
   - Text: `#FAFAFA`
   - Accent: `#0057FF`

4. Em **Site Settings → Global Fonts:**
   - Primary: Inter (Google Fonts)
   - Secondary: Inter

### 6. Configurar como Página Inicial

1. Publique a página no Elementor
2. Vá em **Configurações → Leitura**
3. Selecione **"Uma página estática"**
4. Escolha a página que você criou
5. Salve

### 7. Otimizações Finais

1. **Performance:**
   - No Elementor, vá em **Elementor → Settings → Advanced**
   - Ative: "Lazy Load Background Images"
   - Ative: "Optimized DOM Output"

2. **Responsividade:**
   - No editor do Elementor, use os ícones de dispositivo (desktop/tablet/mobile)
   - Ajuste tamanhos de fonte e espaçamentos para cada dispositivo

3. **Animações:**
   - Em cada widget, vá em **Advanced → Motion Effects**
   - Adicione animações de entrada (Fade In, Slide Up, etc.)

---

## 🎨 Paleta de Cores para Copiar

```
Azul Neon: #00A8FF
Azul Profundo: #0057FF
Laranja Neon: #FF8A00
Amarelo Dourado: #FFD33D
Preto: #0D0D0D
Cinza Escuro: #1A1A1A
Cinza Médio: #333333
Cinza Claro: #A3A3A3
Branco: #FFFFFF
```

---

## 📝 Classes CSS Disponíveis

O tema já tem classes CSS prontas que você pode usar nos widgets do Elementor:

### Em "Advanced → Custom CSS" de qualquer widget:

```css
/* Gradiente de texto */
selector {
  background: linear-gradient(135deg, #00A8FF 0%, #FF8A00 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Efeito de brilho azul */
selector {
  box-shadow: 0 0 40px rgba(0, 168, 255, 0.3);
}

/* Efeito de brilho laranja */
selector {
  box-shadow: 0 0 40px rgba(255, 138, 0, 0.3);
}

/* Animação flutuante */
selector {
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
```

---

## 🔧 Solução de Problemas

### Erro: "Área de conteúdo não encontrada"

**Solução:** Certifique-se de que selecionou o template **"Elementor Canvas"** ou **"Elementor Full Width"** nos Atributos da Página.

### Estilos não aparecem

**Solução:**
1. Limpe o cache do Elementor: **Elementor → Tools → Regenerate CSS**
2. Limpe o cache do WordPress
3. Force reload: `Ctrl + Shift + R`

### Formulário não funciona

**Solução:**
1. Use Elementor Pro Forms (recomendado)
2. Ou instale Contact Form 7 e use o shortcode
3. Ou use um serviço externo como Typeform/Google Forms

---

## ✅ Checklist de Publicação

Antes de publicar, verifique:

- [ ] Todas as seções criadas
- [ ] Cores aplicadas corretamente
- [ ] Fonte Inter carregada
- [ ] Logo adicionado
- [ ] Formulário funcionando
- [ ] Links dos botões configurados
- [ ] Testado em mobile
- [ ] Testado em tablet
- [ ] Velocidade < 3s (use GTmetrix)
- [ ] Página definida como inicial

---

**Pronto! Sua landing page está completa no Elementor! 🚀**
