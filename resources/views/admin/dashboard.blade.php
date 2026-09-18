<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2.5">
                    <span>👑</span>
                    <span>Admin Control Center (แผงควบคุมผู้ดูแลระบบ)</span>
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    จัดการข้อมูลสมาชิก หนังสือ และตรวจสอบคำขอแลกเปลี่ยนทั้งหมดในระบบ
                </p>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('dashboard') }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-colors">
                    ← กลับหน้า Dashboard ผู้ใช้
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            {{-- 4 Metric Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- 1. Users --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-xs hover:shadow-md transition-all group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">ผู้ใช้งานทั้งหมด</p>
                            <h3 class="text-3xl font-extrabold text-slate-800 mt-2">{{ $usersCount }}</h3>
                            <p class="text-xs text-blue-600 font-semibold mt-1">สมาชิกในระบบ</p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            👥
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100">
                        <a href="{{ route('admin.users.index') }}" class="text-xs font-bold text-blue-600 hover:text-blue-800 flex items-center gap-1">
                            จัดการผู้ใช้งาน <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- 2. Books --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-xs hover:shadow-md transition-all group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">หนังสือในระบบ</p>
                            <h3 class="text-3xl font-extrabold text-slate-800 mt-2">{{ $booksCount }}</h3>
                            <p class="text-xs text-emerald-600 font-semibold mt-1">พร้อมแลกเปลี่ยน</p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            📚
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100">
                        <a href="{{ route('admin.books.index') }}" class="text-xs font-bold text-emerald-600 hover:text-emerald-800 flex items-center gap-1">
                            จัดการหนังสือ <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- 3. Wanted Books --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-xs hover:shadow-md transition-all group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">หนังสือที่ต้องการ</p>
                            <h3 class="text-3xl font-extrabold text-slate-800 mt-2">{{ $wantedBooksCount }}</h3>
                            <p class="text-xs text-amber-600 font-semibold mt-1">ที่สมาชิกลงตามหา</p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            🔎
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100">
                        <a href="{{ route('admin.wanted-books.index') }}" class="text-xs font-bold text-amber-600 hover:text-amber-800 flex items-center gap-1">
                            จัดการหนังสือที่ต้องการ <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- 4. Exchange Requests --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-xs hover:shadow-md transition-all group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">คำขอแลกเปลี่ยน</p>
                            <h3 class="text-3xl font-extrabold text-slate-800 mt-2">{{ $exchangeRequestsCount }}</h3>
                            <p class="text-xs text-purple-600 font-semibold mt-1">การแลกเปลี่ยนทั้งหมด</p>
                        </div>
                        <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                            🔄
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-100">
                        <a href="{{ route('admin.exchange-requests.index') }}" class="text-xs font-bold text-purple-600 hover:text-purple-800 flex items-center gap-1">
                            ตรวจสอบคำขอ <span>→</span>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Admin Menu Grid --}}
            <div class="bg-white rounded-3xl border border-slate-200/90 shadow-xs p-6 sm:p-8">
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-slate-800">
                        🛠️ โมดูลจัดการระบบ
                    </h3>
                    <p class="text-xs text-slate-500 mt-0.5">
                        เลือกเมนูเพื่อเข้าสู่การบริหารจัดการข้อมูลแต่ละส่วน
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <a href="{{ route('admin.users.index') }}" 
                       class="p-5 rounded-2xl bg-blue-50/70 hover:bg-blue-100/80 border border-blue-200/70 transition-all group">
                        <div class="w-12 h-12 rounded-2xl bg-white text-blue-600 flex items-center justify-center text-2xl shadow-xs group-hover:scale-110 transition-transform mb-3">
                            👥
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">จัดการผู้ใช้งาน</h4>
                        <p class="text-xs text-slate-500 mt-1">ดูรายชื่อสมาชิก ตรวจสอบสิทธิ์ และลบบัญชีผู้ใช้ที่ไม่เหมาะสม</p>
                    </a>

                    <a href="{{ route('admin.books.index') }}" 
                       class="p-5 rounded-2xl bg-emerald-50/70 hover:bg-emerald-100/80 border border-emerald-200/70 transition-all group">
                        <div class="w-12 h-12 rounded-2xl bg-white text-emerald-600 flex items-center justify-center text-2xl shadow-xs group-hover:scale-110 transition-transform mb-3">
                            📚
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">จัดการหนังสือ</h4>
                        <p class="text-xs text-slate-500 mt-1">ตรวจสอบหนังสือทั้งหมดในคลังระบบ และลบรายการหนังสือ</p>
                    </a>

                    <a href="{{ route('admin.wanted-books.index') }}" 
                       class="p-5 rounded-2xl bg-amber-50/70 hover:bg-amber-100/80 border border-amber-200/70 transition-all group">
                        <div class="w-12 h-12 rounded-2xl bg-white text-amber-600 flex items-center justify-center text-2xl shadow-xs group-hover:scale-110 transition-transform mb-3">
                            🔎
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">หนังสือที่ต้องการ</h4>
                        <p class="text-xs text-slate-500 mt-1">ตรวจสอบรายการหนังสือที่สมาชิกลงประกาศตามหา</p>
                    </a>

                    <a href="{{ route('admin.exchange-requests.index') }}" 
                       class="p-5 rounded-2xl bg-purple-50/70 hover:bg-purple-100/80 border border-purple-200/70 transition-all group">
                        <div class="w-12 h-12 rounded-2xl bg-white text-purple-600 flex items-center justify-center text-2xl shadow-xs group-hover:scale-110 transition-transform mb-3">
                            🔄
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">คำขอแลกเปลี่ยน</h4>
                        <p class="text-xs text-slate-500 mt-1">ตรวจสอบประวัติคำขอแลกเปลี่ยน และสถานะการจับคู่ทั้งหมด</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>