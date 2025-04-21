<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('banners/' . $request->input('key'), 'public');
        }

        Banner::create([
            'key' => $request->input('key'),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Banner uploaded successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'key' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $banner = Banner::find($id);

        if ($request->hasFile('image')) {
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            $imagePath = $request->file('image')->store('banners/' . $request->input('key'), 'public');
            $banner->image = $imagePath;
        }

        $banner->update([
            'key' => $request->input('key'),
        ]);

        return redirect()->route('banners')->with('success', 'Banner updated successfully.');
    }

    public function delete($id)
    {
        $banner = Banner::find($id);
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }
        $banner->delete();
        return redirect()->back()->with('success', 'Banner deleted successfully.');
    }
}
