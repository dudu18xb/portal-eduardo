<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 *
 * @method \App\Model\Entity\Page[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagesController extends AppController
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
        $pages = $this->paginate($this->Pages);

        $this->set(compact('pages'));
    }

    /**
     * View method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => ['Seos', 'Banners', 'Photos']
        ]);

        $this->set('page', $page);
    }

    /**
     * pagina inicial
     */
    public function paginainicial()
    {

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Page'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Page'));
            }
        }
        $seos = $this->Pages->Seos->find('list', ['limit' => 200]);
        $banners = $this->Pages->Banners->find('list', ['limit' => 200]);
        $this->set(compact('page', 'seos', 'banners'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => ['Banners']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Page'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Page'));
            }
        }
        $seos = $this->Pages->Seos->find('list', ['limit' => 200]);
        $banners = $this->Pages->Banners->find('list', ['limit' => 200]);
        $this->set(compact('page', 'seos', 'banners'));
        $this->set('_serialize', ['page']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Page'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Page'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
