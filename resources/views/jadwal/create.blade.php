<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DriveUp</title>
</head>
<body>

<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                
                <h3 class="text-center">Form Jadwal</h3>

                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf

                    <div class="card-body">

                        {{-- Peserta --}}
                        <div class="mb-4">
                            <label>Peserta</label>
                            <div class="input-group">
                                <select class="form-control" name="peserta_id" required>
                                    <option value="">-- Pilih Peserta --</option>
                                    @foreach ($peserta as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Instruktur --}}
                        <div class="mb-4">
                            <label>Instruktur</label>
                            <div class="input-group">
                                <select class="form-control" name="instruktur_id" required>
                                    <option value="">-- Pilih Instruktur --</option>
                                    @foreach ($instruktur as $i)
                                        <option value="{{ $i->id }}">{{ $i->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Tanggal --}}
                        <div class="mb-4">
                            <label>Tanggal</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>

                        {{-- Waktu --}}
                        <div class="mb-4">
                            <label>Waktu</label>
                            <div class="input-group">
                                <input type="time" class="form-control" name="waktu" required>
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="mb-4">
                            <label>Status</label>
                            <div class="input-group">
                                <select name="status" class="form-control" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="terjadwal">Terjadwal</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark w-100">Add</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

</body>
</html>
