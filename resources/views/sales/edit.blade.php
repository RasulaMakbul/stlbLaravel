    <x-admins.master>
        <x-slot:title>
            {{__('Edit Invoice')}}
        </x-slot:title>
        <x-layouts.errors />
        <form action="{{route('sales.update',$sale->id)}}" method="POST">
            @csrf
            @method('patch')
            <h1>{{__('New Invoice')}}</h1>
            <form class="form-light">
                <div class="d-flex">
                    <div class="col-6">
                        <x-layouts.dropdowns name="buyer" title="Buyer" id="buyer" :dropItems="$buyers" :setItem="old('buyer',$sale->buyer_id)" option1="Select Buyer Name" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="date" type="date" id="date" :value="old('date',$sale->date)" />
                    </div>
                </div>
                <x-layouts.input name="address" class="mt-2" title="Address" type="text" id="address" :value="old('address',$sale->address)" />
                <x-layouts.input name="phone" class="mt-2" title="Phone" type="text" id="phone" :value="old('phone',$sale->phone)" />
                <hr>
                <div>
                    @foreach($sale->products as $product)
                    <div class="d-flex">
                        <div class="col-3">

                            <x-layouts.dropdowns name="product_id[]" title="Product" class="mt-2" id="productName" :dropItems="$products" :setItem="old('product_id',$product->id)" option1="Select Product" />
                        </div>
                        <div class="col-3">
                            <x-layouts.input name="quantity[]" title="Quantity" type="number" id="quantity" :value="old('quantity',$product->pivot->quantity)" />
                        </div>
                        <div class="col-3">
                            <x-layouts.input name="unitPrice[]" title="Unit Price" type="number" id="unitPrice" :value="old('unitPrice',$product->pivot->unitPrice)" />
                        </div>
                        <div class="col-3">
                            <x-layouts.input name="price[]" title="Price" type="number" id="price" :value="old('price',$product->pivot->price)" />
                        </div>
                    </div>
                    @endforeach

                    <x-layouts.input name="subTotal" class="mt-2" title="Sub Total Price" type="number" id="subTotal" :value="old('subTotal',$sale->subTotal)" />



                    <div class="form-group col-8 m-3 mb-5">
                        <button type="submit" class="btn btn-outline-info  m-3">{{__('Save')}}</button>
                        <a type="button" href="{{route('sales.index')}}" class="btn btn-outline-secondary">{{__('Back')}}</a>
                    </div>


            </form>

    </x-admins.master>