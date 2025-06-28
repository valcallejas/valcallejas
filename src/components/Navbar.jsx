import React from 'react';
import { Link, useNavigate } from 'react-router-dom';
import logo from "../assets/img/logo.png";

const Navbar = () => {
  const navigate = useNavigate();
  const usuario = JSON.parse(localStorage.getItem("usuario"));

  const handleLogout = () => {
    localStorage.removeItem("usuario");
    localStorage.setItem("mensajeLogout", "🔒 Has cerrado sesión correctamente");
    navigate('/auth');
  };

  return (
    <div
      className="
        w-[90%] mx-auto my-[15px]
        bg-[#2d0346]
        rounded-[20px]
        px-[10px] py-[5px]
        flex items-center justify-between
        shadow-md
        flex-wrap
        sm:flex-col sm:items-start sm:gap-[10px]
      "
    >
      {/* Logo */}
      <Link to="/">
        <img
          src={logo}
          alt="Logo Sanrio"
          className="
            w-[100px] h-[100px] rounded-full
            sm:w-[80px] sm:h-[80px]
          "
        />
      </Link>

      {/* Navegación */}
      <div
        className="
          flex items-center gap-[15px]
          sm:flex-col sm:items-start sm:w-full sm:gap-[10px]
        "
      >
        <Link
          to="/productos"
          title="Productos"
          className="
            text-white text-[24px]
            no-underline
            px-[10px] py-[10px]
            rounded-[15px]
            hover:bg-black
            sm:text-[18px] sm:w-full sm:px-[15px]
          "
        >
          🛍️
        </Link>

        <Link
          to="/carrito"
          title="Carrito"
          className="
            text-white text-[24px]
            no-underline
            px-[10px] py-[10px]
            rounded-[15px]
            hover:bg-black
            sm:text-[18px] sm:w-full sm:px-[15px]
          "
        >
          🛒
        </Link>

        <a
          href="#contacto"
          title="Contacto"
          className="
            text-white text-[24px]
            no-underline
            px-[10px] py-[10px]
            rounded-[15px]
            hover:bg-black
            sm:text-[18px] sm:w-full sm:px-[15px]
          "
        >
          📞
        </a>

        {usuario?.rol_id === 2 && (
          <Link
            to="/admin"
            title="Panel Administrador"
            className="
              text-white text-[24px]
              no-underline
              px-[10px] py-[10px]
              rounded-[15px]
              hover:bg-black
              sm:text-[18px] sm:w-full sm:px-[15px]
            "
          >
            🛠️
          </Link>
        )}

        {usuario ? (
          <>
            <span
              className="
                text-white font-bold
                text-[1.2rem] sm:text-[1rem]
              "
            >
              {usuario.nombre_usuario} ({usuario.nombre_rol})
            </span>

            <button
              className="
                bg-none border-none
                text-[1.2rem] sm:text-[1rem]
                cursor-pointer text-white
              "
              onClick={handleLogout}
            >
              🚪 Cerrar sesión
            </button>
          </>
        ) : (
          <Link
            to="/auth"
            title="Iniciar sesión"
            className="
              text-white text-[24px]
              no-underline
              px-[10px] py-[10px]
              rounded-[15px]
              hover:bg-black
              sm:text-[18px] sm:w-full sm:px-[15px]
            "
          >
            🔐
          </Link>
        )}
      </div>
    </div>
  );
};

export default Navbar;
