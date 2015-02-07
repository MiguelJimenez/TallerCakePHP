<?php 
class StudentsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index()
	{
		$params = array('order' => 'name desc');
		$this->set('estudiantes', $this->Student->find('all', $params));
	}
	public function add()
	{
		if($this->request->is('post')):
		{
			// AQUI INSERTA!!!
			// $sql = INSERT INTO students....
			if($this->Student->save($this->request->data))
			{
				$this->Session->setFlash('Estudiante guardado');
				$this->redirect(array('action'=>'index'));
			}	
			// endif;
		}
		endif;
	}

	public function edit($id = null)
	{
		$this->Student->id = $id;
		if($this->request->is('get'))
		{
			$this->request->data = $this->Student->read();
		}
		else // Petición no get
		{
			if($this->Student->save($this->request->data))
			{
				$this->Session->setFlash('Estudiante '.$this->request->data['Student']['name'].' editado');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('No se pudo guardar');
			}
		}
	}

	public function delete($id)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException();
		}
		else
		{
			if($this->Student->delete($id))
			{
				$this->Session->setFlash('Estudiante eliminado');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

}

?>