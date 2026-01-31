<div>
    <button type-"button" {{$atributes->merge(['class'->'mb-3 btn btn-' .$type])}}>{{$slot}}</button>
    {{$id}}
</div>