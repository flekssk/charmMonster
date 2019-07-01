<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileServiceController extends AdminController
{
    public function upload(Request $request)
    {
        $files    = collect();
        $comments = collect();

        /** @var UploadedFile $uploadedFile */
        foreach ($request->file('files') as $uploadedFile) {
            $filePath = 'images/'
                . md5(time() . $uploadedFile->getBasename())
                . $uploadedFile->getClientOriginalExtension();

            if (Storage::disk('public')->put($filePath, file_get_contents($uploadedFile->path()))) {
                $files->put('/public/uploads/' . $filePath, '/public/uploads/' . $filePath);
            }
        }

        return JsonResource::make(
            [
                'content' => view('admin.services.images.select', compact('files', 'comments'))->render(),
            ]
        );
    }

    public function destroy(Request $request)
    {
        return JsonResource::make(
            [
                'success' => Storage::disk('public')->delete(str_replace('/public/uploads/', '', $request->file)),
                'file'    => str_replace('/public/uploads/', '', $request->file),
            ]
        );
    }
}
