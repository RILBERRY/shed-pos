<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerView extends Component
{
    public $query = '';
    public $sortField = 'id';
    public $sortType = 'desc';
    use WithPagination;
    function sortBy($sortField)
    {
        if($this->sortField == $sortField && $this->sortType =="asc"){
            $this->sortType = 'desc';
        }else{
            $this->sortType = 'asc';
        }
        $this->sortField = $sortField;
    }
    #[On('load')]
    function getCustomers()
    {
        return Customer::orderBy($this->sortField, $this->sortType)->paginate(15);
    }


    public function render()
    {
        $customers = $this->getCustomers();
        return view('livewire.customer-view', compact('customers'));
    }
}
