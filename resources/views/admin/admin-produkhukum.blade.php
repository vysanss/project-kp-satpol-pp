<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 pt-20">

    <x-admin.navbar />

    <!-- Alert Messages -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <!-- Welcome Card - Large -->
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Dokumen</h2>
                        <p class="text-blue-100 text-lg">Produk hukum, dokumen perencanaan, dan dokumen evaluasi</p>
                        <div class="mt-4 flex items-center space-x-4">
                            <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                                <span class="text-sm font-medium">Total PDF: {{ $pdfs->count() ?? 0 }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-file-alt text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row - Upload and Management -->
        <div class="grid grid-cols-1 gap-6 mb-8">
            <!-- Upload Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-cloud-upload-alt text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Upload PDF</h3>
                        <p class="text-gray-500 text-sm">Tambahkan dokumen baru</p>
                    </div>
                </div>

                <form action="{{ route('pdf.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="pdf">
                            <i class="fas fa-file-pdf mr-1 text-red-500"></i>
                            Pilih File PDF
                        </label>
                        <input class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 hover:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" 
                               id="pdf" 
                               type="file" 
                               name="pdf" 
                               accept=".pdf"
                               required>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="kategori">
                            <i class="fas fa-folder mr-1 text-orange-500"></i>
                            Kategori
                        </label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 hover:bg-white" 
                                id="kategori" 
                                name="kategori" 
                                required>
                            <option value="">Pilih Kategori</option>
                            <option value="produk_hukum">📋 Produk Hukum</option>
                            <option value="dokumen_evaluasi">📊 Dokumen Evaluasi</option>
                            <option value="dokumen_perencanaan">📈 Dokumen Perencanaan</option>
                        </select>
                    </div>

                    <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-200 flex items-center justify-center shadow-lg hover:shadow-xl" 
                            type="submit">
                        <i class="fas fa-upload mr-2"></i>
                        Upload Dokumen
                    </button>
                </form>
            </div>
        </div>

        <!-- PDF List Card - Full Width -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-list text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Daftar Dokumen PDF</h3>
                            <p class="text-gray-500 text-sm">Kelola semua dokumen yang telah diupload</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-2xl font-bold text-blue-600">{{ $pdfs->count() ?? 0 }}</span>
                        <p class="text-xs text-gray-500">Total File</p>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama File</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($pdfs as $pdf)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    {{ $loop->iteration }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <i class="fas fa-file-pdf text-red-500 mr-3"></i>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900">{{ $pdf->nama_file }}</div>
                                        <div class="text-xs text-gray-500">PDF Document</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                    @if($pdf->kategori == 'produk_hukum') bg-blue-100 text-blue-800
                                    @elseif($pdf->kategori == 'dokumen_evaluasi') bg-green-100 text-green-800
                                    @else bg-purple-100 text-purple-800 @endif">
                                    {{ str_replace('_', ' ', ucwords($pdf->kategori)) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <a href="{{ asset($pdf->path) }}" 
                                   target="_blank" 
                                   class="inline-flex items-center px-3 py-1.5 bg-blue-100 hover:bg-blue-200 text-blue-700 text-xs font-semibold rounded-lg transition-all duration-200">
                                    <i class="fas fa-download mr-1"></i>
                                    Download
                                </a>
                                <button onclick="openEditModal({{ $pdf->id }}, '{{ $pdf->nama_file }}', '{{ $pdf->kategori }}')" 
                                        class="inline-flex items-center px-3 py-1.5 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 text-xs font-semibold rounded-lg transition-all duration-200">
                                    <i class="fas fa-edit mr-1"></i>
                                    Edit
                                </button>
                                <button onclick="openDeleteModal({{ $pdf->id }}, '{{ $pdf->nama_file }}')" 
                                        class="inline-flex items-center px-3 py-1.5 bg-red-100 hover:bg-red-200 text-red-700 text-xs font-semibold rounded-lg transition-all duration-200">
                                    <i class="fas fa-trash mr-1"></i>
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                        <i class="fas fa-inbox text-gray-400 text-2xl"></i>
                                    </div>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada dokumen</h3>
                                    <p class="text-gray-500">Upload dokumen PDF pertama Anda untuk memulai</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden transition-opacity duration-300">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 transform transition-all duration-300 scale-95 hover:scale-100">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-4 rounded-t-xl">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold flex items-center">
                        <i class="fas fa-edit mr-2"></i>
                        Edit PDF
                    </h3>
                    <button type="button" onclick="closeEditModal()" class="text-white hover:text-gray-200 transition-colors duration-200">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div class="p-6">
                <form id="editForm" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="edit_nama_file">
                            <i class="fas fa-file-pdf mr-1 text-red-500"></i>
                            Nama File
                        </label>
                        <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 hover:bg-white" 
                               id="edit_nama_file" 
                               type="text" 
                               name="nama_file" 
                               placeholder="Masukkan nama file..."
                               required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="edit_kategori">
                            <i class="fas fa-folder mr-1 text-yellow-500"></i>
                            Kategori
                        </label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 hover:bg-white" 
                                id="edit_kategori" 
                                name="kategori" 
                                required>
                            <option value="produk_hukum">Produk Hukum</option>
                            <option value="dokumen_evaluasi">Dokumen Evaluasi</option>
                            <option value="dokumen_perencanaan">Dokumen Perencanaan</option>
                        </select>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="bg-gray-50 px-6 py-4 rounded-b-xl flex justify-end space-x-3">
                <button type="button" 
                        onclick="closeEditModal()" 
                        class="px-6 py-2.5 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-lg transition-all duration-200 flex items-center shadow-md hover:shadow-lg">
                    <i class="fas fa-times mr-2"></i>
                    Batal
                </button>
                <button type="submit" 
                        form="editForm"
                        class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold rounded-lg transition-all duration-200 flex items-center shadow-md hover:shadow-lg">
                    <i class="fas fa-save mr-2"></i>
                    Update
                </button>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden transition-opacity duration-300">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 transform transition-all duration-300 scale-95">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-4 rounded-t-xl">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-exclamation-triangle text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Konfirmasi Hapus</h3>
                </div>
            </div>
            
            <!-- Modal Body -->
            <div class="p-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trash-alt text-red-500 text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Apakah Anda yakin?</h4>
                    <p class="text-gray-600 mb-1">Anda akan menghapus file:</p>
                    <p class="text-sm font-medium text-red-600 bg-red-50 px-3 py-2 rounded-lg mb-4" id="deleteFileName"></p>
                    <p class="text-sm text-gray-500">Tindakan ini tidak dapat dibatalkan!</p>
                </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="bg-gray-50 px-6 py-4 rounded-b-xl flex justify-end space-x-3">
                <button type="button" 
                        onclick="closeDeleteModal()" 
                        class="px-6 py-2.5 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-lg transition-all duration-200 flex items-center shadow-md hover:shadow-lg">
                    <i class="fas fa-times mr-2"></i>
                    Batal
                </button>
                <button type="button" 
                        onclick="confirmDelete()"
                        class="px-6 py-2.5 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold rounded-lg transition-all duration-200 flex items-center shadow-md hover:shadow-lg">
                    <i class="fas fa-trash mr-2"></i>
                    Ya, Hapus
                </button>
            </div>
        </div>
    </div>

    <!-- Hidden form for delete action -->
    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        let deleteId = null;

        function openDeleteModal(id, fileName) {
            deleteId = id;
            document.getElementById('deleteFileName').textContent = fileName;
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
            // Add slight delay for smooth animation
            setTimeout(() => {
                modal.querySelector('.transform').classList.remove('scale-95');
                modal.querySelector('.transform').classList.add('scale-100');
            }, 10);
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');
            const modalContent = modal.querySelector('.transform');
            
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                deleteId = null;
            }, 300);
        }

        function confirmDelete() {
            if (deleteId) {
                const form = document.getElementById('deleteForm');
                form.action = `/admin/pdf/${deleteId}`;
                form.submit();
            }
        }

        function openEditModal(id, namaFile, kategori) {
            const modal = document.getElementById('editModal');
            modal.classList.remove('hidden');
            // Add slight delay for smooth animation
            setTimeout(() => {
                modal.querySelector('.transform').classList.remove('scale-95');
                modal.querySelector('.transform').classList.add('scale-100');
            }, 10);
            
            document.getElementById('editForm').action = `/admin/pdf/${id}`;
            document.getElementById('edit_nama_file').value = namaFile;
            document.getElementById('edit_kategori').value = kategori;
            
            // Focus on the first input
            document.getElementById('edit_nama_file').focus();
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            const modalContent = modal.querySelector('.transform');
            
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Close modal when clicking outside
        document.getElementById('editModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeEditModal();
            }
        });

        // Close delete modal when clicking outside
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });

        // Close modals with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (!document.getElementById('editModal').classList.contains('hidden')) {
                    closeEditModal();
                }
                if (!document.getElementById('deleteModal').classList.contains('hidden')) {
                    closeDeleteModal();
                }
            }
        });
    </script>
</body>
</html>
