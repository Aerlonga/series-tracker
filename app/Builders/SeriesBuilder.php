<?php

namespace App\Builders;

class SeriesBuilder{

    public static function buildSeries ($dados,$idUsuario){
        $dataAtual = date('Y-m-d H:i:s');

        return [
            'nmSerie' => $dados ['nmSerie'],
            'tpSerie' => $dados ['tpSerie'],
            'epSerie' => $dados ['epSerie'],
            'sinpSerie' => $dados ['sinpSerie'],
            'platSerie' => $dados ['platSerie'],
            'catSerie' => $dados ['catSerie'],
        
        ];
    }


}