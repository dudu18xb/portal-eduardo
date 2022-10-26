<?php

namespace App\Controller\Admin;

use Cake\Core\Exception\Exception;
use Cake\Event\Event;
use Cake\Utility\Text;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController
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
        $blogs = $this->Blogs
            ->find('search', ['search' => $this->request->getQueryParams()])
            ->contain([
                'Categorias',
                'Autores',
            ]);

        $this->set('blogs', $this->paginate($blogs));

    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => ['Autores', 'Categorias']
        ]);

        $this->set('blog', $blog);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blog = $this->Blogs->newEntity();
        if ($this->request->is('post')) {
            try {
                $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
                $sluggedTitle = Text::slug($blog->titulo);
                $blog->slug = strtolower($sluggedTitle);
                if ($this->Blogs->save($blog)) {
                    $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Blog'));
                    return $this->redirect(['action' => 'index']);

                } else {
                    $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Blog'));
                }
            } catch (Exception $e) {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Blog'));
            }
        }
        $autores = $this->Blogs->Autores->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
        ]);
        $categorias = $this->Blogs->Categorias->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
        ]);
        $this->set(compact('blog', 'autores', 'categorias'));
        $this->set('_serialize', ['blog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => ['Autores', 'Categorias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            try{
                $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
                $sluggedTitle = Text::slug($blog->titulo);
                $blog->slug = strtolower($sluggedTitle);
                if ($this->Blogs->save($blog)) {
                    $this->Flash->success(__('O {0} foi editado com sucesso.', 'Blog'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Blog'));
                }
            }catch (Exception $e){
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Blog'));
            }
        }
        $autores = $this->Blogs->Autores->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
        ]);
        $categorias = $this->Blogs->Categorias->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
        ]);
        $this->set(compact('blog', 'autores','categorias'));
        $this->set('_serialize', ['blog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Blog'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Blog'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
