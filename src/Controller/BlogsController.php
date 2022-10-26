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
use Cake\Routing\Router;
use App\Controller\AppController;
use Cake\Database\Expression\QueryExpression;
use Cake\ORM\TableRegistry;


/**
 * Static content controller
 * @property \App\Model\Table\PaginasTable $Paginas
 * @property \App\Model\Table\BlogsTable $Blogs
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @property \App\Model\Table\AutoresTable $Autores
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class BlogsController extends AppController
{
    public $paginate = [
        'limit' => 6,
        'order' => [
            'Blogs.titulo' => 'DESC'
        ]
    ];

    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Blogs');
        $this->loadModel('Paginas');
        $this->loadModel('Fotos');
        $this->loadModel('Categorias');
        $this->loadModel('Autores');
        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }

    public function index()
    {
        $query = $this->Blogs
            ->find('search', ['search' => $this->request->getQueryParams()])
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->order(['Blogs.id' => 'DESC']);
        $blogs = $this->paginate($query);



        $verificaBlogs = count($blogs);

        $categorias = $this->Blogs->Categorias
            ->find()
            ->join([
                'Blogs' => [
                    'table' => 'blogs',
                    'type' => 'inner',
                    'conditions' => [
                        'Blogs.categoria_id = Categorias.id',
                        'Blogs.status' => true
                    ],
                ],
            ])
            ->group([
                'Categorias.id',
                'Categorias.nome',
            ])
            ->all();
        $verificaCategorias = count($categorias);

        $lastblogs = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->limit(3)
            ->order('rand()');

        $verificaLast = count($lastblogs);


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
            'url' => Router::url(['controller' => 'Blogs', 'action' => 'index']),
        ];

        $this->set(compact('lastblogs','verificaLast','categorias','verificaCategorias','seo','seopaginas','verificaBlogs','blogs'));


    }

    public function view($categoria_slug, $slug)
    {
        $blog = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) use ($categoria_slug, $slug) {
                $expression
                    ->eq('Categorias.slug', $categoria_slug)
                    ->eq('Blogs.slug', $slug)
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->firstOrFail();

//        $fotos = $this->Fotos->find()
//            ->where(function (QueryExpression $expression) use ($blog) {
//                $expression
//                    ->eq('Fotos.status', true)
//                    ->eq('Fotos.blog_id', $blog->id);
//
//                return $expression;
//            })
//            ->all();
//
//        $verificaFotos = count($fotos);


        $blogview = $this->Blogs->get($blog->id);
        $blogview = $this->Blogs->patchEntity($blogview, $this->request->data);
        $itemview = $blogview->visualizacao;
        $blogview->visualizacao = $itemview + 1;
        $this->Blogs->save($blogview);



        $categorias = $this->Blogs->Categorias
            ->find()
            ->join([
                'Blogs' => [
                    'table' => 'blogs',
                    'type' => 'inner',
                    'conditions' => [
                        'Blogs.categoria_id = Categorias.id',
                        'Blogs.status' => true
                    ],
                ],
            ])
            ->group([
                'Categorias.id',
                'Categorias.nome',
            ])
            ->all();
        $verificaCategorias = count($categorias);

        $lastblogs = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) use ($blog) {
                $expression
                    ->notEq('Blogs.id', $blog->id)
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->limit(3)
            ->order('rand()');

        $verificaLast = count($lastblogs);



        //contagem de visualização
//        $posts = TableRegistry::get('Blogs');
//        $query = $posts->query()->where(['id' => $blog->id]);
//        $query->update()
//            ->set($query->newExpr('visualizacao = visualizacao + 1'))
//            ->execute();

        $this->set(compact('blog','categorias','lastblogs','verificaLast','categorias','verificaCategorias'));
    }

    public function categoria($categoria_slug)
    {
        $query = $this->Blogs
            ->find('search', ['search' => $this->request->getQueryParams()])
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) use ($categoria_slug) {
                $expression
                    ->eq('Categorias.slug', $categoria_slug)
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->order(['Blogs.id' => 'DESC']);

        $blogs = $this->paginate($query);

        $verificaBlogs = count($blogs);

        $categorias = $this->Blogs->Categorias
            ->find()
            ->join([
                'Blogs' => [
                    'table' => 'blogs',
                    'type' => 'inner',
                    'conditions' => [
                        'Blogs.categoria_id = Categorias.id',
                        'Blogs.status' => true
                    ],
                ],
            ])
            ->group([
                'Categorias.id',
                'Categorias.nome',
            ])
            ->all();
        $verificaCategorias = count($categorias);

        $lastblogs = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->limit(3)
            ->order('rand()');

        $verificaLast = count($lastblogs);

        $this->set(compact('categorias','lastblogs','verificaBlogs','verificaCategorias','verificaLast','blogs'));

    }

}
