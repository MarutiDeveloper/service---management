<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhySection;
use Illuminate\Http\Request;

class WhySectionController extends Controller
{
    public function index()
    {
        $whySections = WhySection::all();
        return view('admin.why.index', compact('whySections'));
    }

    public function create()
    {
        return view('admin.why.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('why_images', 'public');

        WhySection::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.why.index')->with('success', 'Section added successfully');
    }

    public function edit($id)
    {
        $whySection = WhySection::findOrFail($id);
        return view('admin.why.edit', compact('whySection'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $whySection = WhySection::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('why_images', 'public');
            $whySection->image = $imagePath;
        }

        $whySection->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.why.index')->with('success', 'Section updated successfully');
    }

    public function destroy($id)
{
    $whySection = WhySection::findOrFail($id);

    // Delete image from storage
    if ($whySection->image) {
        \Storage::delete('public/' . $whySection->image);
    }

    $whySection->delete();

    return redirect()->route('admin.why.index')->with('success', 'Section deleted successfully');
}

}
