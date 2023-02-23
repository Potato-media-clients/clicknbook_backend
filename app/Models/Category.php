<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Sentinel;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';

    public function createTerm($data = [])
    {
        return DB::table($this->getTable())->insertGetId($data);
    }
    public function getById($id)
    {
        $term = DB::table($this->table)->where('id', $id)->get()->first();
        return (!empty($term) && is_object($term)) ? $term : null;
    }
    public function updateTerm($data, $id)
    {
        return DB::table($this->getTable())->where('id', $id)->update($data);
    }
    
   
}
