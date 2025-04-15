import React from "react";

const GestionUsuarios = () => {
    const usuarios = [
        {
            id: 1,
            nombre: "Juan Pérez",
            correo: "juan@example.com",
            rol: "Cliente",
        },
        {
            id: 2,
            nombre: "María López",
            correo: "maria@example.com",
            rol: "Cocinero",
        },
        {
            id: 3,
            nombre: "Carlos Gómez",
            correo: "carlos@example.com",
            rol: "Cliente",
        },
    ];

    return (
        <div className="min-h-screen bg-gray-100 p-8">
            <div className="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                <div className="p-6">
                    <h2 className="text-3xl font-bold text-gray-800 mb-4">
                        Gestión de Usuarios
                    </h2>
                    <table className="w-full text-left table-auto">
                        <thead className="bg-gray-200">
                            <tr>
                                <th className="px-4 py-2">ID</th>
                                <th className="px-4 py-2">Nombre</th>
                                <th className="px-4 py-2">
                                    Correo Electrónico
                                </th>
                                <th className="px-4 py-2">Rol</th>
                                <th className="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            {usuarios.map((usuario) => (
                                <tr
                                    key={usuario.id}
                                    className="border-t border-gray-200"
                                >
                                    <td className="px-4 py-2">{usuario.id}</td>
                                    <td className="px-4 py-2">
                                        {usuario.nombre}
                                    </td>
                                    <td className="px-4 py-2">
                                        {usuario.correo}
                                    </td>
                                    <td className="px-4 py-2">{usuario.rol}</td>
                                    <td className="px-4 py-2 flex space-x-2">
                                        <button className="bg-blue-500 text-white px-3 py-1 rounded-md">
                                            Editar
                                        </button>
                                        <button className="bg-red-500 text-white px-3 py-1 rounded-md">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                    <div className="mt-4 flex justify-end">
                        <button className="bg-green-500 text-white px-4 py-2 rounded-md">
                            Agregar Usuario
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default GestionUsuarios;
