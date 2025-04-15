import React from "react";

const RecepcionCocina = () => {
    const pedidosCocina = [
        {
            id: 201,
            cliente: "Juanita López",
            ingredientes: ["Nutella", "Queso Bola"],
            extras: ["Plátano"],
            hora: "1:15 PM",
            estado: "Pendiente",
        },
        {
            id: 202,
            cliente: "Carlos Díaz",
            ingredientes: ["Cajeta", "Queso Bola"],
            extras: ["Fresa", "Nuez"],
            hora: "1:20 PM",
            estado: "Preparando",
        },
        {
            id: 203,
            cliente: "Mónica Cruz",
            ingredientes: ["Lechera", "Queso Bola"],
            extras: ["Durazno"],
            hora: "1:30 PM",
            estado: "Listo",
        },
    ];

    const getColorEstado = (estado) => {
        switch (estado) {
            case "Pendiente":
                return "bg-red-400";
            case "Preparando":
                return "bg-yellow-400";
            case "Listo":
                return "bg-green-500";
            default:
                return "bg-gray-300";
        }
    };

    return (
        <div className="min-h-screen bg-gray-50 p-8">
            <div className="max-w-5xl mx-auto bg-white shadow-xl rounded-xl overflow-hidden p-6">
                <h2 className="text-3xl font-bold text-orange-700 mb-6 text-center">
                    Recepción de Cocina
                </h2>

                <table className="w-full text-left table-auto">
                    <thead className="bg-orange-100">
                        <tr>
                            <th className="px-4 py-2"># Pedido</th>
                            <th className="px-4 py-2">Cliente</th>
                            <th className="px-4 py-2">Ingredientes</th>
                            <th className="px-4 py-2">Extras</th>
                            <th className="px-4 py-2">Hora</th>
                            <th className="px-4 py-2">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        {pedidosCocina.map((pedido) => (
                            <tr
                                key={pedido.id}
                                className="border-t border-gray-200"
                            >
                                <td className="px-4 py-2">{pedido.id}</td>
                                <td className="px-4 py-2">{pedido.cliente}</td>
                                <td className="px-4 py-2">
                                    {pedido.ingredientes.join(", ")}
                                </td>
                                <td className="px-4 py-2">
                                    {pedido.extras.join(", ")}
                                </td>
                                <td className="px-4 py-2">{pedido.hora}</td>
                                <td className="px-4 py-2">
                                    <span
                                        className={`text-white px-3 py-1 rounded-full ${getColorEstado(
                                            pedido.estado
                                        )}`}
                                    >
                                        {pedido.estado}
                                    </span>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </div>
    );
};

export default RecepcionCocina;
