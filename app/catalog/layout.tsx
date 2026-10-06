import type { Metadata } from "next"

export const metadata: Metadata = {
  title: "Каталог плитки Cersanit -- купить в СПб со склада Янино",
  description:
    "Каталог керамической плитки, керамогранита и мозаики Cersanit. Цены и характеристики товаров; фактическое наличие уточняйте в карточках и у менеджера.",
  alternates: { canonical: "https://cersanit-spb.ru/catalog" },
  openGraph: {
    title: "Каталог плитки Cersanit -- купить в СПб",
    description:
      "Каталог керамической плитки, керамогранита и мозаики Cersanit. Цены и фактическое наличие указаны в карточках товаров.",
  },
}

export default function CatalogLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return <>{children}</>
}
