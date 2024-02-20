<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BaseLivewire extends ModalComponent
{
    protected $model;
    public $modelData;
    protected $rules;
    protected $savedModel;
    protected $reload;
    protected $backComponent;
    protected $reloadRouteName;

     function mount($id=null, $reloadRouteName = null)
    {
        $model = app()->make($this->model);

        if($id){
            $this->modelData = $model::find($id)->toArray();
        }
    }

    public function create()
    {
        $model = app()->make($this->model);
        $this->validate($this->rules);
        $this->savedModel = $model::create( $this->modelData );
        if( $this->reloadRouteName ){
            return redirect(route($this->reloadRouteName));
        }
        $this->closeModalWithEvents($this->backComponent);
    }

    public function update()
    {
        $model = app()->make($this->model);
        $this->validate($this->rules);
        $modelData = $model->findOrFail($this->modelData['id']);
        $modelData->update($this->modelData);
        if( $this->reloadRouteName ){
            return redirect(route($this->reloadRouteName));
        }
        $this->closeModalWithEvents($this->backComponent);

    }

}
