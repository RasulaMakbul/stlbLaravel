    <x-admins.master>
        <x-slot:title>
            {{ __('New Payments') }}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>{{ __('New Payment') }}</h1>
            <form class="form-light">
                <x-layouts.input name="date" type="date" id="date" :value="old('date')" />
                <div class="d-flex mt-3">

                    <div class="col-6">
                        <x-layouts.dropdowns name="buyer_id" title="Buyer" id="buyer_id" :dropItems="$buyers" :setItem="old('buyer')" option1="Select Buyer Name" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="total_due" class="mt-2" title="Total Due" type="number" id="total_due" :value="old('totalDue')" />
                    </div>
                </div>
                <x-layouts.input name="amount" class="mt-2" title="Amount" type="number" id="amount" :value="old('amount')" />
                <x-layouts.input name="remainder" class="mt-2" title="Remainder" type="number" id="remainder" :value="old('remainder')" />

                <x-layouts.input name="method" class="mt-2" title="Payment Method" type="text" id="method" :value="old('method')" />




                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{ __('Save') }}</button>
                    <a type="button" href="{{ route('payment.index') }}" class="btn btn-outline-secondary">{{ __('Back') }}</a>
                </div>


            </form>
    </x-admins.master>