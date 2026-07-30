@extends('layouts.admin')

@section('title', 'Kelola Slider')
@section('page-title', 'Kelola Slider')

@section('content')
<div class="row row-cards">
  <div class="col-12">
    <!-- Form Upload Slider -->
    <div class="card mb-3">
      <div class="card-header">
        <h3 class="card-title">Tambah Slider Baru</h3>
      </div>
      <div class="card-body">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row align-items-end">
            <div class="col">
              <label class="form-label">Pilih Gambar (Disarankan orientasi landscape/lebar)</label>
              <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary d-flex align-items-center gap-1">
                <i class="ti ti-upload fs-2"></i> Unggah Gambar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Data Slider -->
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter table-hover card-table text-nowrap">
          <thead>
            <tr>
              <th class="w-1 text-center">#</th>
              <th>Gambar</th>
              <th>Status</th>
              <th class="w-1 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($sliders as $i => $l)
            <tr>
              <td class="text-center text-secondary small">{{ $sliders->firstItem() + $i }}</td>
              <td>
                <img src="{{ Storage::url($l->image_path) }}" alt="Slider" style="max-height: 100px; border-radius: 6px;">
              </td>
              <td>
                @if($l->is_active)
                <span class="badge bg-success-lt text-success rounded-pill px-2.5 py-1 font-weight-medium">
                  <i class="ti ti-circle-check me-1 fs-3"></i> Aktif
                </span>
                @else
                <span class="badge bg-secondary-lt text-secondary rounded-pill px-2.5 py-1 font-weight-medium">
                  <i class="ti ti-circle-x me-1 fs-3"></i> Nonaktif
                </span>
                @endif
              </td>
              <td class="text-center">
                <form action="{{ route('sliders.destroy', $l) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Hapus slider ini?')">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-icon btn-outline-danger" title="Hapus Slider" style="border-radius: 6px;">
                    <i class="ti ti-trash fs-2"></i>
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4" class="text-center py-5">
                <div class="empty">
                  <div class="empty-icon">
                    <div class="avatar avatar-md bg-muted-lt" style="border-radius: 10px;">
                      <i class="ti ti-photo fs-1 text-secondary"></i>
                    </div>
                  </div>
                  <p class="empty-title text-heading mt-2">Belum ada slider</p>
                  <p class="empty-subtitle text-secondary mb-0">Silakan unggah gambar baru di atas.</p>
                </div>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      
      @if($sliders->hasPages())
      <div class="card-footer d-flex align-items-center justify-content-between border-top">
        <p class="m-0 text-secondary small">Menampilkan data halaman ini</p>
        <div>
          {{ $sliders->links() }}
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection
