<?php 
class studentsController extends AppController {
    
	public $helpers = array('Html', 'Form');
	
	public function index() {
		 
		$this->set('student', $this->student->find('all'));
		 
	}
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$post = $this->student->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('student', $post);
	}
	public function add() {
		if ($this->request->is('post')) {
			$this->student->create();
			if ($this->student->save($this->request->data)) {
				$this->Session->setFlash(__('Your record has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$post = $this->student->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		if ($this->request->is(array('student', 'put'))) {
			$this->student->id = $id;
			if ($this->student->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}
	
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->student->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}
   
}
?>