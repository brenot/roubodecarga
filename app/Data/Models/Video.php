<?php

namespace App\Data\Models;

class Video
{
    protected static $videos = [

        [
            'title' => 'Campanha Contra Roubo de Cargas - Eduardo Rebuzzi - presidente Fetranscarga',
            'speaker' => 'Eduardo Rebuzzi - presidente Fetranscarga',
            'code' => '9Ycod41PEDw',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Riley Rodrigues - Firjan',
            'speaker' => 'Riley Rodrigues - Firjan',
            'code' => 'NDWGGdczAjg',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Cleber Isaisas Machado - Correios',
            'speaker' => 'Cleber Isaisas Machado - Correios',
            'code' => '-bLGJkqi2Q0',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Marcelo Prudente - delegado Polícia Federal',
            'speaker' => 'Marcelo Prudente - delegado Polícia Federal',
            'code' => '4z6-rKh9CqQ',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Zeca Borges - Disque Denúncia',
            'speaker' => 'Zeca Borges - Disque Denúncia',
            'code' => 'RYb0JBWkpsk',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Antônio Lopes Caetano - diretor Fecomércio',
            'speaker' => 'Antônio Lopes Caetano - diretor Fecomércio',
            'code' => 'HuHh4GRuVaE',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Paulo Castro - agência Staff',
            'speaker' => 'Paulo Castro - agência Staff',
            'code' => 'l-k9vrFwHhA',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputada Martha Rocha',
            'speaker' => 'Deputada Martha Rocha',
            'code' => 'T-hBdzJlqcc',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Bruno Dauaire',
            'speaker' => 'Deputado Bruno Dauaire',
            'code' => '5Z1TJteIG4E',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Milton Rangel',
            'speaker' => 'Deputado Milton Rangel',
            'code' => '3crNIdcha80',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Zaqueu Teixeira',
            'speaker' => 'Deputado Zaqueu Teixeira',
            'code' => 'zk7M3aCjOVc',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Rafael Picciani',
            'speaker' => 'Deputado Rafael Picciani',
            'code' => '1fP2Csq81Hg',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Flavio Bolsonaro',
            'speaker' => 'Deputado Flavio Bolsonaro',
            'code' => 'Y6ptvrULetM',
            'provider' => 'youtube',
        ],


        [
            'title' => 'Campanha Contra Roubo de Cargas - deputado Carlos Osorio',
            'speaker' => 'Deputado Carlos Osorio',
            'code' => '2QiNof8aMWw',
            'provider' => 'youtube',
        ],


        [
            'title' => 'Campanha Contra Roubo de Cargas - Marinilza Bruno de Carvalho - diretora de Inovação UERJ',
            'speaker' => 'Marinilza Bruno de Carvalho',
            'code' => 'iiljr4EAOm0',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Aldo Gonçalves - presidente Sindilojas e CDL Rio',
            'speaker' => 'Aldo Gonçalves',
            'code' => 'qCTk6tksb-E',
            'provider' => 'youtube',
        ],

        [
            'title' => 'Campanha Contra Roubo de Cargas - Arnaldo Santos Júnior - presidente Sescon',
            'speaker' => 'Arnaldo Santos Júnior',
            'code' => 'Uz612wMD454',
            'provider' => 'youtube',
        ],

    ];

    public static function all()
    {
        return collect(static::$videos);
    }
}
