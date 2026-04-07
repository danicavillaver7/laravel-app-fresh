<x-layout>
    <div class="min-h-screen animate-mesh py-12 px-4 sm:px-6 lg:px-8 font-sans antialiased flex items-center">
        <div class="max-w-xl mx-auto w-full">

            <div class="glass-card rounded-3xl shadow-2xl overflow-hidden">

                <div class="px-8 pt-8 pb-6 bg-gradient-to-b from-white/5 to-transparent">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-indigo-500/20 rounded-2xl ring-1 ring-indigo-400/30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-white tracking-tight">User Registration</h1>
                            <p class="text-xs text-indigo-300 uppercase tracking-widest font-bold opacity-70">Create a new user</p>
                        </div>
                    </div>
                </div>
   
                <div class="px-8 pb-8">
                    <form method="POST" action="/users">
                        @csrf
                        <div class="space-y-4">
                            <input type="text" name="first_name" placeholder="First Name" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none" required>
                            
                            <input type="text" name="middle_name" placeholder="Middle Name" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none">
                            
                            <input type="text" name="last_name" placeholder="Last Name" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none" required>
                            
                            <input type="text" name="nickname" placeholder="Nickname" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none">

                            <input type="email" name="email" placeholder="Email" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none" required>

                            <input type="number" name="age" placeholder="Age" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none">

                            <input type="text" name="address" placeholder="Address" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none">

                            <input type="text" name="contact_number" placeholder="Contact Number" class="w-full rounded-xl bg-slate-950/50 border border-slate-700/50 text-white px-4 py-3.5 text-sm focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none">
                        </div>
                                 @if ($errors->any())
                <div style="color:red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                
            @endif

            @if (session('success'))
                <div style="color:green;">
                    {{ session('success') }}
                </div>
            @endif

                        <div class="mt-6 flex justify-end">
                            <button type="submit" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-500 active:scale-95 transition-all px-8 py-3 rounded-xl text-sm font-bold text-white shadow-lg shadow-indigo-500/20">
                                Register
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="text-center mt-8">
                <p class="text-slate-500 text-[10px] uppercase tracking-[0.3em] font-bold">
                    University of Mindanao • Data Systems
                </p>
            </div>

        </div>
    </div>
</x-layout>