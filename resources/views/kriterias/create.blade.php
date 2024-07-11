<x-layout>
    <div class="card mt-5">
        <h2 class="card-header">Add kriteria</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('kriterias.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('kriterias.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputKode" class="form-label"><strong>Kode:</strong></label>
                    <input type="text" name="kode_kriteria" class="form-control" id="inputKode" placeholder="Kode">
                </div>

                <div class="mb-3">
                    <label for="inputNama" class="form-label"><strong>Nama:</strong></label>
                    <input type="text" name="nama_kriteria" class="form-control" id="inputNama" placeholder="Nama">
                </div>

                <div class="mb-3">
                    <label for="inputTipe" class="form-label"><strong>Tipe:</strong></label>
                    <select class="form-select" aria-label="Default select example" name="tipe_kriteria" id="inputTipe">
                        <option value="cost">Cost</option>
                        <option value="benefit">Benefit</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="inputBobot" class="form-label"><strong>Bobot:</strong></label>
                    <input type="text" name="bobot" class="form-control" id="inputBobot" placeholder="Bobot">
                </div>

                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
</x-layout>