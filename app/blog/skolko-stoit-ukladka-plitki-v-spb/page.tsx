import Link from "next/link"
import type { Metadata } from "next"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Стоимость укладки плитки в СПб 2026 | Дом Плитки СПб",
  description: "Узнайте актуальные цены на укладку плитки и керамогранита в Санкт-Петербурге. Прейскурант плиточников, расценки на монтаж от официального дилера Cersanit.",
  alternates: { canonical: `${SITE_URL}/blog/skolko-stoit-ukladka-plitki-v-spb` },
  openGraph: { 
    title: "Стоимость укладки плитки в СПб 2026 | Дом Плитки СПб",
    description: "Узнайте актуальные цены на укладку плитки и керамогранита в Санкт-Петербурге.",
    url: `${SITE_URL}/blog/skolko-stoit-ukladka-plitki-v-spb`, 
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
        headline: "Сколько стоит укладка плитки в Санкт-Петербурге в 2026 году",
        description: "Полный гайд по стоимости укладки керамической плитки и керамогранита в СПб",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/skolko-stoit-ukladka-plitki-v-spb`,
        datePublished: "2026-06-29",
        dateModified: "2026-06-29",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Сколько стоит укладка плитки в Санкт-Петербурге в 2026 году</h1>
        
        <p className="text-lg text-muted-foreground mb-8">Ремонт ванной комнаты или кухни требует укладки качественной плитки. В Санкт-Петербурге стоимость этой услуги варьируется в зависимости от множества факторов. Дом Плитки CERSANIT подготовил актуальный прейскурант и рекомендации по выбору плиточника в 2026 году.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Базовые расценки на укладку плитки в СПб</h2>
        <p className="mb-4">
          В Санкт-Петербурге стоимость укладки керамической плитки начинается от 800 рублей за квадратный метр для стандартных размеров 20х20 см на полу. Для настенной плитки цены немного ниже — от 600 рублей за м². Однако эти базовые расценки включают только основные работы без дополнительных материалов и сложностей.
        </p>
        <p className="mb-4">
          Современные плиточники СПб учитывают состояние основания, необходимость выравнивания и подготовки поверхности. Стандартная укладка на предварительно выровненную поверхность с использованием клея Cersanit обойдется дешевле, чем укладка с устранением значительных перепадов. Цены актуальны как для центра Санкт-Петербурга, так и для районов Янино, Петергофа и других окраин.
        </p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Факторы, влияющие на стоимость укладки керамогранита</h2>
        <p className="mb-4">
          Керамогранит — более дорогой материал в укладке по сравнению с обычной плиткой. Его стоимость монтажа в Санкт-Петербурге составляет 1200-1800 рублей за квадратный метр. Причина в повышенной сложности работ: керамогранит требует более точного позиционирования, специального инструмента и опыта плиточника.
        </p>
        <p className="mb-4">
          На цену укладки керамогранита влияет размер плиток: крупноформатные плиты 60х120 см или 120х240 см требуют особого мастерства и стоят дороже, нежели стандартные 30х30 см. Полированная и глазурованная поверхность требует аккуратности при работе. Дополнительно может потребоваться использование противоскользящих материалов или специальных клеевых растворов в зависимости от помещения.
        </p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Стоимость вспомогательных работ при укладке</h2>
        <p className="mb-4">
          Помимо самой укладки плитки, необходимо учитывать дополнительные работы, которые влияют на итоговую стоимость. Подготовка основания (выравнивание, гидроизоляция) обойдется в 500-1500 рублей за м² в зависимости от сложности. Затирка швов стоит от 200 до 400 рублей за м² — цена зависит от материала (стандартная затирка или эпоксидная) и ширины швов.
        </p>
        <p className="mb-4">
          В Санкт-Петербурге многие мастера предлагают комплексные услуги, включающие удаление старого покрытия, демонтаж плинтусов и крепление маячков для выравнивания. Если требуется работа в сложных местах — вокруг труб, в углах или на криволинейных поверхностях — стоимость может увеличиться на 20-30%. Официальный дилер Cersanit порекомендует оптимальное соотношение материалов и услуг для вашего проекта.
        </p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Региональные различия: Янино, центр и окраины СПб</h2>
        <p className="mb-4">
          Стоимость укладки плитки варьируется в зависимости от района Санкт-Петербурга. В центре и развитых жилых комплексах (например, в Янино) цены на услуги плиточников выше на 15-25% из-за удобства проезда и концентрации спроса. Квалифицированные мастера в популярных районах устанавливают более высокие тарифы.
        </p>
        <p className="mb-4">
          На периферии Санкт-Петербурга цены снижаются примерно на 10-15%, однако может потребоваться дополнительная оплата за выезд мастера. При больших объемах работ часто возможна договоренность о скидке. Рекомендуется получить несколько предложений от проверенных плиточников, прежде чем выбрать исполнителя для вашего проекта в том или ином районе.
        </p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Как выбрать надежного плиточника и сэкономить</h2>
        <p className="mb-4">
          При выборе плиточника в Санкт-Петербурге рекомендуется проверить портфолио работ, отзывы и сертификаты квалификации. Профессиональные мастера, работающие с материалами Cersanit, часто имеют официальные рекомендации от производителя. Важно убедиться, что плиточник использует качественные инструменты и клеевые растворы — это влияет на долговечность укладки.
        </p>
        <p className="mb-4">
          Для экономии выбирайте стандартные размеры плитки вместо крупноформатных, планируйте работы в низкий сезон (осень-зима), когда спрос ниже и цены ниже. Закупка материалов напрямую в Доме Плитки CERSANIT дает возможность согласовать работы с поставщиком и получить комплексное решение. Получите смету заранее, уточните, какие материалы входят в стоимость, и убедитесь, что договор включает гарантию на выполненные работы в течение не менее 1-2 лет.
        </p>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-soft-concrete-svetlo-seryy-60x120" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Soft Concrete 60x120</span><span className="mt-2 block text-base font-bold text-foreground">2213 ₽/м²</span></div></Link>
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