<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//https://www.malasngoding.com/membuat-upload-file-laravel/
class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // nama file
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: ' . $file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

        // upload file
        $generateName = rand(0000, 9999) . time() . "." . $file->getClientOriginalExtension();
        // $file->move($tujuan_upload, $file->getClientOriginalName()); // for realname
        $file->move($tujuan_upload, $generateName);
    }
}
