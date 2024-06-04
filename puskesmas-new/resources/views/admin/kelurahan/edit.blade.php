<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Edit</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/kelurahan/update', $kelurahan->id) }}" method="post">
          @csrf
          @method('put')
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama Kelurahan</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Kelurahan" value="{{ $kelurahan->nama }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama_kelurahan" class="col-sm-4 col-form-label">Nama Kecamatan</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan"
                      placeholder="Masukkan Nama Kecamatan" value="{{ $kelurahan->nama_kelurahan}}">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
      </form>
</x-slot>
</x-layout>