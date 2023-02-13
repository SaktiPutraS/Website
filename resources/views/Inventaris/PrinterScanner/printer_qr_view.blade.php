<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR VIEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</head>

<body class="bg-light bg-gradient">
    <section class="container">
        <div class="shadow mt-5 p-3 mb-5 bg-body rounded">
            <h1 class="text-center">Printer and Scanner Detail - {{ $list->printer_no_baru }} </h1>
            <div class="row mb-2 pt-5 px-4">
                <div class="col">
                    <label for="printer_no_baru" class="form-label">No Printer/Scanner</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_no_baru }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_harga" class="form-label">Harga</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_harga }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_tanggal" class="form-label">Tanggal Beli</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_tanggal }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_lokasi" class="form-label">Lokasi</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_lokasi }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_tipe" class="form-label">Tipe</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_tipe }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_jenis" class="form-label">Jenis</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_jenis }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="printer_tinta" class="form-label">Tinta</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->printer_tinta }}">
                </div>
            </div>
            

        </div>
    </section>
    <footer>

    </footer>
</body>

</html>
