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
            <h1 class="text-center">PC Detail - {{ $list->pc_no_baru }} </h1>
            <div class="row mb-2 pt-5 px-4">
                <div class="col">
                    <label for="pc_no_baru" class="form-label">No PC</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_no_baru }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_user" class="form-label">User</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_user }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_harga" class="form-label">Harga</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_harga }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_tanggal" class="form-label">Tanggal Beli</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_tanggal }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_lokasi" class="form-label">Lokasi</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_lokasi }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_mainboard" class="form-label">Mainboard</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_mainboard }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_processor" class="form-label">Processor</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_processor }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_vga" class="form-label">VGA</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_vga }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_ram" class="form-label">RAM</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_ram }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_hdd" class="form-label">HDD</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_hdd }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_ssd" class="form-label">SSD</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_ssd }}">
                </div>
            </div>
            <div class="row mb-2 px-4">
                <div class="col">
                    <label for="pc_os" class="form-label">OS</label>
                </div>
                <div class="col">
                    <input readonly class="form-control" type="text" value="{{ $list->pc_os }}">
                </div>
            </div>

        </div>
    </section>
    <footer>

    </footer>
</body>

</html>
