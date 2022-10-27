<x-admins.master>
    <x-slot:title>
        {{__('Edit Invoice')}}
    </x-slot:title>
    <h1>{{__('Comapny Name')}}</h1>
    <hr>
    <div class="col mt-1">
        <div class="card mb-6 content">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Buyer Name</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        {{$sale->buyer->name}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Address</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        {{$sale->address}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h5> Contact No</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        {{$sale->phone}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-1 ">
            <div class="card mb-3 content">
                <div class="card-body">
                    <div class="row ">
                        <div class="col m-2">
                            <h5>Total</h5>
                        </div>
                        <div class="col text-secondary">
                            <h4>{{$sale->subTotal}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m-2">
                            <h5>Vat</h5>
                        </div>
                        <div class="col text-secondary">
                            <h4>0</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m-2">
                            <h5> Sub Total</h5>
                        </div>
                        <div class="col text-secondary">
                            <h4>{{$sale->subTotal}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('product')}}</th>
                <th scope="col">{{__('qty')}}</th>
                <th scope="col">{{__('untPrice')}}</th>
                <th scope="col">{{__('Total Price')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sale->products as $product)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->pivot->quantity}}</td>
                <td>{{$product->pivot->unitPrice}}</td>
                <td>{{$product->pivot->price}}</td>

            </tr>
            @endforeach
        </tbody>


    </table>



</x-admins.master>