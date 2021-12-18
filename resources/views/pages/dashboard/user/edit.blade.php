<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User &raquo; {{ $item->name }} &raquo; Edit
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-read-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>

                        <div class="border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>                                        
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('dashboard.user.update', $item->id) }}" class="w-full" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-black-700 text-xs font-bold mb-2">Name</label>
                            <input type="text" value="{{ old('name') ?? $item->name }}" name="name" class="block w-full bg-gray-200 text-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="User Name">
                        </div>
                    </div>
                    <div class="flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-black-700 text-xs font-bold mb-2">Email</label>
                            <input type="email" value="{{ old('email') ?? $item->email }}" name="email" class="block w-full bg-gray-200 text-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="User Email">
                        </div>
                    </div>   
                    <div class="flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-black-700 text-xs font-bold mb-2">Email</label>
                            <select name="roles" class="block w-full bg-gray-200 text-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="{{ $item->roles }}">{{ $item->roles }}</option>
                                <option disabled">---------------</option>
                                <option value="USER">USER</option>
                                <option value="ADMIN">ADMIN</option>
                            </select>
                        </div>
                    </div>             
                    <div class="flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit" class=" bg-gray-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded shadow-lg">
                                Update User
                            </button>
                        </div>
                    </div>
                    <div class="flex-wrap -mx-3 mb-6">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>