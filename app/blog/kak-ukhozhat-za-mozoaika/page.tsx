import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Уход за мозаикой в ванной: как правильно чистить | Дом Плитки СПб",
  description: "Полное руководство по уходу за мозаикой в ванной. Советы по чистке швов, выбору средств и предотвращению плесени. Рекомендации официального дилера Cersanit.",
  alternates: { canonical: `${SITE_URL}/blog/kak-ukhozhat-za-mozoaika` },
  openGraph: { title: "Как ухаживать за мозаикой в ванной: советы по чистке | Дом Плитки СПб", url: `${SITE_URL}/blog/kak-ukhozhat-za-mozoaika`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Как ухаживать за мозаикой в ванной: советы по чистке",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/kak-ukhozhat-za-mozoaika`,
        datePublished: "2026-05-25",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <div className="mb-8 flex items-center gap-2 text-sm text-muted-foreground">
          <Link href="/">Главная</Link>
          <ChevronRight className="w-4 h-4" />
          <Link href="/blog">Блог</Link>
          <ChevronRight className="w-4 h-4" />
          <span>Уход за мозаикой</span>
        </div>

        <h1 className="text-4xl font-bold mb-4">Как ухаживать за мозаикой в ванной: советы по чистке</h1>
        <p className="text-lg text-muted-foreground mb-8">Мозаика — популярный выбор для ванных комнат. Чтобы она надолго сохранила красоту и функциональность, нужно знать правила ухода. Специалисты официального дилера Cersanit в Санкт-Петербурге делятся проверенными способами чистки и профилактики.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Ежедневная чистка мозаики: базовые правила</h2>
        <p className="mb-4">Ежедневный уход — основа долгого срока службы мозаики в ванной. После каждого приёма душа или ванны протирайте мозаику мягкой тканью или губкой, чтобы удалить капли воды и предотвратить образование известкового налёта. Это особенно важно в Санкт-Петербурге, где жёсткая водопроводная вода часто оставляет белые отложения.</p>
        <p className="mb-4">Используйте простую воду с нейтральным pH или слабый раствор уксуса. Избегайте абразивных материалов, которые могут повредить поверхность керамической мозаики. Регулярное проветривание ванной комнаты помогает избежать скопления влаги и плесени между элементами.</p>
        <p className="mb-4">Если вы заметили первые признаки налёта, не откладывайте чистку. Свежие загрязнения удаляются намного легче, чем застарелые. Коллекции мозаики от Cersanit разработаны так, чтобы выдерживать частую чистку без ущерба для внешнего вида.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Уход за швами мозаики: профилактика плесени</h2>
        <p className="mb-4">Швы между элементами мозаики — самое уязвимое место для развития плесени и грибка. Именно там скапливается влага и органические остатки. Чтобы уход за мозаикой был эффективным, уделите особое внимание именно швам. Используйте старую зубную щётку, смоченную в растворе перекиси водорода или отбеливателя, чтобы очистить швы от загрязнений.</p>
        <p className="mb-4">После чистки тщательно промойте швы чистой водой и высушите мягкой тканью. Для профилактики плесени в условиях влажного климата Санкт-Петербурга и Янино рекомендуется использовать специальные антимикробные герметики при укладке мозаики. Они не только защищают от плесени, но и упрощают будущий уход мозаика швы.</p>
        <p className="mb-4">Если плесень уже появилась, не пытайтесь очистить швы агрессивными кислотами — это может повредить затирку. Лучше используйте мягкие антигрибковые средства или раствор соды. При серьёзном поражении плесенью рекомендуется обновить затирку.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Выбор чистящих средств для мозаики</h2>
        <p className="mb-4">Не все бытовые средства подходят для мозаики. Чистка мозаики ванная требует особого подхода к выбору препаратов. Избегайте сильных кислот и щелочей, которые разрушают керамику и затирку. Агрессивная химия может не только испортить поверхность, но и попасть в организм через кожу во время принятия ванны.</p>
        <p className="mb-4">Рекомендуемые средства для ухода мозаика: мягкие нейтральные очистители, раствор уксуса с водой в пропорции 1:1, пищевая сода, специализированные спреи для ванных комнат. Для известкового налёта эффективен раствор лимонной кислоты. При выборе средства обратитесь к рекомендациям производителя — официальный дилер Cersanit в Санкт-Петербурге может дать консультацию о совместимости конкретных продуктов с мозаикой.</p>
        <p className="mb-4">Тестируйте любое новое средство на небольшом скрытом участке перед полной обработкой. Надевайте резиновые перчатки при работе с химикатами и обеспечивайте хорошую вентиляцию ванной комнаты. Помните, что натуральные методы часто столь же эффективны и безопаснее для здоровья.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Удаление известкового налёта и пятен</h2>
        <p className="mb-4">Известковый налёт — частая проблема в ванных комнатах Санкт-Петербурга и Янино, где вода отличается повышенной жёсткостью. Для его удаления применяйте смесь уксуса и воды или спрей на основе лимонной кислоты. Нанесите средство, дайте ему воздействовать 15-20 минут, затем аккуратно потрите губкой.</p>
        <p className="mb-4">Для стойких пятен создайте пасту из пищевой соды и воды. Нанесите её на загрязнённый участок, оставьте на 30 минут и мягко потрите. Мозаика керамическая достаточно прочна, но лучше работать деликатно, чтобы не поцарапать глазурь. После чистки всегда промывайте поверхность чистой водой и сушите мягкой тканью.</p>
        <p className="mb-4">Предотвращение налёта проще, чем его удаление. Установите фильтр для воды или смягчитель, регулярно протирайте мозаику и обеспечивайте хорошую вентиляцию. Эти простые меры уход мозаика с чистка станут привычкой и защитят вашу ванную от многих проблем.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Герметизация и защита мозаики: долгосрочный уход</h2>
        <p className="mb-4">После укладки мозаики важно правильно защитить её поверхность. Герметики создают микроскопический защитный слой, который предотвращает впитывание влаги и облегчает уход за мозаикой. Особенно актуально это для неглазурованной мозаики, которая более восприимчива к окрашиванию и влаге.</p>
        <p className="mb-4">Официальный дилер Cersanit в Санкт-Петербурге рекомендует наносить защитный герметик один раз в год или после профессиональной чистки. Перед нанесением убедитесь, что мозаика полностью сухая и чистая. Герметик должен распределяться равномерно, чтобы обеспечить надёжную защиту.</p>
        <p className="mb-4">Правильный выбор затирки при укладке тоже важен для долгосрочного ухода. Современные эпоксидные и полиуретановые затирки более устойчивы к влаге и плесени, чем традиционные цементные. Это снижает затраты на чистка мозаики ванная и улучшает гигиену помещения. При необходимости обновления швов обратитесь к специалистам для качественного выполнения работ.</p>
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