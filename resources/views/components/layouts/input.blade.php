@props(['name','title'=>'','type','id','value'=>''])

<div class="form-group">
    <label for="{{ $id }}">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class'=>'form-control'])}} id="{{ $id }}">


</div>