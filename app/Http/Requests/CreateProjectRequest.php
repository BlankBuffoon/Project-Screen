<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      schema="CreateProjectRequest",
 *
 *      @OA\Property(property="name", type="string", example="Project Screen", description="Project Name"),
 *      @OA\Property(property="description", type="string", example="Project to display your projects on a big juicy screen :)", description="Project Description"),
 *      @OA\Property(property="status", type="integer", example="1", description="Project Status"),
 *      @OA\Property(property="expiration_date", type="date", example="2021-10-02", description="Project Expiration Date (on ymd format)"),
 * )
 */
class CreateProjectRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'description' => 'string',
            'status' => 'required|integer|numeric|min:0|max:4',
            'expiration_date' => 'date',
        ];
    }
}
