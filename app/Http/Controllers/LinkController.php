<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request)
    {
        $query = Link::with('category', 'tags');

        // Recherche par titre
        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filtre par catégorie
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        $links = $query->get();
        $categories = Category::all();

        return view('links.index', compact('links', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('links.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'category_id' => 'required|exists:categories,id',
        ]);

        $link = Link::create([
            'title' => $request->title,
            'url' => $request->url,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
        ]);

        // Attacher les tags sélectionnés
        if ($request->has('tags')) {
            $link->tags()->attach($request->tags);
        }

        return redirect()->route('links.index')->with('success', 'Lien créé avec succès !');
    }

    public function edit(Link $link)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('links.edit', compact('link', 'categories', 'tags'));
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'category_id' => 'required|exists:categories,id',
        ]);

        $link->update($request->only('title', 'url', 'category_id'));

        // Synchroniser les tags
        if ($request->has('tags')) {
            $link->tags()->sync($request->tags);
        } else {
            $link->tags()->detach();
        }

        return redirect()->route('links.index')->with('success', 'Lien mis à jour !');
    }

    public function destroy(Link $link)
    {
        $link->tags()->detach();
        $link->delete();
        return redirect()->route('links.index')->with('success', 'Lien supprimé !');
    }
}
