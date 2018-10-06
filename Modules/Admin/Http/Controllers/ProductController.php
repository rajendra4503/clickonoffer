<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Input;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Models\Product;
use Route;
use URL;
use View;

/**
 * Class AdminController
 */
class ProductController extends Controller
{
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('admin');
        View::share('viewPage', 'Product');
        View::share('helper', new Helper);
        View::share('heading', 'Products');
        View::share('route_url', route('product'));

        $this->record_per_page = Config::get('app.record_per_page');
    }


    /*
     * Dashboard
     * */

    public function index(Product $product, Request $request)
    {
        $page_title  = 'Product';
        $page_action = 'View Product';


        // if ($request->ajax()) {
        //     $id               = $request->get('id');
        //     $product         = Product::find($id);
        //     $category->status = $s;
        //     $category->save();
        //     echo $s;

        //     exit();
        // }

        // Search by name ,email and group
        // $search = Input::get('search');
        // $status = Input::get('status');

        // if ((isset($search) && !empty($search))) {
        //     $search = isset($search) ? Input::get('search') : '';

        //     $categories = Category::where(function ($query) use ($search,$status) {
        //         if (!empty($search)) {
        //             $query->Where('category_name', 'LIKE', "%$search%");
        //         }
        //     })->orderBy('id', 'DESC')->where('parent_id', 0)->Paginate($this->record_per_page);
        // } else {
        //     $categories = Category::orderBy('id', 'ASC')->where('parent_id', 0)->Paginate($this->record_per_page);
        // }

        $products = Product::all();
        return view('admin::product.index', compact('products', 'page_title', 'page_action'));
    }


    public function create(Product $product)
    {
        $page_title  = 'Product';
        $page_action = 'Add Product';
        return view('admin::product.create', compact('product','page_title', 'page_action'));
    }

    public function store(ProductRequest $request, Product $product)
    {
            dd($product);
    }
}

