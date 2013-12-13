<?php 
class student extends AppModel 
{

	public $validate = array(
			'username' => array(
					'alphaNumeric' => array(
							'rule'     => 'alphaNumeric',
							'required' => true,
							'message'  => 'Alphabets and numbers only'
					),
					'between' => array(
							'rule'    => array('between', 5, 15),
							'message' => 'Between 5 to 15 characters'
					)
			),
			'password' => array(
					'rule'    => array('minLength', '8'),
					'message' => 'Minimum 8 characters long'
			),
			'email' => 'email',
			'cources' => array(
					'rule'       => 'NotEmpty',
					'message'    => 'Enter a six values',
						
			)
	);
	
}
?>