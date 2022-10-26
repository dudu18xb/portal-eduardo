<?php
namespace App\Controller\Admin;


/**
 * Contato Controller
 *
 * @property \App\Model\Table\ContatoTable $Contato
 *
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
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
        $contato = $this->Contato
            ->find('search', ['search' => $this->request->getQueryParams()]);
        $this->set('contato', $this->paginate($contato));
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contato->get($id, [
            'contain' => []
        ]);

        $contato = $this->Contato->patchEntity($contato, $this->request->data);
        $contato->status = true;
        $this->Contato->save($contato);

        $this->set('contato', $contato);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contato->newEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contato->patchEntity($contato, $this->request->data);
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Contato'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Contato'));
            }
        }
        $this->set(compact('contato'));
        $this->set('_serialize', ['contato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contato->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contato->patchEntity($contato, $this->request->data);
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Contato'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Contato'));
            }
        }
        $this->set(compact('contato'));
        $this->set('_serialize', ['contato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contato->get($id);
        if ($this->Contato->delete($contato)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Contato'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Contato'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
