<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $file = $request->request->get('urlFileBook');
        // $name = 'hello';

        // $filename = 'temp-image';
        // $tempImage = tempnam(sys_get_temp_dir(), $filename);
        // copy( $file, $tempImage);

        // return response()->download($tempImage, $filename);

        return Storage::download($file );
        // $main_url = $file;
        // $file = basename($main_url);
        // header("Content-disposition:attachment; filename=$file");
        // readfile($main_url);






        // dd($file);
        // DownloadController::file_force_download($file);
        // return response()->download($file, $name);
    }

   public function file_force_download($file) {
    // dd('$file');
        if (file_exists($file)) {
          // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
          // если этого не сделать файл будет читаться в память полностью!
          if (ob_get_level()) {
            ob_end_clean();
          }
          // заставляем браузер показать окно сохранения файла
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename=' . basename($file));
          header('Content-Transfer-Encoding: binary');
          header('Expires: 0');
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($file));
          // читаем файл и отправляем его пользователю
          readfile($file);
          exit;
        }
      }
}
