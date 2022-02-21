<x-app-layout>
    <main>
       
            <div class="project" style="margin-top: 30px">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">ALL USERS</h2>
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
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Date Created</td>
                                        <td width="280px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    @if($user->is_admin == null )
                                    <tr>
                                        <td>{{ $user->id}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->created_at, 'jS M Y'}}</td>
                                        <td>
                                            <a class="btn btn-danger" href="/deleteUser/{{ $user->id}}">Delete</a>
                            
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           
        </div>

    </main>


</x-app-layout>

