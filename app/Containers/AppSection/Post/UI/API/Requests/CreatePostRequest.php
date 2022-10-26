<?php

namespace App\Containers\AppSection\Post\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreatePostRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'slug' => 'required|string|min:3|max:25|unique:posts,slug',
            'title' => 'required|string|min:3|max:150',
            'description' => 'required|string|min:3|max:2500',
            'date' => 'required|date',
            'category_id' => 'integer|exists:categories,id',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
