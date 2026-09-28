import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Нескользкая плитка для дома: безопасность на полу | Дом Плитки СПб",
  description: "Антискользящий керамогранит Cersanit в Санкт-Петербурге. Плитка R10 R11 для ванной и прихожей. Официальный дилер.",
  alternates: { canonical: `${SITE_URL}/blog/antiskolzyashhaya-plitka-dlya-doma` },
  openGraph: { title: "Нескользкая плитка для дома: безопасность на полу", url: `${SITE_URL}/blog/antiskolzyashhaya-plitka-dlya-doma`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org", "@type": "Article",
        headline: "Нескользкая плитка для дома: безопасность на полу в ванной и прихожей",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/antiskolzyashhaya-plitka-dlya-doma`,
        datePublished: "2026-09-28",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Нескользкая плитка для дома: безопасность на полу в ванной и прихожей</h1>
        
        <section className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Почему нескользкая плитка важна для безопасности дома</h2>
          <p className="text-gray-700 mb-4">Безопасность в доме — приоритет каждой семьи. Скользкие полы в ванной комнате и прихожей становятся источником травм, особенно для пожилых людей и детей. Нескользкая плитка решает эту проблему, обеспечивая надежное сцепление с подошвой обуви и мокрыми ногами. Антискользящий керамогранит от Cersanit — это современное решение, которое сочетает функциональность и эстетику. В Санкт-Петербурге все больше владельцев квартир и частных домов выбирают именно такую плитку для обновления интерьера. Высокий коэффициент трения предотвращает скольжение, дает уверенность при передвижении и значительно снижает риск падений на мокрых поверхностях.</p>
        </section>

        <section className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Классификация по коэффициенту сцепления: R10, R11 и выше</h2>
          <p className="text-gray-700 mb-4">Международная классификация DIN 51130 определяет антискользящие свойства плитки по коэффициенту сцепления. Плитка R10 имеет средний уровень защиты и подходит для сухих помещений с периодическим контактом с влагой. Керамогранит R11 обеспечивает более высокий уровень безопасности и рекомендуется для ванных комнат, душевых и бассейнов, где влажность постоянна. Классы R12 и R13 предназначены для производственных помещений с экстремальными условиями. При выборе нескользкой плитки для дома в Санкт-Петербурге специалисты магазина Cersanit рекомендуют класс R11 для ванных комнат и прихожих. Это оптимальное сочетание практичности и эстетики, обеспечивающее надежную защиту от скольжения в условиях повышенной влажности.</p>
        </section>

        <section className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Антискользящий керамогранит Cersanit для ванной комнаты</h2>
          <p className="text-gray-700 mb-4">Ванная комната — помещение, где риск скольжения максимален. Сочетание влаги, мыла и гладких поверхностей создает опасную обстановку. Антискользящий керамогранит Cersanit специально разработан для таких условий. Поверхность плитки имеет микротекстуру, которая обеспечивает надежное сцепление даже при наличии воды и пены. Дилер Cersanit в Санкт-Петербурге предлагает широкий ассортимент дизайнов — от классических однотонных вариантов до моделей с имитацией натурального камня или дерева. Плитка легко чистится, не требует специального ухода и сохраняет свои антискользящие свойства на протяжении всего срока использования. Выбирая нескользкую плитку для ванной у официального дилера Cersanit, вы получаете гарантию качества и долговечности.</p>
        </section>

        <section className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Защита от скольжения в прихожей и на входе</h2>
          <p className="text-gray-700 mb-4">Прихожая и входная зона требуют повышенного внимания к безопасности. Здесь идет интенсивное движение, а во влажное время года полы постоянно мокрые от грязи и осадков. Нескользкая плитка в этих местах — необходимость, а не роскошь. Керамогранит R10-R11 от Cersanit обеспечивает стабильное сцепление обуви с поверхностью в любых условиях. Жители Санкт-Петербурга, особенно в Янино и других районах с суровым климатом, оценили преимущества антискользящего покрытия. Плитка выдерживает экстремальные температурные колебания, устойчива к соли и реагентам, используемым при очистке дорог. Официальный дилер Cersanit в нашем городе помогает подобрать идеальный вариант, учитывая климатические особенности региона и интенсивность использования помещения.</p>
        </section>

        <section className="mb-8">
          <h2 className="text-2xl font-bold mb-4">Уход и долговечность антискользящей плитки</h2>
          <p className="text-gray-700 mb-4">Антискользящий керамогранит Cersanit отличается практичностью и неприхотливостью в уходе. Микротекстура поверхности не скапливает грязь и легко очищается обычной влажной тряпкой. Для усиления антискользящего эффекта можно использовать специальные моющие средства, которые рекомендует дилер Cersanit в Санкт-Петербурге. Плитка сохраняет свои свойства десятилетиями, не требуя замены или восстановления покрытия. В отличие от специальных противоскользящих покрытий, которые со временем стираются, керамогранит R11 обеспечивает постоянную защиту. Жители Янино и других районов города могут быть уверены в надежности выбранного материала. Инвестиция в качественную нескользкую плитку — это инвестиция в безопасность вашей семьи на многие годы вперед.</p>
        </section>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-tiffany-belyy-42x42" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Tiffany белый 42x42</span><span className="mt-2 block text-base font-bold text-foreground">1370 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-blend-seryy-60x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Blend серый 60x60</span><span className="mt-2 block text-base font-bold text-foreground">1820 ₽/м²</span></div></Link>
                </div>
                <Link href="/catalog" className="mt-4 inline-flex items-center text-sm text-primary hover:underline font-medium">Весь каталог →</Link>
              </section>
                  <div className="mt-6 p-5 rounded-xl bg-muted/30 border border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase tracking-wide">По теме</p>
            <div className="flex flex-wrap gap-2">
              <Link href="/plitka-dlya-dushi-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для душа в СПб</Link>
              <Link href="/plitka-dlya-vannoj-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для ванной в СПб</Link>
              <Link href="/keramogranit-matovyy-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Матовый керамогранит в СПб</Link>
            </div>
          </div>
        </article>
    </div>
  )
}