<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://cdn.ckeditor.com https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; img-src 'self' data: https:; font-src 'self' https://cdnjs.cloudflare.com;">
    <title>Kelola Layanan - Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 pt-20">
        <x-admin.navbar /> 
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- CRUD Layanan -->
    <div class="bg-white rounded-xl shadow p-6 mb-8">
        <h3 class="text-xl font-bold mb-4">Tambah Layanan</h3>
        <form action="{{ route('admin.layanan.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-2">
                <label class="block font-medium">Title</label>
                <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-2">
                <label class="block font-medium">Description</label>
                <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <div class="mb-2">
                <label class="block font-medium">Icon</label>
                <div class="flex items-center gap-2">
                    <select name="icon" id="icon-select-create" class="border rounded px-3 py-2" required onchange="updateIconPreview('icon-select-create', 'icon-preview-create')">
                        <option value="fa-solid fa-user">User</option>
                        <option value="fa-solid fa-cog">Cog</option>
                        <option value="fa-solid fa-heart">Heart</option>
                        <option value="fa-solid fa-star">Star</option>
                        <option value="fa-solid fa-envelope">Envelope</option>
                        <option value="fa-solid fa-phone">Phone</option>
                        <option value="fa-solid fa-check">Check</option>
                        <option value="fa-solid fa-home">Home</option>
                        <option value="fa-solid fa-car">Car</option>
                        <option value="fa-solid fa-book">Book</option>
                    </select>
                    <i id="icon-preview-create" class="fa-solid fa-user text-xl"></i>
                </div>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah</button>
        </form>
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <h3 class="text-xl font-bold mb-4">Daftar Layanan</h3>
        <table class="min-w-full bg-white border rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">#</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Icon</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($layanans as $layanan)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $layanan->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $layanan->title }}</td>
                    <td class="py-2 px-4 border-b">{{ $layanan->description }}</td>
                    <td class="py-2 px-4 border-b">
                        <i class="{{ $layanan->icon }}"></i>
                        <span class="ml-2 text-xs text-gray-500">{{ $layanan->icon }}</span>
                    </td>
                    <td class="py-2 px-4 border-b flex gap-2">
                        <!-- Edit Button -->
                        <button type="button"
                            class="bg-yellow-500 text-white px-2 py-1 rounded"
                            onclick="document.getElementById('edit-modal-{{ $layanan->id }}').classList.remove('hidden')">
                            Edit
                        </button>
                        <!-- Delete Form -->
                        <form action="{{ route('admin.layanan.destroy', $layanan->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus layanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                <!-- Edit Modal -->
                <div id="edit-modal-{{ $layanan->id }}" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">
                        <button type="button" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
                            onclick="document.getElementById('edit-modal-{{ $layanan->id }}').classList.add('hidden')">
                            <i class="fa fa-times"></i>
                        </button>
                        <h3 class="text-lg font-bold mb-4">Edit Layanan</h3>
                        <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label class="block font-medium">Title</label>
                                <input type="text" name="title" value="{{ $layanan->title }}" class="w-full border rounded px-3 py-2" required>
                            </div>
                            <div class="mb-2">
                                <label class="block font-medium">Description</label>
                                <textarea name="description" class="w-full border rounded px-3 py-2">{{ $layanan->description }}</textarea>
                            </div>
                            <div class="mb-2">
                                <label class="block font-medium">Icon</label>
                                <div class="flex items-center gap-2">
                                    <select name="icon" id="icon-select-edit-{{ $layanan->id }}" class="border rounded px-3 py-2" required onchange="updateIconPreview('icon-select-edit-{{ $layanan->id }}', 'icon-preview-edit-{{ $layanan->id }}')">
                                        <option value="fa-solid fa-user" @if($layanan->icon == 'fa-solid fa-user') selected @endif>User</option>
                                        <option value="fa-solid fa-cog" @if($layanan->icon == 'fa-solid fa-cog') selected @endif>Cog</option>
                                        <option value="fa-solid fa-heart" @if($layanan->icon == 'fa-solid fa-heart') selected @endif>Heart</option>
                                        <option value="fa-solid fa-star" @if($layanan->icon == 'fa-solid fa-star') selected @endif>Star</option>
                                        <option value="fa-solid fa-envelope" @if($layanan->icon == 'fa-solid fa-envelope') selected @endif>Envelope</option>
                                        <option value="fa-solid fa-phone" @if($layanan->icon == 'fa-solid fa-phone') selected @endif>Phone</option>
                                        <option value="fa-solid fa-check" @if($layanan->icon == 'fa-solid fa-check') selected @endif>Check</option>
                                        <option value="fa-solid fa-home" @if($layanan->icon == 'fa-solid fa-home') selected @endif>Home</option>
                                        <option value="fa-solid fa-car" @if($layanan->icon == 'fa-solid fa-car') selected @endif>Car</option>
                                        <option value="fa-solid fa-book" @if($layanan->icon == 'fa-solid fa-book') selected @endif>Book</option>
                                    </select>
                                    <i id="icon-preview-edit-{{ $layanan->id }}" class="{{ $layanan->icon }} text-xl"></i>
                                </div>
                            </div>
                            <div class="flex justify-end gap-2 mt-4">
                                <button type="button" class="px-4 py-2 rounded bg-gray-300 text-gray-700"
                                    onclick="document.getElementById('edit-modal-{{ $layanan->id }}').classList.add('hidden')">
                                    Batal
                                </button>
                                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="5" class="py-2 px-4 border-b text-center text-gray-500">Tidak ada data layanan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script>
function updateIconPreview(selectId, previewId) {
    var iconClass = document.getElementById(selectId).value;
    var iconPreview = document.getElementById(previewId);
    iconPreview.className = iconClass + ' text-xl';
}
document.addEventListener('DOMContentLoaded', function() {
    // Set default preview for create form
    updateIconPreview('icon-select-create', 'icon-preview-create');
    // Set default preview for each edit modal
    @foreach($layanans as $layanan)
        updateIconPreview('icon-select-edit-{{ $layanan->id }}', 'icon-preview-edit-{{ $layanan->id }}');
    @endforeach
});
</script>
</body>
</html>
{{-- Sudah menampilkan data dari tabel layanans menggunakan $layanans --}}