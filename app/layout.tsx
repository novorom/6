import type { Metadata, Viewport } from "next"
import { Inter } from "next/font/google"
import "./globals.css"
import { SiteHeader } from "@/components/site-header"
import { SiteFooter } from "@/components/site-footer"
import { CartProvider } from "@/lib/cart-context"
import { ProductsProvider } from "@/lib/products-context"

const inter = Inter({ subsets: ["latin", "cyrillic"] })

const SITE_URL = "https://cersanit-spb.ru"

export const metadata: Metadata = {
  title: {
    default: "Cersanit СПб — Официальный дилер плитки и керамогранита",
    template: "%s | Cersanit Shop",
  },
  description:
    "Магазин керамической плитки Cersanit в Санкт-Петербурге. Весь ассортимент в наличии на складе в Янино. Быстрая доставка и профессиональный расчет.",
  metadataBase: new URL(SITE_URL),
  robots: { index: true, follow: true },
  other: {
    "yandex-verification": "1f85757551ab6b60",
  },
}

export const viewport: Viewport = {
  themeColor: "#1e3a5f",
}

const organizationJsonLd = {
  "@context": "https://schema.org",
  "@type": "Organization",
  name: "Cersanit Shop СПб",
  url: SITE_URL,
  logo: `${SITE_URL}/logo.png`,
  contactPoint: {
    "@type": "ContactPoint",
    telephone: "+7 (905) 205-09-00",
    contactType: "sales",
    areaServed: "RU",
    availableLanguage: "Russian"
  }
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="ru">
      <head>
        <script type="application/ld+json" dangerouslySetInnerHTML={{ __html: JSON.stringify(organizationJsonLd) }} />
      </head>
      <body className={`${inter.className} antialiased`}>
        <ProductsProvider>
          <CartProvider>
            <SiteHeader />
            <main className="min-h-screen">{children}</main>
            <SiteFooter />
          </CartProvider>
        </ProductsProvider>
      </body>
    </html>
  )
}
