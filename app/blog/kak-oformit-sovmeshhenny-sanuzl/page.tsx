import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Как оформить совмещённый санузел плиткой: идеи и советы | Дом Плитки СПб",
  description: "Дизайн совмещённого санузла плиткой Cersanit в СПб. Советы по выбору плитки, цвета, стиля для маленького и большого санузла.",
  alternates: { canonical: `${SITE_URL}/blog/kak-oformit-sovmeshhenny-sanuzl` },
  openGraph: { title: "Как оформить совмещённый санузел плиткой: идеи и советы | Дом Плитки СПб", url: `${SITE_URL}/blog/kak-oformit-sovmeshhenny-sanuzl`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Как оформить совмещённый санузел плиткой: идеи и советы",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/kak-oformit-sovmeshhenny-sanuzl`,
        datePublished: "2026-07-13",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <div className="mb-8 flex items-center gap-2 text-sm text-gray-600">
          <Link href="/" className="hover:text-primary">Главная</Link>
          <ChevronRight size={16} />
          <Link href="/blog" className="hover:text-primary">Блог</Link>
          <ChevronRight size={16} />
          <span>Как оформить совмещённый санузел плиткой</span>
        </div>

        <h1 className="text-4xl font-bold mb-4">Как оформить совмещённый санузел плиткой: идеи и советы</h1>
        <p className="text-gray-600 mb-8">Совмещённый санузел требует особого подхода к оформлению. Правильный выбор плитки поможет визуально увеличить пространство, создать уютную атмосферу и обеспечить функциональность. В этой статье собрали лучшие идеи для дизайна санузла плиткой от Cersanit — официального дилера в Санкт-Петербурге и Янино.</p>

        <section className="mb-10">
          <h2 className="text-2xl font-bold mb-4">Выбираем размер и формат плитки для маленького санузла</h2>
          <p className="mb-4 text-gray-700">Размер плитки — один из главных факторов в оформлении совмещённого санузла. Для маленьких помещений рекомендуется выбирать плитку размером 20x20 см, 25x25 см или 30x30 см. Меньшая плитка визуально дробит пространство, создавая ощущение загромождённости.</p>
          <p className="mb-4 text-gray-700">Средний и крупный формат плитки делает помещение просторнее. Плитка 30x60 см или даже 60x60 см выглядит более современно и визуально расширяет границы санузла. При укладке крупноформатной плитки швов становится меньше, что улучшает восприятие пространства.</p>
          <p className="text-gray-700">Cersanit предлагает широкий выбор форматов для совмещённого санузла. От классических квадратных вариантов до прямоугольных и даже панно, которые можно использовать для создания акцентной стены.</p>
        </section>

        <section className="mb-10">
          <h2 className="text-2xl font-bold mb-4">Цвет плитки: светлые тона расширяют пространство</h2>
          <p className="mb-4 text-gray-700">Цветовая гамма при оформлении санузла плиткой играет ключевую роль. Светлые оттенки — белый, молочный, светло-серый, бежевый — визуально увеличивают помещение и создают ощущение свежести. Эти цвета идеальны для маленьких совмещённых санузлов в городских квартирах Санкт-Петербурга.</p>
          <p className="mb-4 text-gray-700">Однако это не означает, что весь санузел должен быть монохромным. Можно использовать насыщенные цвета для создания акцентов: тёмно-серый, графитовый, глубокий синий или даже изумруд. Главное — комбинировать их с большой площадью светлой плитки.</p>
          <p className="text-gray-700">Коллекции Cersanit включают множество вариантов цветов и текстур. От нежных пастельных тонов до смелых графических принтов, которые добавляют характер маленькому санузлу без перегрузки интерьера.</p>
        </section>

        <section className="mb-10">
          <h2 className="text-2xl font-bold mb-4">Приёмы укладки: зонирование и визуальные эффекты</h2>
          <p className="mb-4 text-gray-700">Способ укладки плитки влияет на восприятие пространства совмещённого санузла. Горизонтальная раскладка визуально расширяет помещение, вертикальная — поднимает потолок. Диагональная укладка создаёт динамику и интерес, но требует больше осторожности в маленьких пространствах.</p>
          <p className="mb-4 text-gray-700">Для зонирования санузла можно использовать разные цвета и размеры плитки. Например, одна стена — со скромным дизайном, другая — с ярким панно или мозаикой. Это помогает разделить функциональные зоны: душевую, зону раковины и унитаза.</p>
          <p className="text-gray-700">Популярный приём в дизайне санузла — использование плитки контрастного цвета на полу и в верхней части стен, с светлой плиткой посередине. Плитки Cersanit позволяют реализовать любые идеи зонирования благодаря разнообразию коллекций и форматов.</p>
        </section>

        <section className="mb-10">
          <h2 className="text-2xl font-bold mb-4">Практичность: выбираем плитку, которая прослужит долго</h2>
          <p className="mb-4 text-gray-700">В совмещённом санузле высокая влажность и температурные перепады. Важно выбирать плитку с высокой водопоглощаемостью не выше 3% и хорошей морозостойкостью. Санузел в Санкт-Петербурге требует особого внимания к качеству, особенно если это квартира на верхних этажах.</p>
          <p className="mb-4 text-gray-700">Матовая плитка менее скользкая и скрывает загрязнения, глянцевая — выглядит современнее и делает пространство светлее. Для полов совмещённого санузла рекомендуется использовать плитку с антискользящей поверхностью, особенно если это влажная зона.</p>
          <p className="text-gray-700">Cersanit — официальный производитель с многолетней репутацией. Их плитка для санузла отличается долговечностью, стойкостью к влаге и химикатам. В магазинах Янино и других районов Санкт-Петербурга вы найдёте сертифицированные коллекции, которые гарантируют качество и надёжность.</p>
        </section>

        <section className="mb-10">
          <h2 className="text-2xl font-bold mb-4">Модные стили оформления: минимализм, лофт и скандинавский дизайн</h2>
          <p className="mb-4 text-gray-700">Минимализм — идеальный выбор для совмещённого санузла. Монохромная плитка одного размера, минимум декора, простые линии. Это создаёт ощущение порядка и спокойствия. Cersanit предлагает коллекции в стиле минимализма с гладкой поверхностью и нейтральными цветами.</p>
          <p className="mb-4 text-gray-700">Лофт требует более смелого подхода. Здесь можно использовать плитку под кирпич, имитацию бетона или необработанного камня. Такой дизайн санузла добавляет характер и выглядит современно. Лофт хорошо смотрится в студиях и квартирах со свободной планировкой.</p>
          <p className="text-gray-700">Скандинавский дизайн сочетает светлые тона, натуральные текстуры и функциональность. Белая или светло-серая плитка, минимум ярких акцентов, натуральные материалы в декоре. Этот стиль идеален для совмещённого санузла, так как визуально увеличивает пространство и создаёт ощущение воздушности. В каталогах Cersanit в Санкт-Петербурге легко найти плитку, соответствующую скандинавским принципам.</p>
        </section>

        <p className="text-gray-700 italic mt-10">Правильный выбор плитки — это основа удачного ремонта совмещённого санузла. Обратитесь к специалистам Дома Плитки Cersanit в Санкт-Петербурге и Янино, чтобы получить профессиональную консультацию и выбрать идеальный вариант для вашего помещения.</p>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-lofthouse-seryy-28x25" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Lofthouse серый 28x25</span><span className="mt-2 block text-base font-bold text-foreground">1680 ₽/м²</span></div></Link>
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