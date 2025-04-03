<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
      // Frontend: Show all services
      public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        return view('frontend.service', compact('services'));
    }

  
      // Admin: Show all services (For managing services in the admin panel)
      public function adminIndex()
      {
          $services = Service::all();
          return view('admin.services.index', compact('services'));
      }
  
      // Admin: Show form to create a new service
      public function create()
      {
          return view('admin.services.create');
      }
  
      // Admin: Store a new service
      public function store(Request $request)
      {
          $request->validate([
              'title' => 'required|string|max:255',
              'description' => 'required|string',
              'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          // Handle the image upload
          $imagePath = $request->file('image')->store('services', 'public');
  
          Service::create([
              'title' => $request->title,
              'description' => $request->description,
              'image' => $imagePath,
          ]);
  
          return redirect()->route('admin.services.index')->with('success', 'Service created successfully!');
      }
  
      // Admin: Show the form to edit a service
      public function edit($id)
      {
          $service = Service::findOrFail($id);
          return view('admin.services.edit', compact('service'));
      }
  
      // Admin: Update a service
      public function update(Request $request, $id)
      {
          $request->validate([
              'title' => 'required|string|max:255',
              'description' => 'required|string',
              'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          $service = Service::findOrFail($id);
  
          // Handle image upload if a new image is uploaded
          if ($request->hasFile('image')) {
              // Delete the old image if it exists
              Storage::delete('public/' . $service->image);
  
              // Store the new image
              $imagePath = $request->file('image')->store('services', 'public');
              $service->image = $imagePath;
          }
  
          $service->update([
              'title' => $request->title,
              'description' => $request->description,
          ]);
  
          return redirect()->route('admin.services.index')->with('success', 'Service updated successfully!');
      }
  
      // Admin: Delete a service
      public function destroy($id)
      {
          $service = Service::findOrFail($id);
  
          // Delete the image from storage
          Storage::delete('public/' . $service->image);
  
          $service->delete();
  
          return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully!');
      }
}
