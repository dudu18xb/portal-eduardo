<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Autores Controller
 *
 * @property \App\Model\Table\AutoresTable $Autores
 *
 * @method \App\Model\Entity\Autore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $autores = $this->paginate($this->Autores);

        $this->set(compact('autores'));
    }

    /**
     * View method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);

        $this->set('autore', $autore);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autore = $this->Autores->newEntity();
        if ($this->request->is('post')) {
            $autore = $this->Autores->patchEntity($autore, $this->request->data);
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Autore'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Autore'));
            }
        }
        $this->set(compact('autore'));
        $this->set('_serialize', ['autore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autore = $this->Autores->patchEntity($autore, $this->request->data);
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Autore'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Autore'));
            }
        }
        $this->set(compact('autore'));
        $this->set('_serialize', ['autore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autore = $this->Autores->get($id);
        if ($this->Autores->delete($autore)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Autore'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Autore'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
