import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Плитка для балкона без отопления: морозостойкость и надёжность | Дом Плитки СПб",
  description: "Выбираем морозостойкую плитку для балкона в Санкт-Петербурге. Керамогранит Cersanit для холодных балконов — надёжное решение для суровых зим.",
  alternates: { canonical: `${SITE_URL}/blog/plitka-dlya-balkona-bez-otopleniya` },
  openGraph: { title: "Плитка для балкона без отопления: морозостойкость и надёжность | Дом Плитки СПб", url: `${SITE_URL}/blog/plitka-dlya-balkona-bez-otopleniya`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org",
        "@type": "Article",
        headline: "Плитка для балкона без отопления: морозостойкость и надёжность",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/plitka-dlya-balkona-bez-otopleniya`,
        datePublished: "2026-09-07",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Плитка для балкона без отопления: морозостойкость и надёжность</h1>
        
        <div className="prose prose-invert max-w-none">
          <p className="text-lg text-gray-300 mb-8">
            В Санкт-Петербурге холодный климат диктует особые требования к отделочным материалам. Если ваш балкон не оборудован системой отопления, выбор правильной плитки становится критически важным. Керамогранит Cersanit — это надёжное решение, которое выдерживает суровые петербургские зимы без трещин и деформаций.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Почему морозостойкость — главный критерий выбора</h2>
          <p className="mb-4">
            На неотапливаемом балконе плитка подвергается экстремальным нагрузкам. Температурные колебания от минус 20°C ночью до плюс 5°C днём вызывают расширение и сжатие материала. Обычная керамика не справляется с такими перепадами — она растрескивается, отваливается, создавая опасность для жильцов дома и портя внешний вид фасада.
          </p>
          <p className="mb-4">
            Морозостойкая плитка имеет низкий коэффициент водопоглощения, не более 3%. Это означает, что влага не проникает глубоко в структуру материала и не расширяется при замерзании. В официальном каталоге Cersanit вы найдёте коллекции, специально разработанные для климатических условий России.
          </p>
          <p className="mb-4">
            Сертификаты морозостойкости подтверждают, что плитка прошла испытания по ГОСТ и европейским стандартам. Это гарантия того, что материал прослужит 10-15 лет без деградации.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Керамогранит vs керамическая плитка: различия</h2>
          <p className="mb-4">
            Керамогранит — это спечённый материал высокой плотности, который получают при экстремальных температурах и давлении. Он значительно прочнее и устойчивее к морозу, чем обычная керамическая плитка. Водопоглощение керамогранита составляет 0,5-1%, тогда как у керамики оно может быть 8-10%.
          </p>
          <p className="mb-4">
            Для балконов без отопления в Санкт-Петербурге рекомендуется выбирать именно керамогранит. Cersanit предлагает широкий ассортимент керамогранита с разными фактурами: под камень, дерево, бетон. Размеры варьируются от небольших плиток 20х20 см до крупноформатных 60х60 см, что позволяет подобрать оптимальный вариант для вашего балкона.
          </p>
          <p className="mb-4">
            Различие также заметно в цене. Керамогранит дороже, но его долговечность полностью оправдывает инвестиции. Материал не требует замены год за годом, не нуждается в частом ремонте и восстановлении.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Антискользящие свойства и безопасность</h2>
          <p className="mb-4">
            На балконе часто скапливается влага, лёд и снег. Гладкая плитка становится скользкой и опасной. Поэтому критически важно выбирать материал с хорошей антискользящей поверхностью. Коэффициент трения должен быть не менее 0,5 по стандарту DIN 51130.
          </p>
          <p className="mb-4">
            Cersanit производит морозостойкую плитку с матовой и текстурированной поверхностью. Рифлёная фактура не только выглядит современно, но и обеспечивает надёжное сцепление с подошвой обуви даже во влажных условиях. Это особенно важно для семей с детьми и пожилыми людьми.
          </p>
          <p className="mb-4">
            При выборе плитки для балкона обратите внимание на параметр R11, R12 или R13 — это обозначение класса противоскольжения. Для открытых балконов рекомендуется не менее R11.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Технология укладки на неотапливаемом балконе</h2>
          <p className="mb-4">
            Даже самая качественная плитка потребует правильного монтажа. На холодных балконах используются специальные клеевые смеси, которые сохраняют пластичность при низких температурах. Обычный клей может не набрать нужную прочность и привести к отслаиванию плитки.
          </p>
          <p className="mb-4">
            Рекомендуется закладывать плитку с перерывом шва 5-7 мм для компенсации температурного расширения. Швы заполняются эпоксидной или полиуретановой затиркой, которая не пропускает влагу и противостоит морозу.
          </p>
          <p className="mb-4">
            Основание под плитку должно быть идеально подготовлено — выровнено, загрунтовано и просушено. На балконе необходим хороший дренаж для отвода влаги. В Санкт-Петербурге, где влажность высокая, этот момент особенно критичен. Специалисты официального дилера Cersanit в Янино помогут вам разработать правильную схему укладки.
          </p>

          <h2 className="text-2xl font-bold mt-10 mb-4">Уход и обслуживание морозостойкой плитки</h2>
          <p className="mb-4">
            Плитка для балкона требует регулярного ухода, чтобы служить долго. В зимний период нужно удалять лёд и снег, не используя острые металлические инструменты, которые могут поцарапать поверхность. Лучше применять пластиковые скребки и предварительно обработать плитку специальной жидкостью для облегчения очистки.
          </p>
          <p className="mb-4">
            Весной и осенью проводите ревизию швов. Если затирка начала трескаться, отремонтируйте её немедленно. Цветущая затирка легче поддаётся лечению на ранних стадиях. Для чистки используйте мягкие моющие средства, а не абразивные порошки, которые могут поцарапать глазурь.
          </p>
          <p className="mb-4">
            Один раз в год рекомендуется наносить гидрофобизирующее покрытие. Оно помешает влаге проникать в структуру плитки и затирки, продлевая срок службы материала. Компания Cersanit предлагает специальные средства для ухода за керамогранитом.
          </p>
        </div>
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
              <Link href="/plitka-dlya-balkona-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка для балкона в СПб</Link>
              <Link href="/keramogranit-matovyy-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Матовый керамогранит в СПб</Link>
              <Link href="/keramogranit-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Керамогранит в СПб</Link>
            </div>
          </div>
        </article>
    </div>
  )
}