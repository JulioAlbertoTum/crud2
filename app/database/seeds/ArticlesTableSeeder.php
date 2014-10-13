<?php

class ArticlesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('articles')->insert(array(
			'title' => 'formas euclideas',
			'category' => 'geometria',
			'link' => 'http://www.geo.com',
			'votes' => 23  
			));
		DB::table('articles')->insert(array(
			'title' => 'rutas optimas',
			'category' => 'teoriaGrafos',
			'link' => 'http//www.dos.com',
			'votes' => 12 
			));
		DB::table('articles')->insert(array(
			'title' => 'valores maximos',
			'category' => 'calculo',
			'link' => 'http://www.mat.es',
			'votes' => 4  
			));
		DB::table('articles')->insert(array(
			'title' => 'metodo newton-raphson',
			'category' => 'Analisis Numerico',
			'link' => 'http://www.geo2.com',
			'votes' => 23  
			));
		DB::table('articles')->insert(array(
			'title' => 'integrales triples',
			'category' => 'calculo',
			'link' => 'http//www.dos2.com',
			'votes' => 12 
			));
		DB::table('articles')->insert(array(
			'title' => 'eigenvalores',
			'category' => 'Algebra',
			'link' => 'http://www.mat.bo',
			'votes' => 4  
			));
		DB::table('articles')->insert(array(
			'title' => 'calculo del rotacional',
			'category' => 'Analisis Vectorial',
			'link' => 'http://www.geo24.com',
			'votes' => 23  
			));
		DB::table('articles')->insert(array(
			'title' => 'numeros primos',
			'category' => 'Aritmetica',
			'link' => 'http//www.dos22.com',
			'votes' => 12 
			));
		DB::table('articles')->insert(array(
			'title' => 'resolucion por series',
			'category' => 'Ec. Diferenciales',
			'link' => 'http://www.mat.la',
			'votes' => 4  
			));

	}
}