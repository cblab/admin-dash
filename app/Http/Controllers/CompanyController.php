<?php
namespace App\Http\Controllers;
use App\Model\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.create');
    }

    /**
     * Create a new company and persist data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|alpha_num|max:128',
                'symbol' => 'required|alpha_num|max:6',
            ]
        );

        $company_name = $request->get('name');
        $symbol = $request->get('symbol');

        $company = new Company([
            'name' => $company_name,
            'symbol' => $symbol,
        ]);

        $company->save();

        return view('company.created')
            ->with('company_name', $company_name);
    }
}