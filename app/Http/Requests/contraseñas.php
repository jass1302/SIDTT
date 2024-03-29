{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nwpass' => 'required_with:c_nwpass|same:c_nwpass',
            'c_nwpass' => 'required',
        ];
    }
}
