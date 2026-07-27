import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Где купить плитку в СПб недорого: советы и адреса магазинов | Дом Плитки",
  description: "Как купить качественную плитку в Санкт-Петербурге со скидками. Советы по выбору и адреса официальных магазинов Cersanit в СПб.",
  alternates: { canonical: `${SITE_URL}/blog/gde-kupit-plitku-v-spb-nedorogo` },
  openGraph: { title: "Где купить плитку в СПб недорого: советы и адреса магазинов", url: `${SITE_URL}/blog/gde-kupit-plitku-v-spb-nedorogo`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org", "@type": "Article",
        headline: "Где купить плитку в Санкт-Петербурге недорого: советы покупателю",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/gde-kupit-plitku-v-spb-nedorogo`,
        datePublished: "2026-07-27",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Где купить плитку в Санкт-Петербурге недорого: советы покупателю</h1>
        
        <div className="prose prose-lg max-w-none mb-8">
          <p className="text-gray-700 mb-6">
            Ремонт ванной комнаты, кухни или укладка плитки на полу требует тщательного выбора материала. В Санкт-Петербурге много магазинов плитки, но найти качественный товар по доступной цене — задача непростая. Магазины нашей сети официальных дилеров Cersanit помогут вам разобраться в ассортименте и найти оптимальный вариант по цене.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Официальные дилеры Cersanit в Санкт-Петербурге</h2>
          <p className="text-gray-700 mb-4">
            Покупка плитки у официального дилера гарантирует подлинность продукции и полную гарантию производителя. Дом Плитки CERSANIT работает в Санкт-Петербурге и пригородах, предлагая полный спектр услуг — от консультации до доставки. Наши специалисты помогут выбрать плитку для любого помещения: кухни, ванной, жилых комнат, коридоров и балконов. У нас всегда в наличии популярные коллекции на складе в СПб, что позволяет избежать лишних переплат и долгих ожиданий. Все товары сертифицированы и соответствуют российским стандартам качества.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Плитка со склада: экономия и удобство</h2>
          <p className="text-gray-700 mb-4">
            Приобретение плитки со склада в Санкт-Петербурге — отличный способ сэкономить. Товар со склада сразу готов к отправке, не требует ожидания доставки из других регионов. Дом Плитки CERSANIT предлагает плитку со склада с конкурентными ценами. У нас есть керамическая плитка для ванной, керамогранит для полов, мозаика и декоративные элементы. Все коллекции представлены в разных ценовых категориях. Если вы покупаете большой объём на ремонт, стоит спросить о скидках. Менеджеры магазина плитки СПб помогут рассчитать нужное количество, учитывая припуск на обрезку и брак.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Как выбрать недорогую плитку без потери качества</h2>
          <p className="text-gray-700 mb-4">
            Часто думают, что дешевая плитка — некачественная. На самом деле это миф. Правильный выбор поможет купить хорошую плитку в Санкт-Петербурге недорого. Обратите внимание на толщину материала — для пола нужна более толстая плитка (8-10 мм), для стены достаточно 6-8 мм. Проверьте наличие сертификата качества. Плитка Cersanit известна своей долговечностью и прочностью. Выбирайте коллекции из базовых линеек — они дешевле модных дизайнерских серий, но не уступают в качестве. Светлые однотонные плитки стоят дешевле пестрых с рисунком. Большие форматы (60х60, 120х120) экономичнее маленьких, так как требуют меньше швов и клея.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Доставка и монтаж плитки в Санкт-Петербурге</h2>
          <p className="text-gray-700 mb-4">
            Стоимость доставки важна при расчёте общей суммы. В Санкт-Петербурге и близлежащих районах (включая Янино, Приморский район, Петроградский) наша служба доставки работает оперативно. Можно выбрать доставку на дом или забрать товар со склада самостоятельно, если это дешевле. Упаковка плитки выполняется с учётом безопасности при транспортировке. Специалисты магазина могут также подсказать надёжных мастеров для монтажа. При заказе крупного объёма плитки договоритесь о скидке на доставку — это поможет ещё больше сэкономить на ремонте.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Акции и спецпредложения на плитку в СПб</h2>
          <p className="text-gray-700 mb-4">
            Магазины плитки регулярно проводят акции и распродажи. Дом Плитки CERSANIT предлагает скидки на остатки со склада, при закупке больших объёмов, а также сезонные спецпредложения. Подпишитесь на рассылку, чтобы первым узнавать о новых скидках. Иногда дешевле купить плитку СПб недорого в конце сезона, когда магазин избавляется от прошлогодних коллекций. Также можно совместить несколько предложений: например, скидка на объём плюс скидка постоянного покупателя. Наши менеджеры всегда готовы помочь выбрать оптимальный вариант, чтобы вы купили качественную плитку в Санкт-Петербурге по лучшей цене.
          </p>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
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