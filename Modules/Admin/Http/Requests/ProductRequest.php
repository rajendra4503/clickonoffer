<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * The product validation rules.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
                case 'GET':
                case 'DELETE': {
                        return [];
                    }
                case 'POST': {
                        return [
                            'title'                => 'required|unique:products,title',
                            'description'          => 'required',
                            'price'                => 'required|numeric|min:0',
                            'features'             => 'required|mimes:jpeg,bmp,png,gif',
                            'tax'                  => 'required|numeric|min:0',
                            'images'               => 'required|mimes:jpeg,bmp,png,gif',
                            'monthly_price'        => 'required|numeric|min:0',
                            'yearly_price'         => 'required|numeric|min:0',
                            'half_yearly_price'    => 'required|numeric|min:0',
                            'quarterly_price'      => 'required|numeric|min:0',
                        ];
                    }
                case 'PUT':
                case 'PATCH': {

                        return [
                            'title'                => 'required|unique:products,title',
                            'description'          => 'required',
                            'price'                => 'required|numeric|min:0',
                            'features'             => 'required|mimes:jpeg,bmp,png,gif',
                            'tax'                  => 'required|numeric|min:0',
                            'images'               => 'required|mimes:jpeg,bmp,png,gif',
                            'monthly_price'        => 'required|numeric|min:0',
                            'yearly_price'         => 'required|numeric|min:0',
                            'half_yearly_price'    => 'required|numeric|min:0',
                            'quarterly_price'      => 'required|numeric|min:0',
                        ];

                }
                default:break;
            }
        //}
    }

    /**
     * The
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
