<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Gerenciador\User;
Use Session;
use Auth;
use DB;


class InscricaoController extends Controller
{
    private $inscricao;
    private $curso;
    private $user;

    public function __construct(Cidade $cidade, Inscricao $inscricao, Curso $curso, User $user)
    {
        $this->inscricao = $inscricao;
        $this->curso = $curso;
        $this->user = $user;
        $this->cidade = $cidade;
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $page_title = "SGI";
        $page_description = "Lista de Inscrições";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Inscrição";

        $inscricoes = $this->inscricao->orderBy('user_id', 'asc')->paginate(1000);

        $usuarios = Auth::user();
        $cidades = $this->cidade->all();
        $cursos = $this->curso->all();
        $users = $this->user->all();
        $i = 0;

        if ($request->isMethod('post')){

            $inscricoes = $this->inscricao->where('curso_id','=',$request->id_curso)->paginate(1000);

        }

        return view('inscricao.index',
        [
            'nav' => $nav, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'lotacao'=>$lotacao,
            'inscricoes' => $inscricoes,
            'usuarios' => $usuarios,
            'cidades' => $cidades,
            'users' => $users,
            'i' => $i,
            'cursos' => $cursos
            
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "SGI";
        $page_description = "(Cadastro de Inscrições)";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Inscrição";

        $cursos = $this->curso->all();
        $usuarios = Auth::user();


        return view('inscricao.create',
        [
            'nav' => $nav,
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'cursos' => $cursos,
            'usuarios' => $usuarios
            
        ]);      

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->inscricao->create($request->all());

        return redirect()->route('ins.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page_title = "SGI";
        $page_description = "Meus Cursos";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $nav = "Meus Cursos";

        $usuarios = Auth::user();
        $cursos = $usuarios->cursos->all();
        $inscricoes = $this->inscricao->where('user_id', $usuarios->id)->paginate(1000);

        return view('inscricao.show',
        [
            'nav' => $nav,
            'page_title'=> $page_title,
            'page_description'=> $page_description,
            'lotacao'=> $lotacao,
            'usuarios'=> $usuarios,
            'inscricoes'=> $inscricoes,
            'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = "SGI";
        $page_description = "Editar Inscrição";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Editar";
        
        $inscricoes = $this->inscricao->find($id);
        $usuarios = Auth::user();
        $cursos = $this->curso->all();
        $users = $this->user->all();

        return view('inscricao.edit',
        [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'nav' => $nav,
            'inscricoes' => $inscricoes, 
            'usuarios' => $usuarios,
            'users' => $users,
            'cursos' => $cursos 
            
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
        $inscricoes = $this->inscricao->find($id);
        $inscricoes->update($request->all());
        //dd($request->all());
        return redirect()->route('ins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->inscricao->destroy($id);

        return redirect()->back();

    }

    public function certificado(Request $request)
    {

        $page_title = "SGI";
        $page_description = "Certificado";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $inscricoes = $this->inscricao->orderBy('user_id', 'asc')->paginate(1000);

        $usuarios = Auth::user();
        $cidades = $this->cidade->all();
        $cursos = $this->curso->all();
        $users = $this->user->all();
        $i = 0;

        if ($request->isMethod('post')){

            $inscricoes = $this->inscricao->where('curso_id','=',$request->id_curso)->paginate(1000);

        }

        return view('inscricao.certificado',
        [
            'nav' => $nav, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'lotacao'=>$lotacao,
            'inscricoes' => $inscricoes,
            'usuarios' => $usuarios,
            'cidades' => $cidades,
            'users' => $users,
            'i' => $i,
            'cursos' => $cursos
            
        ]); 
    }
}
