<?php

namespace App\Http\Controllers;

use App\Models\Mudanza;
use App\Models\Municipio;
use App\Models\PesoMudanza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MudanzaController extends Controller
{
    function getListbyUser()
    {
        $mudanzas = Mudanza::where('id_user', Auth::user()->id)->orderByDesc('id_mudanza')->get();
        return view('panel-user.panel-usuario', ['mudanzas' => $mudanzas]);
    }

    function getListbyUserNormal()
    {
        $users = User::where('id_rol', 1)->get();
        return view('panel-mudazas.panel-mudanzas', ['users' => $users]);
    }

    function getListbyUserId($id)
    {
        $mudanzas = Mudanza::where('id_user', $id)->orderByDesc('id_mudanza')->get();
        return view('panel-mudazas.panel-admin-listusuario', ['mudanzas' => $mudanzas]);
    }


    function getListbyId($id)
    {
        $mudanza = Mudanza::where('id_mudanza', $id)->first();
        return view('panel-user.descripcion-mudanza', ['mudanza' => $mudanza]);
    }

    function getListbyIdAdm($id)
    {
        $mudanza = Mudanza::where('id_mudanza', $id)->first();
        return view('panel-mudazas.descripcion-mudanza', ['mudanza' => $mudanza]);
    }

    function getSoliMz()
    {
        $municipios = Municipio::all();
        $tipos = PesoMudanza::all();
        return view('panel-user.add-mudanza', ['municipios' => $municipios, 'tipos' => $tipos]);
    }

    function getMessageCot(Request $request)
    {
        $origen = $request->input('id_municipio_o');
        $destino = $request->input('id_municipio_d');
        $tipopeso = $request->input('id_tipo_p');
        $presio = PesoMudanza::find($tipopeso);
        $morigen = Municipio::find($origen);
        $mdestino = Municipio::find($destino);
        return view('panel-user.procesar-mudanza', ['origen' => $morigen, 'destino' => $mdestino, 'tipo' => $presio]);
    }

    function saveMudanza($id_mun, $id_ori, $id_dest)
    {
        $presio = PesoMudanza::find($id_mun);
        $mudanza = new Mudanza();
        $mudanza->id_user = Auth::user()->id;
        $mudanza->id_origen = $id_ori;
        $mudanza->id_destino = $id_dest;
        $mudanza->id_peso_mudanza = $id_mun;
        $mudanza->presupuesto = $presio->presio;
        $mudanza->total = 0;
        $mudanza->status = '0';
        $mudanza->save();
        return view('panel-user.mudanza-exitosa');
    }

    public function handleForm(Request $request, $id)
    {
        $selectedValue = $request->input('progress');
        $selectedValue2 = $request->input('presior');

        $mudanza = Mudanza::find($id);

        // Mapeo del valor seleccionado al estado correspondiente
        $statusMap = [
            'inicio' => '0',
            'camino' => '1',
            'pago' => '2',
            'fin' => '3',
        ];
        $mudanza->status = $statusMap[$selectedValue];

        $mudanza->total = $selectedValue2;
        $mudanza->save();

        return view('panel-mudazas.udmudanza-exitosa');
    }

}
