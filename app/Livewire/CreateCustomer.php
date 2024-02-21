<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Product;

class CreateCustomer extends BaseLivewire
{
    public $products;
    public function __construct($id=null)
    {
        $this->backComponent = [CustomerView::class => 'updateCustomer'];
        $this->model = Customer::class;
        $this->modelData=[
            'id' => null,
            'code' => null,
            'name' => null,
            'tin' => null,
            'contact' => null,
            'email' => null,
            // 'product_id' => null,
            // 'rate' => null,
            'block_reason' => null,
        ];
        $this->rules = [
                'modelData.name' => 'required',
                'modelData.tin' => 'nullable',
                'modelData.conact' => 'nullable',
                'modelData.email' => 'nullable',
                'modelData.block_reason' => 'nullable',
        ];

        if($id){
            $this->modelData = Customer::find($id)->toArray();
        }
        $this->products = Product::where('is_active',true)->get();
    }

    public function createCustomer()
    {
        $this->modelData['code'] = $this->generateCustomerCode();
        $this->create();
    }

    public function generateCustomerCode()
    {

        $latestCustomer = Customer::latest('code')->first();
        $lastCustomerNumber = $latestCustomer ? (int)substr($latestCustomer->code, -3)+1  : 1;
        $customText = 'CUST';

        $newInvoiceNumber = sprintf('%s%03d', $customText, $lastCustomerNumber);
        // dd($customText, $lastCustomerNumber);
        return $newInvoiceNumber;
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}
