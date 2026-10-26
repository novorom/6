import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка для бассейна и сауны: выбор в Санкт-Петербурге | Дом Плитки СПб",
  description: "Влагостойкая плитка Cersanit для бассейна и сауны в СПб. Мозаика для влажных помещений. Официальный дилер в Янино. Консультация специалистов.",
  alternates: { canonical: `${SITE_URL}/blog/plitka-dlya-bassejnov-i-saun` },
  openGraph: { 
    title: "Плитка для бассейна и сауны: выбор в Санкт-Петербурге | Дом Плитки СПб",
    url: `${SITE_URL}/blog/plitka-dlya-bassejnov-i-saun`, 
    siteName: "Дом Плитки CERSANIT", 
    locale: "ru_RU", 
    type: "article" 
  },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org", 
        "@type": "Article",
        headline: "Плитка для бассейна и сауны: что выбрать в Санкт-Петербурге",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/plitka-dlya-bassejnov-i-saun`,
        datePublished: "2026-10-26",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <div className="mb-8 flex items-center gap-2 text-sm text-muted-foreground">
          <Link href="/" className="hover:text-foreground">Главная</Link>
          <ChevronRight className="w-4 h-4" />
          <Link href="/blog" className="hover:text-foreground">Блог</Link>
          <ChevronRight className="w-4 h-4" />
          <span>Плитка для бассейна и сауны</span>
        </div>

        <h1 className="text-4xl font-bold mb-6">Плитка для бассейна и сауны: что выбрать в Санкт-Петербурге</h1>

        <div className="prose prose-lg max-w-none">
          <p className="text-lg text-muted-foreground mb-8">
            Выбор правильной плитки для бассейна и сауны — это важный этап в создании безопасного и красивого пространства. В этой статье мы расскажем о требованиях к материалам, особенностях влагостойкой плитки и рекомендациях экспертов магазина Дом Плитки в Санкт-Петербурге.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Требования к плитке для влажных помещений</h2>
          <p>
            Плитка для бассейна и сауны должна соответствовать строгим техническим стандартам. Основное требование — низкое водопоглощение, которое предотвращает разрушение материала при замерзании воды. Профессиональная плитка от Cersanit имеет класс водопоглощения не более 0,5%, что обеспечивает долговечность в условиях постоянной влажности.
          </p>
          <p>
            Второе важное свойство — противоскользящая поверхность. В бассейнах и саунах используется плитка с коэффициентом трения не менее R10, что предотвращает травматизм. Также материал должен быть стойким к хлору и активным дезинфектантам, используемым для обработки воды. Качественная плитка сохраняет эстетический вид годами, не выцветая и не меняя цвет.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Виды плитки для бассейнов</h2>
          <p>
            Для облицовки бассейнов используются несколько типов плитки. Керамическая плитка — классический вариант, популярный среди петербургских покупателей. Она отличается доступной ценой, богатой цветовой гаммой и простотой укладки. Специализированная керамика для бассейнов имеет повышенную плотность и минимальное водопоглощение.
          </p>
          <p>
            Мозаика для бассейнов — элегантный выбор для кальянных зон и декоративных элементов. Стеклянная мозаика отражает свет и создает эффект глубины воды. Мраморная крошка в мозаике добавляет роскоши, хотя требует тщательного ухода. В нашем магазине в Санкт-Петербурге представлены коллекции мозаики от Cersanit, подходящие для любого стиля бассейна — от современного до классического.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Особенности плитки для саун и парных</h2>
          <p>
            Сауна — это экстремальные условия с температурой до 90°C и высокой влажностью. Плитка для сауны должна выдерживать резкие перепады температур без трещин и отслоений. Cersanit производит специальные коллекции, протестированные на термостойкость. Рекомендуемая толщина плитки для сауны — 8-10 мм, что обеспечивает необходимую прочность.
          </p>
          <p>
            Цвет плитки в сауне играет психологическую роль: светлые оттенки создают ощущение чистоты, темные добавляют атмосферности. На полу сауны обязательна противоскользящая поверхность, так как нагретая мокрая плитка становится очень скользкой. Влагостойкая затирка и герметик — важные компоненты, которые защищают швы от гниения и плесени. Специалисты нашего магазина в районе Янино и по всему Санкт-Петербургу помогут выбрать оптимальные материалы для герметизации.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Цветовые решения и дизайнерские идеи</h2>
          <p>
            Современные коллекции плитки Cersanit предлагают разнообразие цветов и текстур для создания идеального интерьера бассейна или сауны. Классические белые и голубые плитки создают ощущение свежести и чистоты, идеальны для общественных бассейнов. Натуральные оттенки бежа и серого добавляют элегантности и спокойствия.
          </p>
          <p>
            Для сауны популярны теплые тона: коричневый, оранжевый, бежевый, которые создают уютную атмосферу. Комбинирование плитки разных размеров — от крупной мозаики до мелкой плитки — позволяет создавать уникальные орнаменты. Петербургские дизайнеры часто используют многоуровневую укладку: крупная плитка на стенах, мозаика на полу, бордюры из контрастных элементов. Влагостойкая плитка сохраняет насыщенность цветов даже при интенсивном использовании.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Покупка и укладка: консультация в Доме Плитки</h2>
          <p>
            Дом Плитки CERSANIT в Санкт-Петербурге — официальный дилер бренда с офисом в Янино и филиалами по всему городу. Наши специалисты помогут рассчитать необходимое количество материала, учитывая размеры помещения и особенности укладки. Профессиональная укладка плитки в бассейне требует опыта: необходимо создать уклоны для слива воды, правильно подготовить основание и использовать специальные растворы.
          </p>
          <p>
            Мы рекомендуем доверить укладку влагостойкой плитки профессионалам, так как любые ошибки приведут к протечкам и разрушению конструкции. На складе нашего магазина всегда в наличии плитка Cersanit для влажных помещений, герметики, затирки и необходимые инструменты. Консультанты помогут выбрать оптимальный вариант по цене и качеству, расскажут об уходе и обслуживании плитки в бассейне и сауне.
          </p>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/mozaika-royal-stone-mnogotsvetnyy-30x30" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Royal Stone 30x30</span><span className="mt-2 block text-base font-bold text-foreground">1820 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-lofthouse-seryy-28x25" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Lofthouse серый 28x25</span><span className="mt-2 block text-base font-bold text-foreground">1680 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-tiffany-belyy-42x42" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Tiffany белый 42x42</span><span className="mt-2 block text-base font-bold text-foreground">1370 ₽/м²</span></div></Link>
                </div>
                <Link href="/catalog" className="mt-4 inline-flex items-center text-sm text-primary hover:underline font-medium">Весь каталог →</Link>
              </section>
                  <div className="mt-6 p-5 rounded-xl bg-muted/30 border border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase tracking-wide">По теме</p>
            <div className="flex flex-wrap gap-2">
              <Link href="/mozaika-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Мозаика в СПб</Link>
              <Link href="/plitka-dlya-dushi-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для душа в СПб</Link>
              <Link href="/keramogranit-matovyy-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Матовый керамогранит в СПб</Link>
            </div>
          </div>
        </article>
    </div>
  )
}