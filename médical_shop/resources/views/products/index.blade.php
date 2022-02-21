<x-app-layout>




        <main>
            {{-- <div class="recent-grid"> --}}
                <div class="project" style="margin-top: 30px">
                    <div class="card">
                        <div class="card-header">
                            <h1>Recent Products</h1>

                            <button><a class="btn btn-success" href="{{ route ('products.create')}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                            </span>Add new product</a></button>
                        </div>


                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Product name</td>
                                            <td>Description</td>
                                            <td>Categorie</td>
                                            <td>Image</td>
                                            <td>Quantite</td>
                                            <td>Price</td>
                                            <td>Date Created</td>
                                            <td width="280px">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id}}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>{{ $product->image }}</td>
                                            <td>{{ $product->quantite }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ date_format($product->created_at, 'jS M Y') }}</td>
                                            <td>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                                    

                                                    <a href="{{ route('products.edit', $product->id) }}">
                                                        <i class="fas fa-edit  fa-lg"></i>

                                                    </a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button onclick="myFunction()" type="submit" title="delete" style="border: none; background-color:transparent;">
                                                        <i class="fas fa-trash fa-lg text-danger"></i>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
               
            </div>

        </main>





</x-app-layout>

<script>
    function myFunction(){
        alert("Product deleted");
    }
    </script>