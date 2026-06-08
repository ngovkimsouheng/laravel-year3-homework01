@extends('layouts.myapp')
@section('title', 'Teacher Index')
@section('content')
    <div class="flex max-w-7xl container mx-auto justify-start items-center ">
        <a href="{{ route('teachers.create') }}"
            class="inline-flex items-center gap-2 bg-white text-yellow-500 border hover:text-white border-yellow-200 hover:bg-yellow-400 hover:border-yellow-400 px-3 py-2.5 rounded-lg font-semibold text-sm transition-all duration-300 shadow-md hover:shadow-lg active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Create
        </a>
    </div>
    <div class="max-w-7xl mx-auto container mt-3 overflow-hidden rounded-xl border border-gray-200 shadow-sm">
        <div class="overflow-x-auto ">
            <table class="w-full text-left border-collapse bg-white">
                <thead class="bg-blue-900 text-white">
                    <tr>
                        <th class="px-6 py-4 font-bold uppercase text-xs tracking-wider">Tid</th>
                        <th class="px-6 py-2 font-bold uppercase text-xs tracking-wider">Name</th>
                        <th class="px-6 py-2 font-bold uppercase text-xs tracking-wider">Tel</th>
                        <th class="px-6 py-2 font-bold uppercase text-xs tracking-wider text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($teachers as $t)
                        <tr class="hover:bg-blue-50/50 transition-colors duration-200">
                            <td class="px-6 py-2 text-sm text-gray-700 font-medium">#{{ $t->tid }}</td>
                            <td class="px-6 py-2 text-sm text-gray-600">
                                <div class="font-semibold text-gray-900">{{ $t->full_name }}</div>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-600">{{ $t->tel }}</td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-3">
                                    <a href="{{ route('teachers.edit', $t->tid) }}"
                                        class=" uppercase flex items-center justify-center  bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-600  gap-2  px-3 py-2 hover:text-white hover:border-emerald-600 rounded-lg text-xs font-bold transition-all duration-200 shadow-sm">
                                        <ion-icon name="create-outline"
                                            class="text-lg transition-transform group-hover:scale-110"></ion-icon>
                                        <p class=" mt-1">Edit</p>
                                    </a>
                                    <form method="post" action="{{ route('teachers.destroy', $t->tid) }}" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="button"
                                            class="btn-delete flex items-center justify-center bg-red-50 text-red-700 border border-red-200 hover:bg-red-600 gap-2 px-3 py-2 hover:text-white hover:border-red-600 rounded-lg text-xs font-bold transition-all duration-200 shadow-sm uppercase">
                                            <ion-icon name="trash-outline"
                                                class="text-lg transition-transform group-hover:scale-110"></ion-icon>
                                            <p class="mt-1 uppercase">Delete</p>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
