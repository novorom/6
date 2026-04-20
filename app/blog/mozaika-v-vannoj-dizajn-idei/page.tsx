import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Мозаика в ванной: идеи дизайна и советы по укладке | Дом Плитки СПб",
  description: "Узнайте, как выбрать и укладывать мозаику в ванной комнате. Советы дизайна мозаики от официального дилера Cersanit в Санкт-Петербурге.",
  alternates: { canonical: `${SITE_URL}/blog/mozaika-v-vannoj-dizajn-idei` },
  openGraph: { title: "Мозаика в ванной: идеи дизайна и советы по укладке | Дом Плитки СПб", url: `${SITE_URL}/blog/mozaika-v-vannoj-dizajn-idei`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Мозаика в ванной: идеи дизайна и советы по укладке",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/mozaika-v-vannoj-dizajn-idei`,
        datePublished: "2026-04-20",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Мозаика в ванной: идеи дизайна и советы по укладке</h1>
        
        <div className="prose prose-invert max-w-none mb-12 space-y-8">
          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Преимущества мозаики для ванной комнаты</h2>
            <p className="mb-4 leading-relaxed">
              Мозаика для ванной — это не просто красивое оформление, но и функциональное решение для влажного помещения. Благодаря глазурованной поверхности, она отлично противостоит влаге и плесени, что особенно важно в климате Санкт-Петербурга с его высокой влажностью. Мелкие элементы мозаики из коллекций Cersanit обеспечивают превосходное сцепление и создают дополнительную защиту от скольжения на полу ванной комнаты.
            </p>
            <p className="mb-4 leading-relaxed">
              Еще одно значимое преимущество — долговечность. Качественная керамическая мозаика сохраняет первоначальный вид на протяжении десятилетий, не требуя сложного ухода. Официальный дилер Cersanit в Санкт-Петербурге предлагает сертифицированные материалы, которые гарантируют высокое качество и надежность укладки.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Популярные идеи дизайна мозаики в ванной</h2>
            <p className="mb-4 leading-relaxed">
              Современный дизайн мозаики предлагает множество вариантов оформления. Классический вариант — укладка однотонной мозаики контрастного цвета на одну из стен, чаще всего за зоной умывальника. Это создает визуальный акцент и делает интерьер более динамичным. Для более смелых решений подойдут яркие цветные композиции или градиентные переходы оттенков.
            </p>
            <p className="mb-4 leading-relaxed">
              В Санкт-Петербурге пользуются спросом геометрические паттерны, которые добавляют ванной современный вид. Популярна также укладка мозаики полосами или диагональными линиями. Многие жители Янино и других районов города выбирают комбинирование крупной плитки с мозаичными вставками, что позволяет экономить бюджет и создавать интересные текстурные переходы.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Выбор материала и цветовой палитры</h2>
            <p className="mb-4 leading-relaxed">
              Правильный выбор материала мозаики зависит от конкретных условий в ванной комнате. Керамическая мозаика Cersanit — оптимальный вариант для российского климата благодаря морозостойкости и влагостойкости. Стеклянная мозаика создает эффектный визуальный переход света, но требует более аккуратного обращения при монтаже.
            </p>
            <p className="mb-4 leading-relaxed">
              Что касается цветовой палитры, светлые тона мозаики визуально увеличивают пространство ванной, что особенно актуально для небольших квартир в Санкт-Петербурге. Темные оттенки добавляют глубину и роскошь. Нейтральные цвета серого, бежевого и белого универсальны и сочетаются с любым стилем интерьера. Официальный дилер Cersanit предлагает широкую палитру оттенков для любых предпочтений.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Технология укладки мозаики: пошаговый процесс</h2>
            <p className="mb-4 leading-relaxed">
              Правильная укладка мозаики в ванной начинается с подготовки поверхности. Стены должны быть ровными и чистыми. Рекомендуется использовать гидроизоляционный слой для защиты от влаги. Специалисты магазина в Янино и центре Санкт-Петербурга советуют применять модифицированный клей, предназначенный специально для мозаики.
            </p>
            <p className="mb-4 leading-relaxed">
              Процесс укладки требует терпения: каждый элемент мозаики закрепляется отдельно с помощью шпателя с подходящей насечкой. После просыхания клея (обычно 24-48 часов) выполняется затирка швов специальной смесью. Важно выбрать затирку, которая совпадает по тону с мозаикой или создает контрастный эффект в зависимости от дизайна. Качественная укладка мозаики обеспечивает долгосрочный результат и защиту ванной от влаги.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Уход и долговечность мозаики в ванной</h2>
            <p className="mb-4 leading-relaxed">
              Мозаика в ванной требует минимального ухода, но правильное обслуживание продлит ее жизнь. Рекомендуется регулярно протирать поверхность мягкой тканью и использовать мягкие моющие средства. Избегайте абразивных чистящих средств, которые могут повредить глазурь. Важно следить за состоянием затирки и при необходимости обновлять ее.
            </p>
            <p className="mb-4 leading-relaxed">
              Жители Санкт-Петербурга, выбирающие мозаику Cersanit, могут быть уверены в долговечности материала. Качественная керамическая мозаика служит 20-30 лет и более при правильной укладке. Регулярная вентиляция ванной комнаты предотвращает скопление влаги и развитие плесени на затирке. Специалисты официального дилера Cersanit всегда готовы дать рекомендации по уходу за вашей мозаикой.
            </p>
          </section>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/mozaika-lofthouse-seryy-28x25" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Lofthouse серый 28x25</span><span className="mt-2 block text-base font-bold text-foreground">1680 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-royal-stone-mnogotsvetnyy-30x30" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Royal Stone 30x30</span><span className="mt-2 block text-base font-bold text-foreground">1820 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-woodhouse-korichnevyy-30x30" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Woodhouse коричневый 30x30</span><span className="mt-2 block text-base font-bold text-foreground">626 ₽/м²</span></div></Link>
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