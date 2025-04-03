<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image' => 'required|image',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        // Store the image and get the path
        $imagePath = $request->file('image')->store('team', 'public');

        // Create the new team member
        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imagePath,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
        ]);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image' => 'image|nullable',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $team = Team::findOrFail($id);

        // If an image is uploaded, store it and update the image path
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
            // Delete the old image if exists
            if ($team->image && Storage::exists('public/' . $team->image)) {
                Storage::delete('public/' . $team->image);
            }
            $team->image = $imagePath;
        }

        // Update other fields
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->youtube = $request->youtube;
        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // Delete the image file from storage if exists
        if ($team->image && Storage::exists('public/' . $team->image)) {
            Storage::delete('public/' . $team->image);
        }

        $team->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully');
    }
}
