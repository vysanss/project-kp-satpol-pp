<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Banner - Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        /* Custom scrollbar for table */
        .overflow-x-auto::-webkit-scrollbar {
            height: 8px;
        }
        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 8px;
        }
        /* Modal backdrop */
        .modal-backdrop {
            background: rgba(30, 41, 59, 0.5);
        }
        /* Fix for modal z-index */
        .modal {
            z-index: 50;
        }
    </style>
</head>
<body class="bg-gray-50 pt-20 min-h-screen">
    <x-admin.navbar />

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-xl p-8 text-white mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Kelola Banner</h2>
                    <p class="text-blue-100 text-lg">Manajemen banner website</p>
                    <div class="mt-4 flex items-center space-x-4">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                            <span class="text-sm font-medium">Total Banner: {{ $banners->count() ?? 0 }}</span>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <i class="fas fa-image text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-semibold text-gray-900">Daftar Banner</h3>
                    <button onclick="openCreateModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition-colors">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Banner</span>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="bannersTable" class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sub Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($banners as $banner)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $banner->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $banner->judul }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $banner->sub_judul }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if($banner->show_logo)
                                    @if(isset($banner->uploaded_logo) && $banner->uploaded_logo)
                                        <img src="{{ asset('storage/logos/' . $banner->uploaded_logo) }}" alt="{{ $banner->logo_alt }}" class="h-8 w-8 rounded object-cover">
                                    @else
                                        <img src="{{ asset($banner->logo) }}" alt="{{ $banner->logo_alt }}" class="h-8 w-8 rounded object-cover">
                                    @endif
                                @else
                                    <span class="text-gray-400">No Logo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button onclick="viewBanner({{ $banner->id }})" class="text-blue-600 hover:text-blue-900" title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="editBanner({{ $banner->id }})" class="text-indigo-600 hover:text-indigo-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="deleteBanner({{ $banner->id }})" class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create/Edit Modal -->
    <div id="bannerModal" class="fixed inset-0 z-50 hidden modal-backdrop">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl max-h-[90vh] overflow-y-auto">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">Tambah Banner</h3>
                </div>
                
                <form id="bannerForm" class="p-6 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                            <input type="text" name="judul" id="judul" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Sub Judul</label>
                            <input type="text" name="sub_judul" id="sub_judul" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Logo</label>
                            <input type="file" name="logo" id="logo" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maksimal 2MB</p>
                            <p id="logoOptional" class="text-xs text-blue-500 mt-1">Opsional - kosongkan jika tidak ingin mengubah logo</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alt Text Logo</label>
                            <input type="text" name="logo_alt" id="logo_alt" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Preview Logo -->
                    <div id="logoPreview" class="hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preview Logo</label>
                        <img id="previewImage" src="" alt="Preview" class="h-20 w-20 rounded object-cover border">
                    </div>

                    <!-- Current Logo Display for Edit Mode -->
                    <div id="currentLogo" class="hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Logo Saat Ini</label>
                        <img id="currentLogoImage" src="" alt="Current Logo" class="h-20 w-20 rounded object-cover border">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Melayani</label>
                            <input type="text" name="tahun_melayani" id="tahun_melayani" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Personil Aktif</label>
                            <input type="text" name="personil_aktif" id="personil_aktif" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kelurahan</label>
                            <input type="text" name="kelurahan" id="kelurahan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="show_logo" id="show_logo" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="show_logo" class="ml-2 block text-sm text-gray-900">Tampilkan Logo</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="show_navigation" id="show_navigation" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="show_navigation" class="ml-2 block text-sm text-gray-900">Tampilkan Navigasi</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="show_stats" id="show_stats" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="show_stats" class="ml-2 block text-sm text-gray-900">Tampilkan Statistik</label>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div id="viewModal" class="fixed inset-0 z-50 hidden modal-backdrop">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Detail Banner</h3>
                </div>
                <div id="viewContent" class="p-6">
                    <!-- Content will be populated by JavaScript -->
                </div>
                <div class="px-6 py-4 border-t border-gray-200">
                    <button onclick="closeViewModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let editMode = false;
        let editId = null;

        $(document).ready(function() {
            $('#bannersTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json'
                },
                responsive: true,
                order: [[0, 'desc']]
            });
        });

        function openCreateModal() {
            editMode = false;
            editId = null;
            document.getElementById('modalTitle').textContent = 'Tambah Banner';
            document.getElementById('bannerForm').reset();
            document.getElementById('logoPreview').classList.add('hidden');
            document.getElementById('currentLogo').classList.add('hidden');
            document.getElementById('logoOptional').classList.remove('hidden');
            document.getElementById('logo').required = false;
            document.getElementById('bannerModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('bannerModal').classList.add('hidden');
        }

        function closeViewModal() {
            document.getElementById('viewModal').classList.add('hidden');
        }

        function editBanner(id) {
            editMode = true;
            editId = id;
            document.getElementById('modalTitle').textContent = 'Edit Banner';
            
            // Make logo optional for edit - remove reference to logoRequired
            document.getElementById('logoOptional').classList.remove('hidden');
            document.getElementById('logo').required = false;
            
            fetch(`/admin/banners/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('judul').value = data.judul;
                    document.getElementById('sub_judul').value = data.sub_judul;
                    document.getElementById('deskripsi').value = data.deskripsi || '';
                    document.getElementById('logo_alt').value = data.logo_alt || '';
                    document.getElementById('tahun_melayani').value = data.tahun_melayani;
                    document.getElementById('personil_aktif').value = data.personil_aktif;
                    document.getElementById('kecamatan').value = data.kecamatan;
                    document.getElementById('kelurahan').value = data.kelurahan;
                    document.getElementById('show_logo').checked = data.show_logo == 1;
                    document.getElementById('show_navigation').checked = data.show_navigation == 1;
                    document.getElementById('show_stats').checked = data.show_stats == 1;
                    
                    // Show current logo if exists (check uploaded_logo first, then default)
                    if (data.uploaded_logo) {
                        document.getElementById('currentLogo').classList.remove('hidden');
                        document.getElementById('currentLogoImage').src = `/storage/logos/${data.uploaded_logo}`;
                    } else if (data.logo) {
                        document.getElementById('currentLogo').classList.remove('hidden');
                        document.getElementById('currentLogoImage').src = `/${data.logo}`;
                    } else {
                        document.getElementById('currentLogo').classList.add('hidden');
                    }
                    
                    // Hide new logo preview initially
                    document.getElementById('logoPreview').classList.add('hidden');
                    
                    document.getElementById('bannerModal').classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire('Error!', 'Gagal mengambil data banner', 'error');
                });
        }

        function viewBanner(id) {
            fetch(`/admin/banners/${id}`)
                .then(response => response.json())
                .then(data => {
                    const logoDisplay = () => {
                        if (data.show_logo == 1) {
                            if (data.uploaded_logo) {
                                return `<img src="/storage/logos/${data.uploaded_logo}" alt="${data.logo_alt}" class="mt-1 h-16 w-16 rounded object-cover">`;
                            } else if (data.logo) {
                                return `<img src="/${data.logo}" alt="${data.logo_alt}" class="mt-1 h-16 w-16 rounded object-cover">`;
                            }
                        }
                        return '<p class="mt-1 text-sm text-gray-500">Tidak ada logo</p>';
                    };

                    const content = `
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Judul</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.judul}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Sub Judul</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.sub_judul}</p>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <p class="mt-1 text-sm text-gray-900">${data.deskripsi || 'Tidak ada deskripsi'}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Logo</label>
                                ${logoDisplay()}
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tahun Melayani</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.tahun_melayani}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Personil Aktif</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.personil_aktif}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.kecamatan}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Kelurahan</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.kelurahan}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tampilkan Logo</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.show_logo == 1 ? 'Ya' : 'Tidak'}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tampilkan Navigasi</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.show_navigation == 1 ? 'Ya' : 'Tidak'}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tampilkan Statistik</label>
                                    <p class="mt-1 text-sm text-gray-900">${data.show_stats == 1 ? 'Ya' : 'Tidak'}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    document.getElementById('viewContent').innerHTML = content;
                    document.getElementById('viewModal').classList.remove('hidden');
                })
                .catch(error => {
                    Swal.fire('Error!', 'Gagal mengambil data banner', 'error');
                });
        }

        function deleteBanner(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data banner akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/admin/banners/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire('Dihapus!', data.message, 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire('Error!', data.message, 'error');
                        }
                    })
                    .catch(error => {
                        Swal.fire('Error!', 'Terjadi kesalahan', 'error');
                    });
                }
            });
        }

        document.getElementById('bannerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            // Convert checkbox values to 1 or 0
            const checkboxFields = ['show_logo', 'show_navigation', 'show_stats'];
            checkboxFields.forEach(field => {
                if (formData.has(field)) {
                    formData.set(field, '1');
                } else {
                    formData.append(field, '0');
                }
            });
            
            // Always use FormData for both create and edit to handle file uploads properly
            const url = editMode ? `/admin/banners/${editId}` : '/admin/banners';
            
            // Add method override for PUT if editing
            if (editMode) {
                formData.append('_method', 'PUT');
            }
            
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Berhasil!', data.message, 'success').then(() => {
                        closeModal();
                        location.reload();
                    });
                } else {
                    if (data.errors) {
                        let errorMessage = '';
                        for (const [field, messages] of Object.entries(data.errors)) {
                            errorMessage += messages.join(', ') + '\n';
                        }
                        Swal.fire('Error!', errorMessage, 'error');
                    } else {
                        Swal.fire('Error!', data.message || 'Terjadi kesalahan', 'error');
                    }
                }
            })
            .catch(error => {
                Swal.fire('Error!', 'Terjadi kesalahan', 'error');
            });
        });

        // Preview image when file is selected
        document.getElementById('logo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('logoPreview').classList.remove('hidden');
                    document.getElementById('previewImage').src = e.target.result;
                    
                    // Hide current logo when new file is selected in edit mode
                    if (editMode) {
                        document.getElementById('currentLogo').classList.add('hidden');
                    }
                };
                reader.readAsDataURL(file);
            } else {
                document.getElementById('logoPreview').classList.add('hidden');
                
                // Show current logo again if no new file is selected in edit mode
                if (editMode) {
                    document.getElementById('currentLogo').classList.remove('hidden');
                }
            }
        });

        // Close modal when clicking outside
        document.getElementById('bannerModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        document.getElementById('viewModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeViewModal();
            }
        });
    </script>

</body>
</html>
