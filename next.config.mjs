/** @type {import('next').NextConfig} */
const nextConfig = {
  images: {
    unoptimized: true,
    remotePatterns: [
      {
        protocol: "https",
        hostname: "pvi.cersanit.ru",
      },
      {
        protocol: "https",
        hostname: "images.weserv.nl",
      },
    ],
  },
  async redirects() {
    return [
      // www → без www
      {
        source: "/:path*",
        has: [{ type: "host", value: "www.cersanit-spb.ru" }],
        destination: "https://cersanit-spb.ru/:path*",
        permanent: true,
      },
      // Vercel-домен → основной домен (предотвращает дубли в индексе Яндекса)
      {
        source: "/:path*",
        has: [{ type: "host", value: "cersanit-spb.vercel.app" }],
        destination: "https://cersanit-spb.ru/:path*",
        permanent: true,
      },
    ]
  },
  async headers() {
    return [
      // Запрещаем индексацию с Vercel-домена на случай если боты обходят редиректы
      {
        source: "/:path*",
        has: [{ type: "host", value: "cersanit-spb.vercel.app" }],
        headers: [
          { key: "X-Robots-Tag", value: "noindex, nofollow" },
        ],
      },
    ]
  },
}

export default nextConfig
