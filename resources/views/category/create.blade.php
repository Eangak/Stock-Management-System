<x-app-layout>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-bold mb-4">Create Category</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="fname">Category Name</label>
            <input type="text" name="name" id="name" class="form-control">

            <label for="lname">Remark</label>
            <input type="text" name="remark" id="remark" class="form-control">
            
            <button class="btn btn-primary">Save</button>
        </form>
    </div>

</x-app-layout>
