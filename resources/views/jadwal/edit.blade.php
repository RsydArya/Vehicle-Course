<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>DriveUp</title>

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
                    <h5 class="text-white">Edit Jadwal</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- PESERTA -->
                        <div class="mb-3">
                            <label class="form-label">Peserta</label>
                            <select name="peserta_id" class="form-control">
                                @foreach($peserta as $ps)
                                    <option value="{{ $ps->id }}"
                                        {{ $jadwal->peserta_id == $ps->id ? 'selected' : '' }}>
                                        {{ $ps->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- INSTRUKTUR -->
                        <div class="mb-3">
                            <label class="form-label">Instruktur</label>
                            <select name="instruktur_id" class="form-control">
                                @foreach($instruktur as $ins)
                                    <option value="{{ $ins->id }}"
                                        {{ $jadwal->instruktur_id == $ins->id ? 'selected' : '' }}>
                                        {{ $ins->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- TANGGAL -->
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control"
                                   value="{{ $jadwal->tanggal }}">
                        </div>

                        <!-- WAKTU -->
                        <div class="mb-3">
                            <label class="form-label">Waktu</label>
                            <input type="time" name="waktu" class="form-control"
                                   value="{{ $jadwal->waktu }}">
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="terjadwal" {{ $jadwal->status == 'terjadwal' ? 'selected' : '' }}>Terjadwal</option>
                                <option value="selesai" {{ $jadwal->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="batal" {{ $jadwal->status == 'batal' ? 'selected' : '' }}>Batal</option>
                            </select>
                        </div>

                        <!-- BUTTON -->
                        <div class="text-end">
                            <a href="{{ route('jadwal.index') }}" class="btn bg-gradient-secondary">
                                Back
                            </a>
                            <button type="submit" class="btn bg-gradient-primary">
                                Update
                            </button>
                        </div>

                    </form>
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
