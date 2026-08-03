import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка Cersanit: отзывы покупателей и опыт использования | Дом Плитки СПб",
  description: "Читайте отзывы покупателей о керамограните и плитке Cersanit. Узнайте о качестве и опыте использования в Санкт-Петербурге.",
  alternates: { canonical: `${SITE_URL}/blog/plitka-cersanit-otzyvy-pokupatelej` },
  openGraph: { title: "Плитка Cersanit: отзывы покупателей и опыт использования", url: `${SITE_URL}/blog/plitka-cersanit-otzyvy-pokupatelej`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Плитка Cersanit: отзывы покупателей и опыт использования",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/plitka-cersanit-otzyvy-pokupatelej`,
        datePublished: "2026-08-03",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <nav className="flex items-center gap-2 text-sm text-gray-600 mb-8">
          <Link href="/" className="hover:text-blue-600">Главная</Link>
          <ChevronRight size={16} />
          <Link href="/blog" className="hover:text-blue-600">Блог</Link>
          <ChevronRight size={16} />
          <span>Отзывы о плитке Cersanit</span>
        </nav>

        <h1 className="text-4xl font-bold mb-4">Плитка Cersanit: отзывы покупателей и опыт использования</h1>
        
        <div className="text-gray-600 mb-8">
          <p>Опубликовано: 3 августа 2026 | Обновлено: 3 августа 2026</p>
        </div>

        <div className="prose prose-lg max-w-none space-y-8">
          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Почему выбирают Cersanit в Санкт-Петербурге</h2>
            <p className="text-gray-700 mb-4">
              Cersanit — это польский производитель керамической плитки и керамогранита, который завоевал доверие миллионов потребителей по всему миру. В Санкт-Петербурге наш магазин «Дом Плитки» является официальным дилером Cersanit и предлагает полный ассортимент продукции этого бренда. Качество Cersanit проверено временем и многолетним опытом использования в российских домах и квартирах.
            </p>
            <p className="text-gray-700">
              Покупатели из СПб ценят плитку Cersanit за надежность, разнообразие дизайнов и доступную цену. Компания постоянно инновирует, предлагая новые коллекции, которые соответствуют современным трендам в интерьере. От скромных квартир в районе Янино до дорогих особняков на побережье Финского залива — керамогранит Cersanit украшает дома жителей Санкт-Петербурга.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Положительные отзывы покупателей о качестве</h2>
            <p className="text-gray-700 mb-4">
              Большинство отзывов о плитке Cersanit содержат похвалу в адрес качества материала. Покупатели отмечают, что керамогранит Cersanit не скалывается, не трескается и долгие годы сохраняет первоначальный вид. Особенно высоко оценивается качество глазури — она устойчива к царапинам и стиранию, что критично для кухонь и ванных комнат.
            </p>
            <p className="text-gray-700 mb-4">
              Жители Санкт-Петербурга в своих отзывах подчеркивают, что плитка Cersanit выдерживает суровый климат города — перепады температур не влияют на качество материала. Керамогранит не впитывает влагу, что делает его идеальным для влажных помещений. Покупатели в СПб рекомендуют эту плитку друзьям и знакомым, отмечая, что срок службы превышает заявленные производителем характеристики.
            </p>
            <p className="text-gray-700">
              В нашем магазине в районе Янино часто приходят клиенты, которые используют Cersanit уже 5-10 лет и остаются довольны результатом. Плитка практически не изнашивается, глазурь остается блестящей, а цвета не тускнеют под воздействием солнечного света.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Опыт использования в разных помещениях</h2>
            <p className="text-gray-700 mb-4">
              Керамогранит Cersanit универсален и подходит для облицовки различных поверхностей. Покупатели отзывов рассказывают об успешном применении плитки на полах кухни, в ванных комнатах, прихожих и даже на лоджиях. Для напольного покрытия особенно ценятся противоскользящие коллекции Cersanit, которые обеспечивают безопасность семей в Санкт-Петербурге.
            </p>
            <p className="text-gray-700 mb-4">
              На стенах плитка Cersanit также демонстрирует отличные результаты. Эстетичный внешний вид и легкость в уходе делают ее популярным выбором для облицовки фартука на кухне. Официальный дилер Cersanit в СПб предоставляет консультации по правильному выбору плитки для конкретного помещения, учитывая особенности использования.
            </p>
            <p className="text-gray-700">
              Керамогранит Cersanit успешно применяется и в общественных местах — в кафе, магазинах, офисах Санкт-Петербурга. Повышенная прочность материала позволяет ему выдерживать интенсивные нагрузки, а стильный дизайн плитки Cersanit украшает интерьер любого помещения.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Актуальные коллекции и тренды</h2>
            <p className="text-gray-700 mb-4">
              Cersanit регулярно обновляет свой ассортимент, выпуская новые коллекции керамогранита, которые отвечают современным тенденциям в дизайне интерьера. В нашем магазине в Санкт-Петербурге вы найдете плитку в стиле лофт, минимализм, классику и множество других направлений. Покупатели из СПб особенно ценят эконом-линейки Cersanit, которые предлагают отличное соотношение цены и качества.
            </p>
            <p className="text-gray-700 mb-4">
              Актуальные тренды включают крупноформатный керамогранит, который визуально расширяет пространство и облегчает процесс укладки. Плитка Cersanit с имитацией натурального камня, дерева и других материалов позволяет создавать эффектные интерьеры без чрезмерных затрат. В районе Янино и других районах СПб нашим клиентам нравятся нейтральные оттенки — белый, серый, бежевый, которые универсальны и долго не надоедают.
            </p>
            <p className="text-gray-700">
              В 2024-2025 годах популярны мелкоформатные плитки с геометрическими узорами и текстурированная керамогранит Cersanit. Отзывы покупателей показывают, что инвестиция в современный дизайн плитки окупается долгосрочной радостью от интерьера и отсутствием необходимости в переделке в ближайшие 10-15 лет.
            </p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Где купить плитку Cersanit в Санкт-Петербурге</h2>
            <p className="text-gray-700 mb-4">
              Наш магазин «Дом Плитки» является официальным дилером Cersanit в Санкт-Петербурге и предлагает полный спектр услуг. Мы гарантируем подлинность всех товаров, наличие сертификатов качества и справедливые цены. Наши специалисты помогут вам выбрать идеальный керамогранит Cersanit для вашего проекта, учитывая бюджет, стиль и особенности помещения.
            </p>
            <p className="text-gray-700 mb-4">
              Магазин находится в удобном месте, доступном для жителей различных районов СПб, включая Янино. Мы предлагаем доставку керамогранита по всему городу и в пригороды, а также услуги профессиональных укладчиков. Все товары Cersanit в нашем магазине сопровождаются подробной информацией о характеристиках, что помогает покупателям сделать правильный выбор.
            </p>
            <p className="text-gray-700">
              Отзывы наших клиентов из Санкт-Петербурга подтверждают, что покупка плитки Cersanit в «Доме Плитки» — это инвестиция в качество и надежность. Многие покупатели возвращаются к нам повторно, рекомендуя наш магазин друзьям и коллегам. Приходите в наш салон, посмотрите образцы керамогранита Cersanit и оцените разнообразие предложений лично.
            </p>
          </section>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-wood-concept-natural-bezhevyy-22x90" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Wood Concept Natural 22x90</span><span className="mt-2 block text-base font-bold text-foreground">1610 ₽/м²</span></div></Link>
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-lofthouse-seryy-28x25" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Lofthouse серый 28x25</span><span className="mt-2 block text-base font-bold text-foreground">1680 ₽/м²</span></div></Link>
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