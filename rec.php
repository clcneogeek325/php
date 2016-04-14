<?php 

$arbol = 	[
    1 => [
        'nombre' => 'GE 1',

        'hijos' => [
            0 => '25',
            1 => '1',
	    2 => '26',

		'nombre' => 'GE 2',
        	'hijos' => [
            	0 => '25',
            	1 => '1',
            	2 => '26',
        	],
        ],
        'hijos' => [
            62 => [
                'nombre' => 'Cuentas',
                'hijos' => [
                    0 => '25',
                    1 => '26',
                    2 => '27',
                    3 => '28',
                    4 => '29',
                    5 => '30',
                    6 => '36',
                    7 => '31',
                    8 => '45',
		    'hijos' => [
			62 => [
							'nombre' => '2010',
							'hijos' => [
								0 => '25',
								1 => '26',
								2 => '27',
								3 => '28',
								4 => '29',
								5 => '30',
								6 => '36',
								7 => '31',
								8 => '45',
							],
						],
       				],
                ],
            ],
       ],
   ],
]; 

$arreglo_arbol = [];

function makeArbol(&$arreglo_arbol,$arbol)
{
	foreach ($arbol as &$nodo) {
		if (array_key_exists('nombre',$nodo)) {
			echo "existe nombre ".$nodo['nombre'];
			array_push($arreglo_arbol,["text"=>$nodo['nombre']]);
			if(array_key_exists('hijos',$nodo)){
				makeArbol($arreglo_arbol,$nodo['hijos']);
			}
		}else{
		var_dump($nodo);
		}
	}
}

makeArbol($arreglo_arbol,$arbol);
var_dump($arreglo_arbol);


		 ?>
