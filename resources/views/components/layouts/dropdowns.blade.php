@props(['title','option1'=>'','id','name','dropItems', 'setItem'=>[]])

<label for="{{ $id }}">{{ $title }}</label>

<select name="{{$name}}" searchable="test" {{ $attributes->merge(['class'=>'btn dropdown-toggle col-6 m-3 btn-outline-secondary'])}} id="{{ $id }}>

    <div {{ $attributes->merge(['class'=>'dropdown-menu dropdown-menu-right'])}}>
    <option value="">{{ $option1 }}</option>
    @foreach($dropItems as $key=>$item)
    <option class=" dropdown-item" value="{{$key}}" @if ($setItem==$key) selected @endif>{{ $item }}</option>

    @endforeach
    </div>
</select>