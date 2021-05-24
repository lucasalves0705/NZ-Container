<?php


namespace App\Repositories;


use App\Models\Product;
use App\Models\Status;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductRepository implements ProductRepositoryInterface
{
    public function validator($data)
    {
        $validator = Validator::make(
            $data,
            [
                'name' => ['required', 'max:255'],
                'status_is' => [
                    'required',
                    Rule::exists(Status::table(), 'id'),
                    Rule::unique(Product::table(), 'codigo')
                ]
            ],
            [
                'name.required' => 'Nome é onrogatório',
            ]
        );

        return $validator->fails();
    }

    public function save($data)
    {

    }
}
