<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Quotation;
use Livewire\Component;

class CreateQuotation extends BaseLivewire
{
    public $slectedCustomer;
    public $customer;
    public $searchResults;
    public $searchName;

    public function __construct($id=null, $reloadRouteName = '' )
    {
        $this->model = Quotation::class;
        $this->modelData=[
            'id' => null,
            'status' => 'darft',
        ];
        $this->rules = [
                'modelData.date' => 'required',
                'modelData.client_id' => 'required',
        ];

        $this->reloadRouteName = $reloadRouteName;

        if($id){
            $this->modelData = Quotation::find($id)->toArray();
        }
    }
    public function setSearchName($id)
    {
        $this->slectedCustomer = Customer::find($id);
        $this->searchResults = [];
        $this->checkExistsing();
    }

    public function updatedSearchName()
    {
        $this->searchResults = Customer::where('name', 'like', $this->searchName.'%')->get();
    }

    public function render()
    {
        return view('livewire.create-quotation');
    }
}
