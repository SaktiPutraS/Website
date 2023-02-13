<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download($file)
    {
        $path = storage_path('app/public/files/' . $file);
        return response()->download($path);
    }
}
