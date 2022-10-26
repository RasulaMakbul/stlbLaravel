    <x-admins.master>
        <x-slot:title>
            {{__('New Invoice')}}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{route('sales.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>{{__('New Invoice')}}</h1>
            <form class="form-light">
                <div class="d-flex">
                    <div class="col-6">
                        <x-layouts.dropdowns name="buyer" title="Buyer" id="buyer" :dropItems="$buyers" :setItem="old('buyer')" option1="Select Buyer Name" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="date" type="date" id="date" :value="old('date')" />
                    </div>
                </div>
                <x-layouts.input name="address" class="mt-2" title="Address" type="text" id="address" :value="old('address')" />
                <x-layouts.input name="phone" class="mt-2" title="Phone" type="text" id="phone" :value="old('phone')" />
                <hr>
                <div>
                    <div id="multipleEntry">
                        <div class="d-flex">
                            <div class="col-3">

                                <x-layouts.dropdowns name="productName[]" title="Product" class="mt-2" id="productName" :dropItems="$products" :setItem="old('productName')" option1="Select Product" />
                            </div>
                            <div class="col-3">
                                <x-layouts.input name="quantity[]" title="Quantity" type="number" id="quantity" :value="old('quantity')" />
                            </div>
                            <div class="col-3">
                                <x-layouts.input name="unitPrice[]" title="Unit Price" type="number" id="unitPrice" :value="old('unitPrice')" />
                            </div>
                            <div class="col-3">
                                <x-layouts.input name="price[]" title="Price" type="number" id="price" :value="old('price')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 mb-3" id="controls">
                        <button class="btn btn-primary addNewBtn" type="button"><i class="fa-solid fa-plus"></i></button>
                        <!-- <button type="button" id="addBtnTry" class="btn btn-secondary" onclick="addNewProduct();"></button> -->
                    </div>

                    <x-layouts.input name="subTotal" class="mt-2" title="Sub Total Price" type="number" id="subTotal" :value="old('subTotal')" />



                    <div class="form-group col-8 m-3 mb-5">
                        <button type="submit" class="btn btn-outline-info  m-3">{{__('Save')}}</button>
                        <a type="button" href="{{route('sales.index')}}" class="btn btn-outline-secondary">{{__('Back')}}</a>
                    </div>


            </form>
            <script>

            </script>
    </x-admins.master>