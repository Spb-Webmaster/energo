<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

if (!function_exists('active_link')) {
    function active_link(string|array $names, string $class = 'active'): string|null
    {
        if (is_string($names)) {
            $names = [$names];
        }



        return Route::is($names) ? $class : null;
    }
}

if (!function_exists('write_a_file')) {

    function write_a_file(object $request, string $path, array $width,  string $input_name): string
    {
        $filename    = $request->file($input_name)->getClientOriginalName();
        //Сохраняем оригинальную картинку
        $request->file($input_name)->move(Storage::path($path) ,$filename);

        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path($path).$filename);

        foreach ($width as $value) {
            $new_path = $path . $value .'/';
            Storage::makeDirectory($new_path);

            $thumbnail->fit($value);
            $thumbnail->save(Storage::path($new_path).$filename);
        }

        return $filename; // для сохранения в БД
    }
}

if (!function_exists('system_message')) {

    function system_message(string $message, string $type = 'success') :void
    {
        session()->flash('flash.message', $message);
        session()->flash('flash.type', $type);
    }
}
if (!function_exists('money')) {

    function money(string $price =  null) :string|null
    {
        if($price) {

            return number_format($price, 0, ',', " ");

        }
        return  null;
    }
}
if (!function_exists('currency')) {

    function currency(string $currency = null) :string
    {
       return '₽';
    }
}


