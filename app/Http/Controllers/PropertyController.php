<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        $properties = Property::all();
        return response()->json($properties, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'location' => 'nullable|string|max:255',
            'bedrooms' => 'nullable|integer|min:1',
            'bathrooms' => 'nullable|integer|min:1',
            'size' => 'nullable|integer',
            'available' => 'nullable|boolean',
        ]);

        $property = Property::create($validated);

        return response()->json($property, 201);
    }

    public function show(Project $project)
    {
        return response()->json($project);
    }

    /**
     * Delete a property.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $property = Property::find($id);

        if (!$property) {
            return response()->json(['message' => 'Property not found.'], 404);
        }

        $property->delete();

        return response()->json(['message' => 'Property deleted successfully.'], 200);
    }
}
