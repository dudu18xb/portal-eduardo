<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Configs Controller
 *
 * @property \App\Model\Table\ConfigsTable $Configs
 *
 * @method \App\Model\Entity\Config[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConfigsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $configs = $this->paginate($this->Configs);

        $this->set(compact('configs'));
    }

    /**
     * View method
     *
     * @param string|null $id Config id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $config = $this->Configs->get($id, [
            'contain' => []
        ]);

        $this->set('config', $config);
    }

    /**
     * Edit method
     *
     * @param string|null $id Config id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $config = $this->Configs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $config = $this->Configs->patchEntity($config, $this->request->getData());
            if ($this->Configs->save($config)) {
                $this->Flash->success(__('O {0} foi editado com sucesso.', 'Config'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi editado. Por favor, tente novamente.', 'Config'));
            }
        }
        $this->set(compact('config'));
        $this->set('_serialize', ['config']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Config id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $config = $this->Configs->get($id);
        if ($this->Configs->delete($config)) {
            $this->Flash->success(__('O {0} foi deletado com sucesso.', 'Config'));
        } else {
            $this->Flash->error(__('O {0} não foi deletado. Por favor, tente novamente.', 'Config'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function removelogo($id = null)
    {
        $config = $this->Configs->get($id, [
            'contain' => '',
        ]);
        if (isset($config->logo_site)) {
            $this->Configs->behaviors()->unload('Upload');

            if (!empty($config->extractOriginal(['logo_site'])['logo_site']) && file_exists('files/Configs/logo_site/' . $config->extractOriginal(['logo_site'])['logo_site']))
                unlink('files/Configs/logo_site/' . $config->extractOriginal(['logo_site'])['logo_site']);
            unlink('files/Configs/logo_site/thumbnail-' . $config->extractOriginal(['logo_site'])['logo_site']);
        }
        $config->logo_site = null;
        $this->Configs->saveOrFail($config);
        return $this->redirect(['action' => 'edit', $config->id]);
    }
    /**
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function removefavicon($id = null)
    {
        $config = $this->Configs->get($id, [
            'contain' => '',
        ]);
        if (isset($config->favicon_site)) {
            $this->Configs->behaviors()->unload('Upload');

            if (!empty($config->extractOriginal(['favicon_site'])['favicon_site']) && file_exists('files/Configs/favicon_site/' . $config->extractOriginal(['favicon_site'])['favicon_site']))
                unlink('files/Configs/favicon_site/' . $config->extractOriginal(['favicon_site'])['favicon_site']);
                unlink('files/Configs/favicon_site/thumbnail-' . $config->extractOriginal(['favicon_site'])['favicon_site']);
        }
        $config->favicon_site = null;
        $this->Configs->saveOrFail($config);
        return $this->redirect(['action' => 'edit', $config->id]);
    }
}
