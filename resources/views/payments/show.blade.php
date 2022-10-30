    <x-admins.master>
        <x-slot:title>
            {{ __($buyer->name) }}
        </x-slot:title>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __($buyer->name) }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

                <a type="button" href="{{ route('buyer.index') }}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-list"></i>
                    {{ __('Buyers') }}
                </a>
            </div>
        </div>
        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <h1 class="m-3 pt-3">About</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Buyer Name</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ $payment->buyer->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Address</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ $buyer->address }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5> Contact No</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ $buyer->phone }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5> Total Payments</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            12,56,000
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5> Due</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            3,56,000
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <h5>Invoices</h5>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col">{{ __('Sales') }}</th>
                        <th scope="col">{{ __('Total Price') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>5/4/2022</td>
                        <td>
                            <table>
                                <tr>
                                    <td>Red</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Yellow</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </td>
                        <td>87,000</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>5/4/2022</td>
                        <td>
                            <table>
                                <tr>
                                    <td>Red</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Yellow</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </td>
                        <td>87,000</td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>5/4/2022</td>
                        <td>
                            <table>
                                <tr>
                                    <td>Red</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Yellow</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </td>
                        <td>87,000</td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>5/4/2022</td>
                        <td>
                            <table>
                                <tr>
                                    <td>Red</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Yellow</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </td>
                        <td>87,000</td>
                    </tr>



                </tbody>
            </table>

        </div>
        <div class="container-fluid pt-4 px-4">
            <h5>Payments</h5>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col">{{ __('Amount') }}</th>
                        <th scope="col">{{ __('Method') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>5/4/2022</td>
                        <td>87,000</td>
                        <td>Cash</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>5/4/2022</td>

                        <td>87,000</td>
                        <td>Cheque</td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>5/4/2022</td>
                        <td>87,000</td>
                        <td>Bkash</td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>5/4/2022</td>
                        <td>87,000</td>
                        <td>Cash</td>
                    </tr>



                </tbody>
            </table>

        </div>

    </x-admins.master>
