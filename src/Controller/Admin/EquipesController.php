<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
/**

/**
 * Equipes Controller
 *
 * @property \App\Model\Table\EquipesTable $Equipes
 *
 * @method \App\Model\Entity\Equipe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $equipes = $this->paginate($this->Equipes);

        $this->set(compact('equipes'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipe = $this->Equipes->get($id, [
            'contain' => []
        ]);

        $this->set('equipe', $equipe);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipe = $this->Equipes->newEntity();
        if ($this->request->is('post')) {
            $equipe = $this->Equipes->patchEntity($equipe, $this->request->data);
            if ($this->Equipes->save($equipe)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Equipe'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Equipe'));
            }
        }
        $this->set(compact('equipe'));
        $this->set('_serialize', ['equipe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipe = $this->Equipes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipe = $this->Equipes->patchEntity($equipe, $this->request->data);
            if ($this->Equipes->save($equipe)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Equipe'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Equipe'));
            }
        }
        $this->set(compact('equipe'));
        $this->set('_serialize', ['equipe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipe = $this->Equipes->get($id);
        if ($this->Equipes->delete($equipe)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Equipe'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Equipe'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
