
<x-app-layout>
        <main>
           
                <div class="project" style="margin-top: 30px">
                    <div class="card">
                        <div class="card-header">
                            <h2>ALL CATEGORIES</h2>

                            <button><a class="btn btn-success" href="{{ route ('categories.create')}}" title="Create a category"> <i class="fas fa-plus-circle"></i>
                            </span>Add new category</a></button>
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
                                            <td>Category name</td>
                                            <td>Image</td>
                                            <td>Date Created</td>
                                            <td width="280px">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $cat)
                                        <tr>
                                            <td>{{ $cat->id}}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->image }}</td>
                                            <td>{{ $cat->created_at, 'jS M Y'}}</td>
                                            <td>
                                                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST">

                                                    

                                                    <a href="{{ route('categories.edit', $cat->id) }}">
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
