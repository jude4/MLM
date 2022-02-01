<?php

namespace App\Traits;


trait Searchable {
    public $model;
    public $fieldName;
    public $search;
    
    public function __constructor($model, $search, $fieldName)
    {
        $this->model = $model;
        $this->search = $search;
        $this->fieldName = $fieldName;
    }

    public function scopeSearch($query, $search)
    {
        // check if it has a relation
        // if yes then do a whereHas query
        // if not just do where query
        return $query->where($this->fieldName, 'like', '%' . $search . '%');
    }
}