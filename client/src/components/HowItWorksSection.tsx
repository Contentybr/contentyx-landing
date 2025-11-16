import { FileText, Mic, Sparkles, Save } from "lucide-react";

const steps = [
  {
    number: "01",
    icon: FileText,
    title: "Informe o contexto",
    description: "Nicho, voz e posicionamento do cliente. O Contentyx entende a identidade da marca."
  },
  {
    number: "02",
    icon: Mic,
    title: "Escreva ou grave uma ideia",
    description: "Digite um conceito ou grave um áudio. Simples e rápido, do jeito que você preferir."
  },
  {
    number: "03",
    icon: Sparkles,
    title: "Receba roteiros prontos",
    description: "10+ roteiros estruturados com Hook + Desenvolvimento + CTA, otimizados para engajamento."
  },
  {
    number: "04",
    icon: Save,
    title: "Salve, edite e publique",
    description: "Organize na biblioteca, faça ajustes finais e publique. Tudo em um só lugar."
  }
];

export default function HowItWorksSection() {
  return (
    <section id="how-it-works" className="py-24 bg-card/30">
      <div className="container">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              Menos improviso.{" "}
              <span className="text-gradient">Mais estratégia.</span>
            </h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              Um processo simples e eficiente que transforma ideias em conteúdo profissional em minutos.
            </p>
          </div>

          {/* Steps */}
          <div className="relative">
            {/* Connection line */}
            <div className="hidden lg:block absolute top-24 left-0 right-0 h-0.5 bg-gradient-to-r from-primary via-accent to-secondary opacity-20" />

            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
              {steps.map((step, index) => {
                const Icon = step.icon;
                return (
                  <div
                    key={index}
                    className="relative group"
                  >
                    {/* Step card */}
                    <div className="relative p-6 rounded-2xl bg-background border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/10 h-full">
                      {/* Number badge */}
                      <div className="absolute -top-4 -left-4 w-12 h-12 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-black text-lg shadow-lg z-10">
                        {step.number}
                      </div>

                      <div className="space-y-4 pt-4">
                        <div className="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                          <Icon className="w-7 h-7 text-primary" />
                        </div>
                        <h3 className="text-xl font-bold">{step.title}</h3>
                        <p className="text-muted-foreground leading-relaxed">
                          {step.description}
                        </p>
                      </div>
                    </div>

                    {/* Arrow connector (desktop only) */}
                    {index < steps.length - 1 && (
                      <div className="hidden lg:block absolute top-1/2 -right-4 w-8 h-8 text-primary/30 z-0">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                          <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                      </div>
                    )}
                  </div>
                );
              })}
            </div>
          </div>

          {/* Bottom statement */}
          <div className="mt-16 text-center">
            <div className="inline-block p-8 rounded-2xl bg-gradient-to-br from-primary/5 to-secondary/5 border border-primary/20">
              <p className="text-2xl font-bold mb-2">
                De uma ideia simples a 10+ roteiros profissionais em minutos.
              </p>
              <p className="text-muted-foreground">
                É assim que profissionais escalam sem perder qualidade.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
