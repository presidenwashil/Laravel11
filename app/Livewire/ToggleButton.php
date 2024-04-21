<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class ToggleButton extends Component
{
    public $model;
    public $field;

    public function mount($model, $field)
    {
        $this->model = $model;
        $this->field = $field;
    }

    public function toggle()
    {
        $this->model->{$this->field} = !$this->model->{$this->field};
        $this->model->save();
    }
    public function render()
    {
        return view('livewire.toggle-button');
    }
}
