// resources/js/Components/SEOHead.jsx

const SEOHead = ({
    title = "Desa Sindang Anom",
    description = "Katalog Peternakan Desa Sindang Anom",
    image = "https://sindanganomfarm.com/og-image.jpg",
    url = "",
    type = "website",
    publishedAt,
    modifiedAt,
    siteName = "Sindanganomfarm.com",
}) => (
    <head>
        <title>{`${title} | ${siteName}`}</title>
        <meta name="description" content={description} />
        <link rel="canonical" href={url} />

        {/* Open Graph */}
        <meta property="og:type" content={type} />
        <meta property="og:title" content={title} />
        <meta property="og:description" content={description} />
        <meta property="og:image" content={image} />
        <meta property="og:url" content={url} />
        <meta property="og:site_name" content={siteName} />

        {/* Twitter */}
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content={title} />
        <meta name="twitter:description" content={description} />
        <meta name="twitter:image" content={image} />

        {/* Article Metadata */}
        {type === "article" && (
            <>
                <meta property="article:published_time" content={publishedAt} />
                {modifiedAt && (
                    <meta
                        property="article:modified_time"
                        content={modifiedAt}
                    />
                )}
            </>
        )}
    </head>
);

export default SEOHead;
