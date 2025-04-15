import React, { useState } from "react";

const PersonalizarMarquesita = () => {
    const ingredientes = ["Nutella", "Cajeta", "Lechera", "Queso Bola"];
    const extras = ["Plátano", "Durazno", "Fresa", "Nuez", "Coco rallado"];

    const [seleccionados, setSeleccionados] = useState([]);
    const [extraSeleccionados, setExtraSeleccionados] = useState([]);
    const [comentarios, setComentarios] = useState("");

    const handleSeleccion = (item, setter, seleccionActual) => {
        setter(
            seleccionActual.includes(item)
                ? seleccionActual.filter((i) => i !== item)
                : [...seleccionActual, item]
        );
    };

    return (
        <div className="min-h-screen bg-yellow-50 p-8">
            <div className="max-w-4xl mx-auto bg-white shadow-xl rounded-xl overflow-hidden p-6">
                <h2 className="text-3xl font-bold text-orange-700 mb-6 text-center">
                    Personaliza tu Marquesita
                </h2>

                <div>
                    <h3 className="text-xl font-semibold mb-2">
                        Ingredientes base:
                    </h3>
                    <div className="flex flex-wrap gap-3 mb-4">
                        {ingredientes.map((ing) => (
                            <button
                                key={ing}
                                onClick={() =>
                                    handleSeleccion(
                                        ing,
                                        setSeleccionados,
                                        seleccionados
                                    )
                                }
                                className={`px-4 py-2 rounded-lg border-2 ${
                                    seleccionados.includes(ing)
                                        ? "border-orange-600 bg-orange-500 text-white"
                                        : "border-gray-300"
                                }`}
                            >
                                {ing}
                            </button>
                        ))}
                    </div>
                </div>

                <div>
                    <h3 className="text-xl font-semibold mb-2">Extras:</h3>
                    <div className="flex flex-wrap gap-3 mb-4">
                        {extras.map((extra) => (
                            <button
                                key={extra}
                                onClick={() =>
                                    handleSeleccion(
                                        extra,
                                        setExtraSeleccionados,
                                        extraSeleccionados
                                    )
                                }
                                className={`px-4 py-2 rounded-lg border-2 ${
                                    extraSeleccionados.includes(extra)
                                        ? "border-orange-600 bg-orange-500 text-white"
                                        : "border-gray-300"
                                }`}
                            >
                                {extra}
                            </button>
                        ))}
                    </div>
                </div>

                <div className="mb-4">
                    <h3 className="text-xl font-semibold mb-2">
                        Comentarios especiales:
                    </h3>
                    <textarea
                        value={comentarios}
                        onChange={(e) => setComentarios(e.target.value)}
                        className="w-full border-2 border-gray-300 rounded-lg p-3"
                        placeholder="Añade aquí instrucciones especiales..."
                    ></textarea>
                </div>

                <div className="text-center">
                    <button className="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold">
                        Enviar pedido
                    </button>
                </div>
            </div>
        </div>
    );
};

export default PersonalizarMarquesita;
