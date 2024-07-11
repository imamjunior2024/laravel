<x-layout>
    <p>Hasil Perhitungan WP</p>

    <div class="card p-3">
        <div class="container-fluid ml-0" style="width:50%">
            <form action="{{ route('kosans.store') }}" method="POST">
                @csrf
            <p><strong>
                    Mencari Nilai S</strong>
            </p>
            <table class="table table-bordered table-striped mt-2">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tr>
                    <th>S1</th>
                    <th>0,376876889</th>
                </tr>
                <tr>
                    <th>S2</th>
                    <th>0,435954529</th>
                </tr>
                <tr>
                    <th>S3</th>
                    <th>0,379790083</th>
                </tr>
                <tr>
                    <th>S4</th>
                    <th>0,376347337</th>
                </tr>
                <tr>
                    <th>S5</th>
                    <th>0,445231648</th>
                </tr>
                <tr>
                    <th>S6</th>
                    <th>0,538021219</th>
                </tr>
                <tbody>

                </tbody>
            </table>


            <p><strong>
                Mencari Nilai V</strong>
        </p>
        <table class="table table-bordered table-striped mt-2">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>V</th>
                </tr>
            </thead>
            <tr>
                <th>V1</th>
                <th>0,147666203                </th>
            </tr>
            <tr>
                <th>V2</th>
                <th>0,170813738                </th>
            </tr>
            <tr>
                <th>V3</th>
                <th>0,148807638                </th>
            </tr>
            <tr>
                <th>V4</th>
                <th>0,147458716                </th>
            </tr>
            <tr>
                <th>V5</th>
                <th>0,174448657                </th>
            </tr>
            <tr>
                <th>V6</th>
                <th>0,210805048                </th>
            </tr>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>
</x-layout>
