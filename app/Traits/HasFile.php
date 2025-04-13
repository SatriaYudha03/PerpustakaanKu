<?php
//memudahkan manajemen file pada model yang membutuhkan
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

trait HasFile
{
    //upload file request
    public function upload_file(Request $request, string $column, string $folder): ?string
    {
        return $request->hasFile($column) ? $request->file($column)->store($folder) : null;
    }

    //update file request
    public function update_file(Request $request, Model $model, string $column, string $folder): ?string
    {
        if ($request->hasFile($column)){
            if($model->$column){
                Storage::delete($model->$column);
            }
            
            $thumbnail = $request->file($column)->store($folder);

        } else {
            $thumbnail = $model->$column;
        }
        return $thumbnail;
    }

    //delete file request
    public function delete_file(Model $model, string $column): void 
    {
        if($model->column){
            Storage::delete($model->column);
        }
    }
}