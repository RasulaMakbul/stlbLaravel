    <x-admins.master>
        <x-slot:title>
            {{__('Edit Invoice')}}
        </x-slot:title>
        <x-layouts.errors />

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>{{__('Edit Invoice')}}</h1>
            <form class="form-light">
                <div class="d-flex">
                    <div class="col-6">
                        @php
                        $dropItems=['Dhaka Foam','Bengal Foam','Apex Foam','Sawdagor Chemicals']
                        @endphp
                        <x-layouts.dropdowns name="buyer_id" title="Buyer" id="buyer" :dropItems="$dropItems" :setItem="old('buyer_id')" option1="Select Buyer Name" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="date" type="date" id="date" :value="old('date')" />
                    </div>
                </div>
                <x-layouts.input name="address" class="mt-2" title="Address" type="text" id="address" :value="old('address')" />
                <x-layouts.input name="phone" class="mt-2" title="Phone" type="text" id="phone" :value="old('phone')" />
                <hr>
                <div id="product-holder">
                    <x-layouts.addSale />
                    <x-layouts.addSale />
                    <x-layouts.addSale />
                    <x-layouts.addSale />



                </div>

                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{__('Save')}}</button>
                    <a type="button" href="{{route('sales.index')}}" class="btn btn-outline-secondary">{{__('Back')}}</a>
                </div>


            </form>
    </x-admins.master>