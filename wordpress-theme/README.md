# Tema WordPress - Contentyx Landing Page

Este diretório contém o tema WordPress completo para a landing page do Contentyx.

## 📦 Arquivos Disponíveis

- **`contentyx/`** - Pasta do tema (use esta para desenvolvimento)
- **`contentyx-theme.zip`** - Arquivo ZIP pronto para upload no WordPress
- **`WORDPRESS_INSTALLATION_GUIDE.md`** - Guia completo de instalação

## 🚀 Instalação Rápida

### Método 1: Upload Direto

1. Baixe o arquivo `contentyx-theme.zip`
2. Acesse seu WordPress em `seu-site.com/wp-admin`
3. Vá em **Aparência → Temas → Adicionar Novo**
4. Clique em **Enviar Tema**
5. Escolha o arquivo `contentyx-theme.zip`
6. Clique em **Instalar Agora** e depois **Ativar**

### Método 2: FTP/cPanel

1. Extraia a pasta `contentyx` do ZIP
2. Faça upload via FTP para `/wp-content/themes/`
3. No WordPress, vá em **Aparência → Temas**
4. Ative o tema **Contentyx Landing**

## 📄 Criar Landing Page

Após ativar o tema:

1. Vá em **Páginas → Adicionar Nova**
2. Dê um título (ex: "Home")
3. No lado direito, em **Atributos da Página**, selecione **"Landing Page Contentyx"**
4. Publique
5. Vá em **Configurações → Leitura**
6. Selecione "Uma página estática" e escolha a página criada
7. Salve

## 🎨 Usar com Elementor

1. Instale o plugin **Elementor**
2. Ative o tema Contentyx (para ter os estilos)
3. Crie uma nova página e edite com Elementor
4. Recrie as seções usando os widgets do Elementor
5. Use as classes CSS do tema para manter o estilo

## 📚 Documentação Completa

Leia o arquivo **`WORDPRESS_INSTALLATION_GUIDE.md`** para:

- Instruções detalhadas de instalação
- Configuração de formulários
- Integração com plugins
- Otimização de performance
- Solução de problemas
- Configuração de SEO e Analytics

## 🎯 Estrutura do Tema

```
contentyx/
├── style.css              # Estilos principais (obrigatório)
├── functions.php          # Funções do tema
├── index.php              # Template padrão
├── header.php             # Cabeçalho
├── footer.php             # Rodapé
├── page-templates/        # Templates personalizados
│   └── landing-page.php   # Template da landing page
├── css/                   # Estilos adicionais
├── js/                    # JavaScript
│   └── main.js           # Script principal
├── images/                # Logos e assets
└── inc/                   # Includes (vazio por enquanto)
```

## ⚙️ Recursos do Tema

✅ Template de landing page completo
✅ Suporte a Elementor
✅ Design responsivo (mobile-first)
✅ Paleta de cores Contentyx
✅ Animações suaves
✅ Formulário de cadastro
✅ FAQ com accordion
✅ Seções otimizadas para conversão
✅ SEO-friendly
✅ Compatível com WordPress 5.0+

## 🔧 Personalização

### Alterar Cores

Edite as variáveis CSS no arquivo `style.css`:

```css
:root {
  --brand-blue-neon: #00A8FF;
  --brand-orange-neon: #FF8A00;
  /* ... outras cores */
}
```

### Alterar Textos

Use o **Customizer** do WordPress:

- **Aparência → Personalizar**
- Ou edite diretamente o arquivo `page-templates/landing-page.php`

### Adicionar Funcionalidades

Edite o arquivo `functions.php` para adicionar:

- Novos widgets
- Shortcodes personalizados
- Integrações com APIs
- Custom Post Types

## 📞 Suporte

- **Documentação:** `WORDPRESS_INSTALLATION_GUIDE.md`
- **GitHub:** https://github.com/Contentybr/contentyx-landing
- **Issues:** https://github.com/Contentybr/contentyx-landing/issues

## 📝 Licença

Este tema é propriedade do Contentyx.

---

**Desenvolvido com 💙 para o Contentyx**
