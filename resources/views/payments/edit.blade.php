    <x-admins.master>
        <x-slot:title>
            {{ __('Edit Payments') }}
        </x-slot:title>
        <x-layouts.errors />

        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>{{ __('Edit Payment') }}</h1>
            <form class="form-light">

                <div class="d-flex">
                    <x-layouts.input name="date" type="date" id="date" :value="old('date', $payment->date)" />
                    <div class="col-6">
                        @php
                            $dropItems = ['Dhaka Foam', 'Bengal Foam', 'Apex Foam', 'Sawdagor Chemicals'];
                        @endphp
                        <x-layouts.dropdowns name="buyer_id" title="Buyer" id="buyer" :dropItems="$dropItems"
                            :setItem="old('buyer_id', $payment->buyer_id)" option1="Select Buyer Name" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="totalDue" class="mt-2" title="Total Due" type="text" id="totalDue"
                            :value="old('totalDue', $payment->totalDue)" />
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-6">
                        <x-layouts.input name="amount" class="mt-2" title="Amount" type="text" id="amount"
                            :value="old('amount', $payment->amount)" />
                    </div>
                    <div class="col-6">
                        <x-layouts.input name="remainder" class="mt-2" title="Remainder" type="text" id="remainder"
                            :value="old('remainder', $payment->remainder)" />
                    </div>
                </div>
                <x-layouts.input name="method" class="mt-2" title="Payment Method" type="text" id="method"
                    :value="old('method', $payment->method)" />




                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">{{ __('Save') }}</button>
                    <a type="button" href="{{ route('payment.index') }}"
                        class="btn btn-outline-secondary">{{ __('Back') }}</a>
                </div>


            </form>
    </x-admins.master>
