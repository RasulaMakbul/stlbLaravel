<x-admins.master>
    <x-slot:title>
        {{__('Edit Invoice')}}
    </x-slot:title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{__('STLB')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

            <a type="button" href="{{route('sales.index')}}" class="btn btn-sm btn-outline-secondary">
                <i class="fa-solid fa-list"></i>
                {{__('Invoice List')}}
            </a>
        </div>
    </div>
    <hr>
    <div class="col mt-1">
        <div class="row">
            <div class="card col-6 content">
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
            <div class="card col-6 mt-1 ">
                <div class="card mb-3 content">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col m-2">
                                {{__('Total')}}
                            </div>
                            <div class="col text-secondary">
                                {{$sale->subTotal}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-2">
                                {{__('Vat')}}
                            </div>
                            <div class="col text-secondary">
                                0
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-2">
                                {{__('Sub Total')}}
                            </div>
                            <div class="col text-secondary">
                                <h4 style="color: #000000; font-size:30px;">{{$sale->subTotal}}</h4>
                            </div>
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