<?php namespace Alfredoem\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use Alfredoem\Authentication\Authentication;

class AuthenticationController extends Controller
{
    public function getIndex()
    {
        $structure = Authentication::structure();
        return view('Authentication::structure', compact('structure'));
    }
}