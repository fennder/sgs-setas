<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Vsmoraes\Pdf\Pdf;
use Gerenciador\User;
Use Session;
use Auth;
use DB;

class InscricaoController extends Controller
{
    private $inscricao;
    private $curso;
    private $user;
    private $pdf;

    public function __construct(Cidade $cidade, Inscricao $inscricao, Curso $curso, User $user, Pdf $pdf)
    {
        $this->inscricao = $inscricao;
        $this->cidade = $cidade;
        $this->curso = $curso;
        $this->user = $user;
        $this->pdf = $pdf;
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $page_title = "Lista de Inscrições";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        $nav = "Inscrição";

        $inscricoes = $this->inscricao->paginate(5000);

        $usuarios = Auth::user();
        $cidades = $this->cidade->all();
        $cursos = $this->curso->all();
        $users = $this->user->orderBy('name', 'asc')->paginate(5000);
        $i = 0;

        if ($request->isMethod('post')){

            $inscricoes = $this->inscricao->where('curso_id','=',$request->id_curso)->paginate(5000);

        }

        return view('inscricao.index',
        [
            
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
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
        $page_title = "Fazer Inscrição";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        $nav = "Inscrição";

        $cursos = $this->curso->all();
        $usuarios = Auth::user();
        $cadastrados = $this->user->all();


        return view('inscricao.create',
        [
            'nav' => $nav,
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'cursos' => $cursos,
            'usuarios' => $usuarios,
            'cadastrados' => $cadastrados
            
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
        $page_title = "Minhas Inscrições";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        
        $nav = "Meus Cursos";

        $usuarios = Auth::user();
        $cursos = $usuarios->cursos->all();
        $inscricoes = $this->inscricao->where('user_id', $usuarios->id)->paginate(10000);
            
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
        $page_title = "Editar Inscrição";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        $nav = "Editar";
        
        $inscricoes = $this->inscricao->findOrFail($id);
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
        $inscricoes = $this->inscricao->findOrFail($id);
        $inscricoes->update($request->all());
        
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

        /*return redirect()->back();*/
        return redirect()->route('ins.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function certificado(Request $request)
    {
        if(Auth::check()){
            $page_title = "Certificado";
            $page_description = "Sistema de Gerenciamento de Inscrições";
            $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
            $nav = "Certificado";

            $usuarios = Auth::user();

            $inscricao = $this->inscricao->with('curso.modulo')->findOrFail($request->id);

            return view('pdf.certificado',
            [
                'page_description' => $page_description,
                'page_title'  => $page_title,
                'usuarios' => $usuarios,
                'inscricao' => $inscricao,
                'lotacao' => $lotacao,
                'nav' => $nav


            ]);
        }else{
            return redirect()->back();
        }
        /*$html = view('pdf.certificado')->render();

        return $this->pdf->load($html)->show(); */
    }
}