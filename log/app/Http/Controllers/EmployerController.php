<?php
namespace App\Http\Controllers;

use App\Models\Employer; // Import the Employer model
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all(); // Fetch all employers
        return view('index', compact('employers'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new employer
        Employer::create($request->all());

        // Redirect to the employers list with a success message
        return redirect('/employers')->with('success', 'Employer added successfully!');
    }
}
