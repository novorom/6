import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка в спальне вместо ламината: плюсы и минусы | Дом Плитки СПб",
  description: "Разбираемся, почему керамогранит в спальне становится популярнее ламината. Преимущества, недостатки и рекомендации от Cersanit в СПб.",
  alternates: { canonical: `${SITE_URL}/blog/plitka-v-spalne-na-pole` },
  openGraph: { title: "Плитка в спальне вместо ламината: плюсы и минусы", url: `${SITE_URL}/blog/plitka-v-spalne-na-pole`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Плитка в спальне вместо ламината: плюсы и минусы",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/plitka-v-spalne-na-pole`,
        datePublished: "2026-07-20",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <div className="mb-6 flex items-center gap-2 text-sm text-muted-foreground">
          <Link href="/" className="hover:text-foreground">Главная</Link>
          <ChevronRight className="w-4 h-4" />
          <Link href="/blog" className="hover:text-foreground">Блог</Link>
          <ChevronRight className="w-4 h-4" />
          <span>Плитка в спальне</span>
        </div>

        <h1 className="text-4xl font-bold mb-4">Плитка в спальне вместо ламината: плюсы и минусы</h1>
        
        <p className="text-lg text-muted-foreground mb-8">Керамогранит и керамическая плитка давно используются в ванных комнатах и на кухнях, но всё чаще их выбирают и для спальни. Рассказываем, стоит ли менять привычный ламинат на плитку, и какие варианты предлагает официальный дилер Cersanit в Санкт-Петербурге.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Почему плитка привлекает внимание в спальнях</h2>
        <p className="mb-4">Долгие годы ламинат считался стандартным решением для спальни благодаря тепловым свойствам и относительно низкой цене. Но современный керамогранит и качественная плитка существенно изменили представление о напольных покрытиях. Жители Санкт-Петербурга и пригородов Янино всё чаще обращаются в «Дом Плитки» именно за плиткой для спальни. Производители вроде Cersanit разработали специальные коллекции, которые сочетают практичность плитки с эстетикой, подходящей для спальни. Такие решения обеспечивают долговечность, простоту ухода и современный внешний вид.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Основные преимущества плитки для спальни</h2>
        <p className="mb-4">Плитка в спальне имеет множество очевидных плюсов. Первый и главный — это долговечность. Качественный керамогранит служит 20–30 лет без деформаций и потери внешнего вида, тогда как ламинат требует замены через 10–15 лет. Второе преимущество — гигиеничность. Плитка не накапливает пыль и аллергены, легко моется влажной тряпкой, что особенно важно для людей с аллергией. Третье — простота ремонта. При повреждении одной плитки вы замените только её, без необходимости менять весь пол. Четвёртое — влагостойкость. Если в спальне высокая влажность из-за близости окна к морю (как в Санкт-Петербурге), плитка не разбухнет и не деформируется. Наконец, керамогранит от Cersanit предлагает огромный выбор дизайнов — от имитации дерева до природного камня, что позволяет создать именно ту атмосферу, которую вы хотите.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Минусы плитки и как их решить</h2>
        <p className="mb-4">Главный недостаток плитки для спальни — это холодность. Если вы предпочитаете ходить босиком по тёплому полу, стандартная керамическая плитка доставит дискомфорт. Но эта проблема легко решается с помощью систем «тёплый пол». В Санкт-Петербурге многие квартиры оснащены такими системами. Второй минус — скользкость. Однако современная плитка Cersanit имеет матовую поверхность и высокий коэффициент трения, что обеспечивает безопасность. Третий потенциальный недостаток — шум. Плитка может издавать звуки при ходьбе и падении предметов. Это решается использованием подложки и мягких коврик. Четвёртый момент — стоимость укладки. Монтаж плитки требует профессионализма и дороже, чем укладка ламината, но инвестиция окупится за счёт долговечности.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Какую плитку выбрать для спальни</h2>
        <p className="mb-4">Для спальни рекомендуется выбирать керамогранит размером 60×60 см или 30×60 см — такие форматы визуально расширяют пространство. Цвет лучше подобрать в тёплых тонах: бежевый, светло-коричневый, серый с жёлтым подтоном. Официальный дилер Cersanit в районе Янино и по всему Санкт-Петербургу предлагает коллекции, специально разработанные для жилых помещений. Обратите внимание на плитку с текстурой под дерево — она создаёт уютную атмосферу, при этом сохраняя все достоинства керамогранита. Матовая поверхность предпочтительнее глянцевой для спальни, так как не отражает свет и выглядит более естественно.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Итоги: стоит ли менять ламинат на плитку</h2>
        <p className="mb-4">Плитка в спальне вместо ламината — это инвестиция в качество и долговечность. Если вы планируете оставаться в квартире длительное время, цена укладки быстро окупится за счёт срока эксплуатации. Для Санкт-Петербурга с его влажным климатом это особенно актуально. Однако если вам критически важно тепло под ногами, обязательна установка «тёплого пола». Посетите «Дом Плитки» в районе Янино или другом удобном месте Санкт-Петербурга, чтобы увидеть образцы керамогранита Cersanit вживую. Специалисты помогут подобрать идеальный вариант для вашей спальни и дадут профессиональные рекомендации по монтажу.</p>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-wood-concept-natural-bezhevyy-22x90" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Wood Concept Natural 22x90</span><span className="mt-2 block text-base font-bold text-foreground">1610 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-soft-concrete-svetlo-seryy-60x120" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Soft Concrete 60x120</span><span className="mt-2 block text-base font-bold text-foreground">2213 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
                </div>
                <Link href="/catalog" className="mt-4 inline-flex items-center text-sm text-primary hover:underline font-medium">Весь каталог →</Link>
              </section>
                  <div className="mt-6 p-5 rounded-xl bg-muted/30 border border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase tracking-wide">По теме</p>
            <div className="flex flex-wrap gap-2">
              <Link href="/keramogranit-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Керамогранит в СПб</Link>
              <Link href="/plitka-dlya-vannoj-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для ванной в СПб</Link>
              <Link href="/katalog" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Katalog</Link>
            </div>
          </div>
        </article>
    </div>
  )
}