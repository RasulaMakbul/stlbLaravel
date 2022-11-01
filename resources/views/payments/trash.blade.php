    <x-admins.master>
        <x-slot:title>
            {{__('trash')}}
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{__('Trash')}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

                <a type="button" href="{{route('payment.index')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-list"></i>
                    {{__('Payments')}}
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col">{{ __('Buyer') }}</th>
                        <th scope="col">{{ __('Total Due(tk)') }}</th>
                        <th scope="col">{{ __('Amount(Tk)') }}</th>
                        <th scope="col">{{ __('Remainder(Tk)') }}</th>
                        <th scope="col">{{ __('Method') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($payment as $payment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->date }}</td>
                        <td>{{ $payment->buyer->name }}</td>
                        <td>{{ $payment->total_due }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->remainder }}</td>
                        <td>{{ $payment->method }}</td>


                        <td>
                            <a href="{{route('payment.restore',$payment->id)}}" class="link-info"><i class="fa-solid fa-arrow-rotate-left fs-5"></i></a>
                            <form action="{{ route('payment.delete', $payment->id) }}" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm link-danger" onclick="return confirm('Are you sure want to delete')" title="Permanent Delete"><i class="fa-solid fa-trash fs-5"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>

        </div>

    </x-admins.master>