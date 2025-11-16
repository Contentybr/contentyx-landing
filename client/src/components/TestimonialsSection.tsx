import { Quote } from "lucide-react";

const testimonials = [
  {
    quote: "Hoje consigo atender 12 clientes sem precisar aumentar a equipe.",
    author: "Gestora de Social Media",
    role: "27 anos",
    highlight: "12 clientes"
  },
  {
    quote: "O Contentyx virou a base do meu fluxo de criação. Tempo é dinheiro.",
    author: "Dono de Mini Agência",
    role: "31 anos",
    highlight: "Base do fluxo"
  },
  {
    quote: "Agora meus conteúdos têm consistência e narrativa. Ficaram profissionais.",
    author: "Criador/Influenciador",
    role: "24 anos",
    highlight: "Profissionais"
  }
];

export default function TestimonialsSection() {
  return (
    <section className="py-24 bg-card/50">
      <div className="container">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 space-y-4">
            <h2 className="text-4xl md:text-5xl font-black">
              Quem usa, <span className="text-gradient">escala</span>
            </h2>
            <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
              Profissionais que transformaram sua produção de conteúdo com o Contentyx.
            </p>
          </div>

          {/* Testimonials Grid */}
          <div className="grid md:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <div
                key={index}
                className="group relative p-8 rounded-2xl bg-background border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-xl hover:shadow-primary/10 hover:-translate-y-2"
              >
                {/* Quote icon */}
                <div className="absolute -top-4 left-8 w-12 h-12 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center shadow-lg">
                  <Quote className="w-6 h-6 text-white" />
                </div>

                <div className="space-y-6 pt-6">
                  {/* Quote */}
                  <p className="text-lg leading-relaxed font-medium">
                    "{testimonial.quote}"
                  </p>

                  {/* Highlight badge */}
                  <div className="inline-block px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-semibold">
                    {testimonial.highlight}
                  </div>

                  {/* Author */}
                  <div className="pt-4 border-t border-border">
                    <p className="font-bold text-foreground">{testimonial.author}</p>
                    <p className="text-sm text-muted-foreground">{testimonial.role}</p>
                  </div>
                </div>

                {/* Decorative gradient */}
                <div className="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-primary via-accent to-secondary opacity-0 group-hover:opacity-100 transition-opacity rounded-b-2xl" />
              </div>
            ))}
          </div>

          {/* Stats section */}
          <div className="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div className="text-center p-6 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 border border-primary/20">
              <div className="text-4xl font-black text-gradient mb-2">10x</div>
              <div className="text-sm text-muted-foreground">Mais produtividade</div>
            </div>
            <div className="text-center p-6 rounded-xl bg-gradient-to-br from-secondary/10 to-secondary/5 border border-secondary/20">
              <div className="text-4xl font-black text-gradient mb-2">40min</div>
              <div className="text-sm text-muted-foreground">Para 30 conteúdos</div>
            </div>
            <div className="text-center p-6 rounded-xl bg-gradient-to-br from-accent/10 to-accent/5 border border-accent/20">
              <div className="text-4xl font-black text-gradient mb-2">100%</div>
              <div className="text-sm text-muted-foreground">Consistência</div>
            </div>
            <div className="text-center p-6 rounded-xl bg-gradient-to-br from-primary/10 to-secondary/10 border border-primary/20">
              <div className="text-4xl font-black text-gradient mb-2">∞</div>
              <div className="text-sm text-muted-foreground">Conteúdos ilimitados</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
