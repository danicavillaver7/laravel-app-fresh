<x-layout>
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 font-sans antialiased flex items-center">
        <div class="max-w-4xl mx-auto w-full">

            <div class="glass-card rounded-3xl shadow-2xl overflow-hidden p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-white">Users List</h2>
                    <a href="/register">
                        <button class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg">Add User</button>
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-white/10 text-white">
                        <thead>
                            <tr class="bg-white/5">
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Email</th>
                                <th class="px-4 py-2 text-left">Age</th>
                                <th class="px-4 py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr class="border-t border-white/10 hover:bg-white/10">
                                <td class="px-4 py-2">{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2">{{ $user->age }}</td>
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="/edit/{{ $user->id }}" class="text-indigo-400 hover:text-indigo-300">Edit</a>
                                    <form method="POST" action="/delete/{{ $user->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-4 py-6 text-center text-slate-400">
                                    No users found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-layout>