import { CheckCircle2, Zap, Brain, FolderKanban, TrendingUp } from "lucide-react";

const benefits = [
  {
    icon: CheckCircle2,
    title: "Padronização",
    description: "Seu conteúdo para cada cliente mantém coerência de linguagem. Crie uma identidade forte e reconhecível.",
    metric: "100% consistente"
  },
  {
    icon: Zap,
    title: "Velocidade",
    description: "Você entrega 30 conteúdos em 40 minutos, não em 2 dias. Multiplique sua produtividade sem aumentar a equipe.",
    metric: "10x mais rápido"
  },
  {
    icon: Brain,
    title: "Estratégia",
    description: "Cada roteiro já vem com probabilidade de viralização, baseada em tendências e padrões de engajamento.",
    metric: "IA estratégica"
  },
  {
    icon: FolderKanban,
    title: "Organização",
    description: "Biblioteca para salvar, arquivar, renomear e organizar conteúdos por cliente. Tudo em um só lugar.",
    metric: "Gestão completa"
  },
  {
    icon: TrendingUp,
    title: "Relevância Atual",
    description: "A Home mostra tendências e assuntos quentes do dia, para você não perder timing e surfar nas trends.",
    metric: "Sempre atualizado"
  }
];

export default function BenefitsSection() {
  return (
    <section className="py-24 bg-gradient-to-b from-background to-accent/5">
      <div className="container">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 space-y-4">
            <div className="inline-block px-4 py-2 rounded-full bg-secondary/10 border border-secondary/20 text-secondary text-sm font-semibold mb-4">
              A Solução Completa
            </div>
            <h2 className="text-4xl md:text-5xl font-black">
              Volume não é sobre esforço.{" "}
              <span className="text-gradient">É sobre sistema.</span>
            </h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              O Contentyx entrega tudo que você precisa para escalar sua produção de conteúdo com qualidade profissional.
            </p>
          </div>

          {/* Benefits Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {benefits.map((benefit, index) => {
              const Icon = benefit.icon;
              return (
                <div
                  key={index}
                  className="group relative p-8 rounded-2xl bg-card border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-xl hover:shadow-primary/10 hover:-translate-y-1"
                >
                  {/* Metric badge */}
                  <div className="absolute -top-3 right-6 px-3 py-1 rounded-full bg-gradient-to-r from-primary to-secondary text-xs font-bold text-white shadow-lg">
                    {benefit.metric}
                  </div>

                  <div className="space-y-4">
                    <div className="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                      <Icon className="w-7 h-7 text-primary" />
                    </div>
                    <h3 className="text-2xl font-bold">{benefit.title}</h3>
                    <p className="text-muted-foreground leading-relaxed">
                      {benefit.description}
                    </p>
                  </div>
                </div>
              );
            })}
          </div>

          {/* Bottom CTA */}
          <div className="mt-16 text-center p-8 rounded-2xl bg-gradient-to-r from-primary/10 via-accent/10 to-secondary/10 border border-primary/20">
            <p className="text-2xl font-bold mb-2">
              Sua operação de Social Media agora produz o dobro no mesmo tempo.
            </p>
            <p className="text-muted-foreground">
              Menos improviso. Mais estratégia. Mais resultados.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
