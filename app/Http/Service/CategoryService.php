<?php

namespace App\Http\Service;

use App\Models\Category;


class CategoryService
{

  public function registerCategory($category)
  {

    if (empty($category['name'])) {

      return ['error' => 'All fields are required.'];
    }

    $newCategory = Category::create([
      'name' => $category['name'],
    ]);

    return $newCategory;
  }

  public function getCategories()
  {

    $result = Category::all();

    return $result;
  }
}
