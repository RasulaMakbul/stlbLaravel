    <x-admins.master>
        <x-slot:title>
            {{ __('trash') }}
        </x-slot:title>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ __('Trash') }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

                <a type="button" href="{{ route('product.index') }}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-list"></i>
                    {{ __('Products') }}
                </a>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('name') }}</th>
                        <th scope="col">{{ __('Code') }}</th>
                        <th scope="col">{{ __('Origin') }}</th>
                        <th scope="col">{{ __('Costing') }}</th>
                        <th scope="col">{{ __('Price') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->origin }}</td>
                            <td>{{ $product->costing }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('product.restore', $product->id) }}" class="link-info"><i
                                        class="fa-solid fa-arrow-rotate-left fs-5"></i></a>
                                <form action="{{ route('product.delete', $product->id) }}" method="post"
                                    style="display:inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm link-danger"
                                        onclick="return confirm('Are you sure want to delete')"
                                        title="Permanent Delete"><i class="fa-solid fa-trash fs-5"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>

        </div>

    </x-admins.master>
