<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
/**
 * Application Controller
 * @property \App\Model\Table\BlogsTable $Blogs
 * @property \App\Model\Table\CategoriasTable $Categorias
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 * @property \App\Model\Table\ConfigsTable $Configs
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Configs');
        $this->loadModel('Blogs');
        $this->loadModel('Categorias');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $configs = $this->Configs
            ->find()
            ->first();

        $categoriaBlogsMenus = $this->Categorias
            ->find()
            ->join([
                'Blogs' => [
                    'table' => 'blogs',
                    'type' => 'inner',
                    'conditions' => [
                        'Blogs.categoria_id = Categorias.id',
                        'Blogs.status' => true,
                    ],
                ],
            ])
            ->limit(20)
            ->group([
                'Categorias.id',
                'Categorias.nome',
            ])
            ->order(['Categorias.id' =>'ASC'])
            ->all();

        $verificaCategoriaBlogsMenus = count($categoriaBlogsMenus);

        $lastblogsMenu = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression)  {
                $expression
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->limit(2)
            ->order('rand()');

        $verificaLastblogsMenu = count($lastblogsMenu);

        $this->set(compact('configs','categoriaBlogsMenus','verificaCategoriaBlogsMenus','verificaLastblogsMenu','lastblogsMenu'));


        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    /*Para ativar o thema do painel*/
//    public function beforeRender(Event $event)
    //    {
    //        // Note: These defaults are just to get started quickly with development
    //        // and should not be used in production. You should instead set "_serialize"
    //        // in each action as required.
    //        if (!array_key_exists('_serialize', $this->viewVars) &&
    //            in_array($this->response->type(), ['application/json', 'application/xml'])
    //        ) {
    //            $this->set('_serialize', true);
    //        }
    //        $this->viewBuilder()->setTheme('AdminLTE');
    //        $this->set('theme', Configure::read('Theme'));
    //    }
}
