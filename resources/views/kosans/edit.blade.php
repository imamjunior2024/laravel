<x-layout>

    <div class="card mt-5">
        <h2 class="card-header">Edit Kosan</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('kosans.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('kosans.update',$kosan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Nama:</strong></label>
                    <input type="text" name="nama" value="{{ $kosan->nama }}"
                        class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Nama">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputAlamat" class="form-label"><strong>Kode Alternatif:</strong></label>
                    <input type="text" name="alamat" value="{{ $kosan->alamat }}"
                        class="form-control @error('name') is-invalid @enderror" id="inputAlamat"
                        placeholder="Kode Alternatif">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>

        </div>
    </div>
</x-layout>