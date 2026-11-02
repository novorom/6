import type { Metadata } from "next"
import Link from "next/link"
import { ChevronRight } from "lucide-react"

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: "Как выбрать плитку под стиль интерьера | Дом Плитки СПб",
  description: "Выбираем плитку Cersanit для современного, классического, лофта и скандинавского стиля. Советы от экспертов Санкт-Петербурга.",
  alternates: { canonical: `${SITE_URL}/blog/kak-vybrat-plitku-pod-stil-interera` },
  openGraph: { title: "Как выбрать плитку под стиль интерьера | Дом Плитки СПб", url: `${SITE_URL}/blog/kak-vybrat-plitku-pod-stil-interera`, siteName: "Дом Плитки CERSANIT", locale: "ru_RU", type: "article" },
}

export default function Article() {
  return (
    <div className="min-h-screen bg-background">
      <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify({
        "@context": "https://schema.org", "@type": "Article",
        headline: "Как выбрать плитку под стиль интерьера: современный, классика, лофт, скандинавский",
        publisher: { "@type": "Organization", name: "Дом Плитки CERSANIT", url: SITE_URL },
        mainEntityOfPage: `${SITE_URL}/blog/kak-vybrat-plitku-pod-stil-interera`,
        datePublished: "2026-11-02",
        author: { "@type": "Organization", name: "Дом Плитки CERSANIT" },
      }) }} />
      <article className="mx-auto max-w-4xl px-4 py-10">
        <h1 className="text-3xl font-bold mb-6">Как выбрать плитку под стиль интерьера: современный, классика, лофт, скандинавский</h1>
        
        <div className="prose max-w-none mb-8">
          <p className="mb-6 text-gray-700">
            Плитка — это один из самых важных элементов дизайна интерьера. Её выбор зависит не только от функциональности, но и от стилистического направления вашего жилища. В нашем магазине «Дом Плитки» в Санкт-Петербурге и его филиале в Янино представлены разнообразные коллекции от официального дилера Cersanit, которые помогут реализовать любую дизайнерскую идею. Разберёмся, как правильно подобрать плитку для каждого стиля интерьера.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Плитка для современного стиля интерьера</h2>
          <p className="mb-4 text-gray-700">
            Современный стиль требует минимализма и функциональности. Для этого направления идеально подходят крупноформатные плитки с гладкой поверхностью, выполненные в монохромных цветах: белый, серый, чёрный, бежевый. Плитка для современного интерьера должна иметь минимальное количество швов и создавать ощущение цельности пространства.
          </p>
          <p className="mb-6 text-gray-700">
            В коллекциях Cersanit вы найдёте прекрасные варианты с матовой и глянцевой поверхностью. Особенно популярны плитки, имитирующие бетон или натуральный камень. Такое решение придаёт интерьеру лаконичность и практичность. Специалисты нашего магазина в Санкт-Петербурге помогут вам выбрать идеальный вариант среди современной плитки Cersanit.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Классическая плитка для традиционного дизайна</h2>
          <p className="mb-4 text-gray-700">
            Классический стиль требует элегантности и благородства. Классическая плитка часто украшена орнаментами, мелкими узорами и деталями. Приглушённые оттенки, такие как сливочный, серый, тёмно-синий и золотой, становятся основой такого интерьера. Мозаичные элементы, плитка с геометрическими паттернами и крупные плитки с тонкими линиями золотого или серебристого цвета — всё это характеризует классический подход.
          </p>
          <p className="mb-6 text-gray-700">
            Классическая плитка Cersanit в нашем магазине представлена богатым ассортиментом. Отделка, вдохновлённая мрамором или керамикой эпохи Возрождения, добавит в ваш дом атмосферу роскоши. Наши консультанты в Янино помогут выбрать классическую плитку, которая станет украшением вашего интерьера на долгие годы.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Лофт стиль и индустриальная плитка</h2>
          <p className="mb-4 text-gray-700">
            Лофт — это стиль, который пришёл из переделанных промышленных зданий Нью-Йорка. Плитка для лофта должна быть грубой, неполированной, с видимыми дефектами и неровностями. Красный кирпич, тёмный серый, антрацит, чёрный — основные цвета этого направления. Плитка должна казаться немного изношенной, придавая пространству историческую аутентичность.
          </p>
          <p className="mb-6 text-gray-700">
            В коллекциях Cersanit для лофта используются материалы, имитирующие кирпич и грубый бетон. Текстурированная поверхность, отсутствие глянца и максимальная натуральность — вот что отличает плитку для лофт-интерьера. Посетив наш магазин в Санкт-Петербурге или Янино, вы сможете увидеть всё разнообразие вариантов для создания аутентичного лофт-пространства.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Скандинавский стиль: уют и минимализм</h2>
          <p className="mb-4 text-gray-700">
            Скандинавский дизайн объединяет функциональность и уют. Плитка для скандинавского интерьера должна быть светлой, часто белой или кремовой, с минимальным декором. Натуральные оттенки серого, светло-голубого и бежевого подчёркивают естественность и близость к природе. Простые геометрические узоры и натуральные текстуры приветствуются, но без излишеств.
          </p>
          <p className="mb-6 text-gray-700">
            Плитка Cersanit для скандинавского стиля отличается своей чистотой и лаконичностью. Матовая поверхность, мягкие оттенки и практичность — всё это идеально подходит для создания комфортного скандинавского интерьера. В нашем магазине на станции Янино и в центре Санкт-Петербурга вы найдёте отличные варианты плитки, которая привнесёт в ваш дом атмосферу скандинавского простора и уюта.
          </p>

          <h2 className="text-2xl font-bold mt-8 mb-4">Практические советы по выбору плитки</h2>
          <p className="mb-4 text-gray-700">
            При выборе плитки под стиль интерьера важно учитывать не только эстетику, но и практические характеристики. Размер помещения, уровень влажности, интенсивность использования поверхности — всё это влияет на окончательное решение. Для влажных помещений выбирайте плитку с низким водопоглощением, для кухни — легкие в уходе варианты.
          </p>
          <p className="mb-6 text-gray-700">
            Команда официального дилера Cersanit в Санкт-Петербурге готова помочь вам разобраться с выбором. Посетите наш магазин в Янино или в центре города, посмотрите коллекции вживую и получите профессиональную консультацию. Мы поможем вам выбрать плитку, которая не только идеально впишется в ваш интерьер, но и прослужит вам долгие годы, сохраняя первоначальный внешний вид.
          </p>
        </div>
                    <section className="mt-8">
                <h3 className="text-base font-semibold text-foreground mb-4">Товары из этой статьи</h3>
                <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                  <Link href="/catalog/keramogranit-soft-concrete-svetlo-seryy-60x120" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Soft Concrete 60x120</span><span className="mt-2 block text-base font-bold text-foreground">2213 ₽/м²</span></div></Link>
                  <Link href="/catalog/plitka-calacatta-belyy-30x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Плитка Calacatta белый 30x60</span><span className="mt-2 block text-base font-bold text-foreground">780 ₽/м²</span></div></Link>
                  <Link href="/catalog/keramogranit-northwood-bezhevyy-18x60" className="group flex flex-col bg-card rounded-xl border border-border overflow-hidden hover:shadow-md hover:border-primary/30 transition-all"><div className="aspect-square bg-muted" /><div className="p-3"><span className="text-xs text-muted-foreground line-clamp-2">Керамогранит Northwood бежевый 18x60</span><span className="mt-2 block text-base font-bold text-foreground">1098 ₽/м²</span></div></Link>
                </div>
                <Link href="/catalog" className="mt-4 inline-flex items-center text-sm text-primary hover:underline font-medium">Весь каталог →</Link>
              </section>
                  <div className="mt-6 p-5 rounded-xl bg-muted/30 border border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase tracking-wide">По теме</p>
            <div className="flex flex-wrap gap-2">
              <Link href="/plitka-pod-mramor-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка под мрамор в СПб</Link>
              <Link href="/plitka-pod-beton-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Плитка под бетон в СПб</Link>
              <Link href="/keramogranit-pod-derevo-spb" className="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border bg-background hover:border-primary/40 hover:bg-accent transition-all text-sm text-foreground font-medium">Керамогранит под дерево в СПб</Link>
            </div>
          </div>
        </article>
    </div>
  )
}