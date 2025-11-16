import { Button } from "@/components/ui/button";
import { ArrowRight } from "lucide-react";

export default function CTASection() {
  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    element?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <section className="py-24 relative overflow-hidden">
      {/* Animated background */}
      <div className="absolute inset-0 bg-gradient-to-br from-primary/20 via-accent/20 to-secondary/20" />
      <div className="absolute inset-0">
        <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/30 rounded-full blur-3xl animate-float" />
        <div className="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary/30 rounded-full blur-3xl animate-float" style={{ animationDelay: "3s" }} />
      </div>

      <div className="container relative z-10">
        <div className="max-w-4xl mx-auto text-center space-y-8">
          {/* Main message */}
          <h2 className="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
            Quem tem método,{" "}
            <span className="text-gradient">vence na consistência</span>
          </h2>

          <p className="text-xl md:text-2xl text-muted-foreground max-w-2xl mx-auto">
            Sua operação de Social Media agora produz o dobro no mesmo tempo.
          </p>

          {/* CTA Button */}
          <div className="pt-4">
            <Button 
              size="lg" 
              className="text-xl px-12 py-8 gradient-brand hover:opacity-90 transition-opacity group shadow-2xl shadow-primary/30"
              onClick={() => scrollToSection("pricing")}
            >
              Começar Agora Grátis
              <ArrowRight className="ml-2 w-6 h-6 group-hover:translate-x-1 transition-transform" />
            </Button>
          </div>

          {/* Trust indicators */}
          <div className="pt-8 flex flex-wrap justify-center gap-6 text-sm text-muted-foreground">
            <span className="flex items-center gap-2">
              ✓ 7 dias grátis
            </span>
            <span className="flex items-center gap-2">
              ✓ Sem cartão de crédito
            </span>
            <span className="flex items-center gap-2">
              ✓ Cancele quando quiser
            </span>
            <span className="flex items-center gap-2">
              ✓ Suporte em português
            </span>
          </div>

          {/* Final statement */}
          <div className="pt-12">
            <p className="text-lg font-semibold text-foreground/80">
              Junte-se a centenas de profissionais que já escalaram sua produção de conteúdo.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
