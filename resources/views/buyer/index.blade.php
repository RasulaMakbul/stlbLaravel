    <x-admins.master>
        <x-slot:title>
            {{__('Buyers')}}
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{__('Buyers')}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> {{__('Excel')}}</button>
                    <a type="button" href="{{route('buyer.trash')}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-trash fs-5"></i> {{__('Trash')}}</a>

                </div>
                <a type="button" href="{{route('buyer.create')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                    {{__('Create Buyer')}}
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 pxindex-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('name')}}</th>
                        <th scope="col">{{__('Address')}}</th>
                        <th scope="col">{{__('Phone')}}</th>
                        <th scope="col">{{__('Balance(Tk)')}}</th>
                        <th scope="col">{{__('Paid(Tk)')}}</th>
                        <th scope="col">{{__('Due(Tk)')}}</th>

                        <th scope="col">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buyers as $buyer)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $buyer->name }}</td>
                        <td>{{ $buyer->address }}</td>
                        <td>{{ $buyer->phone }}</td>
                        <td>{{ $buyer->totalBalance }}</td>
                        <td>{{ $buyer->paid }}</td>
                        <td>{{ $buyer->due }}</td>

                        <td>
                            <a href="{{route('buyer.show',$buyer->id)}}" class="link-info"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{route('buyer.edit',$buyer->id)}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <form action="{{ route('buyer.destroy', $buyer->id) }}" method="post" style="display:inline">
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
