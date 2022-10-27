<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $positions = $this->Banners->position();
        $this->set(compact('positions'));

        return parent::beforeFilter($event);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['Articles', 'Pages']
        ]);

        $this->set('banner', $banner);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Banner'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Banner'));
            }
        }
        $articles = $this->Banners->Articles->find('list', ['limit' => 200]);
        $pages = $this->Banners->Pages->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'articles', 'pages'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['Articles', 'Pages']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Banner'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Banner'));
            }
        }
        $articles = $this->Banners->Articles->find('list', ['limit' => 200]);
        $pages = $this->Banners->Pages->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'articles', 'pages'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Banner'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Banner'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
