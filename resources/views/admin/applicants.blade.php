@extends('layouts.admin')
@section('title', 'PPDB Online - Admin TPQ')
@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">PPDB Online</h1>
        <p class="text-gray-500 mt-1">Kelola dan tindak lanjuti pendaftaran calon santri.</p>
    </div>
    <a href="{{ route('admin.applicants.export') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-emerald-600 text-white text-sm font-medium rounded-lg hover:bg-emerald-700 transition shadow-sm">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        Export Excel (CSV)
    </a>
</div>

<form method="get" class="mb-6">
    <div class="flex gap-3">
        <input type="text" name="search" value="{{ request('search') }}"
            class="flex-1 max-w-xs px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
            placeholder="Cari nama atau nomor daftar">
        <button type="submit" class="px-4 py-2.5 bg-gray-600 text-white text-sm font-medium rounded-lg hover:bg-gray-700 transition">Cari</button>
    </div>
</form>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-gray-100 bg-gray-50">
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">No. Daftar</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Santri / Wali</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Program</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Kontak</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Dokumen</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="text-center px-5 py-3.5 text-xs font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse ($applicants as $a)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-5 py-4">
                            <p class="font-medium text-gray-900 text-sm">{{ $a->registration_number }}</p>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $a->created_at->format('d M Y') }}</p>
                        </td>
                        <td class="px-5 py-4">
                            <p class="font-medium text-gray-900">{{ $a->name }}</p>
                            <p class="text-sm text-gray-500 mt-0.5">{{ $a->parent_name }} · {{ $a->age }} tahun</p>
                        </td>
                        <td class="px-5 py-4 text-sm text-gray-700 capitalize">{{ $a->program }}</td>
                        <td class="px-5 py-4 text-sm text-gray-700">{{ $a->phone }}</td>
                        <td class="px-5 py-4">
                            @php $docs = []; @endphp
                            @if($a->birth_certificate) @php $docs[] = ['label'=>'Akta','path'=>$a->birth_certificate]; @endphp @endif
                            @if($a->family_card) @php $docs[] = ['label'=>'KK','path'=>$a->family_card]; @endphp @endif
                            @if($a->photo) @php $docs[] = ['label'=>'Foto','path'=>$a->photo]; @endphp @endif
                            @if(count($docs))
                                <div class="flex gap-2">
                                    @foreach($docs as $doc)
                                        <a href="{{ asset($doc['path']) }}" target="_blank" title="{{ $doc['label'] }}" class="block w-10 h-10 rounded-lg overflow-hidden border border-gray-200 hover:ring-2 hover:ring-emerald-400 transition-all">
                                            @if(str_ends_with($doc['path'], '.pdf'))
                                                <div class="w-full h-full bg-red-50 flex items-center justify-center text-red-500">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                                                </div>
                                            @else
                                                <img src="{{ asset($doc['path']) }}" alt="{{ $doc['label'] }}" class="w-full h-full object-cover">
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @else
                                <span class="text-xs text-gray-400">—</span>
                            @endif
                        </td>
                        <td class="px-5 py-4">
                            <form method="post" action="{{ route('admin.applicants.status', $a) }}" class="flex items-center gap-2">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="px-3 py-1.5 border border-gray-200 rounded-lg text-xs font-medium focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none bg-white"
                                    onchange="this.form.submit()">
                                    <option value="new" {{ $a->status === 'new' ? 'selected' : '' }}>Baru</option>
                                    <option value="verified" {{ $a->status === 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                                    <option value="accepted" {{ $a->status === 'accepted' ? 'selected' : '' }}>Diterima</option>
                                    <option value="rejected" {{ $a->status === 'rejected' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-5 py-4 text-center">
                            @if($a->birth_certificate || $a->family_card || $a->photo)
                                <a href="{{ route('admin.applicants.download', $a) }}"
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-lg hover:bg-emerald-100 transition">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                    .ZIP
                                </a>
                            @else
                                <span class="text-xs text-gray-400">—</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-5 py-8 text-center text-sm text-gray-400">Belum ada pendaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if ($applicants->hasPages())
    <div class="mt-6">
        {{ $applicants->links() }}
    </div>
@endif
@endsection
