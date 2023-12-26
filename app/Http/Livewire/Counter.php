<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $custom = '';

    public $rules = [
        'custom'=>'required|numeric'
    ];

    public $validationAttributes = [
        'custom'=>''
    ];

    public function updated($custom)
    {
        $this->validateOnly($custom);
    }

    public function plus()
    {
        session()->put('count',session()->get('count')+1);
        session()->flash('message','بارك الله فيك');
    }

    public function minus(){
        session()->put('count',session()->get('count')-1);
    }

    public function resetcount(){
        session()->put('count',0);
        session()->flash('message','تمت إعادة التهيئة بنجاح');
    }

    public function customcount(){
        $this->validate();
        session()->put('count',$this->custom);
        $this->custom = null;
        session()->flash('message','تم التحديد بنجاح');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
