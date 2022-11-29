<div  {{ $attributes->class(['alert-dismissible show'=>$dismissible])->merge(['class'=>"alert alert-{$type}"]) }}>
         
  
    @if ($dismissible)
    
    <button type="button" data-dismiss="alert" class="pull-right">&times;</button>

    @endif
    {{ $slot }}
    

</div>
 


