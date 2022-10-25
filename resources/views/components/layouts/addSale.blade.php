<div class="d-flex">
    <div class="col-4">
        @php
        $dropItems=['RED','Yellow','Blue','Green']
        @endphp
        <x-layouts.dropdowns name="product_id" title="Product" class="mt-2" id="buyer" :dropItems="$dropItems" :setItem="old('buyer_id')" option1="Select Product" />
    </div>
    <div class="col-4">
        <x-layouts.input name="quantity" title="Quantity" type="number" id="quantity" :value="old('quantity')" />
    </div>
    <div class="col-4">
        <x-layouts.input name="price" title="Price" type="number" id="price" :value="old('price')" />
    </div>
</div>