    <x-admins.master>
        <x-slot:title>
            {{__('Payments')}}
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{__('Payments')}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> {{__('Excel')}}</button>
                    <a type="button" href="{{route('buyer.trash')}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-trash fs-5"></i> {{__('Trash')}}</a>

                </div>
                <a type="button" href="{{route('payment.create')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                    {{__('New Payment')}}
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('Date')}}</th>
                        <th scope="col">{{__('Buyer')}}</th>
                        <th scope="col">{{__('Total Due(tk)')}}</th>
                        <th scope="col">{{__('Amount(Tk)')}}</th>
                        <th scope="col">{{__('Remainder(Tk)')}}</th>
                        <th scope="col">{{__('Method')}}</th>
                        <th scope="col">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>10/08/2022</td>
                        <td>Dhaka Foam</td>
                        <td>6,88,000</td>
                        <td>3,88,000</td>
                        <td>3,00,000</td>
                        <td>Bank Pay</td>

                        <td>
                            <a href="#" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <form action="#" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm link-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa-solid fa-trash fs-5"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>10/08/2022</td>
                        <td>Dhaka Foam</td>
                        <td>6,88,000</td>
                        <td>3,88,000</td>
                        <td>3,00,000</td>
                        <td>Bank Pay</td>

                        <td>
                            <a href="#" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <form action="#" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm link-danger" onclick="return confirm('Are you sure want to delete')"><i class="fa-solid fa-trash fs-5"></i></button>
                            </form>
                        </td>
                    </tr>



                </tbody>
            </table>

        </div>

    </x-admins.master>