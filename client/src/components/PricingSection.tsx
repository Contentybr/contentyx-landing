import { Button } from "@/components/ui/button";
import { Check, ArrowRight } from "lucide-react";
import { useState } from "react";
import { toast } from "sonner";

const features = [
  "Conteúdos ilimitados",
  "Todos os recursos incluídos",
  "Biblioteca de organização",
  "Tendências em tempo real",
  "Análise de viralização",
  "Suporte prioritário",
  "Atualizações constantes",
  "Cancele quando quiser"
];

export default function PricingSection() {
  const [email, setEmail] = useState("");

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!email) {
      toast.error("Por favor, insira seu e-mail");
      return;
    }
    // Aqui você integraria com seu backend/API
    toast.success("Cadastro realizado! Verifique seu e-mail para começar o teste gratuito.");
    setEmail("");
  };

  return (
    <section id="pricing" className="py-24 bg-gradient-to-b from-background via-accent/5 to-background relative overflow-hidden">
      {/* Decorative elements */}
      <div className="absolute top-1/2 left-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl" />
      <div className="absolute top-1/2 right-0 w-96 h-96 bg-secondary/10 rounded-full blur-3xl" />

      <div className="container relative z-10">
        <div className="max-w-4xl mx-auto">
          {/* Header */}
          <div className="text-center mb-12 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              Comece hoje por{" "}
              <span className="text-gradient">R$ 25/mês</span>
            </h2>
            <p className="text-xl text-muted-foreground">
              Investimento que se paga no primeiro dia de uso.
            </p>
          </div>

          {/* Pricing Card */}
          <div className="relative p-1 rounded-3xl bg-gradient-to-br from-primary via-accent to-secondary">
            <div className="bg-background rounded-3xl p-8 md:p-12">
              {/* Badge */}
              <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-primary/20 to-secondary/20 border border-primary/30 text-sm font-bold mb-6">
                🎉 Teste Grátis por 7 Dias
              </div>

              {/* Price */}
              <div className="mb-8">
                <div className="flex items-baseline gap-2 mb-2">
                  <span className="text-6xl font-black text-gradient">R$ 25</span>
                  <span className="text-2xl text-muted-foreground">/mês</span>
                </div>
                <p className="text-muted-foreground">
                  Sem cartão de crédito no teste gratuito. Cancele quando quiser.
                </p>
              </div>

              {/* Features */}
              <div className="grid md:grid-cols-2 gap-4 mb-8">
                {features.map((feature, index) => (
                  <div key={index} className="flex items-center gap-3">
                    <div className="flex-shrink-0 w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center">
                      <Check className="w-4 h-4 text-primary" />
                    </div>
                    <span className="text-foreground">{feature}</span>
                  </div>
                ))}
              </div>

              {/* CTA Form */}
              <form onSubmit={handleSubmit} className="space-y-4">
                <div className="flex flex-col sm:flex-row gap-3">
                  <input
                    type="email"
                    placeholder="Seu melhor e-mail"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    className="flex-1 px-6 py-4 rounded-xl bg-muted border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all text-lg"
                  />
                  <Button 
                    type="submit"
                    size="lg" 
                    className="gradient-brand hover:opacity-90 transition-opacity px-8 py-4 text-lg font-bold group whitespace-nowrap"
                  >
                    Começar Grátis
                    <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                  </Button>
                </div>
                <p className="text-sm text-muted-foreground text-center">
                  Ao se cadastrar, você concorda com nossos Termos de Uso e Política de Privacidade.
                </p>
              </form>

              {/* Trust badges */}
              <div className="mt-8 pt-8 border-t border-border flex flex-wrap justify-center gap-6 text-sm text-muted-foreground">
                <span className="flex items-center gap-2">
                  ✓ Pagamento seguro
                </span>
                <span className="flex items-center gap-2">
                  ✓ Dados protegidos
                </span>
                <span className="flex items-center gap-2">
                  ✓ Suporte em português
                </span>
              </div>
            </div>
          </div>

          {/* Money back guarantee */}
          <div className="mt-8 text-center p-6 rounded-2xl bg-card/50 border border-border">
            <p className="text-lg font-semibold mb-2">
              💯 Garantia de 7 dias
            </p>
            <p className="text-muted-foreground">
              Não gostou? Devolvemos 100% do seu dinheiro, sem perguntas.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
