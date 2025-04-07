<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutus = Aboutus::all();   
        return view('admin.AboutUs.index', compact('aboutus'));
    }
    public function create()
    {
        return view('admin.AboutUs.create');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        // Store the image and get the path
        $imagePath = $request->file('image')->store('team', 'public');

        // Create the new team member
        Aboutus::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'About Us Created successfully');
    }
    public function edit($id)
    {
        $aboutus = Aboutus::findOrFail($id);
        return view('admin.AboutUs.edit', compact('aboutus'));
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $aboutus = Aboutus::findOrFail($id);

        // Update the image if a new one is provided
        if ($request->hasFile('image')) {
            // Store the new image and get the path
            $imagePath = $request->file('image')->store('team', 'public');
            $aboutus->image = $imagePath;
        }

        // Update other fields
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;

        // Save the changes
        $aboutus->save();

        return redirect()->route('admin.about.index')->with('success', 'About Us updated successfully');
    }
    public function destroy($id)
    {
        $aboutus = Aboutus::findOrFail($id);
        $aboutus->delete();
        return redirect()->route('admin.about.index')->with('success', 'About Us deleted successfully');
    }
}
