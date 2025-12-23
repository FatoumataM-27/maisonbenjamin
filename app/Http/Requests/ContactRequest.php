<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Déterminer si l'utilisateur est autorisé à faire cette requête.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'required|string|max:100|regex:/^[a-zA-ZÀ-ÿ\s\-\']+$/',
            'prenom' => 'nullable|string|max:100|regex:/^[a-zA-ZÀ-ÿ\s\-\']+$/',
            'email' => 'required|email:rfc,dns|max:255',
            'telephone' => 'nullable|string|max:20|regex:/^[0-9\s\-\+\(\)\.]+$/',
            'sujet' => 'required|string|max:200',
            'message' => 'required|string|min:10|max:2000',
            'g-recaptcha-response' => 'nullable|string',
        ];
    }

    /**
     * Obtenir les messages d'erreur personnalisés pour les erreurs de validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.regex' => 'Le nom ne peut contenir que des lettres, espaces, tirets et apostrophes.',
            'nom.max' => 'Le nom ne peut pas dépasser 100 caractères.',
            'prenom.regex' => 'Le prénom ne peut contenir que des lettres, espaces, tirets et apostrophes.',
            'prenom.max' => 'Le prénom ne peut pas dépasser 100 caractères.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'email.max' => 'L\'adresse email ne peut pas dépasser 255 caractères.',
            'telephone.regex' => 'Le numéro de téléphone n\'est pas valide.',
            'telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 20 caractères.',
            'sujet.required' => 'Le sujet est obligatoire.',
            'sujet.max' => 'Le sujet ne peut pas dépasser 200 caractères.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
        ];
    }

    /**
     * Obtenir les attributs personnalisés pour les erreurs de validation.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nom' => 'nom',
            'prenom' => 'prénom',
            'email' => 'adresse email',
            'telephone' => 'numéro de téléphone',
            'sujet' => 'sujet',
            'message' => 'message',
        ];
    }

    /**
     * Préparer les données pour la validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'nom' => trim($this->nom),
            'prenom' => trim($this->prenom),
            'email' => strtolower(trim($this->email)),
            'telephone' => trim($this->telephone),
            'sujet' => trim($this->sujet),
            'message' => trim($this->message),
        ]);
    }
}
