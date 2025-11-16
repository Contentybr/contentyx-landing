import { Users, MessageSquare, Palette, Target, Zap, BarChart3 } from "lucide-react";

const features = [
  {
    icon: Users,
    title: "Análise de Nicho e Persona",
    description: "Entende profundamente o público-alvo e adapta a linguagem para cada segmento."
  },
  {
    icon: MessageSquare,
    title: "Adaptação de Linguagem",
    description: "Mantém a voz única de cada cliente em todos os conteúdos gerados."
  },
  {
    icon: Palette,
    title: "Arquétipos de Comunicação",
    description: "Aplica arquétipos de marca para criar narrativas consistentes e impactantes."
  },
  {
    icon: Target,
    title: "Objetivo Claro",
    description: "Cada conteúdo é gerado com um objetivo específico: educar, engajar ou converter."
  },
  {
    icon: Zap,
    title: "Hook + Desenvolvimento + CTA",
    description: "Estrutura completa e profissional em todos os roteiros, pronta para publicar."
  },
  {
    icon: BarChart3,
    title: "Probabilidade de Viralização",
    description: "Análise baseada em tendências e padrões de engajamento para maximizar alcance."
  }
];

export default function FeaturesSection() {
  return (
    <section className="py-24 bg-gradient-to-b from-background to-card/50">
      <div className="container">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              O Contentyx entende{" "}
              <span className="text-gradient">o que importa</span>
            </h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              Tecnologia de IA que vai além da geração de texto. Entende contexto, estratégia e objetivos.
            </p>
          </div>

          {/* Features Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {features.map((feature, index) => {
              const Icon = feature.icon;
              return (
                <div
                  key={index}
                  className="group p-6 rounded-xl bg-card border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/10"
                >
                  <div className="flex items-start gap-4">
                    <div className="flex-shrink-0 w-12 h-12 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                      <Icon className="w-6 h-6 text-primary" />
                    </div>
                    <div className="space-y-2">
                      <h3 className="text-lg font-bold">{feature.title}</h3>
                      <p className="text-sm text-muted-foreground leading-relaxed">
                        {feature.description}
                      </p>
                    </div>
                  </div>
                </div>
              );
            })}
          </div>

          {/* Highlight box */}
          <div className="mt-16 p-8 md:p-12 rounded-3xl bg-gradient-to-br from-primary/10 via-accent/10 to-secondary/10 border border-primary/20 relative overflow-hidden">
            {/* Decorative elements */}
            <div className="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl" />
            <div className="absolute bottom-0 left-0 w-64 h-64 bg-secondary/10 rounded-full blur-3xl" />
            
            <div className="relative z-10 text-center space-y-4">
              <h3 className="text-3xl md:text-4xl font-black">
                Biblioteca de Conteúdos Organizados
              </h3>
              <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
                Salve, arquive, renomeie e organize todos os seus conteúdos por cliente. 
                Acesse o histórico completo e reutilize ideias vencedoras sempre que precisar.
              </p>
              <div className="flex flex-wrap justify-center gap-4 pt-4">
                <span className="px-4 py-2 rounded-full bg-background/50 backdrop-blur-sm border border-border text-sm font-medium">
                  📁 Organização por cliente
                </span>
                <span className="px-4 py-2 rounded-full bg-background/50 backdrop-blur-sm border border-border text-sm font-medium">
                  🔍 Busca avançada
                </span>
                <span className="px-4 py-2 rounded-full bg-background/50 backdrop-blur-sm border border-border text-sm font-medium">
                  ⭐ Favoritos
                </span>
                <span className="px-4 py-2 rounded-full bg-background/50 backdrop-blur-sm border border-border text-sm font-medium">
                  📊 Histórico completo
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
