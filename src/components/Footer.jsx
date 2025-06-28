import React from 'react';
import fondoFooter from '../assets/img/footer.jpg';
import facebookIcon from '../assets/img/facebook.jpeg';
import whatsappIcon from '../assets/img/whats.jpeg';
import instagramIcon from '../assets/img/insta.jpeg';

const Footer = () => {
  return (
    <div
      className="
        relative
        flex flex-wrap justify-center items-start
        p-8 gap-4
        text-[#f4eafa]
        font-fredoka
        overflow-hidden
        animate-fade-in
      "
    >
      {/* Fondo difuminado */}
      <img
        src={fondoFooter}
        alt="Fondo de footer"
        className="
          absolute top-0 left-0 w-full h-full
          object-cover opacity-60 blur-sm
          z-0 object-[center_80%]
        "
      />

      {/* Contacto */}
      <footer
        id="contacto"
        className="
          relative z-10 bg-black/65 text-center
          p-6 rounded-[20px] max-w-[320px] m-4 flex-1
          shadow-xl transition-transform duration-300 hover:scale-[1.02] hover:bg-black/70
        "
      >
        <h3 className="text-xl font-semibold">Contacto</h3>
        <p>Email: contacto@sanriostar.com</p>
        <p>Teléfono: +123 456 789</p>
        <p>© 2024 Sanrio Star</p>
      </footer>

      {/* Redes sociales */}
      <footer
        className="
          relative z-10 bg-black/65 text-center
          p-6 rounded-[20px] max-w-[320px] m-4 flex-1
          shadow-xl transition-transform duration-300 hover:scale-[1.02] hover:bg-black/70
        "
      >
        <h3 className="text-xl font-semibold">Redes</h3>
        <div className="flex justify-center gap-6 mt-4">
          <a href="https://www.facebook.com/Sanrio" target="_blank" rel="noopener noreferrer">
            <img
              src={facebookIcon}
              alt="Facebook"
              className="
                w-[42px] h-[42px] rounded-full p-[5px]
                bg-[#481f5f] transition-transform duration-300
                hover:scale-115 hover:shadow-[0_4px_12px_rgba(197,182,184,0.6)]
              "
            />
          </a>
          <a href="https://web.whatsapp.com/" target="_blank" rel="noopener noreferrer">
            <img
              src={whatsappIcon}
              alt="WhatsApp"
              className="
                w-[42px] h-[42px] rounded-full p-[5px]
                bg-[#481f5f] transition-transform duration-300
                hover:scale-115 hover:shadow-[0_4px_12px_rgba(197,182,184,0.6)]
              "
            />
          </a>
          <a href="https://www.instagram.com/sanrio/" target="_blank" rel="noopener noreferrer">
            <img
              src={instagramIcon}
              alt="Instagram"
              className="
                w-[42px] h-[42px] rounded-full p-[5px]
                bg-[#481f5f] transition-transform duration-300
                hover:scale-115 hover:shadow-[0_4px_12px_rgba(197,182,184,0.6)]
              "
            />
          </a>
        </div>
      </footer>

      {/* Sobre nosotros */}
      <footer
        className="
          relative z-10 bg-black/65 text-center
          p-6 rounded-[20px] max-w-[320px] m-4 flex-1
          shadow-xl transition-transform duration-300 hover:scale-[1.02] hover:bg-black/70
        "
      >
        <h3 className="text-xl font-semibold">Sobre nosotros</h3>
        <p>En nuestra tienda Sanrio Star, nos apasiona llevarte lo mejor del universo Sanrio.</p>
        <p>¡Nos encanta compartir la magia de Sanrio con cada uno de nuestros clientes!</p>
      </footer>
    </div>
  );
};

export default Footer;
