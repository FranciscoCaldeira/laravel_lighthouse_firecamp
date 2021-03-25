<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

class CreateCarInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'color' => [     
                function ($attribute, $value, $fail) {
                    var_dump($value);
                    var_dump($this->arg('color_confirmation'));
                }
            ],
            'color_confirmation' => [
                'same:color',                
                function ($attribute, $value, $fail) {
                    var_dump($value);
                    var_dump($this->arg('color'));
                }
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'The chosen email is not available',
            'email.email' => 'The chosen email must be formatted as an email address',
            'email.filled' => 'The chosen email is empty',
            'email.regex' => 'The chosen email is invalid',
            // 'email.unique' => 'The chosen email has already been taken.',
        ];
    }
}
