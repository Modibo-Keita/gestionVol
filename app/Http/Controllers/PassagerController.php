<?php

namespace App\Http\Controllers;

use App\Models\Passager;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
    //afficher la liste des passagers

    public function index(){
        $passagers = Passager::all();
        return view('passager.index', compact('passagers'));
    }

    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {

        return view('passager.create');

    }

    /**
     * Enregistre un nouveau passager dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'=>'required',
            'detail'=> 'required',
            'company' => 'required',
            'fortune' => 'required'
        ]);


        $passager = new Passager([
            'nom' => $request->get('nom'),
            'detail' => $request->get('detail'),
            'company' => $request->get('company'),
            'fortune' => $request->get('fortune')
        ]);


        $passager->save();
        return redirect('/')->with('success', 'passager Ajouté avec succès');

    }

    /**
     * Affiche les détails d'un passager spécifique
     */

    public function show($id)
    {

        $passager = Passager::findOrFail($id);
        return view('passager.show', compact('passager'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $passager = Passager::findOrFail($id);

        return view('passager.edit', compact('passager'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom'=>'required',
            'detail'=> 'required',
            'company' => 'required',
            'fortune' => 'required'

        ]);




        $passager = Passager::findOrFail($id);
        $passager->nom = $request->get('nom');
        $passager->detail = $request->get('detail');
        $passager->company = $request->get('company');
        $passager->fortune = $request->get('fortune');


        $passager->update();

        return redirect('/')->with('success', 'passager Modifié avec succès');

    }




    /**
     * Supprime le passager dans la base de données
     */
    public function destroy($id)
    {

        $passager = Passager::findOrFail($id);
        $passager->delete();

        return redirect('/')->with('success', 'passager Modifié avec succès');

    }

}
