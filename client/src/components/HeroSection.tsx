import { Button } from "@/components/ui/button";
import { ArrowRight, Sparkles } from "lucide-react";
import { APP_LOGO } from "@/const";

export default function HeroSection() {
  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    element?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-background via-background to-accent/10">
      {/* Animated background elements */}
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-3xl animate-float" />
        <div className="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary/20 rounded-full blur-3xl animate-float" style={{ animationDelay: "2s" }} />
      </div>

      <div className="container relative z-10">
        <div className="max-w-5xl mx-auto text-center space-y-8">
          {/* Logo */}
          <div className="flex justify-center mb-8 animate-fade-in">
            <img src={APP_LOGO} alt="Contentyx" className="h-16 md:h-20 object-contain" />
          </div>

          {/* Badge */}
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-medium animate-fade-in">
            <Sparkles className="w-4 h-4" />
            <span>Ferramenta profissional para criadores de conteúdo</span>
          </div>

          {/* Headline */}
          <h1 className="text-5xl md:text-6xl lg:text-7xl font-black leading-tight animate-fade-in">
            Crie conteúdo em volume{" "}
            <span className="text-gradient">com consistência</span>{" "}
            e estratégia
          </h1>

          {/* Subheadline */}
          <p className="text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto leading-relaxed animate-fade-in">
            O Contentyx transforma briefing, branding e posicionamento do seu cliente em{" "}
            <span className="text-primary font-semibold">roteiros prontos</span>, estruturados para reter, engajar e crescer.
          </p>

          {/* CTAs */}
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4 animate-fade-in">
            <Button 
              size="lg" 
              className="text-lg px-8 py-6 gradient-brand hover:opacity-90 transition-opacity group"
              onClick={() => scrollToSection("pricing")}
            >
              Começar Teste Gratuito
              <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </Button>
            <Button 
              size="lg" 
              variant="outline" 
              className="text-lg px-8 py-6 bg-transparent"
              onClick={() => scrollToSection("how-it-works")}
            >
              Ver Como Funciona
            </Button>
          </div>

          {/* Trust indicators */}
          <div className="pt-12 flex flex-col items-center gap-4 text-sm text-muted-foreground animate-fade-in">
            <div className="flex items-center gap-6 flex-wrap justify-center">
              <span className="flex items-center gap-2">
                ✓ Teste grátis por 7 dias
              </span>
              <span className="flex items-center gap-2">
                ✓ Cancele quando quiser
              </span>
              <span className="flex items-center gap-2">
                ✓ Sem cartão de crédito
              </span>
            </div>
          </div>
        </div>
      </div>

      {/* Scroll indicator */}
      <div className="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 rounded-full border-2 border-primary/50 flex items-start justify-center p-2">
          <div className="w-1.5 h-1.5 rounded-full bg-primary animate-pulse" />
        </div>
      </div>
    </section>
  );
}
