<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>Detail Jadwal</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card">
                <div class="card-header bg-gradient-primary">
                    <h5 class="text-white">Detail Jadwal</h5>
                </div>

                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <h5 class="mb-1">Peserta</h5>
                            <p class="text-dark">{{ $jadwal->peserta->nama }}</p>

                            <h5 class="mb-1">Instruktur</h5>
                            <p class="text-dark">{{ $jadwal->instruktur->nama }}</p>

                            <h5 class="mb-1">Tanggal</h5>
                            <p class="text-dark">{{ $jadwal->tanggal }}</p>

                            <h5 class="mb-1">Waktu</h5>
                            <p class="text-dark">{{ $jadwal->waktu }}</p>

                            <h5 class="mb-1">Status</h5>
                            <span class="badge bg-primary">{{ ucfirst($jadwal->status) }}</span>
                        </div>
                    </div>

                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('jadwal.index') }}">
                        <button type="button" class="btn bg-gradient-primary">
                            Back
                        </button>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>

</body>
</html>
