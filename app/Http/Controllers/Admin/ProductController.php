<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProductDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Admin\Expense;
use App\Models\Admin\ProductImage;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Repositories\Admin\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }
// Product Reports
    public function search(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $products = null;
        $totalPrice = 0;
        if(!empty($from) || !empty($to)){
            $products = Product::
            whereBetween('created_at', [$from, $to])->get();
            foreach ($products as $p){
                $totalPrice += $p->price;
            }
            return view('admin.products.search',compact('products','totalPrice'));
        }
        $products = Product::all();
        foreach ($products as $p){
            $totalPrice += $p->price;
        }
        return view('admin.products.search',compact('products','totalPrice'));


    }
    /**
     * Display a listing of the Product.
     *
     * @param ProductDataTable $productDataTable
     * @return Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        $totalPrice = 0;
        foreach ($products as $p){
            $totalPrice += $p->price;
        }
        return view('admin.products.index', compact('products','totalPrice'));
    }

    public function getProductExpenses($id)
    {
        $expenses = Expense::where('product_id',$id)->orderBy('id', 'desc')->get();
        $totalPrice = 0;
        foreach ($expenses as $e){
            $totalPrice += $e->amount;
        }
        return view('admin.products.getProductExpenses', compact('expenses','totalPrice'));
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $ref_no = $request->get('ref_no');

        $type = $request->get('type');

        $estimated_time_arrival = $request->get('estimated_time_arrival');

        $make = $request->get('make');
        
        $model = $request->get('model');
        
        $version = $request->get('version');
        
        $year = $request->get('year');
        
        $color_ext = $request->get('color_ext');
        
        $color_int = $request->get('color_int');
        
        $car_type = $request->get('car_type');
        
        $engine_cc = $request->get('engine_cc');
       
        $transmission = $request->get('transmission');
        
        $chassis_type = $request->get('chassis_type');
       
        $doors = $request->get('doors');
       
        $seats = $request->get('seats');
       
        $mileages = $request->get('mileages');
        
        $registration_import = $request->get('registration_import');
        
        $is_new_arrival = $request->get('is_new_arrival');
        $is_featured = $request->get('is_featured');
        $features = $request->get('detail');
        $availability = $request->get('availability');
        $category_id = $request->get('category_id');
        if (empty($category_id)) {
            $request->session()->flash('category_id', 'category is required');
            return redirect()->back()->withInput();
        }

        if ($type == -1) {
            $request->session()->flash('type', 'Type is required');
            return redirect()->back()->withInput();
        }
        
        $images = $request->file('images');
        if ($request->has($images)) {
            $request->session()->flash('images', 'product images are required');
            return redirect()->back()->withInput();
        }

        if ($estimated_time_arrival == -1) {
            $request->session()->flash('estimated_time_arrival', 'Type is required');
            return redirect()->back()->withInput();
        }


        $des_image = $request->file('des_img');
        
        
        $detail = $request->get('detail1');
        
        $product = new Product();
        $product->cat_id = $category_id;
        $product->ref_no = $ref_no;
        $product->make = $make;
        $product->model = $model;
        $product->version = $version;
        $product->year = $year;
        $product->color_ext = $color_ext;
        $product->color_int = $color_int;
        $product->car_type = $car_type;
        $product->engine_cc = $engine_cc;
        $product->transmission = $transmission;
        $product->chassis_type = $chassis_type;
        $product->doors = $doors;
        $product->seats = $seats;
        $product->mileages = $mileages;
        $product->image = $des_image;
        $product->registration_import = $registration_import;
        if ($request->hasFile('des_img')) {
            $image = \Imageupload::upload($request->file('des_img'));
            $product->image = $image['original_filedir'];
        }

        $product->features = $features;
        
        if ($availability == 1){
            $product->availability = 'available';
        }else{
            $product->availability = 'not available';
        }

        if ($is_new_arrival == 'on'){
            $product->is_fresh_arrival = 1;
        }else{
            $product->is_fresh_arrival = 0;
        }

        if ($is_featured == 'on'){
            $product->is_featured_stock = 1;
        }else{
            $product->is_featured_stock = 0;
        }
        $product->detail = $detail;
        $product->type = $type;
        $product->estimated_time_arrival = $estimated_time_arrival;
        $product->status = "Pending";
        $product->save();


        // save product images
       
        if (count($images)) {
            foreach ($images as $file) {
               if ($file != null){
                $product_image = new ProductImage();
                $data = \Imageupload::upload($file);
                $product_image->image = $data['original_filedir'];
                $product_image->p_id = $product->id;
                $product_image->save();
               }
            }
        }

        Flash::success('Product saved successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('admin.products.edit')->with('product', $product);
    }
    public function editImage($id)
    {
        $image = ProductImage::find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('admin.products.show',[$image->p_id]));
        }

        return view('admin.products.edit-image')->with('image', $image);
    }

    public function updateImage($id, Request $request)
    {
        $img = $request->file('image');
        if ($img == null) {
            $request->session()->flash('images', 'image is required');
            return redirect()->back()->withInput();
        }

        $image = ProductImage::find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('admin.products.show',[$image->p_id]));
        }


        if ($request->file('image')) {
            $im = \Imageupload::upload($img);
            $image->image = $im['original_filedir'];
            $image->update();
            return redirect(route('admin.products.show',[$image->p_id]));
        }


        Flash::success('Unable to save image.');

        return redirect(route('admin.products.index'));

    }
    /**
     * Update the specified Product in storage.
     *
     * @param  int              $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
//        dd($request);
        $product = Product::find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $ref_no = $request->get('ref_no');

        $estimated_time_arrival = $request->get('estimated_time_arrival');

        $status = $request->get('status');

        $type = $request->get('type');

        $make = $request->get('make');
       
        $model = $request->get('model');
       
        $version = $request->get('version');
        
        $year = $request->get('year');
        
        $color_ext = $request->get('color_ext');
        
        $color_int = $request->get('color_int');
       
        $car_type = $request->get('car_type');
       
        $engine_cc = $request->get('engine_cc');
       
        $transmission = $request->get('transmission');
       
        $chassis_type = $request->get('chassis_type');
       
        $doors = $request->get('doors');
        
        $seats = $request->get('seats');
        
        $mileages = $request->get('mileages');
       
        $registration_import = $request->get('registration_import');
        
        $is_new_arrival = $request->get('is_new_arrival');
        $is_featured = $request->get('is_featured');
        $features = $request->get('detail');
        $availability = $request->get('availability');
        $category_id = $request->get('category_id');
        if (empty($category_id)) {
            $request->session()->flash('category_id', 'category is required');
            return redirect()->back()->withInput();
        }

        if ($type == -1) {
            $request->session()->flash('type', 'Type is required');
            return redirect()->back()->withInput();
        }

        if ($estimated_time_arrival == -1) {
            $request->session()->flash('estimated_time_arrival', 'Type is required');
            return redirect()->back()->withInput();
        }

        $detail = $request->get('detail1');
        
        $des_image = $request->file('des_img');

        $product->cat_id = $category_id;
        $product->ref_no = $ref_no;
        $product->make = $make;
        $product->model = $model;
        $product->version = $version;
        $product->year = $year;
        $product->color_ext = $color_ext;
        $product->color_int = $color_int;
        $product->car_type = $car_type;
        $product->engine_cc = $engine_cc;
        $product->transmission = $transmission;
        $product->chassis_type = $chassis_type;
        $product->doors = $doors;
        $product->seats = $seats;
        $product->mileages = $mileages;
        $product->image = $des_image;
        $product->registration_import = $registration_import;
        
        if ($request->hasFile('des_img')) {

            $data = \Imageupload::upload($request->file('des_img'));
            $product->image = $data['original_filedir'];
        }
        
        $product->features = $features;
        
        

        if ($availability == 1){
            $product->availability = 'available';
        }else{
            $product->availability = 'not available';
        }

        if ($is_new_arrival == 'on'){
            $product->is_fresh_arrival = 1;
        }else{
            $product->is_fresh_arrival = 0;
        }

        if ($is_featured == 'on'){
            $product->is_featured_stock = 1;
        }else{
            $product->is_featured_stock = 0;
        }
        $product->estimated_time_arrival = $estimated_time_arrival;
        $product->detail = $detail;
        $product->status = $status;

        $product->update();


        // save product images
        $images = $request->file('images');

       if ($images != null && count($images)) {


            foreach ($images as $file) {
                if ($file != null){
                $product_image = new ProductImage();
                $data = \Imageupload::upload($file);
                $product_image->image = $data['original_filedir'];
                $product_image->p_id = $product->id;
                $product_image->save();
            }
            }

        }
        Flash::success('Product updated successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }
//        $images = ProductImage::where('p_id',$product->id)->get();
//        foreach ($images as $image){
//        $image->forceDelete();
//        }
        $product->status = "Deleted";
        $product->update();

        Flash::success('Product deleted successfully.');

        return redirect(route('admin.products.index'));
    }
     public function destroyProductImage($id)
    {
        $product = Product::find($id);
        

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('admin.products.index'));
        }
        $product->image = null;
        $product->update();

        Flash::success('Product image deleted successfully.');

        return redirect(route('admin.products.index'));
    }
    public function destroyImage($id)
    {
        $image = ProductImage::find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('admin.products.show',[$image->id]));
        }

        $image->forceDelete();

        Flash::success('Image deleted successfully.');

        return redirect()->back();
    }
}
