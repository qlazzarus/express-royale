<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use stdClass;

trait JsonValidationSchema
{
    private ?stdClass $schema = null;

    /**
     * @param string|null $file
     * @return stdClass
     */
    protected function getJson($file = null): stdClass
    {
        if (null === $file) {
            $className = explode("\\", get_called_class());
            $className = $className[count($className) - 1];

            $file = Str::snake($className);

            $pos = strpos($file, '_request');
            if (false !== $pos) {
                $file = substr($file, 0, $pos);
                $file = "/ts/validations/{$file}.json";
            }
        }

        $obj = file_get_contents(resource_path($file));

        return json_decode($obj);
    }

    /**
     * @param string $type
     * @param string|stdClass $param
     * @return string|null
     */
    protected function convertRule(string $type, string|stdClass $param): ?string
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
     * @return array
     */
    protected function convertRules(): array
    {
        $obj = $this->schema;
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
     * @return array
     */
    protected function convertMessages(): array
    {
        $obj = $this->schema;
        $result = [];
        $allows = [
            'string',
            'required',
            'min',
            'max',
            'regex',
            'email',
            'same'
        ];

        foreach ($obj as $key => $rows) {
            $key = Str::snake($key);
            $errorTexts = $rows?->meta?->errorTexts;

            foreach ($errorTexts as $type => $value) {
                if ($type === 'matches') {
                    $type = 'regex';
                } elseif ($type === 'equal') {
                    $type = 'same';
                }

                if (in_array($type, $allows)) {
                    $result["{$key}.{$type}"] = $value;
                }
            }
        }

        return $result;
    }

    /**
     * @param string|null $file
     * @return array
     */
    public function getRules($file = null): array
    {
        if (!$this->schema) {
            $this->schema = $this->getJson($file);
        }

        return $this->convertRules();
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return $this->getRules();
    }

    /**
     * @param string|null $file
     * @return array
     */
    public function getMessages($file = null): array
    {
        if (!$this->schema) {
            $this->schema = $this->getJson($file);
        }

        return $this->convertMessages();
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return $this->getMessages();
    }
}
