<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolio = Project::orderBy('created_at', 'DESC')->get();
        //$portfolio = Project::latest('updated_at')->get();
        //$projects = Project::latest()->paginate(2);

        //return view('portfolio', compact('projects'));


        return view('projects.index', [
            'projects' => Project::latest()->paginate()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CreateProjectRequest $request)

    {

        /*Validacion de campos por cajas de texto*/
        
        /*
        $fields = request()->validate([

             Los campos que se podran para validar antes de enviar a la bases de datos 
            'title'=>'required',
            'description'=>'required' 

        ]);
       

        -----Campos ya validados por la Variable ($fields)-----
        Project::create($fields);

         */
        //mostrar pra ue se envia por los formularios 
        //return $request->validated();

        Project::create($request->validated());

        /* Se retornan los campos ya validados */
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $project = Project::find($id);
        */
        

        return view('projects.show', [

            'project' => Project::findOrFail($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
