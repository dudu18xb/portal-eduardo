<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class NovasTableas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    /**
     * Migrate Down.
     */
    public function change()
    {

        $informativos = $this->table('informativos');
        $informativos
            ->dropForeignKey('paginas_id')
            ->save();
        $informativos->drop();

        $fotos = $this->table('fotos');
        $fotos
            ->dropForeignKey('blogs_id')
            ->dropForeignKey('about_id')
            ->save();
        $fotos->drop();

        $servicos = $this->table('servicos');
        $servicos
            ->dropForeignKey('categoriaservicos_id')
            ->save();
        $servicos->drop();

        $fotos = $this->table('fotos');
        $fotos
            ->dropForeignKey('blogs_id')
            ->dropForeignKey('about_id')
            ->save();
        $fotos->drop();

        $blogs = $this->table('blogs');
        $blogs
            ->dropForeignKey('autores_id')
            ->dropForeignKey('categoria_id')
            ->dropForeignKey('tipo_id')
            ->save();
        $blogs->drop();

        $this->dropTable('categorias');
        $this->dropTable('tipos');
        $this->dropTable('autores');
        $this->dropTable('about');
        $this->dropTable('categoriaservicos');
        $this->dropTable('paginas');
        $this->dropTable('backgroundparalax');
        $this->dropTable('banners');
        $this->dropTable('contato');
        $this->dropTable('equipes');
        $this->dropTable('newsletter');

        $this->table('seos')
            ->addColumn('meta_title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('meta_description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('meta_keywords', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('meta_imagem', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('categories')
            ->addColumn('seo_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addForeignKey('seo_id', 'seos', 'id', ['delete' => 'CASCADE'])
            ->create();

        $this->table('tags')
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('seo_id', 'integer', [
                'null' => false,
            ])
            ->addForeignKey('seo_id', 'seos', 'id', ['delete' => 'CASCADE'])
            ->create();


        $this->table('authors')
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('visualization', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('seo_id', 'integer', [
                'null' => false,
            ])
            ->addForeignKey('seo_id', 'seos', 'id', ['delete' => 'CASCADE'])
            ->create();


        $this->table('articles')
            ->addColumn('seo_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('author_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('visualization', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('publication_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('url_external', 'text', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addColumn('url_text', 'text', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addForeignKey('seo_id', 'seos', 'id', ['delete' => 'CASCADE'])
            ->addForeignKey('category_id', 'categories', 'id')
            ->addForeignKey('author_id', 'authors', 'id')
            ->create();

        $this->table('pages')
            ->addColumn('seo_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('url_custom', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('visualization', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addForeignKey('seo_id', 'seos', 'id', ['delete' => 'CASCADE'])
            ->create();

        $this->table('banners')
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('position', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('image_mobile', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('visualization', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('title_banner', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('description_banner', 'string', [
                'default' => null,
                'limit' => MysqlAdapter::TEXT_LONG,
                'null' => true,
            ])
            ->addColumn('url_youtube', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('url_page', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('url_text', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('photos')
            ->addColumn('page_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('article_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])

            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addForeignKey('page_id', 'pages', 'id')
            ->addForeignKey('article_id', 'articles', 'id')
            ->create();


        $this->table('articles_tags')
            ->addColumn('article_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('tag_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addForeignKey('article_id', 'articles', 'id')
            ->addForeignKey('tag_id', 'tags', 'id')
            ->create();

        $this->table('articles_banners')
            ->addColumn('article_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('banner_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addForeignKey('article_id', 'articles', 'id')
            ->addForeignKey('banner_id', 'banners', 'id')
            ->create();

        $this->table('banners_pages')
            ->addColumn('page_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('banner_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addForeignKey('page_id', 'pages', 'id')
            ->addForeignKey('banner_id', 'banners', 'id')
            ->create();
    }
}
