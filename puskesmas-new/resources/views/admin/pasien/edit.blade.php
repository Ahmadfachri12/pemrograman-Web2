<x-layout>
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/update', $pasien->id) }}" method="post">
          @csrf
          @method('put')
          <div class="form-group row">
              <label for="kode" class="col-sm-4 col-form-label">Kode Pasien</label>
              <div class="col-sm-8">
                  <input type="number" class="form-control" id="kode" name="kode"
                      placeholder="Masukkan kode pasien" value="{{ $pasien->kode }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama pasien" value="{{ $pasien->nama }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat lahir</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                      placeholder="Masukkan Tanggal lahir" value="{{ $pasien->tmp_lahir}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal lahir</label>
              <div class="col-sm-8">
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                      placeholder="Masukkan Tanggal lahir" value="{{ $pasien->tgl_lahir }}">
              </div>
          </div>
          <div class="form-group row">
          <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <select id="gender" name="gender">
                  <option value="L" id="L" name="L">L</option>
                  <option value="P" id="P" name="P">P</option>
                </select>
          </div>
          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email"
                      placeholder="Masukkan Email" value="{{ $pasien->email }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Tanggal lahir" value="{{ $pasien->alamat }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="kelurahan_nama" class="col-sm-4 col-form-label">nama kelurahan</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kelurahan_nama" name="kelurahan_nama"
                      placeholder="Masukkan kelurahan" value="{{ $pasien->kelurahan_nama }}">
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