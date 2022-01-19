<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>SeWiKa</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/filter">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <input type="text" name="search">
                            </div>
                            <div class="col-lg-4">
                                {{-- <input type="text" name="nama_wifi"> --}}
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary" type="submit">Filter Data</button>
                            </div>
                        </div>
                        </form>
                        <ul class="list-group">
                            @foreach ($data as $wifi)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <i class="fas fa-wifi"></i> {{ $wifi['nama_wifi'] }}
                                        <br>
                                        <p>{{ $wifi['lokasi'] }}</p>
                                    </div>
                                    <div class="col-lg-7">
                                       <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detail{{ $wifi['id'] }}">
                                           Detail
                                       </button>
                                    </div>
                                </div>
                            </li>

                            <div class="modal fade" id="detail{{ $wifi['id'] }}" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detail">Detail data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3 row">
                                                <label for="nama_wifi" class="col-sm-4 col-form-label">Nama Wifi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" disabled name="nama_wifi" class="form-control" id="nama_wifi" value="{{ $wifi['nama_wifi'] }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
                                                <div class="col-sm-7">
                                                    <input type="text" disabled name="lokasi" class="form-control" id="lokasi" value="{{ $wifi['lokasi'] }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                <div class="col-sm-7">
                                                    <input type="text" disabled name="status" class="form-control" id="status" value="{{ ($wifi['status']) ? "Aktif" : "Tidak Aktif" }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
