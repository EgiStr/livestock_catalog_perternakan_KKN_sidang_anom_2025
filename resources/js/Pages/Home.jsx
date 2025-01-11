import React from "react";
import { Link } from "@inertiajs/inertia-react";
import Layout from "../Layouts/Layout";
import Hero from "../component/Hero";
import TentangHome from "../component/TentangHome";
// import StokPage from "../component/StrukturOrganisasi";
import { User } from "lucide-react";
import Kades from "../../../public/images/kades.jpeg";

const staffMembers = [
  { name: "Miswadi", title: "Sekretaris Desa", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120507690009.png" },
  { name: "Mat Mujianto", title: "Kepala Seksi Pelayanan", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121304950002.png" },
  { name: "Selvi Yulia Harsusi", title: "Kepala Urusan Tata Usaha dan Umum", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807125404940007.png" },
  { name: "Deni Riyanto", title: "Kepala Seksi Pemerintahan", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121712860001.png" },
  { name: "Bayu Mochammad Fathoni", title: "Kepala Kesejahteraan", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_3273020502850011.png" },
  { name: "Uun Nursalim", title: "Kepala Urusan Keuangan", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120701890004.png" },
  { name: "Sanusi", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120310190007.png" },
  { name: "Cecep Nurdin", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807122602890002.png" },
  { name: "Hermawan", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121905970005.png" },
  { name: "Sutrisno", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120506740003.png" },
  { name: "Elis Susilowati", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807125605000003.png" },
  { name: "Nasrudin", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121605980007.png" },
  { name: "Badarudin", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120402810003.png" },
  { name: "Eki Lustiana", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121209940001.png" },
  { name: "Saepudin", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120505870003.png" },
  { name: "Suradi", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121505780006.png" },
  { name: "Muhadi", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121303710001.png" },
  { name: "Ahmad Fajar", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120105940001.png" },
  { name: "Aris Ginanjar", title: "Kepala Dusun", image: "http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120507960005.png" },
];

const Home = ({ farms }) => {
  const latestFarms = farms
    .sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt))
    .slice(0, 4);

  return (
    <>
      <Hero />
      <Layout>
      <TentangHome />
        {/* <StokPage /> */}
        <div className="min-h-screen overflow-x-hidden bg-green flex flex-col items-center mt-[100px] md:p-[30px] pb-20">
          <div className="text-center text-white mb-20">
            <h1 className="text-3xl font-bold mt-3">STOK</h1>
            <p className="text-lg font-semibold">
              Struktur Organisasi dan Tata Kerja Desa Sindang Anom
            </p>
          </div>

          <div className="flex flex-wrap gap-6 items-center justify-center mb-10">
            <div className="bg-white rounded-lg shadow-md py-[20px] px-5 text-center w-[250px] h-[300px] flex flex-col items-center">
              <img
                src={Kades}
                alt="Kepala Desa"
                className="w-[150px] h-[150px] mx-auto rounded-md"
              />
              <h2 className="font-bold text-lg mt-7">Kepala Desa</h2>
              <p className="font-bold mt-8 text-lg text-HoverGreen">Kepala Desa</p>
            </div>
          </div>

          <div className="grid grid-cols-2 gap-x-3 gap-y-2 items-center justify-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            {staffMembers.map((staff, index) => (
              <div
                key={index}
                className="bg-white rounded-lg shadow-md py-[25px] px-5 text-center w-[250px] h-[300px] flex flex-col items-center"
              >
                <img
                  src={staff.image}
                  alt={staff.name}
                  className="w-[150px] h-[150px] mx-auto rounded-md"
                />
                <h2 className="font-bold text-lg mt-5">{staff.name}</h2>
                <p className="font-bold mt-4 text-md text-HoverGreen">
                  {staff.title}
                </p>
              </div>
            ))}
          </div>
        </div>

        {/* Peternakan */}
        <div className="bg-gray-100 min-h-screen py-10 mt-10">
          <div className="text-center mb-[90px]">
            <h1 className="text-xl md:text-3xl font-bold text-HoverGreen">
              Peternakan Di Desa Sindang Anom
            </h1>
            <p className="text-green-500 text-md font-semibold mt-1">
              Lihat Semua Peternakan disini
            </p>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-5 md:px-[100px]">
          {latestFarms.map((item) => (
            <div
              key={item.id}
              className="bg-white rounded-lg shadow-md overflow-hidden flex flex-col"
            >
              <div className="bg-gray-200">
                <img
                  // src="item.image_url"
                  src="https://github.com/user-attachments/assets/24fb7c2d-fad0-42a2-b588-09f90ad43b7e"
                  alt="Peternakan"
                  className="w-full h-auto object-cover"
                />
              </div>
              <div className="p-4 flex flex-col flex-grow">
                <div className="flex items-center justify-between mb-2">
                  <div className="flex items-center text-sm text-white font-bold bg-green px-3 py-1 rounded-full">
                    <span className="text-white rounded-full mr-1 flex items-center justify-center text-xs">
                      <User size={16} />
                    </span>
                    {item.user?.fullname || "Tidak ada data pengguna"}
                  </div>
                  <div className="text-yellow-500 flex space-x-1">
                    {Array(5)
                      .fill(0)
                      .map((_, i) => (
                        <span key={i}>⭐</span>
                      ))}
                  </div>
                </div>
                <p>
                  {item.description
                    ? item.description.slice(0, 50) +
                      (item.description.length > 100 ? "..." : "")
                    : "Tidak ada deskripsi"}
                </p>
                <p className="mt-1 font-bold text-sm text-HoverGreen mb-6">
                  Kapasitas: {item.capacity} Kepala
                </p>
                <div className="mt-auto">
                  <Link
                    href={`/detailternak/${item.id}`}
                    className="text-green text-sm font-semibold hover:underline flex items-center"
                  >
                    Lihat Detail
                  </Link>
                </div>
              </div>
            </div>
          ))}
        </div>
          <div className="flex justify-center mt-10">
            <Link href="/peternakan">
              <button className="bg-green hover:bg-HoverGreen text-white font-semibold px-6 py-2 rounded-md transition duration-200">
                Lihat Selengkapnya
          </button>
        </Link>
      </div>
    </div>
    </Layout>
    </>
    
  );
};

export default Home;
