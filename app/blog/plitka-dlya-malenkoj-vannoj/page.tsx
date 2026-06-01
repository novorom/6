import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка для маленькой ванной: визуально увеличиваем пространство | Дом Плитки СПб",
  description: "Как выбрать плитку для маленькой ванной и визуально расширить пространство. Советы дизайнера и примеры от официального дилера Cersanit в СПб.",
  alternates: { canonical: `${SITE_URL}/blog/plitka-dlya-malenkoj-vannoj` },
  openGraph: { title: "Плитка для маленькой ванной: визуально увеличиваем пространство", url: `${SITE_URL}/blog/plitka-dlya-malenkoj-vannoj`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Плитка для маленькой ванной: как визуально увеличить пространство",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/plitka-dlya-malenkoj-vannoj`,
        datePublished: "2026-06-01",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <div className="mb-8 flex items-center gap-2 text-sm text-muted-foreground">
          <Link href="/" className="hover:text-foreground">Главная</Link>
          <ChevronRight className="h-4 w-4" />
          <Link href="/blog" className="hover:text-foreground">Блог</Link>
          <ChevronRight className="h-4 w-4" />
          <span>Плитка для маленькой ванной</span>
        </div>

        <h1 className="text-4xl font-bold mb-4">Плитка для маленькой ванной: как визуально увеличить пространство</h1>
        
        <p className="text-muted-foreground mb-8">Маленькая ванная комната — частая реальность в квартирах Санкт-Петербурга. Но это не причина для отчаяния. Правильный выбор плитки Cersanit может визуально расширить пространство и сделать комнату светлее, просторнее и уютнее. Рассказываем, какие решения работают лучше всего.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Размер плитки: чем больше, тем лучше</h2>
        
        <p className="mb-4">Это главное правило при оформлении маленькой ванной комнаты. Крупная плитка визуально расширяет помещение, так как создаётся впечатление сплошной поверхности с минимальным количеством швов. Плитка 30×60 см или 60×60 см смотрится намного выигрышнее, чем мозаика 10×10 см. В нашем каталоге Cersanit представлены коллекции именно с такими размерами. Их укладка горизонтально или по диагонали дополнительно подчёркивает ширину ванной. Жители Санкт-Петербурга и Янино часто выбирают именно эти форматы для небольших санузлов.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Светлые тона расширяют границы</h2>
        
        <p className="mb-4">Белая, светло-серая и бежевая плитка — классические решения для маленьких ванных. Они отражают свет и создают ощущение воздушности. Cersanit предлагает множество коллекций в этих тонах с разными текстурами: матовые, глянцевые, с имитацией камня или бетона. Глянцевая поверхность особенно эффективна — она усиливает отражение света и делает комнату ещё более просторной. Если белый кажется скучным, выбирайте светлый беж, светло-серый или пастельные оттенки. Они так же работают на расширение пространства, но выглядят современнее и интереснее.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Минимум орнаментов и декоров</h2>
        
        <p className="mb-4">В маленькой ванной крупные узоры и яркие орнаменты визуально «съедают» пространство. Они привлекают внимание и дробят помещение на части. Лучше выбирать однотонную плитку или с незаметной фактурой. Если хочется добавить интерес, используйте всего один акцентный элемент — например, узкую полоску декора посередине стены или несколько плиток в контрастном цвете. Коллекции Cersanit включают множество вариантов с деликатными рельефами и фактурами, которые добавляют динамику без визуального загромождения пространства. Официальный дилер в Санкт-Петербурге поможет вам выбрать идеальный баланс.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Вертикальная ориентация плитки</h2>
        
        <p className="mb-4">Вертикальная укладка плитки или вертикальный рисунок визуально поднимает потолок и делает помещение выше. В маленькой ванной это работает очень эффективно. Укладывайте прямоугольную плитку вертикально на стены — это создаст ощущение большего объёма. Такой приём особенно важен в типичных санузлах Янино и других районов СПб, где потолки не отличаются высотой. Комбинируйте вертикальную укладку стен с горизонтальной на полу — это создаст гармоничный и визуально расширенный интерьер.</p>

        <h2 className="text-2xl font-bold mt-10 mb-4">Единство материалов и уменьшение переходов</h2>
        
        <p className="mb-4">Чем меньше видимых границ и переходов между материалами, тем просторнее кажется комната. Используйте одну плитку для стен и пола, или выбирайте цветовую гамму из одной коллекции. Это особенно важно в маленькой ванной. Плитка Cersanit производится с максимальной точностью, поэтому швы получаются незаметными и аккуратными. Не перегружайте пространство разными материалами и цветами. Единственное исключение — если вы хотите выделить одну акцентную стену за ванной или раковиной. Тогда остальное пространство должно быть максимально нейтральным и сдержанным.</p>

        <p className="mt-10 text-muted-foreground">Помните, что правильный выбор плитки — это половина успеха в оформлении маленькой ванной. Вторая половина — грамотная укладка и качественное освещение. Если вы выбираете плитку для своего дома в Санкт-Петербурге, посетите наш магазин в Янино. Наши специалисты — официальные представители Cersanit — помогут вам выбрать идеальный вариант для вашей ванной и подскажут лучшие решения для визуального расширения пространства.</p>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/mozaika-royal-stone-mnogotsvetnyy-30x30" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Мозаика Royal Stone 30x30</span><span className="mt-2 block text-base font-bold text-foreground">1820 ₽/м²</span></div></Link>
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