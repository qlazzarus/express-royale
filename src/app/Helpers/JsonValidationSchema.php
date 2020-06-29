<?php

namespace App\Helpers;

use Illuminate\Support\Str;

trait JsonValidationSchema {

    protected function getJson($file = null)
    {
        if (null === $file) {
            $className = explode("\\", get_called_class());
            $className = $className[count($className) - 1];

            $file = Str::snake($className);

            $pos = strpos($file, '_request');
            if (false !== $pos) {
                $file = substr($file, 0, $pos);
                $file = "/ts/schemas/{$file}.json";
            }
        }

        $obj = file_get_contents(resource_path($file));
        
        return json_decode($obj, true);
    }

    /**
     * @param string|null $schema
     * @return array
     */
    public function schema($file = null)
    {
        $obj = $this->getJson($file);

        return [
            'password' => 'required'
        ];
    }
}