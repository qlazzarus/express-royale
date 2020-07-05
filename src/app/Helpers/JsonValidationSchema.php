<?php

namespace App\Helpers;

use Illuminate\Support\Str;

trait JsonValidationSchema
{
    /**
     * @param string|null $file
     * @return array
     */
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
     * @param array $obj
     * @return array
     */
    protected function convertSchema(array $obj)
    {
        $result = [];

        foreach ($obj as $key => $rows) {
            $rules = [];
            foreach ($rows as $type => $param) {
                $rule = $this->convertRule($type, $param);
                if ($rule) $rules[] = $rule;
            }

            $result[Str::snake($key)] = $rules;
        }

        return $result;
    }

    /**
     * @param string $type
     * @param string $param
     * @return string|null
     */
    protected function convertRule($type, $param)
    {
        if (!$param) return null;

        if ('type' === $type && 'string' === $param) {
            return 'string';
        } elseif ('required' === $type) {
            return 'required';
        } elseif ('min' === $type) {
            return "min:{$param}";
        } elseif ('max' === $type) {
            return "max:{$param}";
        } elseif ('matches' === $type) {
            return "regex:/{$param}/";
        } elseif ('email' === $type) {
            return 'email';
        } elseif ('equal' === $type) {
            return "same:{$param}";
        }

        return null;
    }

    /**
     * @param string|null $file
     * @return array
     */
    public function schema($file = null)
    {
        $obj = $this->getJson($file);

        return $this->convertSchema($obj);
    }

    /**
     * @return array
     */
    public function rules()
    {
        return $this->schema();
    }
}
