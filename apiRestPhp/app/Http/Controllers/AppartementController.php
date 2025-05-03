<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Affiche la liste des appartements.
     */
    public function index()
    {
        $appartements = Appartement::all();
        return response()->json($appartements);
    }

    /**
     * Stocke un nouvel appartement.
     */
    public function store(Request $request)
    {
        $request->validate([
            'design' => 'required|string|max:255',
            'loyer' => 'required|numeric|min:0',
        ]);

        $appartement = Appartement::create([
            'design' => $request->design,
            'loyer' => $request->loyer,
        ]);

        return response()->json($appartement, 201);
    }

    /**
     * Affiche un appartement spécifique.
     */
    public function show($id)
    {
        $appartement = Appartement::find($id);

        if (!$appartement) {
            return response()->json(['message' => 'Appartement non trouvé'], 404);
        }

        return response()->json($appartement);
    }

    /**
     * Met à jour un appartement existant.
     */
    public function update(Request $request, $id)
    {
        $appartement = Appartement::find($id);

        if (!$appartement) {
            return response()->json(['message' => 'Appartement non trouvé'], 404);
        }

        $request->validate([
            'design' => 'sometimes|string|max:255',
            'loyer' => 'sometimes|numeric|min:0',
        ]);

        $appartement->update($request->only(['design', 'loyer']));

        return response()->json($appartement);
    }

    /**
     * Supprime un appartement.
     */
    public function destroy($id)
    {
        $appartement = Appartement::find($id);

        if (!$appartement) {
            return response()->json(['message' => 'Appartement non trouvé'], 404);
        }

        $appartement->delete();

        return response()->json(['message' => 'Appartement supprimé avec succès']);
    }
}
