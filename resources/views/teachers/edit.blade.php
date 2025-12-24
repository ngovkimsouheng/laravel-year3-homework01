<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Index</title>
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
    <section class="container mx-auto max-md:px-4">
        <h1 class="text-start   text-[38px] font-bold text-blue-900
    ">Update Teacher</h1>

        <div class="mx-auto mt-2">
            <div class="bg-white rounded-xl shadow-lg shadow-black/5 overflow-hidden border border-gray-100">

                <div class="bg-blue-900 px-6 py-4">
                    <h3 class="text-white font-bold text-lg flex items-center gap-2">
                        <ion-icon name="create-outline"></ion-icon>
                        <p class="mt-1"> Edit Teacher Details</p>
                    </h3>
                </div>

                <form action="{{ route('teachers.update', $teacher->tid) }}" method="POST" class="p-8">
                    @csrf
                    @method('PUT') {{-- This is the only difference from Create --}}

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                    <ion-icon name="person-outline"></ion-icon>
                                </div>
                                <input type="text" name="full_name" value="{{ old('full_name', $teacher->full_name) }}" required class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-blue-900 transition-all outline-none text-gray-600">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>
                                <input type="tel" name="tel" value="{{ old('tel', $teacher->tel) }}" required class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-blue-900 transition-all outline-none text-gray-600">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex items-center justify-end gap-3">
                        <a href="{{ route('teachers.index') }}" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-gray-800 transition-colors">
                            Cancel
                        </a>

                        <button type="submit" class="flex justify-center items-center gap-2 min-w-[120px] px-6 py-2.5 bg-yellow-400 hover:bg-yellow-500 text-white rounded-lg text-sm font-bold transition-all duration-200 shadow-md active:scale-95">
                            <ion-icon name="cloud-upload-outline" class="text-lg"></ion-icon>
                            Update Teacher
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script src=" https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4">
        </script>
        {{-- ionicons --}}
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
