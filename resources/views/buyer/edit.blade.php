    <x-admins.master>
        <x-slot:title>
            {{__('Edit Buyer')}}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{route('buyer.update',$buyer->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h1>{{__('Edit Buyer')}}</h1>
            <form class="form-light">


                <x-layouts.input name="name" class="mt-2" title="Name" type="text" id="name" :value="old('name',$buyer->name)" />
                <x-layouts.input name="address" class="mt-2" title="Address" type="text" id="address" :value="old('address',$buyer->address)" />
                <hr>
                <x-layouts.input name="phone" class="mt-2" title="Phone" type="text" id="phone" :value="old('phone',$buyer->phone)" />


                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{__('Save')}}</button>
                    <a type="button" href="{{route('product.index')}}" class="btn btn-outline-secondary">{{__('Back')}}</a>
                </div>


            </form>
    </x-admins.master>