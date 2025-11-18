# Como Importar o Template Elementor do Contentyx

Este guia explica como importar o arquivo JSON da landing page do Contentyx no Elementor.

## 📋 Requisitos

Antes de importar, certifique-se de ter:

- ✅ WordPress instalado e funcionando
- ✅ **Elementor** (versão gratuita ou Pro) instalado e ativado
- ✅ Um tema WordPress compatível com Elementor ativado

## 📥 Passo a Passo para Importação

### Método 1: Importar via Template Library (Recomendado)

1. **Acesse o WordPress Admin**
   - Faça login no painel administrativo do WordPress

2. **Abra a Biblioteca de Templates**
   - No menu lateral, vá em **Templates → Saved Templates**
   - Ou acesse diretamente: `seu-site.com/wp-admin/edit.php?post_type=elementor_library`

3. **Importe o Template**
   - Clique no botão **"Import Templates"** no topo da página
   - Clique em **"Choose File"** (Escolher Arquivo)
   - Selecione o arquivo `contentyx-landing-page.json`
   - Clique em **"Import Now"** (Importar Agora)

4. **Aceite o Aviso de Segurança**
   - Você verá um aviso: **"Warning: JSON files may be unsafe"**
   - Marque a opção **"Do not show this message again"** (opcional)
   - Clique em **"Continue"** para prosseguir

5. **Template Importado!**
   - O template será adicionado à sua biblioteca
   - Você verá uma mensagem de sucesso

### Método 2: Criar Página e Aplicar Template

1. **Crie uma Nova Página**
   - Vá em **Páginas → Adicionar Nova**
   - Dê um título (ex: "Landing Page Contentyx")
   - Clique em **"Editar com Elementor"**

2. **Insira o Template**
   - No editor do Elementor, clique no ícone de **pasta** (📁) no canto superior esquerdo
   - Selecione a aba **"My Templates"** (Meus Templates)
   - Clique no botão **"Import Template"** (ícone de upload ⬆️)
   - Escolha o arquivo `contentyx-landing-page.json`
   - Clique em **"Continue"** no aviso de segurança

3. **Aplique o Template**
   - Após a importação, o template aparecerá na lista
   - Clique em **"Insert"** (Inserir) para aplicá-lo à página

4. **Personalize e Publique**
   - Edite textos, cores e imagens conforme necessário
   - Clique em **"Publish"** (Publicar) para salvar

## 🎨 Personalizações Necessárias

Após importar, você precisará ajustar alguns elementos:

### 1. **Logo**
- Clique no widget de imagem do logo
- No painel lateral, em **"Choose Image"**, faça upload do logo `logo.png`
- Ajuste o tamanho se necessário

### 2. **Cores da Marca**
As cores do Contentyx já estão configuradas:
- Azul Neon: `#00A8FF`
- Laranja Neon: `#FF8A00`
- Preto: `#000000`
- Branco: `#FFFFFF`

### 3. **Links dos Botões**
- Clique em cada botão
- No painel lateral, em **"Link"**, configure a URL de destino:
  - "Começar Teste Gratuito" → Link para formulário de cadastro
  - "Ver Como Funciona" → `#how-it-works` (âncora interna)

### 4. **Formulário de Cadastro**
O template inclui apenas as seções visuais. Para adicionar um formulário funcional:
- Use **Elementor Form** (Elementor Pro)
- Ou instale um plugin como **Contact Form 7** ou **WPForms**
- Adicione o formulário na seção de Pricing

## ⚙️ Configurações Adicionais

### Definir como Página Inicial

1. Vá em **Configurações → Leitura**
2. Selecione **"Uma página estática"**
3. Em **"Página Inicial"**, escolha a página que você criou
4. Clique em **"Salvar Alterações"**

### Otimizar Performance

1. **Minificar CSS/JS**
   - Use um plugin como **Autoptimize** ou **WP Rocket**

2. **Lazy Loading de Imagens**
   - Ative em **Elementor → Settings → Advanced → Performance**

3. **Cache**
   - Instale **WP Super Cache** ou **W3 Total Cache**

## 🐛 Solução de Problemas

### "Warning: JSON files may be unsafe"
- **Solução:** Clique em "Continue". Este é um aviso de segurança padrão do Elementor para arquivos de fontes desconhecidas.

### Template não aparece após importação
- **Solução:** Limpe o cache do WordPress e do navegador, depois recarregue a página.

### Estilos não carregam corretamente
- **Solução:** 
  1. Vá em **Elementor → Tools → Regenerate CSS**
  2. Clique em **"Regenerate Files"**
  3. Limpe o cache

### Gradientes não aparecem
- **Solução:** Certifique-se de que está usando uma versão recente do Elementor (3.0+)

## 📚 Recursos Adicionais

- **Documentação Oficial do Elementor:** https://elementor.com/help/
- **Suporte Elementor:** https://elementor.com/support/
- **Comunidade Elementor:** https://www.facebook.com/groups/Elementors/

## ✅ Checklist Final

Antes de publicar, verifique:

- [ ] Logo carregado e visível
- [ ] Todos os textos revisados
- [ ] Links dos botões funcionando
- [ ] Formulário de cadastro configurado
- [ ] Página definida como inicial
- [ ] Testado em mobile e desktop
- [ ] Performance otimizada
- [ ] Cache limpo

---

**Pronto!** Sua landing page do Contentyx está configurada e pronta para converter visitantes em clientes! 🚀

Se tiver dúvidas ou problemas, consulte a documentação oficial do Elementor ou entre em contato com o suporte.
