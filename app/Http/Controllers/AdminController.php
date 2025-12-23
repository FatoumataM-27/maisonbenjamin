<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Dispositif;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Tableau de bord administrateur
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $stats = [
            'messages_non_traites' => Contact::nonTraite()->count(),
            'messages_total' => Contact::count(),
            'dispositifs_actifs' => Dispositif::actif()->count(),
            'utilisateurs_total' => User::count(),
        ];

        $messages_recents = Contact::recent()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'messages_recents'));
    }

    /**
     * Liste des messages de contact
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function contacts(Request $request)
    {
        $query = Contact::recent();

        // Filtrer par statut
        if ($request->has('statut')) {
            if ($request->statut === 'traite') {
                $query->traite();
            } elseif ($request->statut === 'non_traite') {
                $query->nonTraite();
            }
        }

        // Recherche par nom ou email
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nom', 'like', "%{$search}%")
                  ->orWhere('prenom', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('sujet', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(20);

        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Marquer un message comme traité
     *
     * @param Contact $contact
     * @return \Illuminate\Http\RedirectResponse
     */
    public function marquerTraite(Contact $contact)
    {
        $contact->marquerTraite();
        
        return back()->with('success', 'Message marqué comme traité.');
    }

    /**
     * Afficher un message de contact
     *
     * @param Contact $contact
     * @return \Illuminate\View\View
     */
    public function voirContact(Contact $contact)
    {
        return view('admin.contact-detail', compact('contact'));
    }

    /**
     * Gestion des dispositifs
     *
     * @return \Illuminate\View\View
     */
    public function dispositifs()
    {
        $dispositifs = Dispositif::ordered()->get();
        
        return view('admin.dispositifs', compact('dispositifs'));
    }

    /**
     * Activer/Désactiver un dispositif
     *
     * @param Dispositif $dispositif
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleDispositif(Dispositif $dispositif)
    {
        $dispositif->update(['actif' => !$dispositif->actif]);
        
        $status = $dispositif->actif ? 'activé' : 'désactivé';
        return back()->with('success', "Dispositif {$status} avec succès.");
    }
}
