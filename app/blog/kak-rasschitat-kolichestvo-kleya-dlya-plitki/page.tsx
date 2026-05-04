import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Как рассчитать количество клея для плитки | Дом Плитки СПб",
  description: "Расчёт плиточного клея для керамогранита и плитки. Формулы и нормы расхода от официального дилера Cersanit в Санкт-Петербурге.",
  alternates: { canonical: `${SITE_URL}/blog/kak-rasschitat-kolichestvo-kleya-dlya-plitki` },
  openGraph: { title: "Как рассчитать количество клея для плитки | Дом Плитки СПб", url: `${SITE_URL}/blog/kak-rasschitat-kolichestvo-kleya-dlya-plitki`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org", "@type": "Article",
        headline: "Как рассчитать количество клея для плитки и керамогранита",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/kak-rasschitat-kolichestvo-kleya-dlya-plitki`,
        datePublished: "2026-05-04",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Как рассчитать количество клея для плитки и керамогранита</h1>
        
        <p className="text-gray-700 mb-8 text-lg">Правильный расчёт плиточного клея — залог качественного монтажа и экономии материалов. Специалисты Дома Плитки CERSANIT в Санкт-Петербурге поделятся проверенными формулами и советами для различных типов укладки.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Основная формула расчёта клея</h2>
        <p className="text-gray-700 mb-4">Базовая формула расчёта: площадь поверхности (м²) × норма расхода (кг/м²) = количество клея (кг). Норма расхода зависит от размера плитки, типа основания и метода укладки. Для стандартной плитки размером 30×30 см при укладке на ровную поверхность требуется 3-5 кг клея на квадратный метр. Если плитка крупного формата (более 60×60 см) или укладка проводится на неровное основание, расход увеличивается до 7-10 кг/м².</p>
        <p className="text-gray-700 mb-4">Официальные дилеры Cersanit в Санкт-Петербурге рекомендуют всегда добавлять 10-15% к расчётному количеству на случай брака и переделок. Для работ на стене используются специальные клеи с повышенной адгезией — они имеют другие нормы расхода, чем составы для полов.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Влияние размера и типа плитки на расход</h2>
        <p className="text-gray-700 mb-4">Размер плитки существенно влияет на количество необходимого клея. Мелкая плитка (10×10 см и меньше) требует 2-3 кг/м², так как площадь распределяется на большее количество элементов. Среднеформатная плитка (30×30 см, 30×60 см) требует 3-6 кг/м² при стандартной укладке. Крупноформатный керамогранит и плиты большого размера требуют значительно большего расхода: 8-12 кг/м² и выше.</p>
        <p className="text-gray-700 mb-4">Керамогранит, в отличие от обычной керамической плитки, часто укладывается методом сплошного покрытия клеем, что увеличивает расход. В нашем магазине на Янино представлены все основные форматы продукции Cersanit с учётом специфики укладки каждого типа. Консультанты помогут выбрать оптимальный состав клея и рассчитают точное количество материала.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Влияние основания и метода укладки</h2>
        <p className="text-gray-700 mb-4">Состояние основания существенно влияет на расход клея. На идеально ровное основание (отклонение менее 2 мм на метр погонный) требуется минимальное количество клея. При наличии неровностей и выступов требуется больше материала для выравнивания. Неровное основание может потребовать 1.5-2 раза больше клея, чем расчётное количество.</p>
        <p className="text-gray-700 mb-4">Метод укладки также имеет значение: традиционный способ с зубчатым шпателем требует меньше клея, чем метод сплошного покрытия. При укладке на стену против света рекомендуется сплошное покрытие, что увеличивает расход. Специалисты Дома Плитки CERSANIT в Санкт-Петербурге всегда учитывают эти факторы при расчёте материалов.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Расчёт для различных поверхностей</h2>
        <p className="text-gray-700 mb-4">Укладка на полу требует более надёжного крепления, поэтому расход клея выше, чем при укладке на вертикальные поверхности. Для пола расчётные нормы: 4-6 кг/м² для плитки среднего размера, 8-12 кг/м² для крупноформатного керамогранита. Укладка на стену позволяет использовать меньше клея — 2-4 кг/м² для стандартной плитки.</p>
        <p className="text-gray-700 mb-4">При укладке на фасад или влажные помещения используются специальные морозостойкие и гидрофобные клеи с иными характеристиками расхода. Потолочная укладка требует специальных составов с повышенной цепкостью и увеличенного расхода до 5-8 кг/м². Официальный дилер Cersanit в Санкт-Петербурге предоставляет полную консультацию по выбору клея и расчёту для любых типов поверхностей.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Практические советы мастеров</h2>
        <p className="text-gray-700 mb-4">Опытные плиточники рекомендуют всегда брать клей с запасом и тестировать расход на небольшом участке перед началом основных работ. Качество подготовки основания снижает расход: хорошо подготовленная ровная поверхность позволяет сэкономить 20-30% клея. При покупке материалов в Доме Плитки CERSANIT на Янино в Санкт-Петербурге попросите консультацию — наши специалисты помогут определить точное количество клея с учётом всех параметров вашего объекта.</p>
        <p className="text-gray-700 mb-4">Всегда проверяйте дату выпуска клея и условия его хранения. Использование материалов от официального дилера Cersanit гарантирует качество и соответствие всем технологическим нормам. При необходимости доставки материалов в Санкт-Петербург мы предоставляем профессиональные расчёты и консультации, помогая избежать переплат и брака при укладке плитки и керамогранита.</p>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-wood-concept-natural-bezhevyy-22x90" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Wood Concept Natural 22x90</span><span className="mt-2 block text-base font-bold text-foreground">1610 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-soft-concrete-svetlo-seryy-60x120" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Soft Concrete 60x120</span><span className="mt-2 block text-base font-bold text-foreground">2213 ₽/м²</span></div></Link>
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
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