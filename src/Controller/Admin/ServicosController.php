<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Servicos Controller
 *
 * @property \App\Model\Table\ServicosTable $Servicos
 *
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categoriaservicos']
        ];
        $servicos = $this->paginate($this->Servicos);

        $this->set(compact('servicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => ['Categoriaservicos']
        ]);

        $this->set('servico', $servico);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servicos->newEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            if ($this->Servicos->save($servico)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Servico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Servico'));
            }
        }
        $categoriaservicos = $this->Servicos->Categoriaservicos->find('list', [
            'keyField' => 'id',
            'valueField' => 'titulo',
        ]);

        $this->set(compact('servico', 'categoriaservicos'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servicos->patchEntity($servico, $this->request->data);
            if ($this->Servicos->save($servico)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Servico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Servico'));
            }
        }
        $categoriaservicos = $this->Servicos->Categoriaservicos->find('list', [
            'keyField' => 'id',
            'valueField' => 'titulo',
        ]);
        $this->set(compact('servico', 'categoriaservicos'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servicos->get($id);
        if ($this->Servicos->delete($servico)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Servico'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Servico'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
