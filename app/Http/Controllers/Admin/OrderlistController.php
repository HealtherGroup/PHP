<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service\Admin\RoleService;
use App\Http\Requests\RoleRequest;
class OrderlistController extends Controller
{
    private $orderlist;

    public function index()
    {
        return view('admin.homeorder.list');
    }
}
