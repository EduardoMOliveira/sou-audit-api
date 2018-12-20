<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditReportPersonalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['personal-data'] = array(
            'nome-civil' => 'Pedro Souza',
            'nome-social' => 'Não existe nome social',
            'nivel' => 'xxx',
            'ra' => 'xxx',
            'polo' => 'xxx',
            'ano_de_ingresso_semestre' => 'xxx',
            'ano_de_ingresso_mes' => 'xxx',
            'ano_de_conclusao_semestre' => 'xxx',
            'ano_de_conclusao_mes' => 'xxx',
            'documento_identidade' => 'xxx',
            'nacionalidade' => 'xxx',
            'naturalidade' => 'xxx',
            'status' => 'xxx'
        );

        $data['report'] = "
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        ";

        $data['document_pending'] = 'nome, ra, polo, pendências encontradas na auditoria emails e telefones para contato com o aluno.';

        $data['result'] = 'RETIDO';

        return response()->json($data);
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
