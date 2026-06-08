<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo'                  => 'required|string|max:50',
            'artista'                 => 'required|string|max:50',
            'plataforma'              => 'nullable|integer',
            'produtora'               => 'required|integer',
            'genero'                  => 'nullable|integer',
            'data_lancamento'         => 'required|date',
            'distribuidora'           => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required'                   => 'O título é obrigatório.',
            'titulo.string'                     => 'O título deve ser um texto.',
            'titulo.max'                        => 'O título deve ter no máximo 50 caracteres.',
            'artista.required'                  => 'O artista é obrigatório.',
            'artista.string'                    => 'O artista deve ser um texto.',
            'artista.max'                       => 'O artista deve ter no máximo 50 caracteres.',
            'plataforma.integer'                => 'A plataforma deve ser um número inteiro.',
            'produtora.required'                => 'A produtora é obrigatória.',
            'produtora.integer'                 => 'A produtora deve ser um número inteiro.',
            'genero.integer'                    => 'O gênero deve ser um número inteiro.',
            'data_lancamento.required'          => 'A data de lançamento é obrigatória.',
            'data_lancamento.date'              => 'A data de lançamento deve ser uma data válida.',
            'distribuidora.required'            => 'A distribuidora é obrigatória.',
            'distribuidora.string'              => 'A distribuidora deve ser um texto.',
            'distribuidora.max'                 => 'A distribuidora deve ter no máximo 100 caracteres.',
        ];
    }
}
