<?php 
class StudentsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index()
	{
		$this->set('estudiantes', $this->Student->find('all'));
	}
	public function add()
	{
		if($this->request->is('post')):
		{
			// AQUI INSERTA!!!
			if($this->Student->save($this->request->data))
			{
				$this->Session->setFlash('Estudiante guardado');
				$this->redirect(array('action'=>'index'));
			}	
			// endif;
		}
		endif;
	}

}

?>