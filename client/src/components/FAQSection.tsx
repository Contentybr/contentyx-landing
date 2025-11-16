import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
import { Button } from "@/components/ui/button";

const faqs = [
  {
    question: "Como funciona o teste gratuito?",
    answer: "Você tem 7 dias completos para testar todas as funcionalidades do Contentyx sem pagar nada. Não pedimos cartão de crédito no cadastro. Após o período de teste, você decide se quer continuar por apenas R$ 25/mês."
  },
  {
    question: "Posso cancelar a qualquer momento?",
    answer: "Sim! Você pode cancelar sua assinatura a qualquer momento, sem multas ou taxas. O cancelamento é instantâneo e você mantém acesso até o final do período pago."
  },
  {
    question: "Quantos conteúdos posso gerar?",
    answer: "Conteúdos ilimitados! Não há limite de geração. Você pode criar quantos roteiros precisar para todos os seus clientes, sem restrições."
  },
  {
    question: "Funciona para qualquer nicho?",
    answer: "Sim! O Contentyx foi treinado para entender e adaptar-se a qualquer nicho de mercado. Seja moda, tecnologia, saúde, finanças ou qualquer outro segmento, a IA se adapta à linguagem e contexto específicos."
  },
  {
    question: "Preciso de conhecimento técnico?",
    answer: "Não! O Contentyx foi desenvolvido para ser extremamente intuitivo. Se você sabe usar redes sociais, você sabe usar o Contentyx. Interface simples e processo guiado passo a passo."
  },
  {
    question: "Os conteúdos são originais?",
    answer: "Sim! Cada conteúdo é gerado de forma única, baseado nas informações que você fornece. A IA cria roteiros originais, não copia de outras fontes. Você sempre terá conteúdo exclusivo."
  },
  {
    question: "Posso editar os conteúdos gerados?",
    answer: "Claro! Todos os conteúdos podem ser editados, salvos e organizados na sua biblioteca pessoal. O Contentyx gera a base profissional, e você faz os ajustes finais que preferir."
  },
  {
    question: "Tem suporte em português?",
    answer: "Sim! Todo o suporte é em português, com equipe dedicada para ajudar você. Respondemos dúvidas rapidamente por e-mail e chat."
  }
];

export default function FAQSection() {
  return (
    <section className="py-24 bg-card/30">
      <div className="container">
        <div className="max-w-3xl mx-auto">
          {/* Header */}
          <div className="text-center mb-12 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              Perguntas <span className="text-gradient">Frequentes</span>
            </h2>
            <p className="text-xl text-muted-foreground">
              Tudo que você precisa saber sobre o Contentyx.
            </p>
          </div>

          {/* FAQ Accordion */}
          <Accordion type="single" collapsible className="space-y-4">
            {faqs.map((faq, index) => (
              <AccordionItem
                key={index}
                value={`item-${index}`}
                className="bg-background border border-border rounded-xl px-6 hover:border-primary/50 transition-colors"
              >
                <AccordionTrigger className="text-left text-lg font-semibold hover:text-primary transition-colors py-6">
                  {faq.question}
                </AccordionTrigger>
                <AccordionContent className="text-muted-foreground leading-relaxed pb-6">
                  {faq.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>

          {/* Contact CTA */}
          <div className="mt-12 text-center p-8 rounded-2xl bg-gradient-to-br from-primary/10 to-secondary/10 border border-primary/20">
            <p className="text-lg font-semibold mb-2">
              Ainda tem dúvidas?
            </p>
            <p className="text-muted-foreground mb-4">
              Nossa equipe está pronta para ajudar você.
            </p>
            <Button 
              variant="outline" 
              className="bg-transparent"
              onClick={() => window.open('mailto:contato@contentyx.com', '_blank')}
            >
              Falar com Suporte
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
}
