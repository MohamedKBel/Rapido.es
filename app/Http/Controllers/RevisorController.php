<?php

namespace App\Http\Controllers;
use App\Mail\BecomeRevisor;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
        {
            $ad = Ad::where('is_accepted',null)
                            ->orederBy('created_at','desc')
                            ->first();
            return view('revisor.home',compact('ad'));
        }
    public function acceptAd(Ad $ad) 
        {
            $ad->setAccepted(true);
            return redirect()->back()->withMessage(['type' => 'success','text'=>'Anuncio aceptado']);
        }
    public function rejectAd(Ad $ad)
        {
            $ad->setAccepted(false);
            return redirect()->back()->withMessage(['type' => 'danger','text'=>'Anuncio rechazado']);
        }
    public function becomeRevisor()
        {
            Mail::to('admin@rapido.es')->send(new BecomeRevisor(Auth::user()));
            return redirect()->route('home')->withMesssage(['type'=>'success','text'=>'Solicitud enviada con éxito, pronto sabrás algo, gracias!']);
        }
}
