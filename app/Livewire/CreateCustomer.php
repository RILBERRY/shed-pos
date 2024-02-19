<?php

namespace App\Livewire;

use App\Models\Customer;

class CreateCustomer extends BaseLivewire
{
    public function __construct($id=null, $reloadRouteName = '' )
    {
        $this->model = Customer::class;
        $this->modelData=[
            'id' => null,
            'name' => '',
            'tin' => '',
            'contact' => '',
            'email' => '',
            'product_id' => '',
            'rate' => '',
            'block_reason' => null,
        ];
        $this->rules = [
                'modelData.date' => 'required',
                'modelData.client_id' => 'required',
        ];

        $this->reloadRouteName = $reloadRouteName;

        if($id){
            $this->modelData = Customer::find($id)->toArray();
        }
    }
    public function render()
    {
        return view('livewire.create-customer');
    }
}
