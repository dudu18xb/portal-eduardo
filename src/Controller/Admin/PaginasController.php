<?php
namespace App\Controller\Admin;


use Cake\Core\Exception\Exception;
use Cake\Utility\Text;

/**
 * Paginas Controller
 *
 * @property \App\Model\Table\PaginasTable $Paginas
 *
 * @method \App\Model\Entity\Pagina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaginasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $paginas = $this->paginate($this->Paginas);

        $this->set(compact('paginas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => []
        ]);

        $this->set('pagina', $pagina);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagina = $this->Paginas->newEntity();
        if ($this->request->is('post')) {
            try {
                $pagina = $this->Paginas->patchEntity($pagina, $this->request->data);
                $sluggedTitle = Text::slug($pagina->titulo);
                $pagina->slug = strtolower('/'.$sluggedTitle);
                if ($this->Paginas->save($pagina)) {
                    $this->Flash->success(__('O {0} foi salvo com sucesso.', 'Pagina'));
                    return $this->redirect(['action' => 'index']);

                } else {
                    $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Pagina'));
                }
            } catch (Exception $e) {
                $this->Flash->error(__('O {0} não foi salvo. Por favor, tente novamente.', 'Pagina'));
            }
        }
        $this->set(compact('pagina'));
        $this->set('_serialize', ['pagina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            try{
                $pagina = $this->Paginas->patchEntity($pagina, $this->request->data);
                $sluggedTitle = Text::slug($pagina->titulo);
                $pagina->slug = strtolower('/'.$sluggedTitle);
                if ($this->Paginas->save($pagina)) {
                    $this->Flash->success(__('O {0} foi editado com sucesso.', 'Pagina'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Pagina'));
                }
            }catch (Exception $e){
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Pagina'));
            }
        }
        $this->set(compact('pagina'));
        $this->set('_serialize', ['pagina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagina = $this->Paginas->get($id);
        if ($this->Paginas->delete($pagina)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Pagina'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Pagina'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
