<x-layout>
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 font-sans antialiased flex items-center">
        <div class="max-w-xl mx-auto w-full">

            <div class="glass-card rounded-3xl shadow-2xl overflow-hidden p-8">
                <h2 class="text-2xl font-bold text-white mb-6">Edit User</h2>

                <form method="POST" action="/update/{{ $user->id }}">
                    @csrf
                    @method('PUT')

                    <input name="first_name" value="{{ $user->first_name }}" placeholder="First Name" class="w-full mb-4 px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20"><br>
                    <input name="last_name" value="{{ $user->last_name }}" placeholder="Last Name" class="w-full mb-4 px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20"><br>
                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" class="w-full mb-4 px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20"><br>
                    <input type="number" name="age" value="{{ $user->age }}" placeholder="Age" class="w-full mb-4 px-4 py-2 rounded-lg bg-white/10 text-white border border-white/20"><br>

                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-lg">Update</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>