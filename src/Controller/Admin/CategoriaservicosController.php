<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
/**
 * Categoriaservicos Controller
 *
 * @property \App\Model\Table\CategoriaservicosTable $Categoriaservicos
 *
 * @method \App\Model\Entity\Categoriaservico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriaservicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categoriaservicos = $this->paginate($this->Categoriaservicos);

        $this->set(compact('categoriaservicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categoriaservico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriaservico = $this->Categoriaservicos->get($id, [
            'contain' => []
        ]);

        $this->set('categoriaservico', $categoriaservico);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriaservico = $this->Categoriaservicos->newEntity();
        if ($this->request->is('post')) {
            $categoriaservico = $this->Categoriaservicos->patchEntity($categoriaservico, $this->request->data);
            if ($this->Categoriaservicos->save($categoriaservico)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Categoriaservico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Categoriaservico'));
            }
        }
        $this->set(compact('categoriaservico'));
        $this->set('_serialize', ['categoriaservico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoriaservico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriaservico = $this->Categoriaservicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaservico = $this->Categoriaservicos->patchEntity($categoriaservico, $this->request->data);
            if ($this->Categoriaservicos->save($categoriaservico)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Categoriaservico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Categoriaservico'));
            }
        }
        $this->set(compact('categoriaservico'));
        $this->set('_serialize', ['categoriaservico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoriaservico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaservico = $this->Categoriaservicos->get($id);
        if ($this->Categoriaservicos->delete($categoriaservico)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Categoriaservico'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Categoriaservico'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
