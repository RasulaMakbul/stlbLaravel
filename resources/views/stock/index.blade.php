    <x-admins.master>
        <x-slot:title>
            {{ __('Stock') }}
        </x-slot:title>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('Products') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i>
                        {{ __('Excel') }}</button>


                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                    data-bs-target="#createStockModal">
                    <span><i class="fa-solid fa-plus"></i></span>{{ __(' New Stock') }}
                </button>

            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <h3>Ashulia Stock</h3>
            <hr>
            <table class="table align-middle table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Date') }}</th>
                        <th scope="col">{{ __('Status ') }}</th>
                        <th scope="col">product </th>
                        <th scope="col">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stocks as $item)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $item->created_at }}</td>

                            @if ($item->status == '0')
                                <td class="bg-danger text-center">Sold</td>
                            @elseif($item->status == '1')
                                <td class="text-bg-success text-center">Incoming</td>
                            @endif
                            <td>
                                <table>
                                    <tbody>
                                        @foreach ($item->productStock as $sItem)
                                            <tr>
                                                <td>{{ $sItem->product->name }} =</td>
                                                <td>{{ $sItem->qty }} Piece</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </td>


                            <td>
                                <a href="{{ route('stock.edit', $item->id) }}" class="link-info"><i
                                        class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <form action="{{ route('stock.destroy', $item->id) }}" method="post"
                                    style="display:inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm link-danger"
                                        onclick="return confirm('Are you sure want to delete')"><i
                                            class="fa-solid fa-trash fs-5"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>

        </div>

        <div class="modal fade" id="createStockModal" tabindex="-1" aria-labelledby="createStockModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="createStockModalLabel"><span><i
                                    class="fa-solid fa-plus"></i></span>{{ __(' Create New Stock') }}</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">

                                <div class="form-group mb-3">
                                    <select name="stock_location"
                                        class="form-control block w-full mt-1 rounded-md text-center dropdown-toggle">
                                        <option value="">{{ __('Select Stock Location') }}</option>
                                        <option value="Banasree">{{ __('Banasree') }}</option>
                                        <option value="Ashulia">{{ __('Ashulia') }}</option>
                                    </select>
                                    @error('stock_location')
                                        <small class=" text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">

                                <div class="form-group mb-3">
                                    <select name="manufacture"
                                        class="form-control block w-full mt-1 rounded-md text-center dropdown-toggle">
                                        <option value="">{{ __('Select Product manufacture Country') }}</option>
                                        <option value="Banasree">{{ __('China') }}</option>
                                        <option value="Ashulia">{{ __('Bangladesh') }}</option>
                                        <option value="Ashulia">{{ __('Thailand') }}</option>
                                        <option value="Ashulia">{{ __('India') }}</option>
                                    </select>
                                    @error('manufacture')
                                        <small class=" text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <div class="d-flex">
                                        <table class="table table-borderless">
                                            <tbody>
                                                @foreach ($products as $pItem)
                                                    @php
                                                        $productFound = false;
                                                        $qty = 0;
                                                    @endphp
                                                    @foreach ($lastStock->productStock as $lItem)
                                                        @if ($lItem->product_id === $pItem->id)
                                                            @php
                                                                $productFound = true;
                                                                $qty = $lItem->qty;
                                                            @endphp
                                                        @break
                                                    @endif
                                                @endforeach
                                                <tr>
                                                    <td>
                                                        <div class="mb-3">
                                                            <label for="product_id"
                                                                class="form-label">{{ __('Product') }}</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $pItem->name }}" readonly>
                                                            <input type="hidden" name="product_id[]"
                                                                value="{{ $pItem->id }}">
                                                            @error('product_id')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            <label for="qty"
                                                                class="form-label">{{ __('Quantity') }}</label>
                                                            <input type="text" class="form-control qty"
                                                                name="qty[]" value="{{ $qty }}"
                                                                placeholder="Enter Quantity">
                                                            <small class="text-danger error-message"></small>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">{{ __('Create') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @push('js')
    @endpush

</x-admins.master>
