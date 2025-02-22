<?php

namespace Tests\Utils\Validators;

use Nuwave\Lighthouse\Validation\Validator;

class RulesWithParametersValidator extends Validator
{
    public function rules(): array
    {
        return [
            'foo.*.bar' => [
                'array',
                'size:2',
            ],
        ];
    }
}
