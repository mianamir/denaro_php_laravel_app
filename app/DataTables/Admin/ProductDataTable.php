<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Product;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProductDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.products.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $products = Product::query();

        return $this->applyScopes($products);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'ref_no' => ['name' => 'ref_no', 'data' => 'ref_no'],
            'make' => ['name' => 'make', 'data' => 'make'],
            'model' => ['name' => 'model', 'data' => 'model'],
            'version' => ['name' => 'version', 'data' => 'version'],
            'color_ext' => ['name' => 'color_ext', 'data' => 'color_ext'],
            'color_int' => ['name' => 'color_int', 'data' => 'color_int'],
            'car_type' => ['name' => 'car_type', 'data' => 'car_type'],
            'engine_cc' => ['name' => 'engine_cc', 'data' => 'engine_cc'],
            'transmission' => ['name' => 'transmission', 'data' => 'transmission'],
            'chassis_type' => ['name' => 'chassis_type', 'data' => 'chassis_type'],
            'doors' => ['name' => 'doors', 'data' => 'doors'],
            'seats' => ['name' => 'seats', 'data' => 'seats'],
            'mileages' => ['name' => 'mileages', 'data' => 'mileages'],
            'registration_import' => ['name' => 'registration_import', 'data' => 'registration_import'],
            'availablity' => ['name' => 'availablity', 'data' => 'availablity'],
            'image' => ['name' => 'image', 'data' => 'image'],
            'features' => ['name' => 'features', 'data' => 'features'],
            'pro_img_id' => ['name' => 'pro_img_id', 'data' => 'pro_img_id'],
            'is_fresh_arrival' => ['name' => 'is_fresh_arrival', 'data' => 'is_fresh_arrival'],
            'is_featured_stock' => ['name' => 'is_featured_stock', 'data' => 'is_featured_stock'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'products';
    }
}
