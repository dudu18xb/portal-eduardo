<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
/**
 * Backgroundparalax Controller
 *
 * @property \App\Model\Table\BackgroundparalaxTable $Backgroundparalax
 *
 * @method \App\Model\Entity\Backgroundparalax[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BackgroundparalaxController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $backgroundparalax = $this->Backgroundparalax
            ->find('search', ['search' => $this->request->getQueryParams()]);
        $this->set('backgroundparalax', $this->paginate($backgroundparalax));
    }

    /**
     * View method
     *
     * @param string|null $id Backgroundparalax id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $backgroundparalax = $this->Backgroundparalax->get($id, [
            'contain' => []
        ]);

        $this->set('backgroundparalax', $backgroundparalax);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $backgroundparalax = $this->Backgroundparalax->newEntity();
        if ($this->request->is('post')) {
            $backgroundparalax = $this->Backgroundparalax->patchEntity($backgroundparalax, $this->request->data);
            if ($this->Backgroundparalax->save($backgroundparalax)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Backgroundparalax'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Backgroundparalax'));
            }
        }
        $this->set(compact('backgroundparalax'));
        $this->set('_serialize', ['backgroundparalax']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Backgroundparalax id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $backgroundparalax = $this->Backgroundparalax->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $backgroundparalax = $this->Backgroundparalax->patchEntity($backgroundparalax, $this->request->data);
            if ($this->Backgroundparalax->save($backgroundparalax)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Backgroundparalax'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Backgroundparalax'));
            }
        }
        $this->set(compact('backgroundparalax'));
        $this->set('_serialize', ['backgroundparalax']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Backgroundparalax id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $backgroundparalax = $this->Backgroundparalax->get($id);
        if ($this->Backgroundparalax->delete($backgroundparalax)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Backgroundparalax'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Backgroundparalax'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
