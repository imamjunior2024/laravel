<x-layout>
    <div class="card mt-5">
        <h2 class="card-header">Show Kriteria</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('kosans.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong> <br />
                        {{ $kosan->nama }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Kode Alternatif:</strong> <br />
                        {{ $kosan->alamat }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>