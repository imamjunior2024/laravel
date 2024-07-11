<x-layout>
    <div class="card mt-5">
        <h2 class="card-header">Add pembobotan</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('pembobotans.index') }}"><i
                        class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('pembobotans.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputKosan" class="form-label"><strong>Kosan:</strong></label>

                    <select name="id_kosan">
                        @foreach($kosans as $kosan)
                        <option value="{{$kosan->id}}">{{$kosan->nama}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="inputKriteria" class="form-label"><strong>Kriteria:</strong></label>

                    <select name="id_kriteria">
                        @foreach($kriterias as $kriteria)
                        <option value="{{$kriteria->id}}">{{$kriteria->nama_kriteria}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="inputKriteria" class="form-label"><strong>Nilai:</strong></label>
                    <input type="text" name="nilai" class="form-control" id="inputKriteria">
                </div>

                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
</x-layout>