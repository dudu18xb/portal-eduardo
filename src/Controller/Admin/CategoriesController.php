<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Seos']
        ];
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Seos', 'Articles']
        ]);

        $this->set('category', $category);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Category'));
            }
        }
        $seos = $this->Categories->Seos->find('list', ['limit' => 200]);
        $this->set(compact('category', 'seos'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Category'));
            }
        }
        $seos = $this->Categories->Seos->find('list', ['limit' => 200]);
        $this->set(compact('category', 'seos'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Category'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Category'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
