<x-layout>
    <div class="card mt-5">
        <h2 class="card-header">Add Kosan</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('kosans.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('kosans.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Nama:</strong></label>
                    <input type="text" name="nama" class="form-control" id="inputName" placeholder="Name">
                </div>

                <div class="mb-3">
                    <label for="inputAlamat" class="form-label"><strong>Kode Alternatif:</strong></label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat"
                        placeholder="Kode Alternatif">
                </div>

                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
</x-layout>