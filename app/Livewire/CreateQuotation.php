<?php

namespace App\Livewire;

use App\Models\Quotation;
use Livewire\Component;

class CreateQuotation extends BaseLivewire
{
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

    public function render()
    {
        return view('livewire.create-quotation');
    }
}
