<?php
namespace App\Controller;
use Cake\Routing\Router;
use Cake\Database\Expression\QueryExpression;
use App\Controller\AppController;
/**
 * Static content controller
 * @property \App\Model\Table\PaginasTable $Paginas
 * @property \App\Model\Table\ContatoTable $Contato
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ContatoController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Paginas');
    }


    public function index()
    {
        $contato = $this->Contato->newEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contato->patchEntity($contato, $this->request->data);
            $contato->status = false;
            if ($this->Contato->save($contato)) {
                $this->Flash->success('Sucesso, em breve nossa equipe entrará em contato com você o mais breve possivel!');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Houver um erro, tente novamente mais tarde');
            }

        }
        $this->set('contato', $contato);


        $seopaginas = $this->Paginas
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Paginas.slug', $this->request->getParam('_matchedRoute'))
                    ->eq('Paginas.status', true);

                return $expression;
            })
            ->first();


        $seo = [
            'title' => $seopaginas->titulo,
            'description' => $seopaginas->meta_description,
            'keywords' => $seopaginas->meta_keywords,
            'url' => Router::url(['controller' => 'Contato', 'action' => 'index']),
        ];

        $this->set(compact('seo','seopaginas'));
    }
}
