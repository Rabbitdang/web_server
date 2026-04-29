<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-white leading-tight">
            Dashboard Quản Trị
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl overflow-hidden">

                <div class="p-6 border-b dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-white">
                        Danh sách tài khoản
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">

                        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-white">
                            <tr>
                                <th class="px-6 py-4">#</th>
                                <th class="px-6 py-4">Tên</th>
                                <th class="px-6 py-4">Email</th>
                                <th class="px-6 py-4">Role</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y dark:divide-gray-700">

                            @foreach($users as $index => $user)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">

                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-200">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="px-6 py-4 font-medium text-gray-800 dark:text-white">
                                        {{ $user->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4">
                                        @php
                                            $role = $user->getRoleNames()->first();
                                        @endphp

                                        <span class="px-3 py-1 rounded-full text-sm font-semibold
                                            @if($role == 'admin')
                                                bg-red-100 text-red-600
                                            @elseif($role == 'editor')
                                                bg-blue-100 text-blue-600
                                            @else
                                                bg-green-100 text-green-600
                                            @endif
                                        ">
                                            {{ $role ?? 'user' }}
                                        </span>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>