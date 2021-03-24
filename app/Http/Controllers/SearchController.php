<?php

namespace App\Http\Controllers;


use App\Models\Tag_category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchCategory(Request $request)
    {
        if ($request->ajax()) {
            $category = Tag_category::where('name', 'LIKE', '%' . $request->search . "%")->get();
            if ($category) {
                return Response($category);
            }
        }
    }
}
