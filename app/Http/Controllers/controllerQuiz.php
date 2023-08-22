<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct(){
        $this->perguntas['pergunta1'] = 'C';
        $this->perguntas['pergunta2'] = 'A';
        $this->perguntas['pergunta3'] = 'B';
        $this->perguntas['pergunta4'] = 'D';
    }

    public function index(){
        session(['acertos'=> 0]);
        return view('pagina1');
    }

    public function dadosPagina1(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta1 => $resposta']);

        if(strcmp($this->perguntas['pergunta1'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else 
            session(['resultado1' => 'Errou']);

        return view('pagina2');
    }

    public function dadosPagina2(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta2 => $resposta']);

        if(strcmp($this->perguntas['pergunta2'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado2' => 'Acertou']);
        }else 
            session(['resultado2' => 'Errou']);

        return view('pagina3');
    }

    public function dadosPagina3(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta3 => $resposta']);

        if(strcmp($this->perguntas['pergunta3'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado3' => 'Acertou']);
        }else 
            session(['resultado3' => 'Errou']);

        return view('pagina4');
    }

    public function dadosPagina4(Request $request){

        $resposta = $request->input('pergunta');

        session(['resposta4 => $resposta']);

        if(strcmp($this->perguntas['pergunta4'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado4' => 'Acertou']);
        }else 
            session(['resultado4' => 'Errou']);

        
        $dados = array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta1'];
        $dados[1]['resposta'] = session('resposta1');
        $dados[1]['resultado'] = session('resultado1');

        $dados[2]['gabarito'] = $this->perguntas['pergunta2'];
        $dados[2]['resposta'] = session('resposta2');
        $dados[2]['resultado'] = session('resultado2');

        $dados[3]['gabarito'] = $this->perguntas['pergunta3'];
        $dados[3]['resposta'] = session('resposta3');
        $dados[3]['resultado'] = session('resultado3');

        $dados[4]['gabarito'] = $this->perguntas['pergunta4'];
        $dados[4]['resposta'] = session('resposta4');
        $dados[4]['resultado'] = session('resultado4');

        $acertos = session('acertos');

        if($acertos == 4)
            $dados['mensagem'] = "Excelente!! Parabéns voce acertou todas";
        else if($acertos == 3)
            $dados['mensagem'] = "Muito bom, voce acertou ". $acertos . " de 4 !! Parabéns !!";
        else if($acertos == 2)
            $dados['mensagem'] = "Otimo! Voce foi muito bem, acertou 50% do quiz";
        else if($acertos == 1)
            $dados['mensagem'] = "Precisa se inteira mais sobre a competição! Voce acertou ". $acertos . " de 4 !! Parabéns !!";
        else
            $dados['mensagem'] = "Pesquise mais sobre o tema e tente novamente, pois infelizmente voce não acertou nenhuma :( ";

        return view('resultado', compact('dados'));

    }

}

