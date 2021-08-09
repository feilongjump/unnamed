<?php

namespace App\Admin\Controllers\Api;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ManufacturersController extends Controller
{

    public function index(Request $request)
    {
        $keywords = $request->q;

        return Manufacturer::where('name', 'like', "%{$keywords}%")->paginate(null, ['id', 'name as text']);
    }
}
