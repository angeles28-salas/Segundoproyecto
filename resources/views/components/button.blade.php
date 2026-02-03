<div>
    <button type="button" {{$attributes->merge(['class'->'mb-3 btn btn-' .$type])}}>{{$slot}}</button>
    {{$id}}
</div>