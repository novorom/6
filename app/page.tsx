import { Suspense } from "react"
import dynamic from "next/dynamic"

const HomeContent = dynamic(() => import("@/components/home-content").then(mod => ({ default: mod.HomeContent })), {
  loading: () => <div className="min-h-screen bg-background" />
})

const siteUrl = "https://cersanit-spb.ru"

const organizationJsonLd = {
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Дом Плитки CERSANIT",
  "url": siteUrl,
  "logo": `${siteUrl}/logo.png`,
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7 (905) 205-09-00",
    "contactType": "sales",
    "areaServed": "RU",
    "availableLanguage": "Russian"
  }
}

export default function HomePage() {
  return (
    <div className="flex flex-col">
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(organizationJsonLd) }}
      />
      <Suspense fallback={<div className="min-h-screen bg-background" />}>
        <HomeContent />
      </Suspense>
    </div>
  )
}
