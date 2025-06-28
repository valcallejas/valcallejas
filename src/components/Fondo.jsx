// src/components/Fondo.jsx
import React from "react";
import fondoImg from "../assets/img/fondo.jpg";

const Fondo = () => {
  return (
    <section
      // 🎨 Fondo con imagen Tailwind
      className="
        w-[85%] mx-auto                      
        py-[16rem] px-[3rem]                
        bg-cover bg-center bg-no-repeat     
        rounded-t-[30px] rounded-b-[30px]   
        shadow-2xl                          
        flex items-center justify-center    
        sm:w-[90%] sm:py-[10rem] sm:px-[2rem] 
        max-[480px]:w-[95%]                
        max-[480px]:py-[6rem] max-[480px]:px-[1.5rem] 
        max-[480px]:flex-col max-[480px]:text-center 
      "
      style={{
        backgroundImage: `url(${fondoImg})`, //  Imagen de fondo dinámica
      }}
    >
      {}
    </section>
  );
};

export default Fondo;
