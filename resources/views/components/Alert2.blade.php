<div {{$attributes->merge (['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
    <span class="fony-medium">{{$title ?? "No existe valor del title"}}</span>{{$slot}}
    <h1> Estos son los valores de la variable attributes </h1>
    {{$attributes}}
</div>
    <!-- $atributtes contienen todos los componentes Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
