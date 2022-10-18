<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
class articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate=new Article();
        $cate->description='eficaz y muy bueno';
        $cate->name='articulo 1'; 
        $cate->status='1';

        $cate->save();

        $cate2=new Article();
        $cate2->description='eficiente';
        $cate2->status='1';
        $cate2->name='Jabon123'; 

        $cate2->save();

        $cate3=new Article();
        $cate3->description='descricpion horno';
        $cate3->status='1';
        $cate3->name='Horno microondas'; 

        $cate3->save();

        $cate4=new Article();
        $cate4->description='descricpion mesa';
        $cate4->status='1';
        $cate4->name='Mesa 123'; 

        $cate4->save();

        $cate5=new Article();
        $cate5->description='descripcion tele';
        $cate5->status='1';
        $cate5->name='televisor'; 

        $cate5->save();

        $cate6=new Article();
        $cate6->description='descripcion equipo';
        $cate6->status='1';
        $cate6->name='Equipo de sonido'; 

        $cate6->save();

        $cate7=new Article();
        $cate7->description='descripcion crema';
        $cate7->status='1';
        $cate7->name='Crema dental'; 
        $cate7->save();

        $cate8=new Article();
        $cate8->description='descipcion silla';
        $cate8->status='1';
        $cate8->name='sillas'; 
        $cate8->save();

        $cate9=new Article();
        $cate9->description='escitorio juvenil';
        $cate9->status='1';
        $cate9->name='escritorio'; 
        $cate9->save();

        $cate10=new Article();
        $cate10->description='muebles japoneses';
        $cate10->status='1';
        $cate10->name='muebles'; 

        $cate10->save();
    }
}
