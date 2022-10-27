<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Seos', 'Categories', 'Authors']
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Seos', 'Categories', 'Authors', 'Banners', 'Tags', 'Photos']
        ]);

        $this->set('article', $article);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Article'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Article'));
            }
        }
        $seos = $this->Articles->Seos->find('list', ['limit' => 200]);
        $categories = $this->Articles->Categories->find('list', ['limit' => 200]);
        $authors = $this->Articles->Authors->find('list', ['limit' => 200]);
        $banners = $this->Articles->Banners->find('list', ['limit' => 200]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200]);
        $this->set(compact('article', 'seos', 'categories', 'authors', 'banners', 'tags'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Banners', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Article'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Article'));
            }
        }
        $seos = $this->Articles->Seos->find('list', ['limit' => 200]);
        $categories = $this->Articles->Categories->find('list', ['limit' => 200]);
        $authors = $this->Articles->Authors->find('list', ['limit' => 200]);
        $banners = $this->Articles->Banners->find('list', ['limit' => 200]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200]);
        $this->set(compact('article', 'seos', 'categories', 'authors', 'banners', 'tags'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Article'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Article'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
