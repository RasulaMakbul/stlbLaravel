    <x-admins.master>
        <x-slot:title>
            {{ __('Edit Product') }}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h1>{{ __('Edit Product') }}</h1>
            <form class="form-light">


                <x-layouts.input name="name" class="mt-2" title="Name" type="text" id="name"
                    :value="old('name', $product->name)" />
                <x-layouts.input name="code" class="mt-2" title="Code" type="text" id="code"
                    :value="old('code', $product->code)" />
                <hr>


                <x-layouts.input name="origin" class="mt-2" title="Origin" type="text" id="origin"
                    :value="old('origin', $product->origin)" />
                <hr>
                <div class="d-flex">
                    <div class="col-6">
                        <x-layouts.input name="costing" class="mt-2" title="Costing" type="number" id="costing"
                            :value="old('costing', $product->costing)" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="price" class="mt-2" title="Price" type="number" id="price"
                            :value="old('price', $product->price)" />
                    </div>
                </div>

                <hr>

                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{ __('Save') }}</button>
                    <a type="button" href="{{ route('product.index') }}"
                        class="btn btn-outline-secondary">{{ __('Back') }}</a>
                </div>


            </form>
    </x-admins.master>
