import React from "react";
import Image from '../../../public/images/userNotFound.png'
import Miswadi from '../../../public/images/miswadi.jpeg'
import Kades from '../../../public/images/kades.jpeg'

const StokPage = () => {
  return (
    <div className="min-h-screen bg-green flex flex-col items-center mt-[100px] p-[30px] pb-20">
      {/* Title Section */}
      <div className="text-center text-white mb-20">
        <h1 className="text-3xl font-bold mt-3">STOK</h1>
        <p className="text-lg font-semibold">
          Struktur Organisasi dan Tata Kerja Desa Sindang Anom
        </p>
      </div>

      {/* Cards Section */}
      <div className="flex items-center justify-center">
        <div className="flex flex-cols-2 md:flex-cols-4 gap-6">
          <div className="bg-white rounded-lg shadow-md p-10 text-center">
            <img
              src={Kades} 
              className="w-[150px] h-[150px] mx-auto rounded-md mb-4"/>
            <h2 className="font-bold text-lg">
              Prof. Dr. I Nyoman Pugeg Aryantha
            </h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Kepala Desa</p>
          </div>
        </div>
      </div>

      <div className="flex flex-wrap gap-6 items-center justify-center mt-10">
        {/* Card 1 */}
        <div className="bg-white rounded-lg shadow-md p-10 text-center w-full md:w-auto">
            <img
            src={Miswadi}
            alt="Kepala Desa"
            className="w-[150px] h-[150px] mx-auto rounded-md mb-4"
            />
            <h2 className="font-bold text-lg">Miswadi</h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Sekretaris Desa</p>
        </div>

        {/* Card 2 */}
        <div className="bg-white rounded-lg shadow-md p-10 text-center w-full md:w-auto">
            <img
            src="http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121304950002.png"
            alt="Kepala Desa"
            className="w-[150px] h-[150px] mx-auto rounded-md mb-4"
            />
            <h2 className="font-bold text-lg">Mat Mujianto</h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Kepala Seksi Pelayanan</p>
        </div>
        {/* Card 3 */}
        <div className="bg-white rounded-lg shadow-md p-10 text-center w-full md:w-auto">
            <img
            src="http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807125404940007.png"
            alt="Kepala Desa"
            className="w-[150px] h-[150px] mx-auto rounded-md mb-4"
            />
            <h2 className="font-bold text-lg">Selvi Yulia Harsusi</h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Kepala Urusan Tata Usaha dan Umum</p>
        </div>
        {/* Card 4 */}
        <div className="bg-white rounded-lg shadow-md p-10 text-center w-full md:w-auto">
            <img
            src="http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807120602020004.png"
            alt="Kepala Desa"
            className="w-[150px] h-[150px] mx-auto rounded-md mb-4"
            />
            <h2 className="font-bold text-lg">Tubagus Rohmat</h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Kepala Urusan Perencanaan</p>
        </div>
        {/* Card 5 */}
        <div className="bg-white rounded-lg shadow-md p-10 text-center w-full md:w-auto">
            <img
            src="http://metadesa.id/LAMPUNG/LAMPUNGTIMUR/SekampungUdik/SindangAnom/foto_aparat/18_07_12_2007_Aparat_1807121209940001.png"
            alt="Kepala Desa"
            className="w-[150px] h-[150px] mx-auto rounded-md mb-4"
            />
            <h2 className="font-bold text-lg">Eki Lustiana</h2>
            <p className="font-bold mt-3 text-xl text-HoverGreen">Kepala Urusan Perencanaan</p>
        </div>

      </div>
    </div>
  );
};

export default StokPage;
