<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <ul class="sidebar-menu">
        <li class="header">MENU NAVEGAÇÃO</li>
        <li><a href="<?php echo Router::url(['controller' => 'Pages', 'action' => 'paginainicial']); ?>"><i
                    class="fa fa-dashboard" aria-hidden="true"></i>Home</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'Users', 'action' => 'index']); ?>"><i
                    class="fa fa-users"></i> Usuários</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'Configs', 'action' => 'index']); ?>"><i class="fa fa-cog"
                                                                                                      aria-hidden="true"></i>
                Configuração</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'Paginas', 'action' => 'index']); ?>">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>Paginas</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'About', 'action' => 'index']); ?>"><i
                    class="fa fa-building" aria-hidden="true"></i>
                Institucional</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'Contato', 'action' => 'index']); ?>"><i
                    class="fa fa-envelope" aria-hidden="true"></i>
                Contatos</a></li>


        <!-- novo -->
        <li><a href="<?php echo Router::url(['controller' => 'Equipes', 'action' => 'index']); ?>"><i
                    class="fa fa-user-md" aria-hidden="true"></i>
                Equipes</a></li>
        <li><a href="<?php echo Router::url(['controller' => 'Banners', 'action' => 'index']); ?>"><i
                    class="fa fa-picture-o" aria-hidden="true"></i>
                Banners</a></li>
        <li class="treeview">
            <a href="javascript:;">
                <i class="fa fa-newspaper-o"></i> <span>Blog</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo Router::url(['controller' => 'Autores', 'action' => 'index']); ?>"><i
                            class="fa fa-users" aria-hidden="true"></i>
                        Autores</a></li>
                <li><a href="<?php echo Router::url(['controller' => 'Categorias', 'action' => 'index']); ?>"><i
                            class="fa fa-list-ul" aria-hidden="true"></i>
                        Categoria</a></li>
                <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index']); ?>"><i
                            class="fa fa-newspaper-o" aria-hidden="true"></i>
                        Blog</a></li>
                <li><a href="<?php echo Router::url(['controller' => 'Fotos', 'action' => 'index']); ?>"><i
                            class="fa fa-file-image-o" aria-hidden="true"></i>
                        Fotos</a></li>
            </ul>
        </li>
    </ul>
<?php } ?>
