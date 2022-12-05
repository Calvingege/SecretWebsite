<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    // Bagian Create payment
    public function CreatePayment(){
        return view('CreatePayment');
    }

    // Bagian Store Adds
    public function StorePayment(Request $request) {
        $image= $request->file('BuktiPembayaran')->getClientOriginalExtension();
        $fileName = '_'.$request->BuktiPembayaran.'.'.$image;
        $request->file('BuktiPembayaran')->storeAs('public/image', $image);

    // Bagian Input Validasi
    $request->validate([
        'BuktiPembayaran' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
    ]);

    payment::create([
        'BuktiPembayaran' => $fileName
    ]);

        // Setelah pasang iklan dia ngereturn lagi ke create/adds
        return redirect('create/payment');
    }

    // Tunjukin bukti bayarnya
    // Khusus admin
    public function ShowPayment() {
        $payment = payment::all();
        return view('ShowPayment', compact('payment'));
    }
}
