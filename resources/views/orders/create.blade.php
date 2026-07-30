@extends('layouts.admin')

@section('title', 'Order Baru')
@section('page-title', 'Buat Order Baru')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Order</a></li>
<li class="breadcrumb-item active">Baru</li>
@endsection

@section('content')
<form action="{{ route('orders.store') }}" method="POST" id="orderForm" autocomplete="off">
  @csrf
  <div class="row row-cards">
    
    <div class="col-lg-5">
      <div class="card mb-3">
        <div class="card-status-top bg-primary"></div>
        <div class="card-header">
          <h3 class="card-title text-heading">Informasi Order</h3>
        </div>
        <div class="card-body">
          
          <div class="mb-3">
            <label class="form-label required">Pelanggan</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="ti ti-user-circle text-secondary fs-2"></i>
              </span>
              <select name="pelanggan_id" class="form-select @error('pelanggan_id') is-invalid @enderror" required style="padding-left: 2.5rem;">
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($pelanggan as $p)
                <option value="{{ $p->id }}" {{ old('pelanggan_id') == $p->id ? 'selected' : '' }}>
                  {{ $p->nama }} ({{ $p->telepon ?? 'Tidak ada No. Telp' }})
                </option>
                @endforeach
              </select>
            </div>
            @error('pelanggan_id')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <div class="mt-2">
              <a href="{{ route('pelanggan.create') }}" target="_blank" class="btn btn-xs btn-outline-primary px-2 py-1" style="border-radius: 4px; font-size: 0.75rem;">
                <i class="ti ti-plus me-1"></i> Tambah Pelanggan Baru
              </a>
            </div>
          </div>
          
          <div class="mb-3">
            <label class="form-label required">Estimasi Selesai</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="ti ti-calendar-event text-secondary fs-2"></i>
              </span>
              <input type="date" name="estimasi_selesai" class="form-control @error('estimasi_selesai') is-invalid @enderror"
                     value="{{ old('estimasi_selesai', now()->addDays(2)->format('Y-m-d')) }}" required>
            </div>
            @error('estimasi_selesai')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="mb-0">
            <label class="form-label">Catatan Tambahan</label>
            <textarea name="catatan" class="form-control" rows="3" placeholder="Contoh: Lipat dua, jangan pakai pewangi mawar, dll. (Opsional)">{{ old('catatan') }}</textarea>
          </div>
          
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pb-2">
          <div>
            <h3 class="card-title text-heading">Item Layanan</h3>
            <p class="text-secondary small mb-0">Pilih jenis layanan laundry yang diambil</p>
          </div>
          <button type="button" class="btn btn-sm btn-success d-flex align-items-center gap-1" id="addItem" style="border-radius: 6px;">
            <i class="ti ti-plus fs-2"></i> Tambah Item
          </button>
        </div>
        
        <div class="table-responsive">
          <table class="table table-vcenter card-table" id="itemTable">
            <thead>
              <tr>
                <th style="min-width: 250px;">Detail Layanan</th>
                <th style="width: 140px;">Jumlah / Berat</th>
                <th style="width: 130px;" class="text-end">Harga Satuan</th>
                <th style="width: 130px;" class="text-end">Subtotal</th>
                <th style="width: 44px;"></th>
              </tr>
            </thead>
            <tbody id="itemRows">
              <tr class="item-row align-middle">
                <td>
                  <div class="row g-2 mb-2">
                    <div class="col-6">
                      <select class="form-select jenis-select form-select-sm" required>
                        <option value="">-- Kategori --</option>
                        <option value="kiloan">Kiloan</option>
                        <option value="satuan">Satuan</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <select name="items[0][waktu_cuci]" class="form-select waktu-select form-select-sm" required disabled>
                        <option value="">-- Waktu --</option>
                      </select>
                    </div>
                  </div>
                  <select name="items[0][layanan_id]" class="form-select layanan-select" required disabled>
                    <option value="">-- Pilih Layanan --</option>
                    @foreach($layanan as $l)
                    <option value="{{ $l->id }}" data-harga="{{ $l->harga }}" data-satuan="{{ $l->satuan }}" data-jenis="{{ $l->satuan == 'kg' ? 'kiloan' : 'satuan' }}" data-waktu="{{ $l->waktu_cuci }}">
                      {{ $l->nama }} ({{ $l->harga_formatted }}/{{ $l->satuan }})
                    </option>
                    @endforeach
                  </select>
                </td>
                <td>
                  <div class="input-group input-group-flat">
                    <input type="number" name="items[0][jumlah]" class="form-control text-end jumlah-input" min="0.1" step="0.1" value="1" required>
                    <span class="input-group-text satuan-label bg-light px-2">kg</span>
                  </div>
                </td>
                <td class="text-end">
                  <span class="harga-display text-secondary small">-</span>
                </td>
                <td class="text-end">
                  <span class="subtotal-display fw-semibold text-heading">-</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-icon btn-ghost-danger remove-row" disabled style="border-radius: 6px;">
                    <i class="ti ti-trash fs-2"></i>
                  </button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="bg-muted-lt fw-bold text-heading">
                <td colspan="3" class="text-end py-3">TOTAL BAYAR :</td>
                <td class="text-end text-primary py-3 fs-3" id="grandTotal">Rp 0</td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
        
        @error('items')
        <div class="alert alert-important alert-danger m-3 d-flex align-items-center mb-0" role="alert">
          <i class="ti ti-alert-circle me-2 fs-2"></i>
          <div>{{ $message }}</div>
        </div>
        @enderror
      </div>

      <div class="mt-3 d-flex gap-2 justify-content-end">
        <a href="{{ route('orders.index') }}" class="btn btn-ghost-secondary" style="border-radius: 6px;">
          Batal
        </a>
        <button type="submit" class="btn btn-primary d-flex align-items-center gap-1" style="border-radius: 6px;">
          <i class="ti ti-check fs-2"></i> Buat Order & Simpan
        </button>
      </div>
    </div>
    
  </div>
</form>
@endsection

@push('scripts')
<script>
// Logic Javascript Utama Utuh Tanpa Merubah Fungsional Alur Data
const layananData = @json($layanan->keyBy('id'));
let rowIndex = 1;

const opsiWaktuKiloan = [
  '<option value="">-- Waktu --</option>',
  ...[...new Set(Object.values(layananData).filter(l => l.satuan === 'kg' && l.waktu_cuci).map(l => l.waktu_cuci))].map(w => `<option value="${w}">${w}</option>`)
].join('');

const opsiWaktuSatuan = [
  '<option value="">-- Waktu --</option>',
  ...[...new Set(Object.values(layananData).filter(l => l.satuan !== 'kg' && l.waktu_cuci).map(l => l.waktu_cuci))].map(w => `<option value="${w}">${w}</option>`)
].join('');

function formatRupiah(n) {
  return 'Rp ' + new Intl.NumberFormat('id-ID').format(n);
}

function calcRow(row) {
  const sel = row.querySelector('.layanan-select');
  const opt = sel.options[sel.selectedIndex];
  const harga = parseFloat(opt?.dataset?.harga || 0);
  const jumlah = parseFloat(row.querySelector('.jumlah-input').value || 0);
  const satuan = opt?.dataset?.satuan || 'kg';
  const subtotal = harga * jumlah;

  row.querySelector('.harga-display').textContent = harga ? formatRupiah(harga) : '-';
  row.querySelector('.subtotal-display').textContent = subtotal ? formatRupiah(subtotal) : '-';
  row.querySelector('.satuan-label').textContent = satuan;
  calcTotal();
}

function calcTotal() {
  let total = 0;
  document.querySelectorAll('.item-row').forEach(row => {
    const sel = row.querySelector('.layanan-select');
    const opt = sel.options[sel.selectedIndex];
    const harga = parseFloat(opt?.dataset?.harga || 0);
    const jumlah = parseFloat(row.querySelector('.jumlah-input').value || 0);
    total += harga * jumlah;
  });
  document.getElementById('grandTotal').textContent = formatRupiah(total);
}

function updateLayananOptions(row, fromJenis = false) {
  const jenis = row.querySelector('.jenis-select').value;
  const layananSel = row.querySelector('.layanan-select');
  const waktuSel = row.querySelector('.waktu-select');
  
  if (!jenis) {
    layananSel.disabled = true;
    waktuSel.disabled = true;
    waktuSel.innerHTML = '<option value="">-- Waktu --</option>';
    layananSel.value = "";
    Array.from(layananSel.options).forEach(opt => {
      if(opt.value !== "") opt.style.display = 'none';
    });
    calcRow(row);
    return;
  }
  
  waktuSel.disabled = false;
  layananSel.disabled = false;
  
  if (fromJenis) {
    if (jenis === 'kiloan') {
      waktuSel.innerHTML = opsiWaktuKiloan;
    } else {
      waktuSel.innerHTML = opsiWaktuSatuan;
    }
  }
  
  const waktu = waktuSel.value;
  
  // Filter layanan options
  let firstValidOption = "";
  Array.from(layananSel.options).forEach(opt => {
    if(opt.value === "") return;
    const matchJenis = opt.dataset.jenis === jenis;
    const matchWaktu = waktu ? opt.dataset.waktu === waktu : true;
    
    if(matchJenis && matchWaktu) {
      opt.style.display = '';
      if(!firstValidOption) firstValidOption = opt.value;
    } else {
      opt.style.display = 'none';
    }
  });
  
  // Reset selected layanan if it doesn't match the new filters
  const currentOpt = layananSel.options[layananSel.selectedIndex];
  if(currentOpt && currentOpt.style.display === 'none') {
    layananSel.value = "";
  }
  calcRow(row);
}

function bindRow(row) {
  row.querySelector('.jenis-select').addEventListener('change', () => updateLayananOptions(row, true));
  row.querySelector('.waktu-select').addEventListener('change', () => updateLayananOptions(row, false));
  row.querySelector('.layanan-select').addEventListener('change', () => calcRow(row));
  row.querySelector('.jumlah-input').addEventListener('input', () => calcRow(row));
  row.querySelector('.remove-row').addEventListener('click', () => {
    row.remove();
    updateIndexes();
    calcTotal();
  });
}

function updateIndexes() {
  document.querySelectorAll('.item-row').forEach((row, i) => {
    row.querySelector('.waktu-select').name = `items[${i}][waktu_cuci]`;
    row.querySelector('.layanan-select').name = `items[${i}][layanan_id]`;
    row.querySelector('.jumlah-input').name = `items[${i}][jumlah]`;
    const btn = row.querySelector('.remove-row');
    btn.disabled = document.querySelectorAll('.item-row').length === 1;
  });
}

// Inisialisasi awal pada baris pertama bawaan
document.querySelectorAll('.item-row').forEach(row => {
  bindRow(row);
  updateLayananOptions(row, true);
});

document.getElementById('addItem').addEventListener('click', () => {
  const tbody = document.getElementById('itemRows');
  const tmpl = tbody.querySelector('.item-row').cloneNode(true);
  
  // Bersihkan data duplikasi pada baris baru hasil kloningan
  tmpl.querySelector('.jenis-select').selectedIndex = 0;
  tmpl.querySelector('.waktu-select').innerHTML = '<option value="">-- Waktu --</option>';
  tmpl.querySelector('.waktu-select').disabled = true;
  tmpl.querySelector('.layanan-select').selectedIndex = 0;
  tmpl.querySelector('.layanan-select').disabled = true;
  tmpl.querySelector('.jumlah-input').value = 1;
  tmpl.querySelector('.harga-display').textContent = '-';
  tmpl.querySelector('.subtotal-display').textContent = '-';
  tmpl.querySelector('.satuan-label').textContent = 'kg';
  tmpl.querySelector('.remove-row').disabled = false;
  
  tbody.appendChild(tmpl);
  bindRow(tmpl);
  updateIndexes();
});
</script>
@endpush