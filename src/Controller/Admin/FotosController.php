<?php
namespace App\Controller\Admin;
use Cake\Database\Expression\QueryExpression;
/**
 * Fotos Controller
 *
 * @property \App\Model\Table\FotosTable $Fotos
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Foto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Blogs', 'About']
        ];
        $fotos = $this->paginate($this->Fotos);

        $this->set(compact('fotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => ['Blogs', 'About']
        ]);

        $this->set('foto', $foto);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foto = $this->Fotos->newEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about'));
        $this->set('_serialize', ['foto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about'));
        $this->set('_serialize', ['foto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Foto'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Foto'));
        }
        return $this->redirect(['action' => 'index']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function addblog($id = null)
    {
        $idblog = $id;
        $foto = $this->Fotos->newEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            $foto->blog_id = $id;
            $foto->about_id = null;
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'addblog',$id]);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about','idblog'));
        $this->set('_serialize', ['foto']);

        $fotoblogs = $this->Fotos->find()
            ->where(function (QueryExpression $expression) use ($idblog) {
                $expression
                    ->eq('Fotos.blog_id', $idblog);

                return $expression;
            })->all();

        $this->set('fotoblogs', $fotoblogs);
    }

    public function deleteblog($idblog = null, $id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Foto'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Foto'));
        }
        return $this->redirect(['action' => 'addblog',$idblog, $id]);
    }

    public function editblog($idblog= null, $id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            $foto->blog_id = $idblog;
            $foto->about_id = null;
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'addblog',$idblog, $id]);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about','idblog'));
        $this->set('_serialize', ['foto']);
    }
    // galeria de imagens quem somos
    public function addabout($id = null)
    {
        $idabout = $id;
        $foto = $this->Fotos->newEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            $foto->blog_id = null;
            $foto->about_id = $idabout;
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'addabout',$idabout]);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about','idabout'));
        $this->set('_serialize', ['foto']);

        $fotoblogs = $this->Fotos->find()
            ->where(function (QueryExpression $expression) use ($idabout) {
                $expression
                    ->eq('Fotos.about_id', $idabout);

                return $expression;
            })->all();

        $this->set('fotoblogs', $fotoblogs);
    }

    public function deleteabout($idabout = null, $id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Foto'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Foto'));
        }
        return $this->redirect(['action' => 'addabout',$idabout, $id]);
    }

    public function editabout($idabout= null, $id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            $foto->blog_id = null;
            $foto->about_id = $idabout;
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Foto'));
                return $this->redirect(['action' => 'addabout',$idabout, $id]);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Foto'));
            }
        }
        $blogs = $this->Fotos->Blogs->find('list', ['limit' => 200]);
        $about = $this->Fotos->About->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'blogs', 'about','idabout'));
        $this->set('_serialize', ['foto']);
    }

}
