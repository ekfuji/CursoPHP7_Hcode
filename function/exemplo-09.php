<?php 
//funções recursivas

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				)	
			),
			//Término: Diretor Comercial
			////Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
				 //Início: Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Início: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de pagamentos'
							)
							//Término: Supervisor de pagamentos
						)
						
					),
					//Término: Gerente de Contas a Pagar
					//Início: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							//Início: supervisor de suprementos
							array(
								'nome_cargo'=>'Supervisor de suprementos',
								'subordinados'=> array(
									array(
										'nome_cargo'=>'Comprador'
									)
								)

							)
							//Término: supervisor de suprementos
						)
					)
					//Início: Gerente de compras
				)
			)
			//Término: Diretor Financeiro
		)
	)

);

function exibe($cargos)
{
	//<ul> lista não ordenada
	$html = '<ul>';
	foreach ($cargos as $cargo) {

		$html .= "<li>"; //<LI>Lista com círculo</LI>

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) 
		{
			$html .= exibe($cargo['subordinados']);
		}
		$html .= '</li>';
	}
	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);


?>