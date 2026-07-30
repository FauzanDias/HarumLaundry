<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = \App\Models\Slider::latest()->paginate(10);
        return view('sliders.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        $imagePath = $request->file('image')->store('sliders', 'public');

        \App\Models\Slider::create([
            'image_path' => $imagePath,
            'is_active' => true,
        ]);

        return redirect()->back()->with('success', 'Slider berhasil ditambahkan.');
    }

    public function destroy(\App\Models\Slider $slider)
    {
        if (\Illuminate\Support\Facades\Storage::disk('public')->exists($slider->image_path)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($slider->image_path);
        }

        $slider->delete();

        return redirect()->back()->with('success', 'Slider berhasil dihapus.');
    }
}
