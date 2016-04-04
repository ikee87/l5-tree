<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function getTree()
    {
        $tree = Category::root()->getDescendantsAndSelf()->toHierarchy()->toArray();
        return response()->json(array_values($tree));
    }

}
