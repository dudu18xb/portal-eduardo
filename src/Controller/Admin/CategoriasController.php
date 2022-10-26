<?php
namespace App\Controller\Admin;
use Cake\Utility\Text;

use Cake\Event\Event;

/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 *
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categorias = $this->paginate($this->Categorias);

        $this->set(compact('categorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('categoria', $categoria);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoria = $this->Categorias->newEntity();
        if ($this->request->is('post')) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);

            $sluggedTitle = Text::slug($categoria->nome);
            $categoria->slug = strtolower($sluggedTitle);

            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Categoria'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Categoria'));
            }
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);

            $sluggedTitle = Text::slug($categoria->nome);
            $categoria->slug = strtolower($sluggedTitle);


            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Categoria'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Categoria'));
            }
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoria = $this->Categorias->get($id);
        if ($this->Categorias->delete($categoria)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Categoria'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Categoria'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
