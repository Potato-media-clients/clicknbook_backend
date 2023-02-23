<?php

namespace App\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function getCategories(Request $request, $page = 1){
        $folder = $this->getFolder();
        $categories = Category::get();
        return view("dashboard.screens.{$folder}.services.category.category", ['bodyClass' => 'hh-dashboard','categories' => $categories]);
    }

    public function _addNewCategory(Request $request)
    {
        $termName = set_translate('term_name');

        if (empty(trim($termName))) {
            $this->sendJson([
                'status' => 0,
                'title' => __('System Alert'),
                'message' => __('the Term Name is required')
            ], true);
        }
    
        $data = [
            'name' => $termName,
            'created_at' => time(),
        ];

        $term = new Category();

        $created = $term->createTerm($data);

        if ($created) {
            $this->sendJson([
                'status' => 1,
                'title' => __('System Alert'),
                'message' => __('Created Successfully'),
                'reload' => true
            ], true);
        } else {
            $this->sendJson([
                'status' => 0,
                'title' => __('System Alert'),
                'message' => __('Can not create new term')
            ], true);
        }
    }

    public function _getCategoryItem(Request $request)

    {
        $termID = request()->get('termID');
        $folder = $this->getFolder();



        $term = new Category();

        $termObject = $term->getById($termID);

        if (is_null($termObject)) {

            $this->sendJson([

                'status' => 0,

                'title' => __('System Alert'),

                'message' => __('This term is invalid')

            ], true);

        }



        $html = view("dashboard.screens.{$folder}.services.home.home-category-form", ['termObject' => $termObject])->render();


        $this->sendJson([

            'status' => 1,

            'html' => $html

        ], true);



    }

      public function _updateCategory(Request $request)

    {
        $termID = request()->get('term_id');

        $termName = set_translate('name');

        $term = new Category();

        $termObject = $term->getById($termID);

        if (is_null($termObject)) {

            $this->sendJson([

                'status' => 0,

                'title' => __('System Alert'),

                'message' => __('This term is invalid')

            ], true);

        }



        $data = [
            'name' => $termName,
        ];



        $termUpdated = $term->updateTerm($data, $termID);



        if (is_null($termUpdated)) {

            $this->sendJson([

                'status' => 0,

                'title' => __('System Alert'),

                'message' => __('Can not update this term')

            ], true);

        } else {

            $this->sendJson([

                'status' => 1,

                'title' => __('System Alert'),

                'message' => __('This term is updated')

            ], true);

        }

    }
}
