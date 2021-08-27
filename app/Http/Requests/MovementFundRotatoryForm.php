<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovementFundRotatoryForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'loan_id'=>'integer|exists:loans,id|nullable',
            'fund_rotatory_id'=>'integer|exists:fund_rotatories,id|nullable',
            'movement_concept_id'=>'integer|exists:fund_rotatories,id',
            'role_id'=>'integer|exists:roles,id',
            'user_id'=>'integer|exists:users,id|nullable',
        ];
        switch ($this->method()) {
            case 'POST': {
                foreach (array_slice($rules, 0, 2) as $key => $rule) {
                    $rules[$key] = implode('|', ['required', $rule]);
                }
                return $rules;
            }
            //case 'GET':
            case 'PUT':
            case 'PATCH':{
                return $rules;
            }
        }
    
    }
}
