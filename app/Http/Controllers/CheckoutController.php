<?php
namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create()
    {
        return view('checkout');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'locality' => 'required|email|max:255',
            'landmark' => 'required|string|max:20',
            'address' => 'required|string',
            'city'  => 'required|string',
            'zip' =>'required'
        ]);
        $input = $request->all();
        Checkout::create($input);

        return redirect()->route('checkout.placeOrder')->with('success', 'Your message has been sent successfully!');
        
    }
    
    public function show()
    {
        return view('checkout');
    }

    public function placeOrder(Request $request)
    {
        // Récupérer les détails de la commande depuis la requête
        $orderDetails = $request->all(); // Par exemple, vous pouvez récupérer tous les détails du formulaire
    
        // Sauvegarder les détails de la commande dans la base de données
        $order = Order::create($orderDetails); // Supposons que vous avez un modèle Order pour votre table de commandes
    
        // Rediriger vers la page de confirmation avec l'ID de la commande
        return redirect()->route('thankyou.show', ['order' => $order]);

    }

    

}
