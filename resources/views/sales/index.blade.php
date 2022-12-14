    <x-admins.master>
        <x-slot:title>
            {{__('Invoice')}}
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{__('Invoice')}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> {{__('Excel')}}</button>
                    <a type="button" href="{{route('sales.trash')}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-trash fs-5"></i> {{__('Trash')}}</a>

                </div>
                <a type="button" href="{{route('sales.create')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                    {{__('New Invoice')}}
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('Date')}}</th>
                        <th scope="col">{{__('Buyer')}}</th>
                        <th scope="col">{{__('Sales')}}</th>
                        <th scope="col">{{__('Total Price')}}</th>

                        <th scope="col">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                    <tr>
                        <td scope="row" class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$sale->date}}</td>
                        <td class="align-middle">{{$sale->buyer->name}}</td>
                        <td>


                            <table class="table table-light">

                                <tbody>
                                    @foreach($sale->products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->pivot->price}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>


                            </table>

                        </td>
                        <td class="align-middle">{{$sale->subTotal}}</td>



                        <td class="align-middle">
                            <a href="{{route('sales.show',$sale->id)}}" class="link-info"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{route('sales.edit',$sale->id)}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <form action="{{route('sales.destroy',$sale->id)}}" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm link-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa-solid fa-trash fs-5"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach





                </tbody>
            </table>

        </div>

    </x-admins.master>