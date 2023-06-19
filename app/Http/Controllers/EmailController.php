<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Mudanza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function enviarCorreo(Request $id)
    {
        $mudanza = Mudanza::findOrFail($id->input('id_m'));
        $usuario = User::findOrFail($id->input('id_u'));

        $correoFactura = new Email('GRACIAS POR CONFIAR EN NOSOTROS', $mudanza);
        Mail::to($usuario->email)->send($correoFactura);

        return "Correo electrónico enviado con éxito " . $mudanza . " s" . $usuario;
    }
}
