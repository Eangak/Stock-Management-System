<x-app-layout>
    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif
    
    <div class="bg-white p-6 rounded-lg shadow">
        <table class="table table-striped table-hover">
                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">User</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Actions</th>
                </tr>
                @foreach ($users as $users)
                <tr class>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                        <div style="display: flex; justify-content:space-between">
                            <a href=""><i class="fa-solid fa-eye" style="color: green"></i></a>
                            <a href="{{ route('profile.edit')}}"><i class="fa-solid fa-pen-to-square" style="color: blue"></i></a>
                            <form action="{{route('profile.destroy', $users->id)}}" method="post"
                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')

                                <button style="color: red; border: none;"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>

</x-app-layout>
