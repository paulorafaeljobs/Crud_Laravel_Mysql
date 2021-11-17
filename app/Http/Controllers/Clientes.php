<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Chamado o Model Produto
use App\Models\cadastros;

class Clientes extends Controller
{
    // Pagina Home
    public function Clientes(){
        $db_cadastros = cadastros::all();
        //Envia todos os Itens para a View
        return view('home',['cadastros'=> $db_cadastros]);
    }

    // Deletar Cadastro
    public function delcliente($id){
        $db_cadastros = cadastros::find($id);
        $db_cadastros->delete();
        return redirect('/');
    }

    // Pagina de Visualização de Clientes 
    public function ReadClientes($id){
        $db_cadastros = cadastros::findOrFail($id);
        return view('cliente', ['id' => $id],['cliente'=>$db_cadastros]);
    }

    // Pagina de Edição de Clientes 
    public function ReadUpdateClientes($id){
        $db_cadastros = cadastros::findOrFail($id);
        return view('update', ['id' => $id],['cliente'=>$db_cadastros]);
    }    

    // Pagina Cadastrar Cliente
    public function create_client(){
        return view('create_cliente');
    }

    // Rota de Edição de Cadastro no Banco de Dados
    public function updatecliente(Request $request){
        $_cadastros = cadastros::find($request->id);
        $_cadastros->nome = $request->nome;
        $_cadastros->cpf = $request->cpf;
        $_cadastros->nascimento = $request->nascimento;
        $_cadastros->endereco = $request->endereco;
        $_cadastros->bairro = $request->bairro;
        $_cadastros->cep = $request->cep;
        $_cadastros->municipio = $request->municipio;
        $_cadastros->email = $request->email;
        $_cadastros->status = $request->status;
        $_cadastros->qt = 1;

        //Upload da Imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imagemName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/cliente'), $imagemName);
            $_cadastros->img = $imagemName;
        }    

        $_cadastros->save();
        return redirect('/');
    }

    // Rota de Cadastro de Cliente no Banco de Dados
    public function createcliente(Request $request){
        $_cadastros = new cadastros;
        $_cadastros->nome = $request->nome;
        $_cadastros->cpf = $request->cpf;
        $_cadastros->nascimento = $request->nascimento;
        $_cadastros->endereco = $request->endereco;
        $_cadastros->bairro = $request->bairro;
        $_cadastros->cep = $request->cep;
        $_cadastros->municipio = $request->municipio;
        $_cadastros->email = $request->email;
        $_cadastros->status = $request->status;
        $_cadastros->qt = 1;

        //Upload da Imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imagemName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/cliente'), $imagemName);
            $_cadastros->img = $imagemName;
        }

        // Faz o Insert Into no Banco de Dados
        $_cadastros->save();
        return redirect('/');
    }    


}
