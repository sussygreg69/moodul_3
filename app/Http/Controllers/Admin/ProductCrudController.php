<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('price');
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        //CRUD::setFromDb(); // set fields from db columns.
        CRUD::field('name');
        CRUD::field('price')->type('number')->attributes(['step'=>'any'])->prefix('€');
        CRUD::field('description')->type('textarea');
        CRUD::field('size')->type('select_from_array')->options([
            's' => 'S',
            'm' => 'M',
            'l' => 'L',
            'xl' => 'XL'
        ]);
        CRUD::field('color')->type('select_from_array')->options([
            'valge' => 'Valge',
            'must' => 'Must',
            'roosa' => 'Roosa',
            'sinine' => 'Sinine'
        ]);
        CRUD::field('category')->type('select_from_array')->options([
            'savinõud' => 'Savinõud',
            'riided' => 'Riided',
            'magnetid' => 'Magnetid',
            'postkaardid' => 'Postkaardid'
        ]);
        CRUD::field('image')->type('upload_multiple')->disk('public')->withFiles(true);

        /**
         * Fields can be defined using the fluent syntax:
         * - 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
