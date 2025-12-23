<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Traite la soumission du formulaire de contact
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function submit(ContactRequest $request)
    {
        // La validation est déjà gérée par ContactRequest

        // Sauvegarder le message en base de données
        $contact = Contact::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom ?? '',
            'email' => $request->email,
            'telephone' => $request->telephone ?? '',
            'sujet' => $request->sujet,
            'message' => $request->message,
            'traite' => false
        ]);

        // Envoi de l'email
        try {
            Mail::to(config('mail.contact.address', 'comm@maisonbenjamin.org'))
                ->send(new ContactFormMail($request->all()));

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.'
                ]);
            }

            return back()->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
        } catch (\Exception $e) {
            // Même si l'email échoue, le message est sauvegardé en base
            \Log::error('Erreur envoi email contact: ' . $e->getMessage());
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Votre message a été enregistré. Nous vous répondrons dans les plus brefs délais.'
                ]);
            }
            
            return back()->with('success', 'Votre message a été enregistré. Nous vous répondrons dans les plus brefs délais.');
        }
    }
}
