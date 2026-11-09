import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Сколько времени занимает укладка плитки: сроки и нормы | Дом Плитки СПб",
  description: "Узнайте сроки укладки плитки в СПб. Сколько кладут плитку в день профессионалы. Нормы и стандарты монтажа от Cersanit.",
  alternates: { canonical: `${SITE_URL}/blog/skolko-vremeni-zanimaet-ukladka-plitki` },
  openGraph: { title: "Сколько времени занимает укладка плитки: сроки и нормы | Дом Плитки СПб", url: `${SITE_URL}/blog/skolko-vremeni-zanimaet-ukladka-plitki`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Сколько времени занимает укладка плитки: сроки и нормы",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/skolko-vremeni-zanimaet-ukladka-plitki`,
        datePublished: "2026-11-09",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Сколько времени занимает укладка плитки: сроки и нормы</h1>
        
        <div className="prose prose-lg max-w-none">
          <p className="text-lg text-gray-600 mb-8">
            Укладка плитки — это важный этап ремонта, и каждый собственник квартиры или частного дома хочет знать, сколько времени займёт этот процесс. В Санкт-Петербурге и Янино сроки укладки плитки зависят от множества факторов. Давайте разберёмся в нормах и реальных временных рамках работ с материалами Cersanit.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Факторы, влияющие на скорость укладки плитки</h2>
          <p>
            Время укладки плитки зависит от нескольких ключевых параметров. Во-первых, размер плитки имеет значение: мелкую мозаику класть дольше, чем крупноформатные изделия. Во-вторых, сложность геометрии помещения влияет на количество обрезки и подгонки. Третий фактор — состояние основания. Если стены или полы требуют выравнивания, это добавляет время подготовки.
          </p>
          <p>
            Квалификация мастера также играет решающую роль. Опытные укладчики в Санкт-Петербурге работают быстрее благодаря навыкам и знанию технологии. Климатические условия в СПб влияют на время высыхания клея и затирки. Официальный дилер Cersanit всегда рекомендует учитывать температурный режим при планировании сроков работ.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Сколько квадратных метров кладут плитку в день</h2>
          <p>
            Профессиональные мастера в Санкт-Петербурге укладывают плитку со скоростью 5–15 квадратных метров в день на полу и 3–10 квадратных метров на стенах. Эти цифры усреднённые и варьируются в зависимости от сложности работы. Для небольших керамических плиток стандартного размера (30х30 см, 20х20 см) производительность выше.
          </p>
          <p>
            На укладку крупноформатной плитки Cersanit размером 60х120 см или больше уходит меньше времени благодаря меньшему количеству швов и стыков. Однако такие работы требуют более внимательной подготовки основания. Если в помещении много углов, ниш, проёмов для дверей и окон, производительность снижается на 20–30 процентов из-за дополнительной обрезки и подгонки элементов.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Временные нормы укладки в разных помещениях</h2>
          <p>
            Для ванной комнаты площадью 5 квадратных метров при стандартной сложности укладка займёт 2–3 рабочих дня. Кухня площадью 10 квадратных метров — это 3–5 дней работы. Коридор или прихожая площадью 8 квадратных метров укладываются за 2–3 дня. Санузел комплексной формы с множеством изгибов может потребовать дополнительный день.
          </p>
          <p>
            В загородных домах и коттеджах Янино расчёты аналогичны, но работы часто усложняются необходимостью обработки больших площадей и нестандартных поверхностей. Укладка плитки в бассейне или на террасе занимает больше времени из-за специальных требований к гидроизоляции. Официальный дилер Cersanit в СПб рекомендует закладывать на подобные работы дополнительный день на уплотнение и просадку оснований.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Этапы укладки и их длительность</h2>
          <p>
            Полный процесс укладки состоит из нескольких этапов, каждый из которых требует определённого времени. Подготовка основания — очистка, выравнивание, грунтовка — занимает 1–2 дня в зависимости от состояния поверхности. Разметка и раскладка плитки "насухо" — это 2–4 часа. Приготовление клеевой смеси и начало укладки — ещё 1–2 дня активных работ.
          </p>
          <p>
            После укладки плитки необходимо дождаться высыхания клея. Обычно клей Cersanit затвердевает за 24–48 часов в зависимости от температуры воздуха в Санкт-Петербурге. Затем проводится затирка швов, которая занимает 1 день, и финальная очистка поверхности. Полная готовность помещения к использованию достигается через 7–10 дней после начала работ.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Как сократить сроки без потери качества</h2>
          <p>
            Для ускорения укладки в Санкт-Петербурге рекомендуется предварительно подготовить все инструменты и материалы. Используйте плитку одного размера, чтобы избежать сложных раскладок. Выбирайте быстросхватывающиеся клеевые составы, одобренные производителем Cersanit. Нанимайте опытных мастеров, которые знают технологию укладки и могут работать эффективно.
          </p>
          <p>
            Правильная климатизация помещения помогает клею высыхать быстрее. Поддерживайте температуру 18–25 градусов и влажность 40–60 процентов. В холодное время года в Янино используйте тепловые пушки. Планируйте укладку крупноформатной плитки утром, чтобы максимально использовать естественное освещение. Избегайте переделок благодаря точным замерам и разметке перед началом работ.
          </p>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-blend-seryy-60x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Blend серый 60x60</span><span className="mt-2 block text-base font-bold text-foreground">1820 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-tiffany-belyy-42x42" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Tiffany белый 42x42</span><span className="mt-2 block text-base font-bold text-foreground">1370 ₽/м²</span></div></Link>
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                </div>
                <Link href="/catalog" className="mt-4 inline-flex items-center text-sm text-primary hover:underline font-medium">Весь каталог →</Link>
              </section>
                  <div className="mt-6 p-5 rounded-xl bg-muted/30 border border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase tracking-wide">По теме</p>
            <div className="flex flex-wrap gap-2">
              <Link href="/plitka-dlya-vannoj-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для ванной в СПб</Link>
              <Link href="/keramogranit-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Керамогранит в СПб</Link>
              <Link href="/plitka-yanino-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка со склада Янино</Link>
            </div>
          </div>
        </article>
    </div>
  )
}