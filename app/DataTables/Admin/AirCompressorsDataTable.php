<?php

namespace App\DataTables\Admin;

use App\Models\Admin\AirCompressors;
use Form;
use Yajra\Datatables\Services\DataTable;

class AirCompressorsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.air_compressors.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $airCompressors = AirCompressors::query();

        return $this->applyScopes($airCompressors);
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
            'size' => ['name' => 'size', 'data' => 'size'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'model' => ['name' => 'model', 'data' => 'model'],
            'dryer' => ['name' => 'dryer', 'data' => 'dryer'],
            'tank' => ['name' => 'tank', 'data' => 'tank'],
            'price' => ['name' => 'price', 'data' => 'price'],
            'availability' => ['name' => 'availability', 'data' => 'availability'],
            'published' => ['name' => 'published', 'data' => 'published'],
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
        return 'airCompressors';
    }
}
