<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins",
                sans-serif;
        }

        :root {
            --background-color: #F8F3E9;
            --primary-color: #0A4536;
        }

        body {
            background-color: var(--background-color);

        }

    </style>
</head>
<body class="bg-background-color">
    @if(session('deletesuccess'))
    <section class="w-full fixed top-2.5 flex justify-center items-center mx-auto ">
        <div id="success-alert" class=" flex justify-center items-center z-50 p-4 mb-4 text-red-600 rounded-lg bg-red-50 border border-red-200 shadow-lg transition-opacity duration-300" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-bold">
                {{ session('deletesuccess') }}
            </div>
        </div>
    </section>
    @endif
    @if(session('updatesuccess'))
    <section class="w-full fixed top-2.5 flex justify-center items-center mx-auto ">
        <div id="success-alert" class=" flex justify-center items-center z-50 p-4 mb-4 text-emerald-600 rounded-lg bg-emerald-50 border border-emerald-200 shadow-lg transition-opacity duration-300" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-bold">
                {{ session('updatesuccess') }}
            </div>
        </div>
    </section>
    @endif
    @if(session('addsuccess'))
    <section class="w-full fixed top-2.5 flex justify-center items-center mx-auto ">
        <div id="success-alert" class=" flex justify-center items-center z-50 p-4 mb-4 text-blue-600 rounded-lg bg-blue-50 border border-blue-200 shadow-lg transition-opacity duration-300" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-bold">
                {{ session('addsuccess') }}
            </div>
        </div>
    </section>
    @endif
    <section class="container mx-auto max-md:px-4">
        <h1 class="text-start   text-[38px] font-bold text-blue-900
    ">Teacher Index</h1>
        <div class="flex justify-start items-center ">

            <a href="{{ route ('teachers.create') }}" class="inline-flex items-center gap-2 bg-white text-yellow-500 border hover:text-white border-yellow-200 hover:bg-yellow-400 hover:border-yellow-400 px-3 py-2.5 rounded-lg font-semibold text-sm transition-all duration-300 shadow-md hover:shadow-lg active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create
            </a>
        </div>
        <div class="w-full mt-3 overflow-hidden rounded-xl border border-gray-200 shadow-sm">
            <div class="overflow-x-auto ">
                <table class="w-full text-left border-collapse bg-white">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-6 py-4 font-bold uppercase text-xs tracking-wider">Tid</th>
                            <th class="px-6 py-4 font-bold uppercase text-xs tracking-wider">Name</th>
                            <th class="px-6 py-4 font-bold uppercase text-xs tracking-wider">Tel</th>
                            <th class="px-6 py-4 font-bold uppercase text-xs tracking-wider text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($teachers as $t)
                        <tr class="hover:bg-blue-50/50 transition-colors duration-200">
                            <td class="px-6 py-4 text-sm text-gray-700 font-medium">#{{ $t->tid }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                <div class="font-semibold text-gray-900">{{ $t->full_name }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $t->tel }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center justify-center gap-3">
                                    <a href="{{ route('teachers.edit' , $t->tid) }}" class=" uppercase flex items-center justify-center  bg-emerald-50 text-emerald-700 border border-emerald-200 hover:bg-emerald-600  gap-2  px-3 py-2 hover:text-white hover:border-emerald-600 rounded-lg text-xs font-bold transition-all duration-200 shadow-sm">
                                        <ion-icon name="create-outline" class="text-lg transition-transform group-hover:scale-110"></ion-icon>
                                        <p class=" mt-1">Edit</p>
                                    </a>
                                    <form method="post" action="{{ route('teachers.destroy', $t->tid) }}" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn-delete flex items-center justify-center bg-red-50 text-red-700 border border-red-200 hover:bg-red-600 gap-2 px-3 py-2 hover:text-white hover:border-red-600 rounded-lg text-xs font-bold transition-all duration-200 shadow-sm uppercase">
                                            <ion-icon name="trash-outline" class="text-lg transition-transform group-hover:scale-110"></ion-icon>
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
        {{-- pagination --}}
        <section class="pt-3"> {{ $teachers->links() }}</section>
    </section>
    <!-- sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Stop any default action
                let form = this.closest('form');

                Swal.fire({
                    title: "Are you sure?"
                    , text: "This teacher's record will be permanently deleted."
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#d33"
                    , cancelButtonColor: "#3085d6"
                    , confirmButtonText: "Yes, delete!"
                    , cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Only submits if user clicks 'Yes'
                    }
                });
            });
        });

    </script>
    <!-- end of sweetalert2-->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('success-alert');
            if (alert) {
                // Wait 3 seconds (3000ms) then start the hide process
                setTimeout(() => {
                    alert.style.opacity = '0'; // Start fade out

                    // Remove from DOM after the 300ms fade animation completes
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                }, 2000);
            }
        });

    </script>

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src=" https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4">
    </script>
    {{-- ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
