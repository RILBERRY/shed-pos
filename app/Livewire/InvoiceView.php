<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class InvoiceView extends Component
{public $invoiceId;
    public $modalOpen = false;

    public $query = '';
    public $sortField = 'id';
    public $sortType = 'asc';
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
    function getInvoices()
    {
        return Invoice::with('customer','sales')
        ->with([
            'sales' => function ($query) {
                $query->select('invoice_id', DB::raw('SUM(rate * qty) as total_amount'))
                    ->groupBy('invoice_id');
            },
        ])
        ->latest('id')->orderBy($this->sortField, $this->sortType)->paginate(15);
    }

    public function render()
    {
        $invoices = $this->getInvoices();
        return view('livewire.invoice-view',compact('invoices'));
    }
}
