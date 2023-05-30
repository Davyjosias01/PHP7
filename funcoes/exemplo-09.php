<?php 

	//funções recursivas

$hierarquia = array(
	array (
		'nome_cargo' => 'CEO',
		'subordinados' => array (
			//Inicio: Diretor comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//Inicio: gerente de vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Termino: gerente de vendas
				)
			),
			//Termino: Diretor comercial
			//Inicio: Diretor financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array (
					//Inicio: gerente de contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar', 
						'subordinados' => array (
							//Inicio supervisor de pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Termino supervisor de pagamentos
						)
					),
					//Termino: gerente de contas a pagar
					//Inicio: gerente de compras
					array (
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//Inicio: supervisor de suprimentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos',
								'subordinados' => array(
									//Inicio:  funcionário
									array(
										'nome_cargo' => 'Funcionário'
									)
									//Termino: funcionário
								)
							)
							//Termino: supervisor de suprimentos
						)
					)
					//Inicio: gerente de compras
				)
			)
			//Termino: Diretor comercial
		) 
	)
);


function exibe($cargos) {
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo ['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo ['subordinados']) >0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";
	}
	$html .= '</ul>';
	return $html;
}
echo exibe($hierarquia);

?>