<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Form</title>
</head>
<body>
    <section>
        <div class="container py-4">
          <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
              <h3 class="text-center">Form Instruktur</h3>
              <form action="{{route('instructur.update',$instructur->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                    <div class="col-md">
                      <label>Nama</label>
                      <div class="input-group mb-4">
                        <input class="form-control @error('nama') is-invalid @enderror" value="{{old('nama',$instruktur->nama)}}" placeholder=""  type="text" name="nama" >
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label>Pengalaman</label>
                    <div class="input-group">
                      <input type="text" class="form-control @error('pengalaman') is-invalid @enderror" value="{{old('pengalaman',$instruktur->pengalaman)}}" placeholder="" name="pengalaman">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label>No HP</label>
                    <div class="input-group">
                      <input type="text" class="form-control @error('no_hp') is-invalid @enderror" value="{{old('no_hp',$instruktur->no_hp)}}" placeholder="" name="no_hp">
                    </div>
                  </div>
                  <!-- <div class="mb-4">
                    <label>Contact</label>
                    <div class="input-group">
                      <input type="number" class="form-control @error('contact') is-invalid @enderror" value="{{old('contact',$instructur->contact)}}" placeholder="" name="contact">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label>Specialization</label>
                    <div class="input-group">
                      <input type="text" class="form-control @error('specialization') is-invalid @enderror" value="{{old('specialization',$instructur->specialization)}}" placeholder="" name="specialization">
                    </div>
                  </div> -->
                  
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-dark w-100">Update</button>
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
