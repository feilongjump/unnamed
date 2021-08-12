<?php

namespace App\Admin\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $keywords = $request->q;

        return Customer::where('name', 'like', "%{$keywords}%")->paginate(null, ['id', 'name as text']);
    }

    public function contacts(Request $request): Collection
    {
        $customerId = $request->q;

        return Customer::find($customerId)
            ->contacts()
            ->get(['id', 'name as text']);
    }
}
