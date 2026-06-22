import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка для дома с детьми: безопасная и прочная | Дом Плитки СПб",
  description: "Выбираем нескользкую плитку для дома с детьми в СПб. Безопасное напольное покрытие от Cersanit: практичное, прочное, легко чистится.",
  alternates: { canonical: `${SITE_URL}/blog/kak-vybrat-plitku-dlya-doma-s-detmi` },
  openGraph: { 
    title: "Плитка для дома с детьми: безопасная и прочная | Дом Плитки СПб",
    url: `${SITE_URL}/blog/kak-vybrat-plitku-dlya-doma-s-detmi`, 
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
        headline: "Плитка в доме с детьми: как выбрать нескользкую и прочную",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/kak-vybrat-plitku-dlya-doma-s-detmi`,
        datePublished: "2026-06-22",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Плитка в доме с детьми: как выбрать нескользкую и прочную</h1>
        
        <div className="prose prose-lg max-w-none text-gray-700 space-y-8">
          
          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Почему керамическая плитка — идеальный выбор для семей с детьми</h2>
            <p>Когда в доме появляются дети, требования к материалам полов и стен кардинально меняются. Родители ищут решения, которые сочетают безопасность, долговечность и практичность. Керамическая плитка от Cersanit отвечает всем этим критериям и остаётся одним из лучших выборов для семей с малышами и подростками.</p>
            <p>В Санкт-Петербурге многие молодые семьи предпочитают именно керамику для кухни, ванной и прихожей — мест, где дети чаще всего падают или пачкаются. Плитка легко моется, не впитывает влагу и грязь, что делает её гигиеничной и экономичной в уходе.</p>
            <p>Официальный дилер Cersanit в СПб предлагает широкий ассортимент плитки специально для семей — от скромных размеров до крупноформатных панелей, которые визуально упрощают уборку комнат.</p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Нескользкая плитка: параметр R и коэффициент трения</h2>
            <p>Главная опасность в доме с детьми — скользкий пол. При выборе плитки в первую очередь смотрите на параметр противоскольжения, обозначаемый буквой R. Шкала включает значения от R9 (минимальная защита) до R13 (максимальная).</p>
            <p>Для детских комнат, ванных и кухонь рекомендуются плитки не ниже R11 — они обеспечивают надёжное сцепление даже при влаге. Cersanit производит специальные коллекции с рифлёной или матовой поверхностью, которые прошли все международные тесты на безопасность.</p>
            <p>Жители Санкт-Петербурга и Янино, покупающие плитку для дома с детьми, часто обращают внимание на матовые варианты — они выглядят естественнее и имеют лучшие противоскользящие свойства, чем глянцевые. Матовая поверхность также лучше скрывает отпечатки пальцев и брызги.</p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Прочность плитки: класс износостойкости и толщина</h2>
            <p>Детям свойственно быстро разбивать посуду, прыгать, кидать игрушки. Поэтому плитка должна быть максимально прочной. Класс износостойкости обозначается буквами PEI и варьируется от 1 до 5. Для детских помещений минимум PEI 3-4, а для коридоров и кухни рекомендуется PEI 4-5.</p>
            <p>Толщина плитки тоже имеет значение. Толстая плитка (10-12 мм) лучше выдерживает механические нагрузки и не трескается при падении тяжелых предметов. Cersanit выпускает коллекции усиленной толщины, специально разработанные для высоконагруженных помещений.</p>
            <p>В СПб при выборе плитки для пола дома с детьми учитывайте, что напольное покрытие должно пережить годы игр, занятий физкультурой и перемещения мебели. Качественная керамика от официального дилера Cersanit прослужит 15-20 лет без заметного износа поверхности.</p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Практичность и простота ухода</h2>
            <p>Дети — это бесконечные пятна, грязь и влага. Безопасная плитка для дома должна легко чиститься и не требовать сложного ухода. Керамическая поверхность Cersanit идеально подходит для этого: её можно протирать влажной тряпкой, использовать моющие средства без риска повредить материал.</p>
            <p>Глазурованная плитка образует защитный слой, который отталкивает воду, масло и грязь. Это означает, что даже густые загрязнения легко смываются. Некоторые коллекции имеют антибактериальное покрытие — дополнительная защита для гигиены в ванной комнате и кухне.</p>
            <p>Швы между плитками требуют внимания, но современные материалы упростили процесс. Используйте затирку с противогрибковыми добавками, и швы будут оставаться чистыми годами. Для детской комнаты в Янино или центре Петербурга выбирайте плитку с широкими швами — они визуально разбивают пространство и скрывают пыль.</p>
          </section>

          <section>
            <h2 className="text-2xl font-bold mt-8 mb-4">Где в Санкт-Петербурге купить правильную плитку для дома с детьми</h2>
            <p>Выбор плитки — ответственный процесс, требующий знаний о технических характеристиках и понимания потребностей вашей семьи. Официальный дилер Cersanit в СПб предлагает консультации специалистов, которые помогут выбрать оптимальный вариант по цене и качеству.</p>
            <p>При покупке обязательно просите сертификаты качества и информацию о классе износостойкости, коэффициенте противоскольжения и толщине плитки. Не экономьте на безопасности — качественная плитка от проверенного производителя — это инвестиция в здоровье ваших детей.</p>
            <p>В нашем магазине в Санкт-Петербурге вы найдёте полный спектр плитки Cersanit для всех комнат дома. От ванной и кухни до прихожей и детской — каждую коллекцию мы подобрали с учётом требований к безопасности и эстетике. Приходите к нам, посмотрите образцы и сделайте правильный выбор для комфорта и безопасности своей семьи.</p>
          </section>

        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-tiffany-belyy-42x42" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Tiffany белый 42x42</span><span className="mt-2 block text-base font-bold text-foreground">1370 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-wood-concept-natural-bezhevyy-22x90" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Wood Concept Natural 22x90</span><span className="mt-2 block text-base font-bold text-foreground">1610 ₽/м²</span></div></Link>
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