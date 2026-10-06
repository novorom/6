import type { Metadata } from "next"
import { CatalogClient } from "./catalog-client"
import { products } from "@/lib/products-data"
import type { Product } from "@/lib/products-data"

type CatalogPageProps = { searchParams: Promise<Record<string, string | string[] | undefined>> }

export async function generateMetadata({ searchParams }: CatalogPageProps): Promise<Metadata> {
  const params = await searchParams
  const hasFilters = Object.values(params).some((value) => value !== undefined)
  const count = products.filter((p) => p.name?.trim() && p.slug && p.price_retail > 0).length
  const title = "Каталог плитки Cersanit в Санкт-Петербурге — цены и наличие"
  const description = `Каталог плитки, керамогранита и декоров Cersanit в Санкт-Петербурге. ${count} товаров с ценами и характеристиками; актуальный складской остаток указан в карточке.`
  return {
    title,
    description,
    alternates: { canonical: "https://cersanit-spb.ru/catalog" },
    ...(hasFilters ? { robots: { index: false, follow: true } } : {}),
    openGraph: {
      title,
      description,
      url: "https://cersanit-spb.ru/catalog",
      siteName: "Дом Плитки CERSANIT",
      locale: "ru_RU",
      type: "website",
    },
  }
}

export default function CatalogPage() {
  const initialProducts: Product[] = products
    .filter((p) => p.name && p.name.trim() && p.price_retail && p.price_retail > 0 && p.slug)
    .slice(0, 60)

  return <CatalogClient initialProducts={initialProducts} />
}
