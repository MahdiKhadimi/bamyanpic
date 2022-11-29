<?php

namespace App\View\Components;

use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    
    public $dismissible;
    protected $types =[
        'success',
        'info',
        'warning',
        'danger'
    ];

   
    public function __construct($type='info',$dismissible=false)
    {
        $this->dismissible = $dismissible;
        $this->type=$type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function validType():string
    {
        return in_array($this->type,$this->types)?$this->type:'info';
    }

    public function icon($url = null)
    {
        
        $icon = $url??"fa fa-{$this->type}";

        return new HtmlString("<spa class='{{ $icon }} '></spa>");
    }
}