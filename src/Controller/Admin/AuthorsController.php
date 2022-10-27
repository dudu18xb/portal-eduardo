<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
/**
 * Authors Controller
 *
 * @property \App\Model\Table\AuthorsTable $Authors
 *
 * @method \App\Model\Entity\Author[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorsController extends AppController
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
        $authors = $this->paginate($this->Authors);

        $this->set(compact('authors'));
    }

    /**
     * View method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $author = $this->Authors->get($id, [
            'contain' => ['Seos', 'Articles']
        ]);

        $this->set('author', $author);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $author = $this->Authors->newEntity();
        if ($this->request->is('post')) {
            $author = $this->Authors->patchEntity($author, $this->request->data);
            if ($this->Authors->save($author)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Author'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Author'));
            }
        }
        $seos = $this->Authors->Seos->find('list', ['limit' => 200]);
        $this->set(compact('author', 'seos'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Author id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $author = $this->Authors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $author = $this->Authors->patchEntity($author, $this->request->data);
            if ($this->Authors->save($author)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Author'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Author'));
            }
        }
        $seos = $this->Authors->Seos->find('list', ['limit' => 200]);
        $this->set(compact('author', 'seos'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Author id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $author = $this->Authors->get($id);
        if ($this->Authors->delete($author)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Author'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Author'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
