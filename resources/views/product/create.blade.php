    <x-admins.master>
        <x-slot:title>
            {{__('Add Product')}}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>{{__('Add Product')}}</h1>
            <form class="form-light">


                <x-layouts.input name="name" class="mt-2" title="Name" type="text" id="name" :value="old('name')" />
                <x-layouts.input name="code" class="mt-2" title="Code" type="text" id="code" :value="old('code')" />
                <hr>


                <x-layouts.input name="origin" class="mt-2" title="Origin" type="text" id="origin" :value="old('origin')" />
                <hr>
                <x-layouts.input name="stock" class="mt-2" title="Stock" type="number" id="stock" :value="old('stock')" />
                <hr>
                <div class="d-flex">
                    <div class="col-6">
                        <x-layouts.input name="costing" class="mt-2" title="Costing" type="number" id="costing" :value="old('costing')" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="price" class="mt-2" title="Price" type="number" id="price" :value="old('price')" />
                    </div>
                </div>

                <hr>

                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{__('Save')}}</button>
                    <a type="button" href="{{route('product.index')}}" class="btn btn-outline-secondary">{{__('Back')}}</a>
                </div>


            </form>
    </x-admins.master>