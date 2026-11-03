<x-admin.layout>
    {{-- Page Header --}}
    <div class="mb-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Teachers
                </h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Kelola data guru dan pengajar.
                </p>
            </div>

            <div>
                <a
                    href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    <svg
                        class="w-5 h-5 mr-2"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4"
                        />
                    </svg>
                    Tambah Guru
                </a>
            </div>
        </div>
    </div>

    {{-- Main Card --}}
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        {{-- Card Header --}}
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 sm:p-6">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                {{-- Search --}}
                <div class="relative w-full lg:max-w-md">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                            />
                        </svg>
                    </div>
                    <input
                        type="search"
                        placeholder="Cari guru atau NIY..."
                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    >
                </div>
            </div>
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">NIY</th>
                        <th scope="col" class="px-6 py-3">Mata Pelajaran (Subject)</th>
                        <th scope="col" class="px-6 py-3">Tanggal Mulai (Start Date)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $teacher)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $teacher['name'] }}
                            </td>
                            <td class="px-6 py-4 font-mono">
                                {{ $teacher['niy'] }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                    {{ $teacher -> subjects -> mapel ?? 'Belum ada Mapel'}}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                {{ $teacher['start-date']}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
                                Belum ada data guru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>

