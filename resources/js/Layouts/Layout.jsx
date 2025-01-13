import React from "react";
import Navbar from "../component/Navbar";
import Footer from "../component/Footer";

const Layout = ({ children }) => {
    return (
        <div className="min-h-screen bg-gray-100">
            {/* Header */}
            <Navbar />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            />
            <meta
                name="description"
                content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data."
            />
            <meta
                name="keywords"
                content="peternakan, kambing, sapi, ayam, desa sindang anom, sekampung udik, lampung timur, digitalisasi peternakan, katalog peternakan"
            />
            <meta
                name="author"
                content="KKN-T 15 sindang anom Institut teknologi sumatera"
            />
            <meta name="robots" content="index, follow" />
            <meta name="googlebot" content="index, follow" />
            <meta name="bingbot" content="index, follow" />
            <title>
                Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom
            </title>
            <link rel="canonical" href="https://sindanganomfarm.com" />
            <meta
                property="og:title"
                content="Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom"
            />
            <meta
                property="og:description"
                content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data."
            />
            <meta
                property="og:image"
                content="https://sindanganomfarm.com/og-image.jpg"
            />
            <meta property="og:url" content="https://sindanganomfarm.com" />
            <meta property="og:type" content="website" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta
                name="twitter:title"
                content="Sindanganomfarm.com - Katalog Peternakan Desa Sindang Anom"
            />
            <meta
                name="twitter:description"
                content="Sindanganomfarm.com adalah sebuah aplikasi katalog peternakan seperti kambing, sapi, ayam dll di Desa Sindang Anom, Kec. Sekampung Udik, Lampung Timur. Aplikasi ini bertujuan untuk mendigitalisasi peternakan di dalam desa dengan harapan meningkatkan penjualan peternakan dan centralisasi data."
            />
            <meta
                name="twitter:image"
                content="https://sindanganomfarm.com/twitter-image.jpg"
            />

            {/* Main Content */}
            <main className="py-10 min-h-screen">{children}</main>

            {/* Footer */}
            <Footer />
        </div>
    );
};

export default Layout;
