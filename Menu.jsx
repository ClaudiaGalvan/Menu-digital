import React from "react";
import Ingredientes from "./Ingredientes";

const Menu = () => {
    const opciones = [
        { nombre: "Nutella y plátano", imagen: "platano.png", precio: 60 },
        { nombre: "Durazno", imagen: "durazno.png", precio: 65 },
        { nombre: "Cajeta", imagen: "cajeta.png", precio: 65 },
        { nombre: "Lechera y durazno", imagen: "durazno.png", precio: 70 },
        { nombre: "Nuez", imagen: "nuez.png", precio: 70 },
    ];

    return (
        <div className="p-8 bg-gradient-to-br from-yellow-400 to-orange-500 min-h-screen font-sans flex justify-center items-center">
            <div className="max-w-5xl w-full bg-white p-8 rounded-2xl shadow-2xl">
                <h1 className="text-center text-5xl font-extrabold text-orange-600 mb-8">
                    🍽️ MENÚ MARQUESITAS IK
                </h1>

                {/* Mensaje destacado */}
                <div className="text-center bg-black text-white p-4 rounded-lg mb-6 text-lg font-semibold shadow-md">
                    Marquesitas sin queso bola no es marquesita
                </div>

                {/* Ingredientes en otro componente */}
                <Ingredientes />

                {/* Opciones del menú con imágenes y precios */}
                <h2 className="text-3xl font-bold text-center mt-8 mb-6 text-orange-700">
                    Opciones de Marquesitas 🍫🍌
                </h2>
                <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    {opciones.map((item, index) => (
                        <div
                            key={index}
                            className="bg-white p-5 rounded-xl shadow-lg hover:scale-105 transition transform duration-300"
                        >
                            <img
                                src={`/images/${item.imagen}`}
                                alt={item.nombre}
                                className="w-28 h-28 object-cover mx-auto rounded-lg mb-3"
                            />
                            <p className="text-lg font-semibold text-center text-gray-800">
                                {item.nombre}
                            </p>
                            <div className="text-center mt-2">
                                <span className="text-xl font-bold text-white bg-black px-4 py-2 rounded-lg shadow-md">
                                    ${item.precio}
                                </span>
                            </div>
                        </div>
                    ))}
                </div>

                <p className="text-red-600 italic text-center mt-6 font-medium text-lg">
                    ⚠️ EN TODAS NUESTRAS MARQUESITAS YA VA INCLUIDO EL QUESO
                    BOLA ⚠️
                </p>
            </div>
        </div>
    );
};

export default Menu;
