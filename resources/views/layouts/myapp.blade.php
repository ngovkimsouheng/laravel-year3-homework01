<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
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
<body class="bg-background-color ">
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
    <section class="container max-w-7xl mx-auto max-md:px-4">
        <h1 class="text-start   text-[38px] font-bold text-blue-900
    ">@yield('title')</h1>
        <div>
           @yield('content')
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
