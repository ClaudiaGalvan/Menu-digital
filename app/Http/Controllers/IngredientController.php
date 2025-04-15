<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    // Mostrar todos los ingredientes (opcional si quieres cargarlo como lista en JSON)
    public function index()
    {
        $ingredients = Ingredient::all();
        return response()->json($ingredients); // 👈 Retornar ingredientes en JSON
    }

    // Agregar un nuevo ingrediente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->price = $request->price;
        $ingredient->save();

        return response()->json(['message' => 'Ingrediente creado exitosamente']);
    }

    // Actualizar un ingrediente
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $ingredient = Ingredient::findOrFail($id);
        $ingredient->name = $request->name;
        $ingredient->price = $request->price;
        $ingredient->save();

        return response()->json(['message' => 'Ingrediente actualizado exitosamente']);
    }

    // Eliminar un ingrediente
    public function destroy($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $ingredient->delete();

        return response()->json(['message' => 'Ingrediente eliminado exitosamente']);
    }
}
