import type { Metadata, Viewport } from "next"
import { Inter } from "next/font/google"
import "./globals.css"
import { SiteHeader } from "@/components/site-header"
import { SiteFooter } from "@/components/site-footer"

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
    "yandex-verification": "1f85757551ab6b60", // Reusing known ID if applicable, or placeholder
  },
}

export const viewport: Viewport = {
  themeColor: "#1e3a5f",
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="ru">
      <body className={`${inter.className} antialiased`}>
        <SiteHeader />
        <main className="min-h-screen">{children}</main>
        <SiteFooter />
      </body>
    </html>
  )
}
