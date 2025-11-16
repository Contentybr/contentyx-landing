import { Clock, Target, Lightbulb, TrendingUp } from "lucide-react";

const problems = [
  {
    icon: Clock,
    title: "Falta de tempo para criar em volume",
    description: "Você precisa entregar dezenas de conteúdos por semana, mas o tempo não é suficiente para manter a qualidade."
  },
  {
    icon: Target,
    title: "Dificuldade de manter consistência",
    description: "Cada cliente tem sua voz única, e manter o mesmo estilo em todo conteúdo é um desafio constante."
  },
  {
    icon: Lightbulb,
    title: "Travamento criativo",
    description: "Encontrar boas ideias todos os dias é exaustivo. O bloqueio criativo atrasa suas entregas."
  },
  {
    icon: TrendingUp,
    title: "Pressão por resultados",
    description: "Clientes exigem conteúdo que engaja e converte. A pressão por performance é cada vez maior."
  }
];

export default function ProblemsSection() {
  return (
    <section className="py-24 bg-card/50">
      <div className="container">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              Você já sabe criar.{" "}
              <span className="text-gradient">Agora é hora de escalar.</span>
            </h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              Reconhece algum desses desafios no seu dia a dia?
            </p>
          </div>

          {/* Problems Grid */}
          <div className="grid md:grid-cols-2 gap-6">
            {problems.map((problem, index) => {
              const Icon = problem.icon;
              return (
                <div
                  key={index}
                  className="group p-8 rounded-2xl bg-background border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/10"
                >
                  <div className="flex items-start gap-4">
                    <div className="flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <Icon className="w-6 h-6 text-primary" />
                    </div>
                    <div className="space-y-2">
                      <h3 className="text-xl font-bold">{problem.title}</h3>
                      <p className="text-muted-foreground leading-relaxed">
                        {problem.description}
                      </p>
                    </div>
                  </div>
                </div>
              );
            })}
          </div>

          {/* Transition statement */}
          <div className="mt-16 text-center">
            <p className="text-2xl md:text-3xl font-bold text-foreground">
              É hora de trabalhar com <span className="text-gradient">método, não com esforço</span>.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
