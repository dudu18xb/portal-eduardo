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
use Cake\ORM\Query;
use Cake\Routing\Router;

use Cake\Core\Configure;
use Cake\Database\Expression\QueryExpression;
use Cake\I18n\Date;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 * @property \App\Model\Table\BannersTable $Banners
 * @property \App\Model\Table\BlogsTable $Blogs
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @property \App\Model\Table\AboutTable $About
 * @property \App\Model\Table\BackgroundparalaxTable $Backgroundparalax
 * @property \App\Model\Table\PaginasTable $Paginas
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Banners');
        $this->loadModel('Blogs');
        $this->loadModel('Categorias');
        $this->loadModel('About');
        $this->loadModel('Backgroundparalax');
        $this->loadModel('Paginas');
        $this->loadModel('Fotos');
        $this->loadComponent('Flash');
        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }


    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
    public function home()
    {
        $banners = $this->Banners
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Banners.status', true);

                return $expression;
            })
            ->limit(6)
            ->order(['Banners.id' =>'DESC'])
            ->all();


        $verificaBanners = count($banners);


        $categorias = $this->Categorias
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
            ->contain([
                'Blogs' => function (Query $query) {
                    $query
                        ->contain([
                            'Categorias',
                        ])
                        ->where(function (QueryExpression $expression) {
                            $expression
                                ->lte('Blogs.data', new \DateTime());
                            return $expression;
                        })
                        ->order(['Blogs.id' =>'DESC']);
                    return $query;
                },
            ])
            ->limit(20)
            ->group([
                'Categorias.id',
                'Categorias.nome',
            ])
            ->order(['Categorias.id' =>'ASC'])
            ->all();

        $verificaCategorias = count($categorias);

        $blogs = $this->Blogs
            ->find()
            ->contain([
                'Categorias',
                'Autores',
            ])
            ->select([
                'Blogs.id',
                'Blogs.titulo',
                'Blogs.data',
                'Blogs.imagemdescricao',
                'Blogs.capa',
                'Blogs.slug',
                'Blogs.status',
                'Autores.id',
                'Autores.nome',
                'Categorias.id',
                'Categorias.nome',
                'Categorias.slug',
            ])
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Blogs.status', true)
                    ->lte('Blogs.data', new \DateTime());

                return $expression;
            })
            ->limit(3)
            ->order(['Blogs.id' =>'DESC'])
            ->toArray();
//        debug($blogs);
//        die();
        $verificaBlogs = count($blogs);


        $bannerparalaxs = $this->Backgroundparalax
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Backgroundparalax.status', true);

                return $expression;
            })
            ->order(['Backgroundparalax.id' =>'DESC'])
            ->limit(1)
            ->all();



        $seopaginas = $this->Paginas
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Paginas.slug', '/'.$this->request->getParam('action'))
                    ->eq('Paginas.status', true);

                return $expression;
            })
            ->first();


        $seo = [
            'title' => null,
            'description' => $seopaginas->meta_description,
            'keywords' => $seopaginas->meta_keywords,
            'url' => Router::url(['controller' => 'Pages', 'action' => 'home']),
        ];


        $this->set(compact('banners','verificaCategorias','categorias','bannerparalaxs','seo','seopaginas','verificaBanners', 'blogs','verificaBlogs'));

    }
    public function about()
    {
        $about = $this->About
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('About.status', true);

                return $expression;
            })
            ->limit(1)
            ->first();


        $fotos = $this->Fotos->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Fotos.status', true)
                    ->eq('Fotos.about_id', 1);

                return $expression;
            })
            ->all();

        $verificaFotos = count($fotos);


        $seopaginas = $this->Paginas
            ->find()
            ->where(function (QueryExpression $expression) {
                $expression
                    ->eq('Paginas.slug', '/sobre-nos')
                    ->eq('Paginas.status', true);

                return $expression;
            })
            ->first();

        $seo = [
            'title' => $seopaginas->titulo,
            'description' => $seopaginas->meta_description,
            'keywords' => $seopaginas->meta_keywords,
            'url' => Router::url(['controller' => 'Pages', 'action' => 'about']),
        ];

        $this->set(compact('about','seopaginas','seo','fotos','verificaFotos'));

    }
    public function services()
    {
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
            'url' => Router::url(['controller' => 'Pages', 'action' => 'about']),
        ];

        $this->set(compact('seopaginas','seo'));

    }
    public function blog()
    {

    }
    public function contact()
    {

    }


}
