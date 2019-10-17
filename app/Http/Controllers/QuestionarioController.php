<?php

namespace App\Http\Controllers;

use App\Model\Questionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionarioController extends Controller
{
    public function __construct(Questionario $questionario)
    {
        $this->questionario = $questionario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionarios = Questionario::all();
        return view('questionario.index')->with(['questionarios' => $questionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
            Questionario::create($request->all());
            return redirect()->route('questionario.index');
        }catch(\Exception $e){
            return redirect()->route('questionario.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questionario = Questionario::find($id);
        return view("questionario.show")->with(['questionario' => $questionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questionario = Questionario::find($id);
        return view('questionario.edit')->with(['questionario' => $questionario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $questionario = Questionario::find($id);
        $questionario->update($request->all());
        Session::flash('mensagem', 'Produto alterado com sucesso.');
        return view('questionario.show')->with(['questionario' => $questionario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questionario = Questionario::find($id);
        $questionario->delete();
        return redirect()->route('questionario.index');
    }
}
