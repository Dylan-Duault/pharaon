<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    private const VALID_PROGRAMS = [
        'Mysteries of the Pharaohs (7 days)',
        'Nile Cruise Adventure (10 days)',
        'Total Immersion (14 days)',
        'The Treasures of Alexandria (6 days)',
        'Oasis & Desert Expedition (8 days)',
    ];

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'string', 'min:2'],
            'lastname' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email'],
            'daterange' => ['required', 'array'],
            'daterange.0' => ['required', 'date'],
            'daterange.1' => ['required', 'date', 'after:daterange.0'],
            'program' => ['required', 'string', 'in:' . implode(',', self::VALID_PROGRAMS)],
            'moreInfo' => ['nullable', 'string'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'daterange.0.required' => 'The start date is required.',
            'daterange.1.required' => 'The end date is required.',
            'daterange.1.after' => 'The end date must be after the start date.',
        ];
    }
}
